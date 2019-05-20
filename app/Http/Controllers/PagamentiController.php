<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class PagamentiController extends Controller
{
    function getPaganti(){

      $paganti = DB::select
      ("
         SELECT id , name , lastname
         FROM paganti
       ");


      return view ("ver1.home" ,
            [ "paganti" => $paganti ]
          );
    }

    //DATO CHE LA RICERCA VERRÀ EFFETTUATA TRAMITE ID, È NECCESSARIO PASSARLO
    //COME PARAMETRO
    function getPagantiById($id){

    $pagante = DB::select
        ("
          SELECT id, name, lastname
          FROM paganti
          WHERE id = $id
        ");

        return view ("ver1.homePagantiById" ,
              [ "pagante" => $pagante ]
            );

    }
}
