@extends("layout.app")


@section("contenido")
<br>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 12px;
        }
        #titulot{
            text-align:center;
            text-decoration:underline;
        }

    </style>

<script>
    $(document).ready(function() {
        $('#tabla_ingredientes').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    } );
    } );
</script>




</head>
<body>
    <h1 id="titulot"> Tabla de las Ingredientes</h1>
    @if(count($ingredientes)>0)

        <a href=" {{url('/ingredientes/create')}}" class="btn btn-primary" padding="10px">Nuevo Ingrediente</a>
        <table id="tabla_ingredientes" class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Color</th>
                    <th>Id ingrediente</th>
                    <th>Borrar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ingredientes as $ingrediente)
                    <tr>
                        <td>{{$ingrediente->id}}</td>
                        <td>{{$ingrediente->nombre}}</td>
                        <td>{{$ingrediente->color}}</td>
                        <td>{{$ingrediente->id_receta}}</td>
                        
                        <td><a href="{{url('/ingredientes')}}/{{$ingrediente->id}}"><img width="32px" src="https://www.pngrepo.com/png/190063/512/trash.png"></a></td>
                 {{--   <td><a href="{{route("borrar_ingrediente",["ingredientes" => $ingredientes->id])}}"><img width="32px" src="https://www.pngrepo.com/png/190063/512/trash.png"></a></td>  --}}
                        <td><a href="{{url('/ingredientes')}}/{{$ingrediente->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay Ingredientes</h1>
    @endif
   

@endsection




