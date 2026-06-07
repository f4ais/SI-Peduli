
<x-app-layout>

```
<div class="max-w-7xl mx-auto py-8 px-6">

    {{-- Header --}}
    <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4 mb-8">

        <div>
            <h1 class="text-4xl font-bold text-slate-800 flex items-center gap-3">
                👨‍👩‍👧‍👦 Data Keluarga
            </h1>

            <p class="text-slate-500 mt-2">
                Kelola data keluarga yang terdaftar dalam sistem pendataan penduduk.
            </p>
        </div>

        <a href="{{ route('families.create') }}"
           class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-3 rounded-xl shadow-lg transition duration-200 hover:scale-105">

            <span class="text-lg">+</span>

            Tambah Data Keluarga

        </a>

    </div>

    {{-- Alert --}}
    @if(session('success'))

        <div class="mb-6 bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-xl shadow-sm">
            {{ session('success') }}
        </div>

    @endif

    {{-- Statistik --}}
    <div class="mb-8">

        <div class="w-80 bg-gradient-to-r from-indigo-500 to-blue-600 rounded-3xl p-7 shadow-xl">

            <p class="text-blue-100 text-sm">
                Total Data Keluarga
            </p>

            <h2 class="text-6xl font-bold text-white mt-2">
                {{ $families->count() }}
            </h2>

            <p class="text-blue-100 mt-3">
                Keluarga Terdaftar
            </p>

        </div>

    </div>

    {{-- Search Bar (Tampilan Saja) --}}
    <div class="mb-8">

        <input
            type="text"
            placeholder="🔍 Cari Nama KK atau NIK..."
            class="w-full rounded-2xl border border-slate-200 shadow-lg px-5 py-4 focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

    </div>

    {{-- Data Keluarga --}}
    <div class="space-y-5">

        @forelse($families as $family)

        <div class="bg-white rounded-3xl shadow-md p-6 hover:shadow-2xl transition duration-300 border border-slate-100">

            <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-4">

                <div>

                    <h2 class="text-2xl font-bold text-slate-800">
                        {{ $family->nama_kk }}
                    </h2>
                    
                    @if($family->foto)
                        <img src="{{ asset('storage/'.$family->foto) }}"
                            class="w-24 h-24 object-cover rounded-xl mt-4 shadow">
                    @endif

                    <p class="text-slate-500 mt-1">
                        NIK : {{ $family->nik }}
                    </p>

                </div>

                <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-medium w-fit">
                    {{ $family->kecamatan }}
                </span>

            </div>

            <div class="grid md:grid-cols-3 gap-6 mt-6">

                <div>

                    <p class="text-slate-500 text-sm mb-2">
                        Jumlah Anggota
                    </p>

                    <span class="bg-green-100 text-green-700 px-3 py-2 rounded-full text-sm font-semibold">
                        {{ $family->jumlah_anggota }} Orang
                    </span>

                </div>

                <div>

                    <p class="text-slate-500 text-sm">
                        Pekerjaan
                    </p>

                    <p class="font-semibold text-slate-800 mt-1">
                        {{ $family->pekerjaan }}
                    </p>

                </div>

                <div>

                    <p class="text-slate-500 text-sm">
                        Penghasilan
                    </p>

                    <p class="font-bold text-emerald-600 text-xl mt-1">
                        Rp {{ number_format($family->penghasilan,0,',','.') }}
                    </p>

                </div>

            </div>

            <div class="flex justify-end gap-3 mt-8">

                <a href="{{ route('families.edit', $family->id) }}"
                   class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-xl shadow-md transition">

                    Edit

                </a>

                <form action="{{ route('families.destroy', $family->id) }}"
                      method="POST">

                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        onclick="return confirm('Yakin ingin menghapus data ini?')"
                        class="bg-red-600 hover:bg-red-700 text-white px-5 py-2 rounded-xl shadow-md transition">

                        Hapus

                    </button>

                </form>

            </div>

        </div>

        @empty

        <div class="bg-white rounded-3xl shadow-md p-10 text-center">

            <h3 class="text-xl font-semibold text-slate-700">
                Belum Ada Data
            </h3>

            <p class="text-slate-500 mt-2">
                Silakan tambahkan data keluarga terlebih dahulu.
            </p>

        </div>

        @endforelse

    </div>

</div>
```

</x-app-layout>
