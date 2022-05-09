<h1>Lista de Deportistas Famosos</h1>

@if(Session::has('mensaje'))
{{Session:: get('mensaje')}}
@endif
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<br><a href="{{url('Deportistas/create')}}" class="btn btn-success">Nuevo Registro</a><br><br>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Deporte</th>
            <th scope="col">Edad</th>
            <th scope="col">Pais</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($deportista as $deportistas)
        <tr>
            <td>{{ $deportistas->id}}</td>
            <td>{{ $deportistas->Nombre}}</td>
            <td>{{ $deportistas->Apellido}}</td>
            <td>{{ $deportistas->Deporte}}</td>
            <td>{{ $deportistas->Edad}}</td>
            <td>{{ $deportistas->Pais}}</td>
            <td>
               
            <a href="{{url('/Deportistas/'.$deportistas->id.'/edit')}}" class="btn btn-warning">
                Editar
            </a>  
            |   
            <form action="{{url('/Deportistas/'.$deportistas->id)}}" class="d-inline" method="post">
            @csrf 
            {{method_field('DELETE')}} 
            <input class="btn btn-danger" type="submit" onclick="return confirm('Quieres Borrar?')" 
                value="Borrar">
            </form>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>

