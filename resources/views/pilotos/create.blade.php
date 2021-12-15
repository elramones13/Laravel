@extends("layouts.app1")
@section("contenido")
    <h3>Insertar Piloto </h3>
    <form action="{{route('pilotos.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" >
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="apellidos" >
        </div>
        <div class="form-group">
            <label for="f_nacimiento">Fecha Nacimiento</label>
            <input type="text" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="2020-12-30" >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="email@email.com" >
        </div>
        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" class="form-control" id="dni" name="dni" placeholder="12345678A" >
        </div>
        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="(+34) 612345678">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/vuelos')}}" class="btn btn-secondary">Volver</a>
    </form>
@endsection