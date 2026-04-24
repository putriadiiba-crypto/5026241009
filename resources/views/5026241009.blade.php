<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Paket Berlangganan</title>

    <!-- Bootstrap 4 CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body{
            background-color:#e9ecef;
            font-family: 'Segoe UI', sans-serif;
        }

        .section-header{
            text-align:center;
            padding:60px 0 30px 0;
        }

        .pricing-card{
            background:white;
            border-radius:8px;
            box-shadow:0 4px 12px rgba(0,0,0,0.1);
            padding:30px 20px;
            text-align:center;
            transition:0.3s;
        }

        .pricing-card:hover{
            transform:translateY(-5px);
        }

        .plan-title{
            font-weight:600;
            margin-bottom:10px;
        }

        .price{
            font-size:42px;
            font-weight:700;
            margin:15px 0;
        }

        .feature-list{
            list-style:none;
            padding:0;
            margin:20px 0;
        }

        .feature-list li{
            padding:8px 0;
            border-bottom:1px solid #eee;
        }

        .btn-plan{
            width:100%;
            margin-top:15px;
        }

        .highlight{
            border:2px solid #28a745;
        }

        .badge-popular{
            background:#28a745;
            color:white;
            padding:5px 10px;
            font-size:12px;
            border-radius:20px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="section-header">
        <h2>Pilih Paket Layanan</h2>
        <p>Sesuaikan dengan kebutuhan penggunaan kamu</p>
    </div>

    <div class="row justify-content-center">

        <!-- Paket Basic -->
        <div class="col-md-4 mb-4">
            <div class="pricing-card">
                <h5 class="plan-title">Basic</h5>
                <div class="price">Rp49K<span style="font-size:16px">/bulan</span></div>

                <ul class="feature-list">
                    <li>Akses materi dasar</li>
                    <li>Forum diskusi</li>
                    <li>Update mingguan</li>
                    <li>1 perangkat</li>
                    <li>Email support</li>
                </ul>

                <button class="btn btn-secondary btn-plan">Pilih Paket</button>
            </div>
        </div>

        <!-- Paket Pro (Highlight Tengah) -->
        <div class="col-md-4 mb-4">
            <div class="pricing-card highlight">
                <div class="badge-popular">POPULER</div>
                <h5 class="plan-title mt-2">Professional</h5>
                <div class="price">Rp99K<span style="font-size:16px">/bulan</span></div>

                <ul class="feature-list">
                    <li>Semua fitur Basic</li>
                    <li>Kelas premium</li>
                    <li>Sertifikat resmi</li>
                    <li>3 perangkat</li>
                    <li>Priority support</li>
                </ul>

                <button class="btn btn-success btn-plan">Pilih Paket</button>
            </div>
        </div>

        <!-- Paket Business -->
        <div class="col-md-4 mb-4">
            <div class="pricing-card">
                <h5 class="plan-title">Business</h5>
                <div class="price">Rp219K<span style="font-size:16px">/bulan</span></div>

                <ul class="feature-list">
                    <li>Semua fitur Pro</li>
                    <li>Pelatihan tim</li>
                    <li>Laporan performa</li>
                    <li>Unlimited perangkat</li>
                    <li>Dedicated support</li>
                </ul>

                <button class="btn btn-warning btn-plan">Pilih Paket</button>
            </div>
        </div>

    </div>

</div>

</body>
</html>
