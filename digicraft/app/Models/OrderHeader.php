<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHeader extends Model
{
    use HasFactory;
    protected $table = 'order_headers';
    protected $fillable = [
        'no_pesanan',
        'id_customer',
        'konfirmasi',
        'selesai'
    ];

    public function orderdetail(){
        return $this->belongsTo(OrderDetails::class, 'no_pesanan', 'no_pesanan');
    }

    public function customer(){
        return $this->belongsTo(User::class, 'id_customer', 'id');
    }
}
