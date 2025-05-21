<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class BackendController extends Controller
{
    private $names = [
        1 => ['name' => 'Ana', 'age' => 30],
        2 => ['name' => 'Piakchu', 'age' => 2],
        3 => ['name' => 'LLADOS', 'age' => 32],
    ];
    public function getAll()
    {
        return response()->json($this->names);
    }
    public function get(int $id = 0)
    {
        if (isset($this->names[$id])) {
            return response()->json();
        }
        return response()->json(["error" => "Nombre no existe"], Response::HTTP_NOT_FOUND);
    }
    public function create(Request $request)
    {
        $person = [
            "id" => count($this->names) + 1,
            "name" => $request->input("name"),
            "age" => $request->input("age"),
        ];
        $this->names[$person["id"]] = $person;
        return response()->json(["message" => "Persona creada", "person" => $person], 201);
    }
}
