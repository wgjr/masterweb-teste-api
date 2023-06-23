<?php

namespace App\Http\Controllers\Domain\UseCase\Sales;

use App\Http\Controllers\Controller;
use App\Models\SalesProducts;

class Sales extends Controller
{
    protected $modelSales;
    protected $modelSalesProducts;
    public function __construct()
    {
        $this->modelSales = new \App\Models\Sales();
        $this->modelSalesProducts = new SalesProducts();
    }

    /**
     * @return \App\Models\Sales
     */
    public function getModelSales(): \App\Models\Sales
    {
        return $this->modelSales;
    }

    /**
     * @return SalesProducts
     */
    public function getModelSalesProducts(): SalesProducts
    {
        return $this->modelSalesProducts;
    }
}