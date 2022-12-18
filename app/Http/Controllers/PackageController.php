<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Service\PackageService;
use App\Http\Service\PackageServiceImpl;
use App\Http\Requests\PackageRequest;
use App\Models\Package;


class PackageController extends Controller
{
    private PackageService $service;

    public function __construct()
    {
        $this->service = new PackageServiceImpl();

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Package $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Package $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Package $student
     * @return \Illuminate\Http\Response
     */

    public function destroy($id){

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
}