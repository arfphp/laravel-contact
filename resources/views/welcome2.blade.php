<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home || Contacts</title>
</head>
<body>
    <h1>Contact App</h1>
    <div>
        {{-- hyperlink yg mengarah ke halaman lain memanggil nama route yg dituju --}}
        <a href='{{ route('contacs.index') }}'>All Contacts</a>
    </div>
</body>
</html>
