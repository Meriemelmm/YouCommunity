<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    
    protected $table = 'comments';


    protected $fillable = [
        'contenu',
        'user_id',
        'event_id',
       
    ];
    public function events(){
        return $this->belongsTo(Comment::class);
    }
public function writer(){
    return $this->belongto(User::class);

}


}
