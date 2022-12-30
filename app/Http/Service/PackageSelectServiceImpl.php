<?php

namespace App\Http\Service;

use App\Models\Package;
use App\Models\StudentPackage;
use Illuminate\Http\Request;


class PackageSelectServiceImpl implements PackageSelectService
{

    public function subscribe(Request $request): \Illuminate\Http\RedirectResponse
    {
        // TODO: Implement subscribe() method.
        try {

            $attributes = $request->all();
            $s = "";
            foreach ($attributes as $key => $value) {

                if ($key == 'packages') {

                    $sp = new StudentPackage();
                    $sp->package_id = $value;
                    $sp->student_id = session()->get('reg_student_id')[0];
                    $sp->save();
                }

            }

            session()->remove('reg_student_id');

            return redirect()->back('login')->with('success', "Subscribe packages Successfully!!");

        } catch (\Exception $e) {

            return redirect()->back()->with('error_message', $e->getMessage() . $s);
        }
    }


}
