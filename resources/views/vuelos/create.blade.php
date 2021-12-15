@extends("layouts.app1")
@section("contenido")
    <h3>Insertar Vuelo </h3>
    <form action="{{route('vuelos.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="Id" >
        </div>
        <div class="form-group">
            <label for="codigo">Codigo</label>
            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Codigo" >
        </div>
        <div class="form-group">
            <label for="origen">Origen</label>
            <input type="text" class="form-control" id="origen" name="origen" placeholder="Origen" >
        </div>
        <div class="form-group">
            <label for="destino">Destino</label>
            <input type="text" class="form-control" id="destino" name="destino" placeholder="Destino" >
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="text" class="form-control" id="fecha" name="fecha" placeholder="2020-12-30" >
        </div>
        <div class="form-group">
            <label for="hora">Hora</label>
            <input type="text" class="form-control" id="hora" name="hora" placeholder="20:08:50" >
        </div>
        <div class="form-group">
            <label for="piloto_id">Piloto ID</label>
            <input type="text" class="form-control" id="piloto_id" name="piloto_id" placeholder="ID piloto">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/vuelos')}}" class="btn btn-secondary">Volver</a>
    </form>
@endsection