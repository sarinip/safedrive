<?php

namespace App\Http\Service;

use App\Http\Requests\PackageRequest;

interface PackageService
{
    public function store(PackageRequest $request);

    public function getPackage($id);

    public function viewPackage();

    public function deletePackage($id);

    // public function viewTable();
}