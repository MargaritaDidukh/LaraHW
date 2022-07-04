<ul>
    @foreach($videos as $video)
        <li>
         video: {{ $video['nameOfVideo'] }}
            <b> author:  {{ $user['name'] }}</b>
        </li>
    @endforeach
</ul>
