<?php

namespace App\Http\Controllers\Domain\UseCase\Products;

use App\Http\Controllers\Controller;

class Products extends Controller
{
    protected $productsModel;

    public function __construct()
    {
        $this->productsModel = new \App\Models\Products();
    }

    /**
     * @return \App\Models\Products
     */
    public function getProductsModel(): \App\Models\Products
    {
        return $this->productsModel;
    }

}