@extends("layout.app2")


@section("contenido")
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px;
            border-radius: 20px;
            padding: 50px;
            margin: 50px;
        }

    </style>

<script>
    $(document).ready(function() {
        $('#tabla_recetas').DataTable();
    } );
</script>
<script>
public function data()
{
    $customers = Customer::all();
    return datatables()->of($customers)
        ->addColumn('action', function ($row) {
            $html = '<a href="#" class="btn btn-xs btn-secondary">Edit</a> ';
            $html .= '<button data-rowid="'.$row->id.'" class="btn btn-xs btn-danger">Del</button>';
            return $html;
        })->toJson();
}
</script>




</head>
<body>
    <h1> Tabla de las recetas</h1>
    @if(count($recetas)>0)

        <a href=" {{url('/recetas/create')}}" class="btn btn-primary" padding="10px">Nueva receta</a>
        <table id="tabla_recetas" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Calorias</th>
                    <th>Fecha de alta</th>
                    <th>Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($recetas as $receta)
                    <tr>
                        <td>{{$receta->id}}</td>
                        <td>{{$receta->nombre}}</td>
                        <td>{{$receta->descripcion}}</td>
                        <td>{{$receta->precio}}</td>
                        <td>{{$receta->calorias}}</td>
                        <td>{{$receta->f_alta}}</td>
                        
                        <td><a href="{{url('/recetas')}}/{{$receta->id}}"><img width="32px" src="https://www.pngrepo.com/png/190063/512/trash.png"></a></td>
                 {{--   <td><a href="{{route("borrar_receta",["receta" => $receta->id])}}"><img width="32px" src="https://www.pngrepo.com/png/190063/512/trash.png"></a></td>  --}}
                        <td><a href="{{url('/recetas')}}/{{$receta->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay recetas</h1>
    @endif


@endsection




