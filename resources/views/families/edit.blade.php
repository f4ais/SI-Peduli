<x-app-layout>

<div class="max-w-4xl mx-auto py-6">

    <h2 class="text-2xl font-bold mb-6">
        Edit Data Keluarga
    </h2>

    <form action="{{ route('families.update', $family->id) }}"
            method="POST"
            enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-4">
            <label>Nama Kepala Keluarga</label>
            <input type="text"
                   name="nama_kk"
                   value="{{ $family->nama_kk }}"
                   class="border rounded w-full p-2">
        </div>

        <div class="mb-4">
            <label>NIK</label>
            <input type="text"
                   name="nik"
                   value="{{ $family->nik }}"
                   class="border rounded w-full p-2">
        </div>

        <div class="mb-4">
            <label>Alamat</label>
            <textarea name="alamat"
                      class="border rounded w-full p-2">{{ $family->alamat }}</textarea>
        </div>

        <div class="mb-4">
            <label>Kecamatan</label>
            <input type="text"
                   name="kecamatan"
                   value="{{ $family->kecamatan }}"
                   class="border rounded w-full p-2">
        </div>

        <div class="mb-4">
            <label>Jumlah Anggota</label>
            <input type="number"
                   name="jumlah_anggota"
                   value="{{ $family->jumlah_anggota }}"
                   class="border rounded w-full p-2">
        </div>

        <div class="mb-4">
            <label>Pekerjaan</label>
            <input type="text"
                   name="pekerjaan"
                   value="{{ $family->pekerjaan }}"
                   class="border rounded w-full p-2">
        </div>

        <div class="mb-4">
            <label>Penghasilan</label>
            <input type="number"
                   name="penghasilan"
                   value="{{ $family->penghasilan }}"
                   class="border rounded w-full p-2">
        </div>
                <div class="mb-4">
            <label>Foto Keluarga</label>

            <input type="file"
                name="foto"
                class="border rounded w-full p-2">
        </div>

        @if($family->foto)
            <img src="{{ asset('storage/'.$family->foto) }}"
                width="150"
                class="rounded shadow mb-4">
        @endif

        <button
            type="submit"
            class="bg-blue-500 text-white px-4 py-2 rounded">
            Update Data
        </button>

    </form>

</div>

</x-app-layout>