@extends('layouts.app')

@section('content')

@php
/*    dd($projects);  
$user_id=auth()->user()->id;
    
    dd($user_id);*/
@endphp


    <section class="px-4 sm:px-6 lg:px-5 xl:px-6 py-4 sm:pb-6 lg:pb-4 xl:pb-6 space-y-4">


        <header class="flex items-center justify-between">
            <h2 class="text-lg leading-6 font-medium text-black">{{$area->name}} </h2>

        </header>
        <div class="flex flex-col lg:flex-row mx-auto w-full bg-white shadow rounded my-10 ">
    
{{--             <x-cardinput class="bg-celeste lg:w-1/3">
                <x-slot name="title">
                    Gestión comercial                
                </x-slot>
                <x-slot name="color">
                    bg-celeste-action
                </x-slot>
                <x-btninput class="bg-celeste-action">
                    Asignar a un área
                </x-btninput>
            </x-cardinput> 
            <x-table class="lg:w-2/3">
                <x-slot name="title">
                    Subprocesos
                </x-slot> --}}
    
                @foreach ($jobtitles as $jobtitle)
                <tr class="hover:bg-gray-100  border-gray-200">
                    <td class="px-4 py-4">
                        {{$jobtitle->name}}
                    </td>
                    <td
                            class="px-4 py-4 font-medium hover:font-black text-indigo-500 hover:text-indigo-700  hover:bg-indigo-50 ">
                            Editar
                        </td>
                </tr>
                @endforeach

            {{-- </x-table> --}}
        </div>


    </section>



@endsection




