<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalog;

class CatalogApiController extends Controller
{
    public function __construct(Catalog $catalog, Request $request)
    {
        $this->catalog = $catalog;
        $this->request = $request;
    }

    public function index()
    {

        $data = $this->catalog->all();
        
        return response()->json($data, 200);
          
    }
          
    public function store(Request $request)
    {
        $dataForm = $request->all();

        $data = $this->catalog->create($dataForm);

        return response()->json($data, 201);
    }

    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
