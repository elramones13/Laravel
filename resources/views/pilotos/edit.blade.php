@extends("layouts.app1")

@section("contenido")
    <h3>Editar piloto </h3>
    <form action="{{url('/pilotos/')}}/{{$pilotos->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="{{$pilotos->nombre}}">
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos" value="{{$pilotos->apellidos}}">
        </div>
        <div class="form-group">
            <label for="f_nacimiento">Fecha Nacimiento</label>
            <input type="text" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="f_nacimiento" value="{{$pilotos->f_nacimiento}}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$pilotos->email}}">
        </div>
        <div class="form-group">
            <label for="dni">Dni</label>
            <input type="text" class="form-control" id="dni" name="dni" placeholder="dni" value="{{$pilotos->dni}}">
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Fecha de alta" value="{{$pilotos->telefono}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/piloto')}}" class="btn btn-secondary">Cancelar</a>
@endsection