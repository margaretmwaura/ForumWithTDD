<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{

    // We had to add the foreign key because the name of the relationship is not similar to that of the class
    public function owner()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
}
