<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Pasitos Seguros</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/ABeeZee.css">
    <link rel="stylesheet" href="/assets/css/Alfa%20Slab%20One.css">
    <link rel="stylesheet" href="/assets/css/Angkor.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="/assets/css/Navbar-Right-Links-Dark.css">
</head>

<body style="background: linear-gradient(98deg, #325269, white);">
    <nav class="navbar navbar-dark navbar-expand-md bg-dark py-3">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="<?= route_to('inicio')?>"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon" style="background: rgba(57,90,101,0.79);"><i class="fas fa-baby-carriage"></i></span><span style="font-family: Angkor, serif;">Pasitos Seguros</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-5">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown" style="color: rgb(48,55,62);"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#" style="color: rgba(255,255,255,0.85);">Administracion</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="<?= route_to('Profesores')?>">Profesores</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= route_to('Alumnos')?>">Alumnos</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= route_to('Salones')?>">Salones</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= route_to('Grupos')?>">Grupos</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= route_to('reportes')?>">Reportes</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= route_to('Avisos')?>">Avisos</a>
                        </div>
                    </li>
                </ul><span class="navbar-text">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span class="navbar-text" id="nombre" style="color: rgb(255,255,255);">Bienvenido&nbsp;</span><span class="navbar-text">&nbsp; &nbsp; &nbsp; &nbsp;</span><button class="btn btn-primary" type="button" style="background: rgba(15,81,163,0.55);">Cerrar Sesion</button>
            </div>
        </div>
    </nav>