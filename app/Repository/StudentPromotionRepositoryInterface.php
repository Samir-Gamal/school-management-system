<?php


namespace App\Repository;


interface StudentPromotionRepositoryInterface
{
    public function index();

    public function store($request);

    public function create();

    public function destroy($request);

}
