@extends("layout.app")
@section("contenido")
    <h3>Insertar ingredientes </h3>
    <form action="{{route('ingredientes.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="Id">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" >
        </div>
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" id="color" name="color" placeholder="color">
        </div>
        <div class="form-group">
            <label for="id_receta">Id ingrediente</label>
            <input type="text" class="form-control" id="id_receta" name="id_receta" placeholder="id_receta" >
        </div>
       
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{url('/ingredientes')}}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection