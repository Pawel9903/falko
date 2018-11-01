@component('mail::message')
<html>
<body>
    <h1>Imię i nazwisko: {{ $name }}</h1>
    <h1>email: {{ $email }}</h1>
    <h1>Tel: {{ $phone }}</h1>
    <p>{{ $message }}</p>
</body>
</html>
@endcomponent
