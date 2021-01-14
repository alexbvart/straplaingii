@extends('layouts.app')

@section('content')

@php
/*    dd($projects);  
$user_id=auth()->user()->id;
    
    dd($user_id);*/
@endphp


    <section class="px-4 sm:px-6 lg:px-5 xl:px-6 py-4 sm:pb-6 lg:pb-4 xl:pb-6 space-y-4">


        <header class="flex items-center justify-between">
            <h2 class="text-lg leading-6 font-medium text-black">Areas</h2>
            <a href="{{ route('area.create') }}"
                class="hover:bg-purple-200 hover:text-purple-800 
                                        group flex items-center rounded-md bg-purple-100 text-light-purple-600 text-sm font-medium px-4 py-2">

                <svg class="group-hover:text-purple-600 text-purple-500 mr-2" width="12" height="20" fill="currentColor">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6 5a1 1 0 011 1v3h3a1 1 0 110 2H7v3a1 1 0 11-2 0v-3H2a1 1 0 110-2h3V6a1 1 0 011-1z" />
                </svg>
                Nuevo
            </a>
        </header>


        <section class="text-gray-700 body-font">
            <div class="mx-auto">

                <ul class="flex flex-wrap -m-4">
                    @foreach ($areas as $area)
                        <li class="p-4 lg:w-1/3 sm:w-1/2 w-full">
                            <div class="h-full  p-8 rounded-lg overflow-hidden 
                          hover:bg-purple-50 hover:border-transparent hover:shadow-lg group block  border border-gray-300
                          ">
                                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">
                                    {{ $area->name }}
                                    
                                </h1>
                                
                                <a href="{{ route('area.show', $area) }} "
                                    class="text-indigo-500 inline-flex items-center md-opjjpmhoiojifppkkcdabiobhakljdgm_doc">
                                    Learn More
                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                                <div class="text-center mt-2 leading-none flex justify-center  bottom-0 left-0 w-full py-4">
                                    <a href="{{ route('area.edit', $area) }}"
                                        class="text-xs text-center w-full bg-indigo-100 text-indigo-700 rounded font-medium p-3 mr-3">
                                        Editar
                                    </a>
                                    <form action="{{ route('area.destroy', $area) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input
                                            class="text-xs text-center w-full  bg-red-200 text-red-500 rounded font-medium p-3"
                                            type="submit" value="Eliminar"
                                            onclick="return confirm('¿Estas seguro que deseas eliminar?')">
                                    </form>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>
        </section>


{!! $areas->links() !!} 
    </section>



@endsection




{{-- <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between">
    <a href="{{ route('projects.edit', $project) }}"
        class="text-xs text-center w-full bg-indigo-100 text-indigo-700 rounded font-medium p-3 lg:mr-3">
        Editar
    </a>
    <a href="{{ route('projects.destroy', $project) }}"
        class="mt-4 text-center w-full lg:mt-0 text-xs bg-red-200 text-red-500 rounded font-medium p-3">
        Eliminar
    </a>

</div>
--}}
