<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
            margin-top: 20px;
        }

        hr {
            border: 0;
            height: 1px;
            background: #ccc;
            margin: 20px 0;
        }

        nav {
            text-align: center;
            margin: 20px 0;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            background-color: #4CAF50;
            padding: 10px 15px;
            border-radius: 5px;
            margin: 0 10px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #45a049;
        }

        .content {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
   <h1>Website Kelas Laravel 3A</h1>
   <hr>
   <nav>
       <a href="{{('/')}}">Home</a>
       <a href="{{('tentang')}}">Tentang</a>
       <a href="{{('kontak')}}">Kontak</a>
       <a href="{{('siswa')}}">Data Siswa</a>
   </nav>
   <hr>
   <div class="content">
       @yield('content')
   </div>
</body>
</html>
