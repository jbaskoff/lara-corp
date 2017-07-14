@foreach($items as $item)
    <li>
        <a href="{{ $item->url() }}">{{ $item->title }}</a>
        @if($item->hasChildren())

        @endif
    </li>
@endforeach