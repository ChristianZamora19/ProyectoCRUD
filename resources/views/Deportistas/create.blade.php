
<form action="{{url('/Deportistas')}}" method="post">
@csrf
@include('Deportistas.from',['modo'=>'Crear']);

</form>