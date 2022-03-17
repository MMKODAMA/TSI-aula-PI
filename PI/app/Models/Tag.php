<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = ['name'];

    public function Products(){
        return this->belongsToMany(Products::class);
    }
}