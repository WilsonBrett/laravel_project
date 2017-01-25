<div class='col-md-10'>
    <form id='forecast_form' method='post' action='/forecasts'>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label for="clients">Select Client:&nbsp</label>
        <select id="clients">
            @foreach($clients as $client)
                <option value="{{$client->clientname}}">{{$client->clientname}}</option>
            @endforeach
        </select><br /><br />

        <div class='row'>
            <label class='col-md-1'>Jan.</label>
            <label class='col-md-1'>Feb.</label>
            <label class='col-md-1'>Mar.</label>
            <label class='col-md-1'>Apr.</label>
            <label class='col-md-1'>May</label>
            <label class='col-md-1'>Jun.</label>
            <label class='col-md-1'>Jul.</label>
            <label class='col-md-1'>Aug.</label>
            <label class='col-md-1'>Sep.</label>
            <label class='col-md-1'>Oct.</label>
            <label class='col-md-1'>Nov.</label>
            <label class='col-md-1'>Dec.</label>
        </div>
        <div class='row'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
        </div>
        <div class='row'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
        </div>
        <div class='row'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
            <input class='col-md-1 cell' type='text'>
        </div><br />

        <input type="submit" name="submit" value="Submit" class="btn btn-primary"></div>


    </form>
</div>

