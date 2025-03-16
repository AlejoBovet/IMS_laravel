<?php

namespace App\Services;

use App\Repositories\ProductoRepository;

class ProductoService
{
    protected $productoRepository;

    public function __construct(ProductoRepository $productoRepository)
    {
        $this->productoRepository = $productoRepository;
    }

    public function all()
    {
        return $this->productoRepository->all();
    }
}

