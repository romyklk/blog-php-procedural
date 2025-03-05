<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog PHP</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: #e3f2fd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
        }

        .navbar-brand {
            font-weight: bold;
        }

        .nav-link {
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #0d6efd;
        }

        main {
            flex: 1 0 auto;
        }

        footer {
            background-color: #e3f2fd;
            padding: 20px 0;
            margin-top: auto;
        }

        a:hover {
            text-decoration: none;
            color: #0d6efd;
            transition: color 0.3s ease;
            cursor: pointer;
        }

        i:hover {
            transform: scale(1.2);
            transition: transform 0.6s ease-in;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <svg width="49" height="40" viewBox="0 0 49 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M37.3947 40C43.8275 39.8689 49 34.6073 49 28.1389C49 24.9931 47.7512 21.9762 45.5282 19.7518L25.7895 0V12.2771C25.7895 14.3303 26.6046 16.2995 28.0556 17.7514L32.6795 22.3784L32.6921 22.3907L40.4452 30.149C40.697 30.4009 40.697 30.8094 40.4452 31.0613C40.1935 31.3133 39.7852 31.3133 39.5335 31.0613L36.861 28.3871H12.139L9.46655 31.0613C9.21476 31.3133 8.80654 31.3133 8.55476 31.0613C8.30297 30.8094 8.30297 30.4009 8.55475 30.149L16.3079 22.3907L16.3205 22.3784L20.9444 17.7514C22.3954 16.2995 23.2105 14.3303 23.2105 12.2771V0L3.47175 19.7518C1.24882 21.9762 0 24.9931 0 28.1389C0 34.6073 5.17252 39.8689 11.6053 40H37.3947Z" fill="#FF0A0A"></path>
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">
                            <i class="fas fa-home me-1"></i>Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./register.php">
                            <i class="fas fa-user-plus me-1"></i>Inscription
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-sign-in-alt me-1"></i>Connexion
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>