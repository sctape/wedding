@extends('layouts.default')

@section('content')

<div class="row">
    <div class="col-md-6">
    <div class="form-group rsvp_button_container">
    {{ ButtonGroup::withContents([
                        Button::success('I gladly accept!'),
                        Button::warning('I regretfully decline'),
                      ]) }}
    </div>


{{ ControlGroup::generate(
               Form::label('num_guests', 'Number of guests'),
               Form::select('num_guests', [0, 1, 2, 3, 4, 5])
           )->withAttributes(['class' => 'num_guests_container']) }}

<div class="guest-sub-form">
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
               )->withAttributes(['class' => 'food']) }}
</div>

    </div>

</div>



@stop