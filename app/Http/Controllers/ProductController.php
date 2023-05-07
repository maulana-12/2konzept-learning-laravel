<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_product = Product::all();
        $response = [
            "status" => true,
            "message" => "Data Show",
            "data" => $list_product
        ];

        $http_code = 200;
        return response($response, $http_code);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $create = Product::create($data);
        if ($create) {
            $response = [
                "status" => true,
                "message" => "Data created",
            ];
            $http_code = 201;
        } else {
            $response = [
                "status" => false,
                "message" => "Data failed to create",
            ];
            $http_code = 406;
        }
        return response($response, $http_code);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Product::find($id);
        if ($data) {
            $response = [
                "status" => true,
                "message" => "Data Show",
                "data" => $data
            ];
            $http_code = 200;
        } else {
            $response = [
                "status" => false,
                "message" => "Data failed to create",
            ];
            $http_code = 406;
        }
        return response($response, $http_code);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Product::find($id);
        $save = $data->update($request->all());
        if ($save) {
            $response = [
                "status" => true,
                "message" => "Data Updated",
            ];
            $http_code = 200;
        } else {
            $response = [
                "status" => false,
                "message" => "Failed to update",
            ];
            $http_code = 406;
        }
        return response($response, $http_code);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        $save = $data->delete();
        if ($save) {
            $response = [
                "status" => true,
                "message" => "Data Deleted",
            ];
            $http_code = 200;
        } else {
            $response = [
                "status" => false,
                "message" => "Failed to delete",
            ];
            $http_code = 406;
        }
        return response($response, $http_code);
    }
}
