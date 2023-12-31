<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;

    protected $table = 'bidang';
    protected $primaryKey = 'id';
    //Maping ke kolom/fielnya
    protected $fillable =['nama_bidang'];

    public function program(){
        return $this->hasMany(Produk::class);
    }

}
