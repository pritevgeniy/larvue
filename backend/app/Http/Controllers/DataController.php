<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataRequest;
use App\Http\Requests\StoreDataRequest;
use App\Http\Requests\UpdateDataRequest;
use App\Models\Data;
use Illuminate\Http\JsonResponse;

class DataController extends Controller
{
    public function index(DataRequest $request): JsonResponse
    {
        $data = Data::query()
            ->where('json->date', '>', '2011-01-01')
            ->where('json->date', '<', '2022-01-01')
            ->where('json->text', 'like', '%ali%')
            ->paginate(100);
        return response()->json($data);
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
     * @param \App\Http\Requests\StoreDataRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Data $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Data $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateDataRequest $request
     * @param \App\Models\Data $data
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDataRequest $request, Data $data)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Data $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        //
    }
}
