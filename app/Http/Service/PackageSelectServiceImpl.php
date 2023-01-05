<?php

namespace App\Http\Service;

use App\Http\Requests\PackageSelectRequest;
use App\Models\Package;
use App\Models\StudentPackage;
use Illuminate\Http\Request;


class PackageSelectServiceImpl implements PackageSelectService
{

    public function subscribe(PackageSelectRequest $request): \Illuminate\Http\RedirectResponse
    {
        // TODO: Implement subscribe() method.
        try {

            $attributes = $request->all();
            foreach ($request->all() as $key => $value) {

                if($key != "_token"){
                    $sp = new StudentPackage();
                    $sp->package_id = $value;
                    $sp->student_id = session()->get('reg_student_id')[0];
                    $sp->save();
                }
               

            }

            session()->remove('reg_student_id');

            return redirect()->route('login')->with('success', "Subscribe packages Successfully!!");

        } catch (\Exception $e) {

            return redirect()->back()->with('error_message', $e->getMessage());
        }
    }


}
