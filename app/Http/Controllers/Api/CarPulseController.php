<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarPulse;
use App\Http\Resources\CarPulseResource;
use Illuminate\Support\Facades\Validator;


class CarPulseController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        // get all data
        $carpulse = CarPulse::latest()->paginate(10);

        return new CarPulseResource(true, 'List Data Car Pulses', $carpulse);
    }

    /**
     * store
     * 
     * @param mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        // define validation
        $validator = Validator::make($request->all(), [
            'user_id'           => 'required',
            'b_front_left'      => 'required',
            'b_front_right'     => 'required',  
            'b_back_left'       => 'required',
            'b_back_right'      => 'required',     
            's_front_left'      => 'required',
            's_front_right'     => 'required',  
            's_back_left'       => 'required',
            's_back_right'      => 'required',    
            'latitude'          => 'required',
            'longitude'         => 'required',
            'speed'             => 'required',
            'satelite'          => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $carpulse = CarPulse::create([
            'user_id'           => $request->user_id,
            'b_front_left'      => $request->b_front_left,
            'b_front_right'     => $request->b_front_right, 
            'b_back_left'       => $request->b_back_left,
            'b_back_right'      => $request->b_back_right,     
            's_front_left'      => $request->s_front_left,
            's_front_right'     => $request->s_front_right,  
            's_back_left'       => $request->s_back_left,
            's_back_right'      => $request->s_back_right,    
            'latitude'          => $request->latitude,
            'longitude'         => $request->longitude,  
            'speed'             => $request->speed,
            'satelite'          => $request->satelite,
        ]);

        return new CarPulseResource(true, 'Data Car Pulse Berhasil Ditambahkan.', $carpulse);
    }
}
