<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex justify-center items-center bg-slate-800 py-5 w-full">
        <h1 class="font-semibold text-white text-xl">Visualisasi Data Sumedang</h1>
    </div>

    <div class="mt-10 px-20 w-full">
        <div class="flex flex-col items-center gap-2">
            <div
                class="flex flex-col justify-center items-center gap-2 bg-slate-800 shadow px-4 py-3 border border-gray-300 rounded-md w-full text-center">
                <h2 class="font-semibold text-white text-lg">Total Data</h2>
                <p class="font-semibold text-white text-xl">{{ $data['total'] }} Data</p>
            </div>
            <div
                class="flex flex-col gap-2 bg-slate-800 shadow px-4 py-3 border border-gray-300 rounded-md w-full text-white text-center">
                <h4 class="font-semibold text-xl">Jenis Kelamin</h4>
                <div class="flex gap-5">
                    <div class="bg-slate-600 p-3 rounded-md w-1/2">
                        <h2 class="font-semibold text-lg">Laki-Laki</h2>
                        <p class="font-semibold text-xl">{{ $n_laki_laki }} Orang</p>
                    </div>
                    <div class="bg-slate-600 p-3 rounded-md w-1/2">
                        <h2 class="font-semibold text-lg">Perempuan</h2>
                        <p class="font-semibold text-xl">{{ $n_perempuan }} Orang</p>
                    </div>
                </div>
            </div>

            <div
                class="flex flex-col gap-2 bg-slate-800 shadow px-4 py-3 border border-gray-300 rounded-md w-full text-white text-center">
                <h4 class="font-semibold text-xl">Status Perkawinan</h4>
                <div class="flex gap-5 w-full">
                    <div class="bg-slate-600 p-3 rounded-md w-1/4">
                        <h2 class="font-semibold text-lg">Belum Kawin</h2>
                        <p class="font-semibold text-xl">{{ $n_belum_kawin }} Orang</p>
                    </div>
                    <div class="bg-slate-600 p-3 rounded-md w-1/4">
                        <h2 class="font-semibold text-lg">Kawin</h2>
                        <p class="font-semibold text-xl">{{ $n_kawin }} Orang</p>
                    </div>
                    <div class="bg-slate-600 p-3 rounded-md w-1/4">
                        <h2 class="font-semibold text-lg">Cerai Hidup</h2>
                        <p class="font-semibold text-xl">{{ $n_cerai_hidup }} Orang</p>
                    </div>
                    <div class="bg-slate-600 p-3 rounded-md w-1/4">
                        <h2 class="font-semibold text-lg">Cerai Mati</h2>
                        <p class="font-semibold text-xl">{{ $n_cerai_mati }} Orang</p>
                    </div>
                </div>
            </div>

            <div
                class="flex flex-col gap-2 bg-slate-800 shadow px-4 py-3 border border-gray-300 rounded-md w-fu w-full text-white text-center">
                <h4 class="font-semibold text-xl">Pendidikan Terakhir</h4>
                <div class="flex gap-5 w-full">
                    <div class="bg-slate-600 p-3 rounded-md w-1/7">
                        <h2 class="font-semibold text-lg">SD</h2>
                        <p class="font-semibold text-xl">{{ $n_sd }} Orang</p>
                    </div>
                    <div class="bg-slate-600 p-3 rounded-md w-1/7">
                        <h2 class="font-semibold text-lg">SMP</h2>
                        <p class="font-semibold text-xl">{{ $n_smp }} Orang</p>
                    </div>
                    <div class="bg-slate-600 p-3 rounded-md w-1/7">
                        <h2 class="font-semibold text-lg">SMA</h2>
                        <p class="font-semibold text-xl">{{ $n_sma }} Orang</p>
                    </div>
                    <div class="bg-slate-600 p-3 rounded-md w-1/7">
                        <h2 class="font-semibold text-lg">Diploma</h2>
                        <p class="font-semibold text-xl">{{ $n_diploma }} Orang</p>
                    </div>
                    <div class="bg-slate-600 p-3 rounded-md w-1/7">
                        <h2 class="font-semibold text-lg">S1</h2>
                        <p class="font-semibold text-xl">{{ $n_s1 }} Orang</p>
                    </div>
                    <div class="bg-slate-600 p-3 rounded-md w-1/7">
                        <h2 class="font-semibold text-lg">S2</h2>
                        <p class="font-semibold text-xl">{{ $n_s2 }} Orang</p>
                    </div>
                    <div class="bg-slate-600 p-3 rounded-md w-1/7">
                        <h2 class="font-semibold text-lg">S3</h2>
                        <p class="font-semibold text-xl">{{ $n_s3 }} Orang</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="mt-10 px-20">
        <h4 class="mb-5 font-bold text-2xl">Data Lengkap</h3>
            <table class="table-bordered rounded-md w-full overflow-x-auto">
                <thead>
                    <tr class="bg-gray-300">
                        <th class="py-2 border border-gray-300">No</th>
                        <th class="py-2 border border-gray-300">Nama Lengkap</th>
                        <th class="py-2 border border-gray-300">Jenis Kelamin</th>
                        <th class="py-2 border border-gray-300">Agama</th>
                        <th class="py-2 border border-gray-300">Status</th>
                        <th class="py-2 border border-gray-300">Pendidikan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data['data'] as $dataPenduduk)
                        <tr class="border border-gray-300">
                            <td class="px-3 py-2 text-center">{{ $loop->iteration }}</td>
                            <td class="px-3 py-2 text-center">{{ $dataPenduduk['nama_lengkap'] }}</td>
                            <td class="px-3 py-2 text-center">{{ $dataPenduduk['jenis_kelamin'] }}</td>
                            <td class="px-3 py-2 text-center">{{ $dataPenduduk['agama'] }}</td>
                            <td class="px-3 py-2 text-center">{{ $dataPenduduk['status_perkawinan'] }}</td>
                            <td class="px-3 py-2 text-center">{{ $dataPenduduk['pendidikan_terakhir'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="flex justify-between mt-10 w-full">
                <button class="bg-slate-800 px-3 py-2 rounded-md text-white cursor-pointer">Previous</button>
                <button class="bg-slate-800 px-3 py-2 rounded-md text-white cursor-pointer">Next</button>
            </div>
    </div>

    <div class="bg-slate-800 mt-10 w-full h-10"></div>


</body>

</html>
