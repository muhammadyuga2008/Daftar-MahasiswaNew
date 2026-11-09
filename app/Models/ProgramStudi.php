<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
    protected $guarded = ['id'];
    public function Fakultas(){
        return $this->belongsTo(Fakultas::class);
    }
    public function Pendaftar(){
        return $this->hasMany(Pendaftar::class);
    }
}
