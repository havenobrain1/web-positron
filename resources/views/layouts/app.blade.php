<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <title>POSITRON 2025</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html,
        body {
            scroll-behavior: smooth;
            height: 100%;
            margin: 0;
            padding: 0;
        }

        main section {
            scroll-snap-align: start;
        }
    </style>


    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }

        /* NAVBAR */
        #mainNavbar {
            transition: all 0.4s ease;
            z-index: 1030;
        }

        .navbar.transparent-desktop {
            background-color: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
        }

        .navbar.scrolled,
        .navbar.mobile-visible {
            background-color: #ffffff !important;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        /* Link underline hover */
        .navbar-nav .nav-link {
            position: relative;
            padding-bottom: 5px;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link::after {
            content: "";
            position: absolute;
            left: 10%;
            bottom: 0;
            width: 0%;
            height: 2px;
            background-color: #0d6efd;
            transition: width 0.3s ease-in-out;
        }

        .navbar-nav .nav-link:hover::after {
            width: 80%;
        }

        /* Hamburger Animation */
        .hamburger {
            width: 30px;
            height: 20px;
            position: relative;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .hamburger span,
        .hamburger::before,
        .hamburger::after {
            content: '';
            position: absolute;
            height: 3px;
            width: 100%;
            background-color: #000;
            transition: 0.3s;
            border-radius: 4px;
        }

        .hamburger span {
            top: 50%;
            transform: translateY(-50%);
        }

        .hamburger::before {
            top: 0;
        }

        .hamburger::after {
            bottom: 0;
        }

        .navbar-toggler:not(.collapsed) .hamburger::before {
            transform: rotate(45deg);
            top: 50%;
        }

        .navbar-toggler:not(.collapsed) .hamburger::after {
            transform: rotate(-45deg);
            top: 50%;
            bottom: auto;
        }

        .navbar-toggler:not(.collapsed) .hamburger span {
            opacity: 0;
        }

        /* Footer */
        footer {
            background-color: #0d6efd;
            color: white;
            padding: 30px 0;
        }

        /* Main */
        main {
            padding-top: 70px;
        }

        @media (max-width: 991.98px) {
            #mainNavbar {
                background-color: #fff !important;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top transparent-desktop">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary fs-4" href="/">
                <i class="bi bi-lightning-fill me-1 text-warning"></i> POSITRON 2025
            </a>
            <button class="navbar-toggler border-0 collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="nav">
                <ul class="navbar-nav gap-2">
                    <li class="nav-item"><a class="nav-link text-dark px-3" href="/">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link text-dark px-3" href="/tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link text-dark px-3" href="/group">Group</a></li>
                    <li class="nav-item"><a class="nav-link text-dark px-3" href="/kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Halaman -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p class="mb-1">© {{ date('Y') }} POSITRON 2025</p>
            <small>Departemen Teknik Elektro dan Informatika - Universitas Negeri Malang</small>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Navbar Scroll Behavior -->
    <script>
        const navbar = document.getElementById('mainNavbar');
        let lastScrollTop = 0;

        window.addEventListener('load', () => {
            if (window.innerWidth >= 992 && window.scrollY <= 10) {
                navbar.classList.add('transparent-desktop');
                navbar.classList.remove('scrolled');
            } else {
                navbar.classList.add('scrolled');
                navbar.classList.remove('transparent-desktop');
            }
        });

        window.addEventListener('scroll', () => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (window.innerWidth >= 992) {
                if (scrollTop > 10) {
                    navbar.classList.remove('transparent-desktop');
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.add('transparent-desktop');
                    navbar.classList.remove('scrolled');
                }

                if (scrollTop > lastScrollTop) {
                    navbar.style.top = "-90px";
                } else {
                    navbar.style.top = "0";
                }

                lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
            }
        });
    </script>
    <!-- jQuery + DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

</body>

</html>
