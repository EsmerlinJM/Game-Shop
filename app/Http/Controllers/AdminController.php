<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\OrderCart;

class AdminController extends Controller
{
    public function getPanel(){
        $users = User::all();
        $products = Product::all();
        $orders = OrderCart::all();
        return view ('admin.panels.principal-panel')->with(compact('users', 'products', 'orders'));
    }

    public function getUsers(){
        $users = User::where('role', '=', 'user')->orderBy('name')->paginate(5);
        return view ('admin.panels.users-panel')->with(compact('users'));
    }

    public function getProducts(){
        $products = Product::orderBy('id')->paginate(5);
        return view ('admin.panels.products-panel')->with(compact('products'));
    }

    public function getOrders(){
        $orders = OrderCart::orderBy('user_id')->paginate(5);
        return view ('admin.panels.orders-panel')->with(compact('orders'));
    }

    public function getAddProductImage(){
        return view('admin.panels.product.add-image-product');
    }

    public function saveAddProductImage(Request $request){
        $message = [
            'image' => 'Debes ingresar una Imagen del producto'
        ];
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], $message);

        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $input['imagename']);
        $imagePath = '/uploads/' . $input['imagename'];
        
        return view('admin.panels.product.add-product')->with(compact('imagePath'));
    }

    public function getAddDetails(Request $request){
        if($request->image != ''){
            $this->validate($request, [
                'name' => 'required|string',
                'description' => 'required',
                'long_description' => 'required',
                'price' => 'required|numeric',
             ]);
     
             $product = Product::create([
                 'name' => $request->name,
                 'image' => $request->image,
                 'description' => $request->description,
                 'long_description' => $request->long_description,
                 'price' => $request->price,
                 'category_id' => $request->category,
                 'featured' => $request->featured
             ]);
     
             if($product->save()){
                 return redirect()->route('products-panel')->with('success', 'Producto Agregado');
             }
        } else {
            return view('errors.404');
        }
        
    }

    public function getAddUser(){
        return view('admin.panels.user.add-user');
    }

    public function saveAddUser(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:35',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
         ]);

         $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'email_token' => base64_encode($request->email),
            'verified' => $request->verified,
            'role' => $request->role
         ]);

         if($user->save()){
            return redirect()->route('users-panel')->with('success', 'Usuario Agregado');
         }
    }

    public function getEditUser($id){
        $user = User::find($id);
        if($user == null){
            return view('errors.404');
        }
        return view('admin.panels.user.edit-user')->with(compact('user'));
    }

    public function getEditOrder($id){
        $order = OrderCart::find($id);
        if($order == null){
            return view('errors.404');
        } 
        return view('admin.panels.order.edit')->with(compact('order'));
    }

    public function saveEditUser(Request $request, $id){
        $this->validate($request, [
            'name' => 'required|string|max:35',
            'email' => 'required|string|email|max:255|unique:users,email'. ($id ? ",$id" : ''),
         ]);

         $user = User::find($id);

         if($user == null){
            return view('errors.404');
        }

         $user->name = $request->name;
         $user->email = $request->email;
         $user->email_token = base64_encode($request->email);
         $user->verified = $request->verified;
         $user->role = $request->role;

         if($user->save()) {
            return redirect()->route('users-panel')->with('success', 'Usuario Editado');
         }
    }
    
    public function saveEditOrder(Request $request, $id){
        $this->validate($request, [
            'total' => 'required|numeric|'
         ]);

         $order = OrderCart::find($id);

         if($order == null){
            return view('errors.404');
         }

         $order->method_shipping = $request->method_shipping;
         $order->status = $request->status;
         $order->total = $request->total;
         $order->adress = $request->address;

         if($order->save()){
            return redirect()->route('orders-panel')->with('success', 'Orden Editada');
         }
    }

    public function deleteUser($id){
        $user = User::find($id);
        if($user == null){
            return view('errors.404');
        }
        if($user->delete()) {
            return redirect()->route('users-panel')->with('success', 'Usuario Eliminado');
         }
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        if($product == null){
            return view('errors.404');
        }
        if($product->delete()) {
            return redirect()->route('products-panel')->with('success', 'Producto Eliminado');
         }
    }

    public function deleteOrder($id){
        $order = OrderCart::find($id);
        if($order == null){
            return view('errors.404');
        }
        if($order->delete()) {
            return redirect()->route('orders-panel')->with('success', 'Orden Eliminada');
         }
    }
}
