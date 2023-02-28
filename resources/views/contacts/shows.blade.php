<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shows || Contacts</title>
</head>
<body>
    <h1>Contact Details</h1>
    <div>
        <p>Name : {{ $contact['name'] }}</p>
        <p>Phone : {{ $contact['phone'] }}</p>
    </div>
    <div>
        <a href="{{ route('contacts.index3') }}">Back To All Contacts</a>
    </div>
</body>
</html>
