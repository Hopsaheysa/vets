@extends('layouts.main', [
    'title' => 'Create'
])



@section ('content')
<h2>Create owner...</h2>
<form action="{{action('OwnerController@store')}}" method="post">
    @csrf
    @component('components.form-group', [
        'label' => 'First Name',
        'name' => 'first_name'
    ])
        <input type="text" name="first_name" value="">
    @endcomponent
    @component('components.form-group', [
        'label' => 'Surname',
        'name' => 'surname'
    ])
        <input type="text" name="surname" value="">
    @endcomponent
    @component('components.form-group', [
        'label' => 'Home Address',
        'name' => 'home_address'
    ])
        <input type="text" name="home_address" value="">
    @endcomponent
    @component('components.form-group', [
        'label' => 'Email',
        'name' => 'email'
    ])
        <input type="email" name="email" value="">
    @endcomponent
     @component('components.form-group', [
        'label' => 'Phone',
        'name' => 'phone'
    ])
        <input type="text" name="phone" value="">
    @endcomponent
    <div class="form-group form-group--submit">
        <input type="submit" value="Search">
    </div>
</form>
@endsection