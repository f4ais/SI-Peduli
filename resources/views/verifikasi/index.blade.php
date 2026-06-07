<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Verifikasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#f4f6f9;
        }

        .card-stat{
            border:none;
            border-radius:15px;
            box-shadow:0 4px 10px rgba(0,0,0,.1);
        }

        .table-card{
            border:none;
            border-radius:15px;
            box-shadow:0 4px 10px rgba(0,0,0,.1);
        }

        .page-title{
            font-weight:700;
        }

        .badge{
            padding:8px 12px;
        }
    </style>
</head>
<body>

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="page-title">📋 Data Verifikasi</h2>
            <p class="text-muted mb-0">
                Kelola dan verifikasi data warga
            </p>
        </div>
    </div>

    <div class="row mb-4">

        <div class="col-md-4">
            <div class="card card-stat bg-warning text-dark">
                <div class="card-body">
                    <h6>Pending</h6>
                    <h2>
                        {{ $data->where('status','pending')->count() }}
                    </h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-stat bg-success text-white">
                <div class="card-body">
                    <h6>Disetujui</h6>
                    <h2>
                        {{ $data->where('status','disetujui')->count() }}
                    </h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-stat bg-danger text-white">
                <div class="card-body">
                    <h6>Ditolak</h6>
                    <h2>
                        {{ $data->where('status','ditolak')->count() }}
                    </h2>
                </div>
            </div>
        </div>

    </div>

    <div class="card table-card">

        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Daftar Verifikasi</h5>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Nama Kepala Keluarga</th>
                            <th>NIK</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Catatan Admin</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                    @forelse($data as $item)

                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td>
                                <strong>
                                    {{ $item->nama_kepala_keluarga }}
                                </strong>
                            </td>

                            <td>{{ $item->nik }}</td>

                            <td>{{ $item->alamat }}</td>

                            <td>

                                @if($item->status == 'pending')
                                    <span class="badge bg-warning">
                                        Pending
                                    </span>
                                @elseif($item->status == 'disetujui')
                                    <span class="badge bg-success">
                                        Disetujui
                                    </span>
                                @else
                                    <span class="badge bg-danger">
                                        Ditolak
                                    </span>
                                @endif

                            </td>

                            <td>
                                {{ $item->catatan_admin ?? '-' }}
                            </td>

                            <td>

                                <a href="{{ route('verifikasi.show',$item->id) }}"
                                   class="btn btn-primary btn-sm">
                                    Detail
                                </a>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="7" class="text-center text-muted">
                                Belum ada data verifikasi
                            </td>
                        </tr>

                    @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>
</html>