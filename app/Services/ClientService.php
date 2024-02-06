<?php

namespace App\Services;

use App\Repositories\ClientRepositories;

class ClientService
{

    private $repository;

    public function __construct(ClientRepositories $repository)
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

    public function boardClient(string $id)
    {
        $response = $this->repository->boardClient($id);
        if (!$response) {
            $res = [
                'message' => 'cpf não encontrado',
                'success' => false
            ];
            return response()->json($res, 400);
        }
        return response()->json($response, 200);
    }

    public function deleteClient(string $id)
    {
        $delete = $this->repository->deleteClient($id);

        return $delete;
    }

    public function updateClient(array $data)
    {
        $cpf = $data['cpf'];
        $update = $this->repository->updateClient($cpf, $data);

        return $update;
    }
}
