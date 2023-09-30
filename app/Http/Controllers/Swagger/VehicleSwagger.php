<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

class VehicleSwagger extends Controller
{
    /**
     * @OA\Get(
     *      path="/api/vehicle",
     *      operationId="index",
     *      tags={"vehicle"},
     *      summary="Get list of vehicle",
     *      description="consulta lista de veiculo",
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
     *      path="/api/vehicle/vehicle-create",
     *      operationId="store",
     *      tags={"vehicle"},
     *      summary="register vehicle",
     *      description="registra o veiculo",
     *  @OA\Parameter(
     *         name="placa",
     *         in="query",
     *         description="informe a placa",
     *         required=true,
     *      ),
     *  @OA\Parameter(
     *         name="marca",
     *         in="query",
     *         description="informe a marca",
     *         required=true,
     *      ),
     *  @OA\Parameter(
     *         name="modelo",
     *         in="query",
     *         description="informe o modelo",
     *         required=true,
     *      ),
     *  @OA\Parameter(
     *         name="ano_fabricacao",
     *         in="query",
     *         description="informe o ano_fabricacao",
     *         required=true,
     *      ),
     *  @OA\Parameter(
     *         name="numero_eixos",
     *         in="query",
     *         description="informe o numero_eixos",
     *         required=true,
     *      ),
     *  @OA\Parameter(
     *         name="cor",
     *         in="query",
     *         description="informe a cor",
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
     *      path="/api/vehicle/vehicle-consultation",
     *      operationId="plate",
     *      tags={"vehicle"},
     *      summary="check vehicle",
     *      description="consulta individual de veiculo",
     * 
     *  @OA\Parameter(
     *         name="placa",
     *         in="query",
     *         description="informe a placa",
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
     *      path="/api/vehicle/vehicle-delete",
     *      operationId="delete",
     *      tags={"vehicle"},
     *      summary="delete vehicle",
     *      description="excluir o veiculo",
     * 
     *  @OA\Parameter(
     *         name="placa",
     *         in="query",
     *         description="informe a placa",
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
     *      path="/api/vehicle/vehicle-update",
     *      operationId="update",
     *      tags={"vehicle"},
     *      summary="update vehicle",
     *      description="Atualiza o veiculo",
     *  @OA\Parameter(
     *         name="placa",
     *         in="query",
     *         description="informe a placa",
     *         required=true,
     *      ),
     *  @OA\Parameter(
     *         name="marca",
     *         in="query",
     *         description="informe a marca",
     *         required=false,
     *      ),
     *  @OA\Parameter(
     *         name="modelo",
     *         in="query",
     *         description="informe o modelo",
     *         required=false,
     *      ),
     *  @OA\Parameter(
     *         name="ano_fabricacao",
     *         in="query",
     *         description="informe o ano_fabricacao",
     *         required=false,
     *      ),
     *  @OA\Parameter(
     *         name="numero_eixos",
     *         in="query",
     *         description="informe o numero_eixos",
     *         required=false,
     *      ),
     *  @OA\Parameter(
     *         name="cor",
     *         in="query",
     *         description="informe a cor",
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
