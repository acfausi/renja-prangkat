<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisasi extends Model
{
    use HasFactory;
    protected $table = 'realisasi';
    protected $primaryKey = 'id_rea';
    protected $fillable = ['nama_triwulan','rea_k','rea_rp'];

    public function sub_kegiatan(){
        return $this->hasMany(sub_kegiatan::class);
    } 
}
