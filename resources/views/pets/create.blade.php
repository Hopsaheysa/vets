@extends('layouts.main', [
    'title' => 'Create'
])



@section ('content')
<h2>Add pet...</h2>
<form action="{{route('doggystyle')}}" method="post">
    @csrf
    @method('put')

    @component('components.form-group', [
        'label' => 'Name',
        'name' => 'name'
    ])
        <input type="text" name="name" value="">
    @endcomponent
    @component('components.form-group', [
        'label' => 'Breed',
        'name' => 'breed'
    ])
        <input type="text" name="breed" value="">
    @endcomponent
    @component('components.form-group', [
        'label' => 'Weight',
        'name' => 'weight'
    ])
        <input type="text" name="weight" value="">
    @endcomponent
    @component('components.form-group', [
        'label' => 'Age',
        'name' => 'age'
    ])
        <input type="text" name="age" value="">
    @endcomponent
        <input type="hidden" name="owner_id" value="{{$id}}">
    <div class="form-group form-group--submit">
        <input type="submit" value="Add">
    </div>
</form>
@endsection