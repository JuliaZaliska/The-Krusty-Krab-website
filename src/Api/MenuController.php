<?php

namespace App\Api;

class MenuController
{
    private MenuRepository $repository;

    public function __construct()
    {
        $this->repository = new MenuRepository();
    }

    public function index(): void
    {
        header('Content-Type: application/json; charset=utf-8');

        echo json_encode([
            'items' => $this->repository->getAll(),
        ], JSON_UNESCAPED_UNICODE);
    }
}