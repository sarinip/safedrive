<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class StudentPackage extends Model
{
    use HasFactory;

    public static function getPackageAmount()
    {
        return DB::table('student_packages')->join('packages', 'packages.id', '=', 'student_packages.package_id')->select('packages.price')->where('student_packages.student_id', '=', session()->get('student_id')[0])->sum('packages.price');
    }

    public static function getStudentPackages()
    {
        return DB::table('student_packages')->join('packages', 'packages.id', '=', 'student_packages.package_id')->select('packages.price')->where('student_packages.student_id', '=', session()->get('student_id')[0])->select('packages.id','packages.vehicle_type')->get();
    }


}
