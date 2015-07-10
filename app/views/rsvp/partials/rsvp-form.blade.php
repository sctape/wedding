@if(isset($invite))
    {{ Form::open(['method'=>'put', 'route' => array('rsvp.update', $invite->id), 'class' => '']) }}
@else
    {{ Form::open() }}
@endif
    <table id="rsvp-table" class="table">
        <thead>
            <tr>
                <th></th>
                <th class="text-center">accepts with pleasure</th>
                <th class="text-center">declines with regret</th>
                {{--<th>meal preference</th>--}}
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
                                  <div class="accept-sprite rsvp-sprite"></div>
                                    <input class="rsvp-toggle" type="hidden" name="{{ 'rsvp_' . $guest->id }}" value="1">
                              </label>
                            </div>
                        </td>
                        <td>
                            <div class="text-center">
                              <label>
                                  <div class="decline-sprite rsvp-sprite"></div>
                              </label>
                            </div>
                        </td>
                        {{--<td>--}}
                            {{--@foreach(['beef', 'chicken', 'duck', 'vegetarian'] as $protein)--}}
                                {{--<label class="radio-inline">--}}
                                    {{--<input type="radio" name="protein_{{ $guest->id }}" id="{{ $protein . "_" . $guest->id }}" value="{{ $protein }}"> {{ ucfirst($protein) }}--}}
                                {{--</label>--}}
                            {{--@endforeach--}}
                        {{--</td>--}}
                    </tr>
                @endforeach
                    <tr>
                        <td>
                            {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email address...']) }}
                        </td>
                    </tr>
            @endif
        </tbody>
    </table>

    <div class="form-group">
        {{ Form::submit('RSVP', ['class' => 'btn btn-primary']) }}
    </div>

{{ Form::close() }}

