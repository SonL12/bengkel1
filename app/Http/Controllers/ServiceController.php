<?php

namespace App\Http\Controllers;

use Carbon\Laravel\ServiceProvider;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $data = Services::get();
        $data = Services::paginate(10);
        return view('Service.tampilService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('Service.tambahService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = new Service();
        $data->keluhan = $request->keluhan;
        $data->tgl_masuk = $request->tgl_masuk;
        $data->tgl_keluar = $request->tgl_keluar;
        $data->save();
        return redirect('Service');
    }

    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = Service::where('id', '=', $id)->get();
        return view('Service.editService', compact('data', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(string $id)
    {
        //
        $data = Service::where('id', '=', $id);
        $data->update([
        $data->keluhan = $request->keluhan;
        $data->tgl_masuk = $request->tgl_masuk;
        $data->tgl_keluar = $request->tgl_keluar;
        ]);
        return redirect('Service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = Service::where('id', '=', $id);
        $data->delete();
        return redirect('Service');
    }
}
