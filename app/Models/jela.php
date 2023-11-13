<?php
namespace App\Models;
use Illuminate\Support\Facades\DB;

class jela{
    public static function all(){


        $array = [
            [
              

            'naziv'=>DB::table('jezici-jela')->where('id',1)->first(),
            'sastojak'=>DB::connection('mysql2')->table('jezici-sastojci')->where('id',1)->first(),
            'kategorija'=>DB::connection('mysql3')->table('jezici-kategorije')->where('id',1)->first(),
            'tag'=>DB::connection('mysql4')->table('jezici-tagovi')->where('id',1)->first(),

            ],
            [
              

            'naziv'=>DB::table('jezici-jela')->where('id',2)->first(),
            'sastojak'=>DB::connection('mysql2')->table('jezici-sastojci')->where('id',2)->first(),
            'kategorija'=>DB::connection('mysql3')->table('jezici-kategorije')->where('id',2)->first(),
            'tag'=>DB::connection('mysql4')->table('jezici-tagovi')->where('id',2)->first(),
    
            ],
        
        
        ];

    
        return $array;

    }
}


?>