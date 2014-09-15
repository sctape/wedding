@extends('layouts.default')

@section('content')

<div class="row">
    <div class="col-md-6">
    <div class="form-group rsvp_button_container">
        {{ Button::withValue('I gladly accept!')->withAttributes(['id' => 'rsvp-accept']) }}
        {{ Button::withValue('I regretfully decline')->withAttributes(['id' => 'rsvp-decline']) }}
    </div>


{{ ControlGroup::generate(
               Form::label('num_guests', 'Number of guests'),
               Form::select('num_guests', [0, 1, 2, 3, 4, 5])
           )->withAttributes(['class' => 'num_guests_container']) }}

<div id="guest-sub-form-original" class="guest-sub-form">
 {{ ControlGroup::generate(
                   Form::label('name', 'Name'),
                   Form::text('name')

               ) }}

        {{ ControlGroup::generate(
               Form::label('control', 'Choose your protein!'),
                       [
                           [
                               'label' => ['beef', 'Beef'],
                               'input' => ['type' => 'checkbox', 'beef', 'beef']
                           ],
                           [
                               'label' => ['chicken', 'Chicken'],
                               'input' => ['type' => 'checkbox', 'chicken', 'chicken']
                           ],
                           [
                               'label' => ['pork', 'Pork'],
                               'input' => ['type' => 'checkbox', 'pork', 'pork']
                           ],
                           [
                              'label' => ['vegetarian', 'vegetarian'],
                              'input' => ['type' => 'checkbox', 'vegetarian', 'vegetarian']
                           ],

                       ],
               null,
               5
               )}}
</div>

    </div>

</div>



@stop