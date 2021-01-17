<select class="form-control selector " name="{{$name}}" id="_{{$name}}">


    <option value="4" class="opcionMuestra form-control">Seleccione un {{$name}}</option>

    @foreach ($one as $item)
        <option {{ old('item_id') == $item->id ? 'selected' : '' }} value="{{ $item->id }}">
            {{ $item->name }}</option>
    @endforeach

</select>
