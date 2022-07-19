@props(['value', 'name'])

<div class="mb-3">

<x-admin.forms.label for="{{ $name.'Input' }}" text="{{ ucfirst($name) }}"/>                      

<textarea name="{{ $name }}" id="{{ $name.'Input' }}" {{ $attributes->merge(['class'=>'form-control']) }} 
   >
    {{ $value }}
</textarea>

<x-admin.forms.error name="{{$name}}"/>

</div>