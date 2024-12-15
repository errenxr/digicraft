<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table = 'layanan';
    protected $primaryKey = 'id_layanan';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id_layanan',
        'nama_layanan',
        'deskripsi',
        'biaya'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Cari ID terakhir
            $lastId = self::orderBy('id_layanan', 'desc')->first();
            $lastNumber = $lastId ? intval(substr($lastId->id_layanan, 1)) : 0;

            // Format ID baru
            $model->id_layanan = 'L' . str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT);
        });
    }

    public function orderdetails(){
        return $this->hasMany(OrderDetails::class, 'id_layanan', 'id_layanan');
    }
}

