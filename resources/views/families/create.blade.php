<x-app-layout>

    <div class="max-w-4xl mx-auto py-8 px-6">

    <div class="bg-white rounded-3xl shadow-lg p-8">

        <h2 class="text-3xl font-bold text-slate-800 mb-6">
            ➕ Tambah Data Keluarga
        </h2>

        @if ($errors->any())
            <div class="mb-6 bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-xl">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>• {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('families.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="grid md:grid-cols-2 gap-6">

                <div>
                    <label class="font-semibold text-slate-700">
                        Nama Kepala Keluarga
                    </label>

                    <input type="text"
                           name="nama_kk"
                           class="w-full border rounded-xl p-3 mt-2">
                </div>

                <div>
                    <label class="font-semibold text-slate-700">
                        NIK
                    </label>

                    <input type="text"
                           name="nik"
                           class="w-full border rounded-xl p-3 mt-2">
                </div>

                <div class="md:col-span-2">
                    <label class="font-semibold text-slate-700">
                        Alamat
                    </label>

                    <textarea name="alamat"
                              rows="3"
                              class="w-full border rounded-xl p-3 mt-2"></textarea>
                </div>

                <div>
                    <label class="font-semibold text-slate-700">
                        Kecamatan
                    </label>

                    <input type="text"
                           name="kecamatan"
                           class="w-full border rounded-xl p-3 mt-2">
                </div>

                <div>
                    <label class="font-semibold text-slate-700">
                        Jumlah Anggota
                    </label>

                    <input type="number"
                           name="jumlah_anggota"
                           class="w-full border rounded-xl p-3 mt-2">
                </div>

                <div>
                    <label class="font-semibold text-slate-700">
                        Pekerjaan
                    </label>

                    <input type="text"
                           name="pekerjaan"
                           class="w-full border rounded-xl p-3 mt-2">
                </div>

                <div>
                    <label class="font-semibold text-slate-700">
                        Penghasilan
                    </label>

                    <input type="number"
                           name="penghasilan"
                           class="w-full border rounded-xl p-3 mt-2">
                </div>

                <div class="md:col-span-2">
                    <label class="font-semibold text-slate-700">
                        Foto Keluarga
                    </label>

                    <input type="file"
                           name="foto"
                           class="w-full border rounded-xl p-3 mt-2">
                </div>

            </div>

            <div class="flex gap-3 mt-8">

                <button type="submit"
                        class="bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-xl font-semibold">

                    Simpan Data

                </button>

                <a href="{{ route('families.index') }}"
                   class="bg-slate-300 hover:bg-slate-400 text-slate-800 px-6 py-3 rounded-xl font-semibold">

                    Kembali

                </a>

            </div>

        </form>

    </div>

</div>

</x-app-layout>