@extends("layout.app2")

@section("contenido")
    <h3>Editar receta </h3>
    <form action="{{url('/recetas/')}}/{{$receta->id}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{$receta->nombre}}">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion" value="{{$receta->descripcion}}">
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio" value="{{$receta->precio}}">
        </div>
        <div class="form-group">
            <label for="calorias">Calorias</label>
            <input type="text" class="form-control" id="calorias" name="calorias" placeholder="Calorias" value="{{$receta->calorias}}">
        </div>
        <div class="form-group">
            <label for="f_alta">Fecha de alta</label>
            <input type="text" class="form-control" id="f_alta" name="f_alta" placeholder="Fecha de alta" value="{{$receta->f_alta}}">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/recetas')}}" class="btn btn-secondary">Cancelar</a>
@endsection