@extends('layouts.app')

@section('content')

@php
 /*   dd($subprocesse);  
$user_id=auth()->user()->id;
    
    dd($user_id);*/
@endphp


    <section class="px-4 sm:px-6 lg:px-5 xl:px-6 py-4 sm:pb-6 lg:pb-4 xl:pb-6 space-y-4">


{{--         <header class="flex items-center justify-between">
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
        </header> --}}


        <section class="text-gray-700 body-font">
            <div class="mx-auto">
                <p>id | subp | job | res</p>
                <ul class="{{-- flex flex-wrap -m-4 --}}">
                    @foreach ($jobtitlesubprocesse as $item)
                        <li class=" ">

                                <p class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">
                                    {{ $item->id }} | {{ $item->subprocesse_id }}| {{ $item->jobtitle_id }}| {{ $item->reponsibility_id}}
                                </p> 
                        </li><br>
                    @endforeach

                </ul>

                <table class="table-auto border-collapse w-full">
                    <thead>

                        <tr class="rounded-lg text-sm font-medium text-gray-700 text-left"
                            style="font-size: 0.9674rem">
                            <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">
                               Subprocesos vs Puestos de tabajo
                            </th> 
                            @foreach ($jobtitle as $item)
                                <th class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">
                                    {{$item->name}}
                                    <span id="jobtitle_id_{{$item->id}}">{{$item->id}}</span>
                                </th>   
                            @endforeach
                        </tr>

                    </thead>
                    <tbody class="text-sm font-normal text-gray-700">

                        @foreach ($subprocesse as $sub)
                        <tr class="rounded-lg text-sm font-medium text-gray-700 text-left"
                            style="font-size: 0.9674rem">
                            <td class="px-4 py-2 bg-gray-200 " style="background-color:#f8f8f8">
                                {{$sub->name}}
                                <span id="subproceso_id_{{$sub->id}}">{{$sub->id}}</span>
                            </td>
                            @foreach ($jobtitlesubprocesse as $key => $js)
                            <td>
                                {{-- {{$js->subprocesse_id }} |||| --}}
                                @if ($js->subprocesse_id = $sub->id && $js->jobtitle_id = $key+1 )
                                    s={{$sub->id }} y j={{$key+1 }} su r={{ $js->reponsibility_id}}
                                @endif
                            </td>  
{{--                                <td>{{ $js->id }} | {{ $js->subprocesse_id }}| {{ $js->jobtitle_id }}| {{ $js->reponsibility_id}}</td>

                                @if ($item->subprocesse_id=$jobtitlesubprocesse)
                                    <td>{{ $item->id }} | {{ $item->subprocesse_id }}| {{ $item->jobtitle_id }}| {{ $item->reponsibility_id}}</td>

                                    
                                @endif --}}
                              @endforeach

                        </tr>
                        @endforeach

                    </tbody>
                </table>
        </section>

    </section>



@endsection
