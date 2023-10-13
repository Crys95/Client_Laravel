<?php

namespace App\Services;

use App\Repositories\ClientRepository;

class ClientService
{

    private $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getClient()
    {
        $response = $this->repository->getClient();

        $return = [
            'success' => true,
            'data' => $response
        ];

        return $return;
    }

    public function storeClient(array $data)
    {
        $response = $this->repository->storeClient($data);
        return $response;
    }

    public function boardClient(string $plate)
    {
        $response = $this->repository->boardClient($plate);
        if (!$response) {
            $res = [
                'message' => 'cpf não encontrado',
                'success' => false
            ];
            return response()->json($res, 400);
        }
        return response()->json($response, 200);
    }

    public function deleteClient(string $cpf)
    {
        $this->repository->deleteClient($cpf);
        $res = [
            'message' => 'cpf deletado com sucesso',
            'success' => true
        ];
        return $res;
    }

    public function updateClient(array $data)
    {
        $cpf = $data['cpf'];
        $update = $this->repository->updateClient($cpf, $data);

        return $update;
    }
}
