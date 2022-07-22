@props(['text'])
<div {{ $attributes->merge(['class'=>'bg-info']) }}>
    <h2 {{ $attributes->merge(['class'=>'text-center']) }}>{{ $text }}</h2>
</div>