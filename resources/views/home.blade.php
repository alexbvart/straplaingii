@extends('layouts.app')

@section('content')

    <section class="h-screen -mb-64 mt-24 px-4 sm:px-6 lg:px-4 xl:px-6 pt-4 pb-4 sm:pb-6 lg:pb-4 xl:pb-6 space-y-4">

        <ul class="flex flex-wrap -m-4">


            <li class="p-4 lg:w-1/3 sm:w-1/2 w-full">
                <div class="h-full  p-8 rounded-lg overflow-hidden  hover:bg-purple-50 hover:border-transparent hover:shadow-lg group block  border border-gray-300">
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">
                        Áreas
                    </h1>
                    <p class="leading-relaxed mb-3">
                        Aquí podras registrar informadion de las areas y sus puestos de trabajo
                    </p>
                    <a  href="{{ route('area.show',$areas) }}" 
                        class="text-indigo-500 inline-flex items-center md-opjjpmhoiojifppkkcdabiobhakljdgm_doc">
                        Vermas
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </li>


            <li class="p-4 lg:w-1/3 sm:w-1/2 w-full">
                <div class="h-full  p-8 rounded-lg overflow-hidden  hover:bg-purple-50 hover:border-transparent hover:shadow-lg group block  border border-gray-300">
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">
                        Procesos
                    </h1>
                    <p class="leading-relaxed mb-3">
                        Aquí podras registrar informadion de las Procesos y sunprocesos, gestionar la responsabilidad de estos y asignar áreas a cargo.
                    </p>
                    <a {{-- href="{{ route('', ) }}" --}} 
                        class="text-indigo-500 inline-flex items-center md-opjjpmhoiojifppkkcdabiobhakljdgm_doc">
                        Vermas
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </li>


            <li class="p-4 lg:w-1/3 sm:w-1/2 w-full">
                <div class="h-full  p-8 rounded-lg overflow-hidden  hover:bg-purple-50 hover:border-transparent hover:shadow-lg group block  border border-gray-300">
                    <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">
                        Informes
                    </h1>
                    <p class="leading-relaxed mb-3">
                        Aquí podras generar varios informes, asi como tambien ver la tabla Procesos vs Organización
                    </p>
                    <a {{-- href="{{ route('', ) }}" --}} 
                        class="text-indigo-500 inline-flex items-center md-opjjpmhoiojifppkkcdabiobhakljdgm_doc">
                        Vermas
                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14"></path>
                            <path d="M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </li>





        </ul>

    </section>
@endsection
