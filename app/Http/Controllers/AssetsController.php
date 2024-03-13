<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Asset;
use App\Http\Requests\AssetRequest;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $assets= Asset::all();
        return view('assets.index', ['assets'=>$assets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('assets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AssetRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AssetRequest $request)
    {
        $asset = new Asset;
		$asset->asset_name = $request->input('asset_name');
		$asset->acquired_date = $request->input('acquired_date');
		$asset->cost = $request->input('cost');
		$asset->depreciation_rate = $request->input('depreciation_rate');
		$asset->owner_id = $request->input('owner_id');
        $asset->save();

        return to_route('assets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $asset = Asset::findOrFail($id);
        return view('assets.show',['asset'=>$asset]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $asset = Asset::findOrFail($id);
        return view('assets.edit',['asset'=>$asset]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AssetRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AssetRequest $request, $id)
    {
        $asset = Asset::findOrFail($id);
		$asset->asset_name = $request->input('asset_name');
		$asset->acquired_date = $request->input('acquired_date');
		$asset->cost = $request->input('cost');
		$asset->depreciation_rate = $request->input('depreciation_rate');
		$asset->owner_id = $request->input('owner_id');
        $asset->save();

        return to_route('assets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $asset = Asset::findOrFail($id);
        $asset->delete();

        return to_route('assets.index');
    }
}
