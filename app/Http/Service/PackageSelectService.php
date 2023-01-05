<?php

namespace App\Http\Service;

use App\Http\Requests\PackageSelectRequest;
use Illuminate\Http\Request;

interface PackageSelectService
{

    public function subscribe(PackageSelectRequest $request);

}
