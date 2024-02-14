<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Bug Report #50083</title>
    </head>
    <body style="font-family: sans-serif">
        <h1>Bug Report Laravel Issue #50083</h1>

        <h2>Explanation</h2>
        <p>
            On Submit, you should get a dump from the Availibility controller. But with the current laravel version, you only get a redirect and validation errors.
            When adding <code style="background-color: black; color: white;">$rules = method_exists($this, 'rules') ? $this->container->call([$this, 'rules']) : [];</code> back to laravel/framework/src/Illuminate/Foundation/Http/FormRequest.php Line 118 it works as expected.
        </p>

        <form method="POST" action="{{ route('availability.store') }}">
            @csrf
            <input
                required
                type="text"
                id="date-range"
                name="date_range"
                value="01.03.2024 - 08.03.2024"
                placeholder="Pick date range"
            >

            <button type="submit">Submit</button>
        </form>

        <h2>Errors</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>


    </body>
</html>
