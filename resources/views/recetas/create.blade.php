@extends("layout.app2")
@section("contenido")
    <h3>Insertar Receta </h3>
    <form action="{{route('recetas.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="Id">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion">
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio">
        </div>
        <div class="form-group">
            <label for="calorias">Calorias</label>
            <input type="text" class="form-control" id="calorias" name="calorias" placeholder="Calorias">
        </div>
        <div class="form-group">
            <label for="f_alta">Fecha de alta</label>
            <input type="text" class="form-control" id="f_alta" name="f_alta" placeholder="Fecha de alta">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/recetas')}}" class="btn btn-secondary">Volver</a>
    </form>
@endsection