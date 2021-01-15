@extends('layouts.app')

@section('content')

    <div class=" container mx-auto px-4 sm:px-12">

        <section id="crearProyecto" class="mb-4 mt-8">

            <header class="flex items-center justify-between">
                <h1 class="text-lg leading-6 font-medium text-black">Hola 🖐 asignemos un puesto de trabajo en el área {{$area->name}} .</h1>
                <a href="javascript:history.go(-1);"
                    class="hover:bg-purple-200 hover:text-purple-800 
                                            group flex items-center rounded-md bg-purple-100 text-light-purple-600 text-sm font-medium px-4 py-2">
                    Atras
                </a>
            </header>

            <form
                method="POST"
                action="{{route('jobtitle.store')}}"
            >
                <x-inputinfo >
                    <x-slot name="label">Nombre</x-slot> name
                </x-inputinfo>
                <input type="hidden" value="{{$area->id}}" name="area_id">
{{--                 <x-inputinfo>
                    <x-slot name="label">Breve descripción</x-slot> description
                </x-inputinfo>
 --}}
                @csrf
                <x-btninput class="bg-purple-100  mb-8 mr-8">
                    ¡Empezar!
                </x-btninput>

                @if (session('status'))
                    <x-alert>
                        {{session('status')}}
                    </x-alert>
                @endif
            </form>
        </section>
    </div>
@endsection
