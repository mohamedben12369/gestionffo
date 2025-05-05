<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
 
    @vite('resources/css/login.css') {{-- should come after --}}
    
</head>
<body>
       
    <div class="login-page">
        <h1>Login</h1>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
            <p>Créez votre compte <a href="{{ route('register') }}">Inscrivez-vous ici</a></p>
        </form>
    </div>
</body>
</html>
