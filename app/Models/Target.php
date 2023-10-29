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
    protected $fillable = ['nama_target','target_k','target_rp'];

    public function sub_kegiatan(){
        return $this->hasMany(sub_kegiatan::class);
    } 
}
