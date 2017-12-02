
<label for="">Manufacturer</label>
<select class="ui fluid search dropdown" name="manufacturer">
    <option value="">None</option>
    @foreach ($options as $option)
    <option value="{{ $option->id }}">{{ $option->name }}</option>
    @endforeach
</select>
