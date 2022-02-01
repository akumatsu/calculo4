<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculoController extends Controller
{
    public function calculo(Request $request){
      $a =  $request->a;
      $b =  $request->b;
      $c =  $request->c;
      $d =  $request->d;

      if($a>0){
        $result = $a + $b *$c/$d;

        return view('calculo', compact("result"));


     }else{
        $result = $a + $b *$c/$d;
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        echo"<div align='center'>";
        echo"<label>Resultado=</label><input type='text'  value=$result>";echo"<br>";
        echo"no se pueden cacular mas  variable ya que el primer valor es igual a 0 ";echo"<br>";
        echo"<a href=".url('/')."> Calcular nuevo valor</a>";
        echo"</div>";
     }




}
}

