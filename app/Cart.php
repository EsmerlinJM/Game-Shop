<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $price = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){
        if ($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->price = $oldCart->price;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item, $id){
        $storedItem = [
            'qty' => 0, 
            'price' => $item->price,
            'item' => $item
        ];

        if ($this->items){
            if (array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        $this->price = $item->price;
        $this->totalPrice += $item->price; 
    }
}
