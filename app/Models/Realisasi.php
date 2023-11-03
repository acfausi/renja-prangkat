<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisasi extends Model
{
    use HasFactory;
    protected $table = 'realisasi';
    protected $primaryKey = 'id_rea';
    protected $fillable = ['rea_k','rea_rp'];

    public function bidang(){
        return $this->blongsTo(bidang::class);
    }
    public function sub_kegiatan(){
        return $this->blongsTo(Sub_kegiatan::class);
    }
    public function target(){
        return $this->blongsTo(target::class);
    }


}
