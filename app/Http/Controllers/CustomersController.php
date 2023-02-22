<?php

namespace App\Http\Controllers;


use App\Models\Customer as ModelsCustomer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Obtener datos de los clientes habilitados
     * @return JsonResponse
     * @author Michael Arias
     */
    public function dataCustomers()
    {
        $enabled = 3; //En la tabla de listado el id 3 es Habilitado
        $user = 2;
        $allData = ModelsCustomer::state($enabled)->with('stateR')->get();
        return $this->successResponse($allData, $user);
    }

    /**
     * Obtener datos de solo un cliente
     * @return JsonResponse
     * @author Michael Arias
     */
    public function aClient($customerId)
    {
        $user = 2;
        $data = ModelsCustomer::ids($customerId)->with('stateR', 'services', 'services.stateR', 'services.serviceidR', 'services.serviceidR.typeR', 'services.serviceidR.stateR')->get();
        return $this->successResponse($data, $user);
    }

    /**
     * Retornar imagene del cliente
     * @return JsonResponse
     * @author Michael Arias
     */
    public function customerImage(Request $request)
    {
        $dataImageReq = $request->dataImage;
        $dataImagesResponse = file_get_contents(public_path("files/".$dataImageReq));
        
        return response($dataImagesResponse)->header('Content-type', 'image/png');
    }

}
