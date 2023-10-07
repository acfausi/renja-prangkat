<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'kegiatan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kode_k','kode','urusan','indikator','target_k','target_r'
    ];

    public function program(){
        return $this->blongsTo(program::class);
    }
    public function sub_kegiatan(){
        return $this->hasMany(sub_kegiatan::class);
    }


}
