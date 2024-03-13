<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Owner;
use App\Http\Requests\OwnerRequest;

class OwnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $owners= Owner::all();
        return view('owners.index', ['owners'=>$owners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('owners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  OwnerRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(OwnerRequest $request)
    {
        $owner = new Owner;
		$owner->name = $request->input('name');
        $owner->save();

        return to_route('owners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $owner = Owner::findOrFail($id);
        return view('owners.show',['owner'=>$owner]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $owner = Owner::findOrFail($id);
        return view('owners.edit',['owner'=>$owner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  OwnerRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(OwnerRequest $request, $id)
    {
        $owner = Owner::findOrFail($id);
		$owner->name = $request->input('name');
        $owner->save();

        return to_route('owners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $owner = Owner::findOrFail($id);
        $owner->delete();

        return to_route('owners.index');
    }
}
