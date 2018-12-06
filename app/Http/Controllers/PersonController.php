<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Person;

class PersonController extends Controller
{
    public function listPersonPaginate()
    {
        return response()->json(Person::paginate());
    }

    public function listPersonAndLocation()
    {
        $persons = Person::all();

        foreach ($persons as $person) {
            $person->list_location = $person->locations()->get();
        }

        return response()->json($persons);
    }
}
