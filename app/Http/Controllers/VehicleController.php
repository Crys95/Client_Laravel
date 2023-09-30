<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastroVeiculoRequest;
use App\Services\VeiculoServices;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    private $service;
    
    public function __construct( VeiculoServices $service )
    {
        $this->service = $service;
    }

    public function index(){
        $response = $this->service->getVehicle();
        return response()->json($response, 200);
    }

    public function store(CadastroVeiculoRequest $request){
        $response = $this->service->storeVehicle($request->all());
        return $response;
    }

    public function plate(Request $request){
        $response = $this->service->boardVehicle($request->plate);
        return $response;
    }

    public function delete(Request $request){
        $response = $this->service->deleteVehicle($request->plate);
        return $response;
    }
    public function update(Request $request){
        $response = $this->service->updateVehicle($request->all());
        return $response;
    }
}
