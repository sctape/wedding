@if(isset($invite))
    {{ Form::open(['method'=>'put', 'route' => array('rsvp.update', $invite->id), 'class' => '']) }}
@else
    {{ Form::open() }}
@endif


    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th>accepts with pleasure</th>
                <th>declines with regret</th>
                <th>meal preference</th>
            </tr>

        </thead>
        <tbody>
            @if(isset($invite))
                @foreach($invite->guests as $guest)
                    <tr>
                        <td>{{ Form::text('name_' . $guest->id, $guest->present()->fullName, ['class' => 'form-control']) }}</td>
                        <td>
                            <div class="text-center">
                              <label>
                                <input type="radio" name="{{ 'rsvp_' . $guest->id }}" id="{{ 'rsvp_' . $guest->id . '1' }}" value="1">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                              <label>
                                <input type="radio" name="{{ 'rsvp_' . $guest->id }}" id="{{ 'rsvp_' . $guest->id . '0' }}" value="0">
                              </label>
                            </div>
                        </td>
                        <td>
                            @foreach(['beef', 'chicken', 'duck', 'vegetarian'] as $protein)
                                <label class="radio-inline">
                                    <input type="radio" name="protein_{{ $guest->id }}" id="{{ $protein . "_" . $guest->id }}" value="{{ $protein }}"> {{ ucfirst($protein) }}
                                </label>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    <div class="form-group">
        {{ Form::submit('RSVP', ['class' => 'btn btn-primary']) }}
    </div>

{{ Form::close() }}

