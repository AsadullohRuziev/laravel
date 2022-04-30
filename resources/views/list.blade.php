

<html>
<body>
<h1>List</h1>
<ul>
    @foreach ($users as $user)
        <li>This is user {{ $user}}</li>
    @endforeach
</ul>
</body>
</html>
