@extends("layouts.app1")


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
        $('#tabla_pilotos').DataTable( {
            "order":[[1,'asc']],
            "paging": false,
            "search": false,
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
                        url   : "{{url('/pilotos')}}/"+id,
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
    <h1 id="titulot"> Tabla de Pilotos</h1>
    @if(count($pilotos)>0)
        <a href=" {{url('/pilotos/create')}}" class="btn btn-primary" padding="10px">Nuevo piloto</a>
        <table id="tabla_pilotos" class="table table-striped table-bordered ">
            <thead>
                <tr>
                    <th data-orderable="false">Id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th data-orderable="false">Fecha Nacimiento</th>
                    <th data-orderable="false">Email</th>
                    <th data-orderable="false">DNI</th>
                    <th data-orderable="false">Teléfono</th>
                    <th data-orderable="false">Número de vuelos</th>
                    <th data-orderable="false">Borrar</th>
                    <th data-orderable="false">Editar</th>

                </tr>
            </thead>
            <tbody>
                @foreach($pilotos as $piloto)
                    <tr data-id="{{$piloto->id}}">
                        <td>{{$piloto->id}}</td>
                        <td>{{$piloto->nombre}}</td>
                        <td>{{$piloto->apellidos}}</td>
                        <td>{{$piloto->f_nacimiento}}</td>
                        <td>{{$piloto->email}}</td>
                        <td>{{$piloto->dni}}</td>
                        <td>{{$piloto->telefono}}</td>
                        <td><a href="{{url('/pilotos')}}/{{$piloto->id}}/edit" class="btn"> {{$piloto->vuelos->count()}}</a></td>
                        
                        <td><a href="#" class='btn btn-danger borrar'>Borrar</a></td>
                        <td><a href="{{url('/pilotos')}}/{{$piloto->id}}/edit"><img width="32px" src="https://img.icons8.com/cotton/2x/000000/edit.png"></a></td>

                    </tr>
                @endforeach
            </tbody>

        </table>
    @else
        <h1>No hay pilotos</h1>
    @endif
   

@endsection