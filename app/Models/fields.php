<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fields extends Model
{
    use HasFactory;
    protected $fillable = ['lobbyID','x', 'y', 'cellState'];
    public function lobbies(){
        return $this->belongsTo(lobbies::class);
    }
}
