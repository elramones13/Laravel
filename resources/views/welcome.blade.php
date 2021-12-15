<<<<<<< HEAD
@extends("layouts.app1")
=======
@extends("layout.app2")
>>>>>>> 603a441b7825767d03e174b2f570a47629bbdb1b


@section("contenido")
       <div class="relative flex justify-center min-h-screen py-4 bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold leading-9 text-gray-900 dark:text-white">
<<<<<<< HEAD
                    Vuelos
                </h2>
                <p class="max-w-md mx-auto mt-3 text-xl leading-7 text-gray-500 dark:text-gray-400">
                    Lista de vuelos en España
                </p>
                <a class="btn btn-success" href="{{ route('vuelos.index') }}">Vuelos</a>
                <a class="btn btn-success" href="{{ route('pilotos.index') }}">Pilotos</a>
            </div>
        </div>
    </div>
@endsection
=======
                    Libro de Recetas
                </h2>
                <p class="max-w-md mx-auto mt-3 text-xl leading-7 text-gray-500 dark:text-gray-400">
                    Es un libro de recetas para cocinar bien
                </p>
                <a class="btn btn-success" href="{{ route('recetas.index') }}">Recetas</a>
                <p class="max-w-md mx-auto mt-3 text-xl leading-7 text-gray-500 dark:text-gray-400">
                    Es un libro de recetas para cocinar bien
                </p>
                <a class="btn btn-success" href="{{ route('ingredientes.index') }}">Ingredientes</a>
            </div>
        </div>
    </div>
@endsection
>>>>>>> 603a441b7825767d03e174b2f570a47629bbdb1b
