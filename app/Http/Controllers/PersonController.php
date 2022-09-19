<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\Person;

class PersonController extends Controller
{

public function store(PersonRequest $request)
    {
        $person = new Person($request->all());
        $person->save();
        return response()->json([
            'saved'=>TRUE,
            'message'=>'Persona creada con exito',
            'person' => $person
        ]);
    }
public function delete(Person $person)
    {
        $person->delete();
        return response()->json([
            'confirm'=>TRUE,
            'message'=>'Persona eliminada con exito',
            'person' => $person
        ]);
    }

public function update(PersonRequest $request, Person $person)
    {   
        $person -> update($request->validated());
        return response()->json([
            'saved'=>TRUE,
            'message'=>'Persona actualizado con exito',
            'person' => $person
        ]);
    }
}


