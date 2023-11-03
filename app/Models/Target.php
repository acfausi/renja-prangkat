<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'terget';
    protected $primaryKey = 'id_target';
    protected $fillable = ['target_k','target_rp','name'];

    public function bidang(){
        return $this->blongsTo(bidang::class);
    }
    public function sub_kegiatan(){
        return $this->blongsTo(Sub_kegiatan::class);
    }
    public function realisasi(){
        return $this->hasOne(realisasi::class,'target_id');
    }
}
