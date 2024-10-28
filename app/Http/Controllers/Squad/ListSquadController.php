<?php

namespace App\Http\Controllers\Squad;

use App\Models\Squad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListSquadController extends Controller
{
    public function __invoke(string $productUuid = false)
    {
        if (empty($productUuid) === false) {

            $squad = Squad::query()->where('product_uuid', $productUuid);

        } else {

            $squad = Squad::all();
        }

        return response()->json($squad, 200);
    }
}
