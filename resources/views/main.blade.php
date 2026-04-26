<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Materi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1b3a5c;
            min-height: 100vh;
            padding: 2.5rem 0;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }

        .profile-card {
            background-color: #d1e6f5;
            border: 7px solid #9dc2dcf3;
            border-radius: 1rem;
            padding: 2rem;
            display: flex;
            align-items: center;
            gap: 1.8rem;
            margin-bottom: 2.5rem;
        }

        .profile-img {
            width: 8rem;
            height: 8rem;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #1b3a5ce3;
        }

        .profile-label {
            color: #2c5278;
            font-size: 0.8rem;
            margin-bottom: 0.3rem;
            font-style: normal;
        }

        .profile-name {
            color: #152334;
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 0.3rem;
            font-style: normal;
        }

        .profile-nrp {
            color: #2c5278;
            font-size: 0.9rem;
        }

        .page-title {
            color: #cde3f4;
            font-size: 1.7rem;
            margin-bottom: 0.3rem;
            font-style:normal;
            font-weight:bold;
        }

        .page-sub {
            color: #94bcd8;
            font-size: 0.9rem;
            margin-bottom: 2rem;
            font-style: italic;
        }

        .card-materi {
            background-color: #1e4f82;
            border: 1px solid #2e6aab;
            border-radius: 0.9rem;
            padding: 1.8rem 1.5rem;
            text-decoration: none;
            display: block;
            transition: background 0.2s, border-color 0.2s;
            height: 100%;
        }

        .card-materi:hover {
            background-color: #245a90;
            border-color: #6aafd6;
        }

        .card-materi.light {
            background-color: #b5d6f4;
            border-color: #b8d6ee;
        }

        .card-materi.light:hover {
            background-color: #d5e9f7;
            border-color: #4a9fd4;
        }

        .card-num {
            font-size: 0.75rem;
            color: #7ab8d8;
            margin-bottom: 0.9rem;
            font-style: italic;
        }

        .card-materi.light .card-num {
            color: #2a6496;
        }

        .icon-wrap {
            width: 2.8rem;
            height: 2.8rem;
            border-radius: 0.6rem;
            background-color: #132f50;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }

        .card-materi.light .icon-wrap {
            background-color: #b8d6ee;
        }

        .icon-wrap svg {
            width: 1.2rem;
            height: 1.2rem;
            stroke: #7ab8d8;
            fill: none;
            stroke-width: 2;
        }

        .card-materi.light .icon-wrap svg {
            stroke: #1a4a7a;
        }

        .card-judul {
            font-size: 1rem;
            font-weight: bold;
            color: #ddeefa;
            margin-bottom: 0.3rem;
        }

        .card-materi.light .card-judul {
            color: #1a3f6a;
        }

        .card-url {
            font-size: 0.78rem;
            color: #7ab8d8;
            font-style: italic;
        }

        .card-materi.light .card-url {
            color: #2a6496;
        }
    </style>
</head>
<body>
    <div class="container">

        <div class="profile-card">
            <img src="/assets/img/IMG_6578.JPG" alt="Foto Profil" class="profile-img">
            <div>
                <div class="profile-label">Selamat datang di halaman portofolio saya!</div>
                <div class="profile-name">Adiiba Putri Hanifah</div>
                <div class="profile-nrp">NRP : 5026241009</div>
            </div>
        </div>

        <p class="page-title">Materi Pertemuan 1-6</p>
        <p class="page-sub">Pilih salah satu untuk membuka halaman materi</p>

        <div class="row g-3">
    {{-- baris pertama: 4 kartu --}}
    <div class="col-md-3">
        <a href="/intro" class="card-materi">
            <div class="card-num">Pertemuan 1</div>
            <div class="icon-wrap"><svg viewBox="0 0 24 24"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
            <div class="card-judul">Intro | HTML</div>
            <div class="card-url">/content</div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="/news" class="card-materi light">
            <div class="card-num">Pertemuan 2</div>
            <div class="icon-wrap"><svg viewBox="0 0 24 24"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v2"/><path d="M2 20v-8a2 2 0 0 1 2-2h4"/><line x1="12" y1="12" x2="18" y2="12"/><line x1="12" y1="16" x2="18" y2="16"/></svg></div>
            <div class="card-judul">News | HTML </div>
            <div class="card-url">/content</div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="/contoh" class="card-materi">
            <div class="card-num">Pertemuan 3</div>
            <div class="icon-wrap"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="21" x2="9" y2="9"/></svg></div>
            <div class="card-judul">Bootstrap | HTML </div>
            <div class="card-url">/bootstrap</div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="/responsive" class="card-materi light">
            <div class="card-num">Tugas Pertemuan 3</div>
            <div class="icon-wrap"><svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
            <div class="card-judul">Landing Page HMSI | HTML </div>
            <div class="card-url">/bootstrap</div>
        </a>
    </div>

    {{-- baris kedua: 2 kartu + 1 kartu --}}
    <div class="col-md-4">
        <a href="/5026241009" class="card-materi">
            <div class="card-num">Pertemuan 4</div>
            <div class="icon-wrap"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
            <div class="card-judul">Pricing Card Layout| HTML </div>
            <div class="card-url">/bootstrap</div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="/pertemuan5" class="card-materi light">
            <div class="card-num">Pertemuan 5</div>
            <div class="icon-wrap"><svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg></div>
            <div class="card-judul">Landing Page ARSHA | HTML </div>
            <div class="card-url">/arsha</div>
        </a>
    </div>
    <div class="col-md-4">
        <a href="/linktree" class="card-materi">
            <div class="card-num">Tugas Pertemuan 5</div>
            <div class="icon-wrap"><svg viewBox="0 0 24 24"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg></div>
            <div class="card-judul">Linktree | HTML </div>
            <div class="card-url">/linktree</div>
        </a>
    </div>
</div>
