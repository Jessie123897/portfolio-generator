<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $portfolio->name }} - Portfolio</title>
</head>

<body>

    @if ($portfolio->template === 'simple')

        @include('templates.simple')

    @elseif ($portfolio->template === 'modern')

        @include('templates.modern')

    @elseif ($portfolio->template === 'creative')

        @include('templates.creative')

    @else

        <p>Invalid portfolio template.</p>

    @endif

</body>
</html>