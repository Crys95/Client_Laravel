<?php


namespace App\Repositories;

use App\Models\Veiculo;

class VeiculoRepository
{

    private $VeiculoModel;

    public function __construct(
        Veiculo $VeiculoModel
    ) {
        $this->VeiculoModel = $VeiculoModel;
    }

    public function getVehicle()
    {
        return $this->VeiculoModel->get();
    }

    public function storeVehicle(array $data)
    {
        $query = $this->VeiculoModel->where('placa', $data['placa'])->first();

        if($query){
            $res = [
                'message' => 'placa ja cadastrada',
                'success' => false
            ];
            return response()->json($res, 400);
        }
        $create = $this->VeiculoModel->create($data);
        
        return response()->json($create, 201);
    }
    public function boardVehicle(string $plate) 
    {
        return $this->VeiculoModel->where('placa', $plate)->first();
    }

    public function deleteVehicle(string $plate) 
    {
        return $this->VeiculoModel->where('placa', $plate)->delete();
    }

    public function updateVehicle(string $plate, array $data)
    {
        $query = $this->VeiculoModel->where('placa', $plate)->first();

        if(!$query){
            $res = [
                'message' => 'veiculo não encontrado',
                'success' => false
            ];
            return response()->json($res, 404);
        }

        $query->update($data);
        
        $res = [
            'message' => 'veiculo editado com sucesso',
            'success' => true
        ];

        return response()->json($res, 200);
    }
}