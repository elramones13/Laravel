@extends("layouts.app1")


@section("contenido")
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
        $('#tabla_vuelos').DataTable( {
            "order":[[4,'desc']],
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            }
        });

        $(".borrar").click(function(){
            const tr=$(this).closest("tr"); //guardamos el tr completo
            const id=tr.data("id");

            Swal.fire({
                title: '¿Quieres borrarlo?',
                showCancelButton: true,
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar',
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        method: "POST",
                        url   : "{{url('/vuelos')}}/"+id,
                        data  : {
                            _token: "{{csrf_token()}}",
                            _method: "delete",
                        },
                        success: function(){
                            tr.fadeOut();
                        }
                    });

                } 
            })


        });

    });
    </script>



</head>
<body>
    <h1 id="titulot"> Tabla de las vuelos</h1>
    @if(count($vuelos))
        <a href=" {{url('/vuelos/create')}}" class="btn btn-primary" padding="10px">Nuevo vuelo</a>
        <table id="tabla_vuelos" class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Codigo</th>
                    <th>Origen</th>
                    <th>Destino</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Id Piloto</th>
                    <th>Borrar</th>
                    <th>Editar</th>

                </tr>
            </thead>
            <tbody>
                @foreach($vuelos as $vuelo)
                    <tr>
                        <td>{{$vuelo->id}}</td>
                        <td>{{$vuelo->codigo}}</td>
                        <td>{{$vuelo->origen}}</td>
                        <td>{{$vuelo->destino}}</td>
                        <td>{{$vuelo->fecha}}</td>
                        <td>{{$vuelo->hora}}</td>
                        <td>{{$vuelo->piloto_id}}</td>
                        
                        <td><a href="#" class='btn btn-danger borrar'>Borrar</a></td>
                        <td><a href="{{url('/vuelos')}}/{{$vuelo->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay vuelos</h1>
    @endif
   

@endsection