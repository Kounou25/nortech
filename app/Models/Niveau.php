<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    protected $fillable = ['nom'];

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
