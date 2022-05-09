
<form action="{{url('/Deportistas/'.$deportistas->id)}}" method="post">
@csrf
{{method_field('PATCH')}}

@include('Deportistas.from',['modo'=>'Editar']);

</form>
