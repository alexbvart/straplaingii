<input 
    {{ $attributes->merge(['class' => ' text-black  hover:bg-black hover:text-white font-extrabold py-3 px-6 rounded-lg mt-3 transition ease-in-out duration-300']) }}
    type="submit"
    value="{{ $slot }}"
>
</input>

{{--
<svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 h-5 mr-5" viewBox="0 -98 512 512">
    <path
        d="M17.453 89.8h54.89c9.626 0 17.454-7.831 17.454-17.456v-54.89C89.797 7.831 81.969 0 72.344 0h-54.89C7.827 0 0 7.828 0 17.453v54.89c0 9.626 7.828 17.458 17.453 17.458zM15 17.454A2.457 2.457 0 0117.453 15h54.89a2.457 2.457 0 012.454 2.453v54.89a2.457 2.457 0 01-2.453 2.454h-54.89A2.457 2.457 0 0115 72.344zm0 0M494.547 0h-47.852c-4.14 0-7.5 3.36-7.5 7.5s3.36 7.5 7.5 7.5h47.852A2.457 2.457 0 01497 17.453v54.89a2.457 2.457 0 01-2.453 2.454H132.012a2.457 2.457 0 01-2.453-2.453v-54.89A2.457 2.457 0 01132.012 15h279.293c4.14 0 7.5-3.36 7.5-7.5s-3.36-7.5-7.5-7.5H132.012c-9.625 0-17.453 7.828-17.453 17.453v54.89c0 9.626 7.828 17.454 17.453 17.454h362.535c9.625 0 17.453-7.828 17.453-17.453v-54.89C512 7.827 504.172 0 494.547 0zm0 0M17.453 203.047h54.89c9.626 0 17.454-7.832 17.454-17.453v-54.89c0-9.626-7.828-17.458-17.453-17.458h-54.89C7.827 113.246 0 121.078 0 130.703v54.89c0 9.622 7.828 17.454 17.453 17.454zM15 130.703a2.458 2.458 0 012.453-2.457h54.89a2.458 2.458 0 012.454 2.457v54.89a2.457 2.457 0 01-2.453 2.454h-54.89A2.457 2.457 0 0115 185.594zm0 0M132.012 203.047h242.535c9.625 0 17.453-7.832 17.453-17.453v-54.89c0-9.626-7.828-17.458-17.453-17.458H184.699a7.5 7.5 0 00-7.5 7.5c0 4.145 3.356 7.5 7.5 7.5h189.848a2.458 2.458 0 012.453 2.457v54.89a2.457 2.457 0 01-2.453 2.454H132.012a2.457 2.457 0 01-2.453-2.453v-54.89a2.458 2.458 0 012.453-2.458h17.293a7.5 7.5 0 100-15h-17.293c-9.625 0-17.453 7.832-17.453 17.457v54.89c0 9.622 7.828 17.454 17.453 17.454zm0 0M72.344 226.496h-54.89C7.827 226.496 0 234.324 0 243.95v54.89c0 9.626 7.828 17.454 17.453 17.454h54.89c9.626 0 17.458-7.828 17.458-17.453v-10.996a7.5 7.5 0 00-7.5-7.5 7.497 7.497 0 00-7.5 7.5v10.996a2.458 2.458 0 01-2.457 2.453h-54.89A2.457 2.457 0 0115 298.84v-54.89a2.457 2.457 0 012.453-2.454h54.89a2.458 2.458 0 012.458 2.453v8.5a7.5 7.5 0 1015 0v-8.5c0-9.625-7.832-17.453-17.457-17.453zm0 0M494.547 226.496H132.012c-9.625 0-17.453 7.828-17.453 17.453v54.89c0 9.626 7.828 17.454 17.453 17.454h362.535c9.625 0 17.453-7.828 17.453-17.453v-54.89c0-9.626-7.828-17.454-17.453-17.454zM497 298.84a2.457 2.457 0 01-2.453 2.453H132.012a2.457 2.457 0 01-2.453-2.453v-54.89a2.457 2.457 0 012.453-2.454h362.535A2.457 2.457 0 01497 243.95zm0 0"
        data-original="#000000" data-old_color="#000000" />
</svg>
--}}