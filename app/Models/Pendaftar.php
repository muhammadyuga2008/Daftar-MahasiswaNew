<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $guarded = ['id'];
    public function ProgramStudi(){
        return $this->belongsTo(ProgramStudi::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
