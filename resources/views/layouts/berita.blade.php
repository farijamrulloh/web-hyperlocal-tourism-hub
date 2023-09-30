@extends('template')
@section('title_web', 'Hyperlocal | News')
@section('content')
<div class="bg-white py-12 mt-8 justify-center items-center">
  <div class="mx-auto max-w-screen-xl px-4 md:px-8">
    <!-- text - start -->
    <div class="mb-10 md:mb-16">
      <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Berita</h2>

      <!-- <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p> -->
    </div>
    <!-- text - end -->

    <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-8">
      <!-- article - start -->
      <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
                <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                    <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/78/2023/08/28/Picsart_23-08-28_17-45-58-629-3951989568.jpg" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                </a>

                <div class="flex flex-1 flex-col p-4 sm:p-6">
                    <h2 class="mb-2 text-lg font-semibold text-gray-800">
                        <a href="#" class="transition duration-100 hover:text-primary-700 active:text-primary-700">Desa Wisata Joho bersama PPK Himaptika UNP Kediri Semarakkan Kirab Tumpeng Hasil Bumi</a>
                    </h2>

                    <p class="mb-8 text-gray-500">KEDIRI, JP Radar Kediri - Pemerintah Desa Wisata Joho, Semen bersinergi dengan Tim Program Penguatan Kapasitas Organisasi Mahasiswa Himpunan Mahasiswa Program Pendidikan Matematika (PPK Ormawa Himaptika) Universitas Nusantara PGRI (UNP) Kediri. Mereka menggelar Festival Sumber Podang VIII dengan semarak. Mengusung tema Joho Sedekah Bumi, ratusan warga kompak unjuk kreativitas dalam acara Kirab Tumpeng Sedekah Bumi, Minggu (27/8) kemarin. ...</p>

                    <div class="mt-auto flex items-end justify-between">
                        <div class="flex items-center gap-2">
                            <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                                <img src="https://static.promediateknologi.id/promedia-2/network/78/mobile/images/logo.png?v=38" loading="lazy" alt="Photo by Brock Wegner" class="h-full w-full object-cover object-center" />
                            </div>

                            <div>
                            <span class="block text-primary-700">Anwar Bahar Basalamah</span>
                                <span class="block text-sm text-gray-400">Agustus 28, 2023</span>
                            </div>
                        </div>

                        <a href="/read" class="rounded border px-2 py-1 text-sm text-gray-500 hover:bg-primary-700 hover:text-white">Article</a>
                    </div>
                </div>
            </div>
            <!-- article - end -->

            <!-- article - start -->
            <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
                <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                    <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/78/2023/08/10/Foto-AJPG-1759328457.jpg" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                </a>

                <div class="flex flex-1 flex-col p-4 sm:p-6">
                    <h2 class="mb-2 text-lg font-semibold text-gray-800">
                        <a href="#" class="transition duration-100 hover:text-primary-700 active:text-primary-700">Bersama PPK Ormawa Himaptika UNP 2023, Warga Desa Joho Semen Lestarikan Tradisi Larung Sesaji Sumber Podang</a>
                    </h2>

                    <p class="mb-8 text-gray-500">KEDIRI, JP Radar Kediri – Warga Desa Joho, Kecamatan Semen, Kabupaten Kediri berkolaborasi dengan Tim Program Penguatan Kapasitas Organisasi Mahasiswa Himpunan Mahasiswa Program Pendidikan Matematika (PPK Ormawa Himaptika) Universitas Nusantara PGRI (UNP) Kediri kembali menggelar ritual larung sesaji, Rabu (9/8). ...</p>

                    <div class="mt-auto flex items-end justify-between">
                        <div class="flex items-center gap-2">
                            <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                                <img src="https://static.promediateknologi.id/promedia-2/network/78/mobile/images/logo.png?v=38" loading="lazy" alt="Photo by peter bucks" class="h-full w-full object-cover object-center" />
                            </div>

                            <div>
                                <span class="block text-primary-700">Anwar Bahar Basalamah</span>
                                <span class="block text-sm text-gray-400">Agustus 10, 2023</span>
                            </div>
                        </div>

                        <a href="/read" class="rounded border px-2 py-1 text-sm text-gray-500 hover:bg-primary-700 hover:text-white">Article</a>
                    </div>
                </div>
            </div>
    </div>
  </div>
</div>
@endsection