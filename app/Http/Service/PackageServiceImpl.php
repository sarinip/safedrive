<?php

namespace App\Http\Service;

use App\Http\Requests\PackageRequest;
use App\Models\Package;
use App\Models\Student;
use App\Models\Vehicle;

class PaymentServiceImpl implements PaymentService
{

    private $email_service;

    /**
     * @return mixed
     */
    public function __construct()
    {
        $this->email_service = new EmailServiceImpl();
    }

    public function store(PaymentRequest $request): \Illuminate\Http\RedirectResponse
    {

        $path = 'package.new';

        try {

        $package = null;

        $package = new Package();
        $package->package_name = $request->package_name;
        $package->price = $request->amount;
        $package->hours = $request->hours;


        $package->save();

         }catch (\Exception $e){

            throw new \Exception($e->getMessage());

            // return redirect()->back();
            return redirect()->back();
        }

        return redirect()->route($path)->with('success', "Record Insert Successfully!!");
    }

    public function getPackage($id)
    {
        // TODO: Implement getPackage() method.

        $package = Package::where('id', $id)->first();
        return view('admin.packageupdate', array('package' => $package));
    }

    public function viewPackage()
    {
        $package = Package::all();
        return view('admin.packagenew', array('package' => $package));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function deletePackage($id)
    {
        $package = Package::where('id', $id)->first();
        $package->delete();
        return redirect()->back()->with('success', "Record deleted Successfully!!");
    }

    // public function viewTable()
    // {
    //     $package = Package::all();
    //     return view('admin.reportpackage', ['packages' => $packages]);
    // }
}