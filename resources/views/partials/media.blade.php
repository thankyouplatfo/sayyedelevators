@foreach ($media as $item)
    <a class="w3-button w3-large w3-black" href="{{ $item->url }}" title="Facebook">
        {!! $item->ff_code  !!}
    </a>
@endforeach
