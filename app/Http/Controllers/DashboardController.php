<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Apikey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mendapatkan user yang sedang login
        $user = Auth::user();

        // Memuat relasi apikey
        $apikey = $user->apikey;

        // Debugging untuk memastikan data apikey sudah dimuat
        // dd($apikey);

        //redirect to dashboard resource controller
        // return redirect()->route('dashboard.index', ['user' => $user]);

        // return view
        return view('dashboard', ['user' => $user, 'apikey' => $apikey]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
