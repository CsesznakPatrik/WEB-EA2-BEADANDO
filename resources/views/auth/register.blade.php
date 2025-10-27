<!DOCTYPE HTML>
<html>

<head>
    <title>Regisztráció - Cukrászat</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
</head>

<body class="is-preload">

    <section id="header">
        <header>
            <span class="image avatar"><img src="{{ asset('images/avatar.jpg') }}" alt="" /></span>
            <h1 id="logo"><a href="#">Cukrászat</a></h1>
            <p>Csatlakozz hozzánk — hozd létre fiókodat!</p>
        </header>
    </section>

    <div id="wrapper">
        <div id="main">
            <section id="register" class="container">
                <header class="major">
                    <h2>Regisztráció</h2>
                    <p>Adj meg néhány adatot, hogy létrehozzuk a fiókodat.</p>
                </header>

                <form method="POST" action="{{ route('register.post') }}">
                    @csrf
                    <div class="row gtr-uniform">
                        <div class="col-12">
                            <input type="text" name="username" placeholder="Felhasználónév"
                                value="{{ old('username') }}" required />
                            @error('username')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-12">
                            <input type="email" name="email" placeholder="E-mail cím" value="{{ old('email') }}"
                                required />
                            @error('email')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-12">
                            <input type="password" name="password" placeholder="Jelszó" required />
                            @error('password')
                                <small style="color:red;">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="col-12">
                            <input type="password" name="password_confirmation" placeholder="Jelszó megerősítése"
                                required />
                        </div>

                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" class="primary" value="Regisztráció" /></li>
                                <li><a href="{{ route('login') }}" class="button">Már van fiókom</a></li>
                            </ul>
                        </div>

                        @if ($errors->any())
                            <div class="col-12">
                                <p style="color:red;">{{ $errors->first() }}</p>
                            </div>
                        @endif
                    </div>
                </form>
            </section>
        </div>
    </div>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>