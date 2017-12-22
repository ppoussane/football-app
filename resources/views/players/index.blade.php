<form>
    <div class="form-group">
        <label for="country_id" class="control-label">Select Country</label>
        <select class="form-control" id="country_id" name="country_id">

            @foreach ($countries as $country)

                <option value='{{ $country->id }}'>{{ $country->name }}</option>

            @endforeach

        </select>
    </div>
    <button type="submit" class="btn btn-default btn-block">Submit</button>
</form>