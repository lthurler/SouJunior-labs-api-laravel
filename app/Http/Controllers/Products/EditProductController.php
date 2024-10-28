<?php

namespace App\Http\Controllers\Products;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditProductController extends Controller
{
    public function __invoke(Request $request, string $uuid)
    {
        $user = auth()->user();

        $product = Product::query()->where('uuid', $uuid)->first();

        if (is_null($product)) {

            return response()->json([
                'erro' => 'Produto não encontrado'
            ], 404);
        }

        if ($user->uuid !== $product->owner_uuid) {

            return response()->json([
                'erro' => 'Você não tem permissão para atualizar esse produto'
            ], 403);
        }

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->save();

        return response()->json([
            'message' => 'Produto atualizado com sucesso',
            'Product' => $product
        ], 200);
    }
}
