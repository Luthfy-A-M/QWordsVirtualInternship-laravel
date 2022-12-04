<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class LandingController extends Controller
{    

    public function index()
    {   
        $cloudhost = collect(['Value Hybrid Performance', 'WordPress Hosting','Unlimited Hosting','High Performance Business','High Performance Enterprise']);
        // $data->cloudhost = $cloudhost,
        //         'server'=>$server,          
        //         'internetacc'=> $internetacc ,
        //         'strategy_name'=>$request->strategyname             
        //     ])
        // }
        return view('landing',['cloudhost' => $cloudhost]);
    }
}

