<select   name="responsibility[]" id="responsibility_id"
    {{$attributes->merge(['class'=> "form-control"])}}>

    <option value="4" class="opcionMuestra form-control">Seleccione una responsabilidad</option>

    @foreach ($items as $item)
        <option {{ old('item_id') == $item->id ? 'selected' : '' }} value="{{ $item->id }}">
            {{ $item->type }}</option>
    @endforeach

</select>
