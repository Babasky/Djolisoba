<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technicien extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'fonction',
        'email',
        'contact',
        'password',
        'userId',
    ];

    public function users()
    {
        return $this->BelongsTo(User::class, 'userId');
    }
}
