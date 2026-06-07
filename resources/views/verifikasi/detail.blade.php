<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Verifikasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow-lg border-0">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">📋 Detail Verifikasi Data</h3>
        </div>

        <div class="card-body">

            <div class="row mb-3">
                <div class="col-md-4 fw-bold">Nama Kepala Keluarga</div>
                <div class="col-md-8">{{ $data->nama_kepala_keluarga }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 fw-bold">NIK</div>
                <div class="col-md-8">{{ $data->nik }}</div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 fw-bold">Alamat</div>
                <div class="col-md-8">{{ $data->alamat }}</div>
            </div>

            <div class="row mb-4">
                <div class="col-md-4 fw-bold">Status</div>
                <div class="col-md-8">
                    @if($data->status == 'pending')
                        <span class="badge bg-warning">Pending</span>
                    @elseif($data->status == 'disetujui')
                        <span class="badge bg-success">Disetujui</span>
                    @else
                        <span class="badge bg-danger">Ditolak</span>
                    @endif
                </div>
            </div>

            <hr>

            <form action="{{ route('verifikasi.approve', $data->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-bold">Catatan Admin</label>
                    <textarea name="catatan_admin"
                              class="form-control"
                              rows="4"
                              placeholder="Masukkan catatan verifikasi..."></textarea>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-success">
                        ✔ Setujui
                    </button>
            </form>

            <form action="{{ route('verifikasi.reject', $data->id) }}" method="POST">
                @csrf
                <input type="hidden" name="catatan_admin" value="Data Ditolak">

                <button type="submit" class="btn btn-danger">
                    ✖ Tolak
                </button>
            </form>

            <a href="{{ route('verifikasi.index') }}" class="btn btn-secondary">
                ← Kembali
            </a>

            </div>

        </div>
    </div>

</div>

</body>
</html>