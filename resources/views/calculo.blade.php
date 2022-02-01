@extends('layout')

@section('content')
<form action="calculo" method="GET" autocomplete="off">


<table align=center>

<tr><td> <label for="">A=</label><input type="text" name="a" required></label></td></tr>
<tr><td> <label for="">B=</label><input type="text" name="b" required></label></td></tr>
<tr><td> <label for="">C=</label><input type="text" name="c" required></label></td></tr>
<tr><td> <label for="">D=</label><input type="text" name="d" required></label></td></tr>

</tr><table align=center>

<tr><td><input type="submit"value="Calcular"name="calcular" ></td></tr>
</table>

<table align="center">

@if(isset($result))
<tr><td> <label for="">Resultado=</label><input type="text" value={{$result}} disabled ></label></td></tr>

                @endif


</table>
</form>




        @endsection
