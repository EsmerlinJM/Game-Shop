<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderCart extends Model
{

    protected $fillable = [
        'id', 'method_shipping', 'total', 'address', 'user_id', 'status'
    ];

    protected $table = 'order_carts';

    protected $primaryKey = 'id';

    public $incrementing = false;

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
