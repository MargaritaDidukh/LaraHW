<ul>
   @foreach($users as $user)
    <li>
        {{ $user['name'] }}
        <b>{{ $user['phone'] }}</b>
    </li>
    @endforeach
</ul>
