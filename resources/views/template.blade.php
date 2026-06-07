<!DOCTYPE html>
<html lang="en">
<head>
    <title>adiibaputri - 5026241009</title>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</head>

<body style="background-color: #f5f5f5;">

    <div class="container">

        <!-- HEADER -->

        <div
            class="mt-4 p-5 text-white rounded shadow"
            style="background: linear-gradient(90deg, #0d6efd, #2d8cff);">

            <h1 class="fw-bold">

                Adiiba Putri Hanifah - 5026241009

            </h1>

            <h5 class="mt-3">

                @yield('title')

            </h5>

        </div>

        <!-- NAVBAR -->

        <nav
            class="navbar navbar-expand-sm bg-light navbar-light shadow-sm rounded-bottom mb-4">

            <div class="container-fluid">

                <ul class="navbar-nav">

                    <li class="nav-item">

                        <a
                            class="nav-link {{ request()->is('pegawai*') ? 'active fw-bold text-primary' : '' }}"
                            href="/pegawai">

                            Pegawai

                        </a>

                    </li>

                    <li class="nav-item">

                        <a
                            class="nav-link {{ request()->is('mobil*') ? 'active fw-bold text-primary' : '' }}"
                            href="/mobil">

                            Mobil

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="#">

                            PR 1

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="#">

                            PR 2

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="#">

                            PR 3

                        </a>

                    </li>

                    <li class="nav-item">

                        <a class="nav-link" href="#">

                            EAS

                        </a>

                    </li>

                </ul>

            </div>

        </nav>

        <!-- CONTENT -->

        <div class="mb-5">

            @yield('konten')

        </div>

    </div>

</body>
</html>
