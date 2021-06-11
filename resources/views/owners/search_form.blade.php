@extends('layouts.main', [
    'title' => 'Search'
])



@section ('content')
<h2>Owner Search Engine</h2>
<form action="{{action('OwnerController@search_owner')}}" method="post">
    @csrf
    @component('components.form-group', [
        'label' => 'Surname',
        'name' => 'surname'
    ])
        <input type="text" name="surname" value="">
    @endcomponent
    <div class="form-group form-group--submit">
        <input type="submit" value="Search">
    </div>
</form>
@endsection