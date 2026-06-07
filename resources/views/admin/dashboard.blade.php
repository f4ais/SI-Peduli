<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',sans-serif;
        }

        body{
            background:#f1f5f9;
        }

        .navbar{
            background:white;
            padding:20px 40px;
            box-shadow:0 2px 10px rgba(0,0,0,0.08);
        }

        .navbar h2{
            color:#2563eb;
        }

        .container{
            padding:30px;
        }

        .title{
            margin-bottom:25px;
        }

        .cards{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:20px;
            margin-bottom:30px;
        }

        .card{
            background:white;
            padding:25px;
            border-radius:12px;
            box-shadow:0 2px 10px rgba(0,0,0,.08);
        }

        .card h3{
            color:#64748b;
            margin-bottom:10px;
        }

        .card h1{
            color:#0f172a;
        }

        .blue{
            border-left:5px solid #3b82f6;
        }

        .yellow{
            border-left:5px solid #f59e0b;
        }

        .green{
            border-left:5px solid #22c55e;
        }

        .red{
            border-left:5px solid #ef4444;
        }

        .box{
            background:white;
            border-radius:12px;
            padding:25px;
            box-shadow:0 2px 10px rgba(0,0,0,.08);
            margin-bottom:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:15px;
        }

        table th{
            background:#2563eb;
            color:white;
            padding:12px;
        }

        table td{
            padding:12px;
            border-bottom:1px solid #eee;
        }

        .chart-bar{
            height:40px;
            margin:15px 0;
            border-radius:8px;
            color:white;
            display:flex;
            align-items:center;
            padding-left:15px;
            font-weight:bold;
        }

        .pending{
            background:#f59e0b;
        }

        .setuju{
            background:#22c55e;
        }

        .tolak{
            background:#ef4444;
        }

        @media(max-width:900px){
            .cards{
                grid-template-columns:1fr;
            }
        }
    </style>
</head>
<body>

<div class="navbar">
    <h2>SI-Peduli Admin</h2>
</div>

<div class="container">

    <div class="title">
        <h1>Dashboard Admin</h1>
        <p>Monitoring Pendataan Keluarga Kurang Mampu</p>
    </div>

    <div class="cards">

        <div class="card blue">
            <h3>Total Pendataan</h3>
            <h1>{{ $totalPendataan }}</h1>
        </div>

        <div class="card yellow">
            <h3>Total Pending</h3>
            <h1>{{ $pending }}</h1>
        </div>

        <div class="card green">
            <h3>Total Disetujui</h3>
            <h1>{{ $disetujui }}</h1>
        </div>

        <div class="card red">
            <h3>Total Ditolak</h3>
            <h1>{{ $ditolak }}</h1>
        </div>

    </div>

    <div class="box">
        <h2>Statistik Status</h2>

        <table>
            <tr>
                <th>Status</th>
                <th>Jumlah</th>
            </tr>

            <tr>
                <td>Pending</td>
                <td>{{ $pending }}</td>
            </tr>

            <tr>
                <td>Disetujui</td>
                <td>{{ $disetujui }}</td>
            </tr>

            <tr>
                <td>Ditolak</td>
                <td>{{ $ditolak }}</td>
            </tr>
        </table>
    </div>

    <div class="box">
        <h2>Chart Status</h2>

        <div class="chart-bar pending">
            Pending : {{ $pending }}
        </div>

        <div class="chart-bar setuju">
            Disetujui : {{ $disetujui }}
        </div>

        <div class="chart-bar tolak">
            Ditolak : {{ $ditolak }}
        </div>
    </div>

</div>

</body>
</html>