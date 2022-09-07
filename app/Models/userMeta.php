<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userMeta extends Model
{
    use HasFactory;

    public function users(){
        return $this->blongsTo(user::class, 'userID');
    }
}
