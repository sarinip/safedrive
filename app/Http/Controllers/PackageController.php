<?php

namespace App\Http\Controllers;

use App\Http\Requests\PackageSelectRequest;
use App\Http\Service\PackageSelectService;
use App\Http\Service\PackageSelectServiceImpl;
use App\Models\StudentPackage;
use Illuminate\Http\Request;
use App\Http\Service\PackageService;
use App\Http\Service\PackageServiceImpl;
use App\Http\Requests\PackageRequest;
use App\Models\Package;


class PackageController extends Controller
{
    private PackageService $service;

    private PackageSelectService $packageSelectService;

    public function __construct()
    {
        $this->service = new PackageServiceImpl();
        $this->packageSelectService = new PackageSelectServiceImpl();

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageRequest $request)
    {
        return $this->service->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Package $Package
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->service->getPackage($id);
    }

    public function destroy($id)
    {

        return $this->service->deletePackage($id);
    }

    //update form table
    public function showTable()
    {
        return $this->service->viewPackage();
    }

    //report table
    public function viewTable()
    {
        return $this->service->viewTable();
    }

    public function subscribe(PackageSelectRequest $request): \Illuminate\Http\RedirectResponse
    {
        return $this->packageSelectService->subscribe($request);
    }

    public static function getSubscribeAmount()
    {
        return StudentPackage::getPackageAmount();
    }
}
