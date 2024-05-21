<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;

    protected $fillable=[
        "golfTournament","playerId","round1","round2","round3","round4","totalRounds"
    ];

    public $timestamps=false;

    public function players(){
        return $this->hasMany(Players::class);
    }
}
