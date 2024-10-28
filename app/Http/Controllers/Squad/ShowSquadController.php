<?php

namespace App\Http\Controllers\Squad;

use App\Models\Squad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowSquadController extends Controller
{
    public function __invoke(string $uuid)
    {
        $squad = Squad::query()->where('uuid', $uuid);

        if (is_null($squad)) {

            return response()->json(['erro' => 'Squad não encontrada', 404]);
        }

        return response()->json($squad, 200);
    }
}
