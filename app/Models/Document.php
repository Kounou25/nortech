<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'title', 'description', 'file_path','document_path',
        'uploaded_by', 'filiere_id', 'niveau_id',
    ];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }

    public function enseignant()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }

    public function favoris()
    {
        return $this->hasMany(Favori::class);
    }
}
