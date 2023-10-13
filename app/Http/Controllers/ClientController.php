<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastroClientRequest;
use App\Services\ClientService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $service;

    public function __construct(ClientService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $response = $this->service->getClient();
        return response()->json($response, 200);
    }

    public function store(CadastroClientRequest $request)
    {
        $response = $this->service->storeClient($request->all());
        return $response;
    }

    public function consult(Request $request)
    {
        $response = $this->service->boardClient($request->cpf);
        return $response;
    }

    public function delete(Request $request)
    {
        $response = $this->service->deleteClient($request->cpf);
        return $response;
    }
    public function update(Request $request)
    {
        $response = $this->service->updateClient($request->all());
        return $response;
    }
}
