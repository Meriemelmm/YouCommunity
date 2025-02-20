<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    
    protected $table = 'events';


    protected $fillable = [
        'titre',
        'description',
        'lieu',
        'latitude',
        'longitude',
        'date_heure',
        'categorie',
        'user_id',
        'max_participants'
    ];

    // // Relation avec l'utilisateur (un événement appartient à un utilisateur)
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    
    // }
}


