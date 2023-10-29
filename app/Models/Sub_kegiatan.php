<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_kegiatan extends Model
{
    use HasFactory;
    protected $table = 'sub_kegiatan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_triwulan','nama_target','kode_k','urusan','indikator','target_k','target_r'
    ];

    
    public function kegiatan(){
        return $this->blongsTo(kegiatan::class);
    }
    public function realisasi(){
        return $this->blongsTo(realisasi::class);
    }
    public function target(){
        return $this->blongsTo(target::class);
    }
    
}
