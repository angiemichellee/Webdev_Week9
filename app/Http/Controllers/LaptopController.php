<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLaptopRequest;
use App\Http\Requests\UpdateLaptopRequest;
use App\Models\Laptop;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    /**
     * nampilin semua laptop yg ada
     */
    public function index()
    {
        $laptops = Laptop::all();
        return view('list-laptop', compact('laptops'));
    }

    /**
     * buka form buat nambahin laptop baru
     */
    public function create()
    {
        return view('form-laptop');
    }

    /**
     * nyimpen laptop baru ke database
     */
    public function store(Request $request)
    {
        Laptop::create([
            "brand" => $request->brand,
            "model" => $request->model,
            "prosessor" => $request->prosessor,
            "ram" => $request->ram,
        ]);

        return redirect('/');
    }

    /**
     * nampilin 1 laptop aja (blm kepake sih)
     */
    public function show(Laptop $laptop)
    {
        //
    }

    /**
     * buka form edit laptop
     */
    public function edit(Laptop $laptop)
    {
        // $laptop udh otomatis diambilin dr database sama Route Model Binding
        // (sama aja kyk Laptop::findOrFail($id)), jd tinggal lempar aja ke view
        return view('edit-laptop', compact('laptop'));
    }

    /**
     * nyimpen hasil editan laptop
     */
    public function update(UpdateLaptopRequest $request, Laptop $laptop)
    {
        // datanya udh dicek duluan sama UpdateLaptopRequest sblm nyampe sini, jd aman
        $laptop->update($request->validated());

        return redirect('/');
    }

    /**
     * ngapus laptop
     */
    public function destroy(Request $request)
    {
        Laptop::destroy($request->id);

        return redirect('/');
    }
}
