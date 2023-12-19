<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['sport_id', 'is_live', 'game_image'];

    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }
}
