<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background: #1a1a2e;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h1 {
            color: #4ade80;
            font-family: Arial;
            font-size: 3rem;
        }
    </style>
</head>
<body>
    <h1>👋 Hello, World!</h1>
</body>
</html>


{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Addition</title>
</head>
<body>
    <form method="POST" action="/calculate">
        @csrf
        <input type="number" name="a" placeholder="First number" />
        <span>+</span>
        <input type="number" name="b" placeholder="Second number" />
        <button type="submit">Calculate</button>
    </form>

    @isset($result)
        <h2>{{ $a }} + {{ $b }} = {{ $result }}</h2>
    @endisset
</body>
</html> --}}