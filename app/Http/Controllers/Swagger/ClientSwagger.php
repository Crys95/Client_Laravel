<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

class ClientSwagger extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/client",
     *      operationId="index",
     *      tags={"client"},
     *      summary="Get list of client",
     *      description="consulta lista de cliente",
     *  
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */
    public function index()
    {
    }

    /**
     * @OA\Post(
     *      path="/api/client/client-create",
     *      operationId="store",
     *      tags={"client"},
     *      summary="register client",
     *      description="registra o cliente",
     *  @OA\Parameter(
     *         name="cpf",
     *         in="query",
     *         description="informe o cpf",
     *         required=true,
     *      ),
     *  @OA\Parameter(
     *         name="nome",
     *         in="query",
     *         description="informe o nome",
     *         required=true,
     *      ),
     *  @OA\Parameter(
     *         name="sobrenome",
     *         in="query",
     *         description="informe o sobrenome",
     *         required=true,
     *      ),
     *  @OA\Parameter(
     *         name="data_nascimento",
     *         in="query",
     *         description="informe a data de nascimento",
     *         required=true,
     *      ),
     *  @OA\Parameter(
     *         name="email",
     *         in="query",
     *         description="informe o email",
     *         required=true,
     *      ),
     *  @OA\Parameter(
     *         name="genero",
     *         in="query",
     *         description="informe o genero",
     *         required=true,
     *      ),
     *  
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */
    public function store()
    {
    }

    /**
     * @OA\Get(
     *      path="/api/client/client-consultation",
     *      operationId="plate",
     *      tags={"client"},
     *      summary="check client",
     *      description="consulta individual do cliente",
     * 
     *  @OA\Parameter(
     *         name="cpf",
     *         in="query",
     *         description="informe o cpf",
     *         required=true,
     *      ),
     *  
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */
    public function plate()
    {
    }

    /**
     * @OA\Delete(
     *      path="/api/client/client-delete",
     *      operationId="delete",
     *      tags={"client"},
     *      summary="delete client",
     *      description="excluir o cliente",
     * 
     *  @OA\Parameter(
     *         name="cpf",
     *         in="query",
     *         description="informe 0 cpf",
     *         required=true,
     *      ),
     *  
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */
    public function delete()
    {
    }

    /**
     * @OA\Put(
     *      path="/api/client/client-update",
     *      operationId="update",
     *      tags={"client"},
     *      summary="update client",
     *      description="Atualiza o cliente",
     *  @OA\Parameter(
     *         name="cpf",
     *         in="query",
     *         description="informe o cpf",
     *         required=true,
     *      ),
     *  @OA\Parameter(
     *         name="nome",
     *         in="query",
     *         description="informe o nome",
     *         required=false,
     *      ),
     *  @OA\Parameter(
     *         name="sobrenome",
     *         in="query",
     *         description="informe o sobrenome",
     *         required=false,
     *      ),
     *  @OA\Parameter(
     *         name="data_nascimento",
     *         in="query",
     *         description="informe o data de nascimento",
     *         required=false,
     *      ),
     *  @OA\Parameter(
     *         name="email",
     *         in="query",
     *         description="informe o email",
     *         required=false,
     *      ),
     *  @OA\Parameter(
     *         name="genero",
     *         in="query",
     *         description="informe o genero",
     *         required=false,
     *      ),
     *  
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */
    public function update()
    {
    }
}
