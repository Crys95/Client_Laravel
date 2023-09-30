<?php

namespace App\Services;

use App\Repositories\VeiculoRepository;

class VeiculoServices {

    private $repository;
    
    public function __construct( VeiculoRepository $repository )
    {
        $this->repository = $repository;
    }

    public function getVehicle(){
        $response = $this->repository->getVehicle();

        $return = [
            'success' => true,
            'data' => $response
        ];

        return $return;
    }

    public function storeVehicle(array $data){
        $response = $this->repository->storeVehicle($data);
        return $response;
    }

    public function boardVehicle(string $plate){
        $response = $this->repository->boardVehicle($plate);
        if(!$response){
            $res = [
                'message' => 'veiculo não encontrado',
                'success' => false
            ];
            return response()->json($res, 400);
        }
        return response()->json($response, 200);
    }

    public function deleteVehicle(string $plate){
        $this->repository->deleteVehicle($plate);
        $res = [
            'message' => 'veiculo deletado com sucesso',
            'success' => true
        ];
        return $res;
    }

    public function updateVehicle(array $data){
        $plate = $data['placa'];
        $update = $this->repository->updateVehicle($plate, $data);

        return $update;
    }
    
}