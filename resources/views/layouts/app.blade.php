<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookShop</title>

    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root{
            --bg:#FDFBF7;
            --primary:#B8500C;
            --text:#421605;
            --muted:#6E7E80;
        }

        *{margin:0;padding:0;box-sizing:border-box;}

        body{
            font-family:'Plus Jakarta Sans', sans-serif;
            background:var(--bg);
            color:var(--text);
        }

        .font-title{
            font-family:'Lora', serif;
        }

        .container{
            padding:0 7%;
        }

        /* 🔥 RESPONSIVE REAL */
        @media (max-width: 900px){
            .hero{
                grid-template-columns:1fr !important;
                text-align:center;
            }

            .nav-links{
                display:none;
            }
        }
    </style>
</head>
<body>

@yield('content')

</body>
</html>