<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConcursoController extends Controller
{
    public function concurso(){
        $concurso = request('concurso'); // PARAMETRO URL
        try {
            $file = "loteria/lotomania/".$concurso.".json";
            $Json = file_get_contents($file);

            $myarray = json_decode($Json, true);
            return $myarray;

        } catch (\Throwable $th) {
            return response()->json(['Error' => 'Verifique o numero do concurso']);
        }        
    }

    // Retorna X ultimos jogos
    public function concursoLimitado($var){
        try {

            $file = "loteria/lotomania/concursos.json";
            $Json = file_get_contents($file); 

            $myarray = json_decode($Json, true);

            return response()->json(array_slice($myarray,0,$var)); // Retorna lista limitada

        } catch (\Throwable $th) {
            return response()->json(['Error' => 'Temporariamente indisponivel']);
        }    
    }

    // Retorna os 10 ultimos jogos
    public function getConcurso(){
        $last = request('last'); // PARAMETRO URL
        return self::concursoLimitado($last);
    }

    // Numero e suas repeticao no ultimos 10 jogos
    public function numberRepeticao($var){
        try {

            $file = "loteria/lotomania/concursos.json";  // Numeros dos ultimos 10 jogos
            $Json = file_get_contents($file);

            $myarray = json_decode($Json, true);

            $myarray = array_slice($myarray,0,$var);  // Retorna lista limitada

            $list = [];  // Lista dos numeros dos ultimos jogos
            $arrLength = count($myarray);
            
            for ($i = 0; $i < $arrLength; $i++) {
                $list = array_merge($list, $myarray[$i]['listaDezenas']);  // Junta a lista com as dezenas apenas
            }

            $numRepetido = array_count_values($list);  // Mostra quantidade de numeros e sua repeticao

            arsort($numRepetido);  // Lista em ordem decrescente de valores 

            for ($i = 0; $i < $arrLength; $i++) {
                $list = array_merge($list, $myarray[$i]['listaDezenas']);  // Junta a lista com as dezenas apenas
            }

            $listOrdem = [];
            foreach($numRepetido as $x => $x_value) {
                array_push($listOrdem, ['numero' =>  $x, 'repetido' => $x_value]);  // Cria nova lista de retorno
            }

            //return response()->json(array_slice($listOrdem,0,50));  // Retorna lista limitada

            return $listOrdem;

        } catch (\Throwable $th) {
            return response()->json(['Error' => 'Temporariamente indisponivel']);
        }
            
    }

    // Retorna os numeros e repeticao dos ultimos PARAMETRO ultimos jogos
    public function last(){
        $last = request('last'); // PARAMETRO URL
        return self::numberRepeticao($last); 
    }

    

}
