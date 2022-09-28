<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-header data="Users Page" />
    <p>This is the Users Page body</p>

    <ul>
        @foreach ($data as $key=>$value)
            <li>{{ $key }}</li>
            <section>{{ $value }}</section>
        @endforeach
    </ul>
</body>
</html>