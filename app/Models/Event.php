<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'max_participants','user_id'
    ];

    public function creator(){
        return $this->belongsTo(User::class);
    }
   public function participants(){
    return $this->belongsToMany(User::class);
   }
   public function comment(){
    return $this->hasMany(Comment::class);
   }
   
}


