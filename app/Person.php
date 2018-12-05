<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Location;

class Person extends Model
{
    protected $table = 'person';

    protected $fillable = [
        'full_name', 
        'age'
    ];

    public function locations()
    {
        return $this->hasMany(Location::class, 'person_id');
    }

}
