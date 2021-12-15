@extends("layouts.app1")

@section("contenido")
    <h3>Editar vuelo </h3>
    <form action="{{url('/vuelos/')}}/{{$vuelo->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="Id" value="{{$vuelo->id}}">
        </div>
        <div class="form-group">
            <label for="codigo">Codigo</label>
            <input type="text" class="form-control" id="codigo" name="codigo" placeholder="codigo" value="{{$vuelo->codigo}}">
        </div>
        <div class="form-group">
            <label for="origen">Origen</label>
            <input type="text" class="form-control" id="origen" name="origen" placeholder="origen" value="{{$vuelo->origen}}">
        </div>
        <div class="form-group">
            <label for="destino">Destino</label>
            <input type="text" class="form-control" id="destino" name="destino" placeholder="destino" value="{{$vuelo->destino}}">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha</label>
            <input type="text" class="form-control" id="fecha" name="fecha" placeholder="fecha" value="{{$vuelo->fecha}}">
        </div>
        <div class="form-group">
            <label for="hora">Hora</label>
            <input type="text" class="form-control" id="hora" name="hora" placeholder="Hora" value="{{$vuelo->hora}}">
        </div>
        <div class="form-group">
            <label for="piloto_id">Piloto ID</label>
            <input type="text" class="form-control" id="piloto_id" name="piloto_id" placeholder="Fecha de alta" value="{{$vuelo->piloto_id}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/vuelo')}}" class="btn btn-secondary">Cancelar</a>
@endsection