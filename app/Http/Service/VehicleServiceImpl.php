<?php

namespace App\Http\Service;

use App\Http\Requests\VehicleRequest
use App\Models\Vehicle;
use App\Models\Instructor;
use Illuminate\Contracts\Hashing\Hasher
use Illuminate\Support\Facades\Hash;

class VehicleServiceImpl implements VehicleService
{

    public function store(VehicleRequest $request): \Illuminate\Http\RedirectResponse
{
        // TODO: Implement store() method.
            $path = 'login';

            try {

            $vehicle = null;

                    if(!empty($request->id)){
                    $vehicle = Vehicle::where('id',$request->id)->first();
                    $path = '/instructor/vehicle';
                    }

                if(empty($student)){

                    $vehicle = new Vehicle();
                }
                $vehicle->instructor_id= $instructor->id;
                $vehicle->reg_no= $request->reg_no;
                $vehicle->owner_name = $request->owner_name;
                $vehicle->reg_date = $request->reg_date;
                $vehicle->class = $request->class;
                $vehicle->model = $request->model;
                $vehicle->insurance_up_to = $request->insurance_up_to;

                $vehicle->save();


            }catch (\Exception $e){

                throw new \Exception($e->getMessage());

            return redirect()->back();
            }


            return redirect()->route($path);
    }

    public function getVehicle($id)
    {
        // TODO: Implement getVehicle() method.

        $vehicle = Vehicle::where('id',$id)->first();
            return view('instructor.vehicleupdate', array('vehicle'=>$vehicle));
        }

        /**
    * Show the specified resource.
    * @param int $id
    * @return Response
     */
public function viewVehicle()
{
    $vehicles= Vehicle::all();
    return view('instructor.vehiclenew', array('vehicles'=>$vehicles));
}
        /**
    * Remove the specified resource from storage.
    *  @param int $id
    * @return Response
    */
public function deleteVehicle(Vehicle $vehicle)
{
    $vehicle->delete();
    return redirect('/vehicle');
}
}