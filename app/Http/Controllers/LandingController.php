<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class LandingController extends Controller
{    

    public function index()
    {   
        //no database connection
        $cloudhost = collect(['Value Hybrid Performance', 'WordPress Hosting','Unlimited Hosting','High Performance Business','High Performance Enterprise']);  
        $server = collect(['CLOUD VPM SSD','Server Sekolah/Moodle','Fleksible VPS','Dedicated Server','Colocation Server','Leased To Owner Dedicated Server']);
        $internetacces = collect(['Broadband Home','Broadband Business','Broadband Wireless','Check Coverage area broadband']);
        $domain = collect(['Daftar Domain','Domain Premium .id','Domain Backorder','Domain Privacy Protection','Sewa Domain',
        'jual Beli & Lelang Domain','Domain Negotiator','Private label Domain Reseller']); 
        // $CollectedData=collect(['cloudhost'=>$cloudhost,'server'=>$server,'internetaccess'=>$internetacces,'domain'=>$domain]);    
        return view('landing',['cloudhost' => $cloudhost,'server'=>$server,'internetaccess'=>$internetacces,'domain'=>$domain]);
        
       
    }
}

