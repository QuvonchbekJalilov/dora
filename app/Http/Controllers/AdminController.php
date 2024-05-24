<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use App\MarketingService;



class AdminController extends Controller
{

    
    public function edit(MarketingService $marketingService)
    {
        $market = MarketingService::find(1);
        return view('admin.admin')->with(['adminPost' => $market]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MarketingService $marketingService)
    {
       
        $marketingService->update([
            'price' => $request->price 
        ]);
        
        return redirect()->route('admin-2', ['adminPost' => $marketingService->id]);
    }
}