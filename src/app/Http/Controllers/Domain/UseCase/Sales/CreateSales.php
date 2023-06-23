<?php

namespace App\Http\Controllers\Domain\UseCase\Sales;

use App\Http\Controllers\Domain\ValueObject\ResponseFormateHateaos;
use Exception;
use Illuminate\Http\Request;

class CreateSales extends Sales
{
    public function create(Request $request)
    {
        try {
            $itens = [];
            $newSale = $this->getModelSales()->newSale($request->user()->id);

            foreach ($request->get('products') as $product) {
                $itens[] = $this->getModelSalesProducts()->newSaleProduct(
                    $newSale->id,
                    $product['id'],
                    1,
                    $product['price']
                );
            }

            return ResponseFormateHateaos::hateosReponse(
                'Sale',
                'Venda processada com sucesso.',
                200,
                [
                    'sale' => $newSale,
                    'producsts' => $itens
                ]
            );
        } catch (Exception $exceptionCreateSales) {
            return ResponseFormateHateaos::hateosReponse(
                'Sale',
                'Ocorreu um erro ao processar a venda.',
                407,
                []
            );
        }
    }
}