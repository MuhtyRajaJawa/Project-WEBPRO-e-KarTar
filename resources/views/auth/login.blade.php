<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin e-KarTar</title>

    <!-- FONT AWESOME ICON -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* BACKGROUND & FONT */
        body {
            font-family: 'Poppins', sans-serif;
            background: url('{{ asset("backend/images/backgroundLogin.jpg") }}') no-repeat center center fixed; 
            background-size: cover;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* CARD CONTAINER */
        .container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            width: 360px;
            padding: 40px 30px;
            text-align: center;
        }

        /* LOGO */
        .logo-container img {
            width: 120px;
            height: auto;
            margin-bottom: 15px;
        }

        /* TITLE */
        h2 {
            color: #000000c5;
            font-weight: 700;
            margin-bottom: 15px;
        }

        /* INPUT BOX */
        .input-group {
            display: flex;
            align-items: center;
            background: #f4f4f4;
            border-radius: 10px;
            padding: 10px;
            margin: 12px 0;
        }

        /* ICON DALAM INPUT */
        .input-group i {
            font-size: 18px;
            margin-right: 10px;
            color: #09B8A7;
        }

        /* TEKS INPUT */
        .input-group input {
            border: none;
            background: transparent;
            width: 100%;
            outline: none;
            font-size: 14px;
        }

        /* BUTTON LOGIN */
        button {
            background-color: #09B8A7;
            color: white;
            padding: 12px 0;
            width: 100%;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 15px;
            margin-top: 10px;
        }

        button:hover {
            background-color: #068578ff;
            color: #09B8A7;
        }

        /* ERROR GLOBAL */
        .error-text {
            color: red;
            margin-top: 10px;
            font-size: 13px;
        }
    </style>
</head>

<body>
    <div class="container">

        <!-- LOGO -->
        <div class="logo-container">
            {{-- ganti ke logo yang kamu punya --}}
            <img src="{{ asset('backend/adminmart-master/assets/images/52.png') }}"
            alt="Logo Karang Taruna"
            style="width: 180px !important;">



        </div>

        <h2>Login Admin</h2>

        {{-- ERROR GLOBAL DARI Auth::attempt / VALIDASI --}}
        @if ($errors->any())
            <div class="error-text">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- FORM LOGIN -->
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- INPUT EMAIL -->
            <div class="input-group">
                <i class="fa-solid fa-user"></i><!--GANTI TEKS/ICON DISINI YAWW-->
                <input type="email"
                       name="email"
                       placeholder="Email"
                       value="{{ old('email') }}"
                       required>
            </div>

            <!-- INPUT PASSWORD -->
            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password"
                       name="password"
                       placeholder="Password"
                       required>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html><!--GANTI WARNA ICON/TEKS SEMUA ADA DIATAS-->
