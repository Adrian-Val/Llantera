<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TireModel;
use App\Models\ManufacturerModel;
use Carbon\Carbon;

class TireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tires = TireModel::orderBy('id', 'DESC')->get();
        return view('tires.index', compact('tires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tires.create');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request)
    {
        $name = $request->name;
        $manufacturer = $request->manufacturer;

        $exist = TireModel::where('name', $name)->where('manufacturer', $manufacturer)->exists();

        if($exist){
            return redirect()->route('tireIndex')
                ->with('title','Alert.')
                ->with('message','The tire and the manufacturer already exist.')
                ->with('icon','info');
        }




        TireModel::create($request->all());
        return redirect()->route('tireIndex')
            ->with('title','Success.')
            ->with('message','Tire created successfully.')
            ->with('icon','success');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data = TireModel::findOrFail($request->id);
        return view('tires.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        TireModel::where('id', $request->id)->update([
            'width' => $request->width,
            'diameter' => $request->diameter,
            'pressure' => $request->pressure,
            'stock' => $request->stock,
            'updated_at' => Carbon::now(),
        ]);
   
        return redirect()->route('tireIndex')
            ->with('title','Success.')
            ->with('message','Tire updated successfully.')
            ->with('icon','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $idTire = TireModel::findOrFail($request->id);
        $idTire->delete();
    
        return redirect()->route('tireIndex')
            ->with('title','Success.')
            ->with('message','Tire deleted successfully.')
            ->with('icon','success');
    }

    /**
     * Display a listing of the resource deleted.
     *
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        $tires = TireModel::onlyTrashed()->get();
        return view('trash.index', compact('tires'));
    }

    /**
     * Restore a resource deleted.
     *
     * @return \Illuminate\Http\Response
     */
    public function restore(Request $request)
    {
        $idTire = TireModel::withTrashed()->find($request->id)->restore();
        return redirect()->route('tireIndex')
            ->with('title','Success.')
            ->with('message','Tire restored successfully.')
            ->with('icon','success');
    }
}