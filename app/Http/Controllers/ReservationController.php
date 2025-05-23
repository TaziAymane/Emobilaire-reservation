<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('components.Reservation-Chember.chember');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('components.Reservation-Chember.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
         $request->validate([
            'dateDemande' => 'required',
            'phone' => 'required',
            'nameComplait' => 'required',
            'message' => 'required',
            'nbHours' => 'required'
        ]);
        Reservation::create([
            'dateDemande' => $request->dateDemande ,
            'phone' => $request->phone ,
            'nameComplait' => $request->nameComplait ,
            'message' => $request->message ,
            'nbHours' => $request->nbHours
        ]);

        return redirect()->route('HomePage')->with('success','reservation send with success ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
