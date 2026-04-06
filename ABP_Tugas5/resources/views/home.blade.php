<!DOCTYPE html>
<html lang="id">

<head>
    <title>Home - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .top-bar {
            height: 110px;
            padding: 1.5rem 2.5rem;
            background-color: #e53935;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 12px rgba(229, 57, 53, 0.2);
        }

        .greeting p {
            font-size: 0.95rem;
            margin: 0;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.85);
        }

        .greeting h3 {
            font-size: 1.6rem;
            font-weight: 700;
            margin: 0;
            line-height: 1.2;
            color: #fff;
            letter-spacing: 0.5px;
        }

        .notifications {
            display: flex;
            margin-left: auto;
            align-items: center;
        }

        .btn-logout {
            background-color: white;
            color: #e53935;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
            border: 2px solid white;
        }

        .btn-logout:hover {
            background-color: transparent;
            color: white;
        }

        .content-area {
            margin-top: 40px;
        }

        .card-custom {
            border: none;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 30px;
        }
    </style>
</head>

<body>

    <div class="top-bar">
        <div class="greeting">
            <p>Selamat datang kembali,</p>
            <h3>{{ $user->name }}</h3>
        </div>
        <div class="notifications">
            <a href="/logout" class="btn btn-logout px-4 py-2 shadow-sm">Logout</a>
        </div>
    </div>

    <div class="container content-area">
        <div class="row">
            <div class="col-12">
                <div class="card card-custom bg-white">
                    <h4 class="mb-3" style="color: #333; font-weight: 600;">Dashboard Overview</h4>
                    <p class="text-muted">Ini adalah halaman utama aplikasi Anda. Anda telah berhasil login dan sistem
                        berjalan dengan normal.</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>