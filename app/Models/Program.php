<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $table = 'program';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kode','bidang_id','urusan','indikator','target_k','target_r'
    ];

    public function bidang(){
        return $this->blongsTo(bidang::class);
    }
    public function kegiatan(){
        return $this->hasMany(kegiatan::class);
    }
}
