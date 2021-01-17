@extends('layouts.app')

@section('content')

@php
/*    dd($jobtitle);  
$user_id=auth()->user()->id;
    
    dd($user_id);*/
@endphp


    <section class="px-4 sm:px-6 lg:px-5 xl:px-6 py-4 sm:pb-6 lg:pb-4 xl:pb-6 space-y-4">


        <div class="flex flex-col lg:flex-row mx-auto w-full bg-white shadow rounded my-10 ">
    
            <x-cardinput class="bg-celeste lg:w-1/3">
                <x-slot name="title">
                    {{$processe->name}}                
                </x-slot>
                <x-slot name="color">
                    bg-celeste-action
                </x-slot>

                <a href="{{ route('subprocesse.create', $processe) }}"
                        class="hover:bg-purple-200 hover:text-purple-800  mt-6
                                                group flex items-center rounded-md bg-purple-100 text-light-purple-600 text-sm font-medium px-4 py-2">
        
                    <svg class="group-hover:text-purple-600 text-purple-500 mr-2" width="12" height="20" fill="currentColor">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6 5a1 1 0 011 1v3h3a1 1 0 110 2H7v3a1 1 0 11-2 0v-3H2a1 1 0 110-2h3V6a1 1 0 011-1z" />
                    </svg>
                    <strong>Nuevo puesto de trabajo</strong>
                </a>

            </x-cardinput> 
            <x-table class="lg:w-2/3">
                <x-slot name="title">
                    Subprocesos comprendidos
                </x-slot> 
    
                @foreach ($subprocesses as $subprocesse)
                <tr class="hover:bg-gray-100  border-gray-200">
                    <td class="px-4 py-4">
                        {{$subprocesse->name}}
                    </td>
                    <td
                        class="px-4 py-4 font-medium hover:font-black text-indigo-500 hover:text-indigo-700  hover:bg-indigo-50 ">
                        <a href="{{ route('subprocesse.edit', $subprocesse) }}">
                            Editar
                        </a>
                    </td>
                </tr>
                @endforeach

            </x-table>
        </div>

        <div class="flex flex-col lg:flex-row mx-auto w-full bg-white shadow rounded my-10 ">
    
            <x-cardinput class="bg-celeste lg:w-1/3">
                <x-slot name="title">
                    {{$processe->name}}                
                </x-slot>
                <x-slot name="color">
                    bg-celeste-action
                </x-slot>

                <x-selectone name="area" :one="$area"></x-selectone>
                <select name="jobtitle" id="_jobtitle"></select>
                {{-- <x-selectone name="jobtitle" :one="$jobtitle"></x-selectone> --}}

            </x-cardinput> 
            <x-table class="lg:w-2/3">
                <x-slot name="title">
                    Subprocesos comprendidos
                </x-slot> 
            
    
                @foreach ($subprocesses as $subprocesse)
                <tr class="hover:bg-gray-100  border-gray-200">
                    <td class="px-4 py-4 flex justify-between">
                        <input type="checkbox" class="form-checkbox h-5 w-5 mr-1 text-orange-600 select-check" 
                            name="subprocesses[]" id="subprocesses_{{$subprocesse->id}}" value="{{$subprocesse->id}}">

                        {{$subprocesse->name}}

                        <x-selectresponsibility class="select-responsibility" :items="$reponsibility"></x-selectresponsibility>
                    </td>
                </tr>
                @endforeach

            </x-table>
        </div>

    </section>



@endsection


@section('javascript')
<script>
    document.addEventListener("DOMContentLoaded", function() {

        //responsabilidad
        document.querySelectorAll('.select-responsibility').forEach(select => {
            select.disabled = true;
        });
        document.querySelectorAll('.select-check').forEach(selectChecked => {
            selectChecked.addEventListener('click', e => {
                var isChecked = selectChecked.checked;
                if (isChecked) {
                    var texto = selectChecked.nextSibling;
                    texto.nextSibling.disabled = false;

                    console.log(texto.nextSibling)
                    console.log("habilitado");

                } else {
                    var texto = selectChecked.nextSibling;
                    texto.nextSibling.disabled = true;

                    console.log(texto.nextSibling)
                    console.log("deshabilitado");
                }
            });
            
        });


        //puestos de trabajo
        const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
        var area = document.getElementById('_area');
        
        area.addEventListener('change', (event) => {
            var area_id = event.target.value;    console.log(area_id);
            
            /* if (area_id != '') { */
                fetch("{{ route('processe.getjob') }}",{
                    method: 'POST',
                    body: JSON.stringify({texto:area_id}),
                    headers:{
                        'Content-Type': 'application/json',
                        "X-CSRF-Token": csrfToken
                    }
                }).then(response => {
                    return response.json()
                }).then(data => {
                    var opciones = "";
                    for(let i in data.lista){
                        opciones+= `<option  value="${data.lista[i].id}">
                            ${data.lista[i].name}</option>`
                    }
                    document.getElementById("_jobtitle").innerHTML= opciones;
                })
                .catch(error => console.error(error)          );
            /* } */
        });

    });

</script>
@endsection



