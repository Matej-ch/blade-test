@props(['book','loop'])  {{-- when declared, only variables in @props are allowd, otherwise Exception is thrown --}}

{{-- $attributes bag, allows you to use html properties on components and pass them down into it, and merge --}}
{{-- $attributes->merge(['class' => 'class_inside_component' ])--}}

<article>
    <div class="{{$loop->first ? 'bg-red-200' : 'bg-green-200' }}">
        {{ $book->name }}
        {!! $book->cover !!}

    </div>
    <div class="pb-8">
        Custom blade echo directive of an object
        <pre class="inline">Book</pre>
        defined in
        <pre class="inline">AppServiceProvider</pre>
        : {{$book}}
    </div>
</article>

