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
        'kegiatan_id','urusan','indikator','target_k','target_r'
    ];

    public function kegiatan(){
        return $this->blongsTo(kegiatan::class);
    }
}
