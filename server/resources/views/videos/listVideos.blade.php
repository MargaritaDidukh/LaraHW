<ul>
    @foreach($videos as $video)
        <li>
            video: {{ $video['nameOfVideo'] }}
        </li>
    @endforeach
</ul>
