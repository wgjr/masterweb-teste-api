<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;

class SalesProducts extends Model
{
    protected $fillable = [
        'id_sales',
        'id_products',
        'units',
        'sale_price',
    ];

    public function newSaleProduct(int $idSale, int $idProduct, int $units, $salePrice)
    {
        try {
            return $this::query()
                ->create([
                    'id_sales' => $idSale,
                    'id_products' => $idProduct,
                    'units' => $units,
                    'sale_price' => $salePrice,
                ]);
        } catch (Exception $exceptionNewSale) {
            return false;
        }
    }
}