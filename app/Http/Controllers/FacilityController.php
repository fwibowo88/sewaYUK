<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facility;
class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $facility = Facility::all();
        return view('admin.facility');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facility.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->get('name');
        $address = $request->get('address');
        $phone = $request->get('phone');
        $openhour = $request->get('openhour');
        $closehour = $request->get('closehour');
        $user = Auth::User()->name;

        $facility = new Facility();
        $facility->save();
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fac = Facility::find($id);

        return view('facility.detail',compact('fac'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fac = Facility::find($id);
        return view('facility.edit',compact('fac'));
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
        $fac = Facility::find($id);
        $fac->name = $request->get('name');
        $fac->address = $request->get('address');
        $fac->phone = $request->get('phone');
        $fac->openhour = $request->get('openhour');
        $fac->closehour = $request->get('closehour');
        $fac->save();

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fac = Test::find($id);
        $fac->delete();
        return redirect('home');
    }
}
