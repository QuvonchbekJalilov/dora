<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AccidentController extends Controller{
    
  public function getApplicantInfo(Request $request)
    {
		
        // $data = Http::withBasicAuth(env('IPOLIS_USERNAME'), env('IPOLIS_PASSWORD'))
        //     ->get(env('IPOLIS_ENDPOINT') . '/eosgouz/provider/birthdate', $request->toArray());
    $data="salom";
        return response()->json($data->json());
    }
}
    