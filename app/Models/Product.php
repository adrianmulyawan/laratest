<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_barang',
        'merk',
        'harga'
    ];

    public function paper()
    {
        return $this->belongsTo(Paper::class);
    }
}
