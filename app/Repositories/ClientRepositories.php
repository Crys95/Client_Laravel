<?php


namespace App\Repositories;

use App\Models\ClienteModel;

class ClientRepositories
{

    private $ClientModel;

    public function __construct(
        ClienteModel $ClientModel
    ) {
        $this->ClientModel = $ClientModel;
    }

    public function getClient()
    {
        return $this->ClientModel->get();
    }

    public function storeClient(array $data)
    {
        $query = $this->ClientModel->where('cpf', $data['cpf'])->first();

        if ($query) {
            $res = [
                'message' => 'cpf ja cadastrada',
                'success' => false
            ];
            return response()->json($res, 400);
        }
        $create = $this->ClientModel->create($data);

        return response()->json($create, 201);
    }
    public function boardClient(string $cpf)
    {
        return $this->ClientModel->where('cpf', $cpf)->first();
    }

    public function deleteClient(string $cpf)
    {
        return $this->ClientModel->where('cpf', $cpf)->delete();
    }

    public function updateClient(string $cpf, array $data)
    {
        $query = $this->ClientModel->where('cpf', $cpf)->first();

        if (!$query) {
            $res = [
                'message' => 'cpf não encontrado',
                'success' => false
            ];
            return response()->json($res, 404);
        }

        $query->update($data);

        $res = [
            'message' => 'cpf editado com sucesso',
            'success' => true
        ];

        return response()->json($res, 200);
    }
}
