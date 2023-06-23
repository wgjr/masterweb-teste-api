<?php

namespace App\Http\Controllers\Domain\UseCase\Products;

use App\Http\Controllers\Domain\ValueObject\ResponseFormateHateaos;
use Exception;

class ListProducts extends Products
{
    public function list()
    {
        try {
            $products = $this->getProductsModel()->all();

            return ResponseFormateHateaos::hateosReponse(
                'Products',
                'Produtos cadastrados.',
                200,
                $products->toArray()
            );
        } catch (Exception $exceptionListProduts) {
            return ResponseFormateHateaos::hateosReponse(
                'Products',
                'Ocorreu um erro ao listar os produtos.',
                407,
                []
            );
        }
    }
}