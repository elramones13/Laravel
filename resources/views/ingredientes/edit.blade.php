@extends("layout.app")

@section("contenido")
    <h3>Editar ingrediente </h3>
    <form action="{{url('/ingredientes/')}}/{{$ingredientes->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{$ingredientes->nombre}}">
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" id="color" name="color" placeholder="color" value="{{$ingredientes->color}}">
        </div>
        <div class="form-group">
            <label for="id_receta">Id ingrediente</label>
            <input type="text" class="form-control" id="id_receta" name="id_receta" placeholder="id_receta" value="{{$ingredientes->id_receta}}">
        </div>
       
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/ingredientes')}}" class="btn btn-secondary">Cancelar</a>
@endsection