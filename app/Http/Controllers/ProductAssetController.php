<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductAssetRequest;
use App\Http\Requests\UpdateProductAssetRequest;
use App\Models\ProductAsset;

class ProductAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreProductAssetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductAssetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductAsset  $productAsset
     * @return \Illuminate\Http\Response
     */
    public function show(ProductAsset $productAsset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductAsset  $productAsset
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductAsset $productAsset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductAssetRequest  $request
     * @param  \App\Models\ProductAsset  $productAsset
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductAssetRequest $request, ProductAsset $productAsset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductAsset  $productAsset
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductAsset $productAsset)
    {
        //
    }
}
