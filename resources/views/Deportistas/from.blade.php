
<h1>{{$modo}} Registro</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="form-group"
<label for="Nombre" > Nombre</label>
    <input type="text" name="Nombre" class="form-control" value="{{ isset($deportistas->Nombre)?$deportistas->Nombre:'' }}" id="Nombre">     
    <br>
    
    <label for="Apellido" class="form-label"> Apellido</label>
    <input type="text" name="Apellido" class="form-control" value="{{ isset($deportistas->Apellido)?$deportistas->Apellido:'' }}" id="Apellido">
    
    <label for="Deporte" class="form-label"> Deporte</label>
    <input type="text" name="Deporte" class="form-control" value="{{ isset($deportistas->Deporte)?$deportistas->Deporte:'' }}" id="Deporte">
    
    <label for="Edad" class="form-label"> Edad</label>
    <input type="text" name="Edad" class="form-control" value="{{ isset($deportistas->Edad)?$deportistas->Edad:'' }}" id="Edad">
    
    <label for="Pais" class="form-label"> Pais</label>
    <input type="text" name="Pais" class="form-control" value="{{ isset($deportistas->Pais)?$deportistas->Pais:'' }}" id="Pais">
    <br>
    </div>

    <input class="btn btn-success" type="submit" value="{{$modo }} datos">
    
    <a class="btn btn-primary" href="{{url('Deportistas/')}}">Regresar</a>
    <br>
