<?php

namespace App\Http\Controllers\Products;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteProductController extends Controller
{
    public function __invoke(string $uuid)
    {
        $product = Product::query()->where('uuid', $uuid);

        $user = auth()->user();

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

        $product->delete();

        return response()->json([
            'Message' => 'Produto deletado com sucesso'
        ], 200);
    }
}
