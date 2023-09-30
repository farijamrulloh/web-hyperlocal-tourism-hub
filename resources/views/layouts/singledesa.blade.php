@extends('template')
@section('title_web', 'Hyperlocal | Single')
@section('content')
<div class="bg-white py-12 mt-8">
    <div class="container mx-auto max-w-screen-xl px-4 md:px-8">
        <!-- Title -->
        <div class="mb-6">
            <h2 class="text-2xl font-bold text-gray-800 lg:text-3xl">Desa Wisata Joho</h2>

            <div class="max-w-screen-md text-gray-500 md:text-md flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-1" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 0a7.4 7.4 0 0 1 7.4 7.4c0 7.3-7.4 12.6-7.4 12.6S2.6 14.7 2.6 7.4A7.4 7.4 0 0 1 10 0zm0 10a2.8 2.8 0 1 0 0-5.6 2.8 2.8 0 0 0 0 5.6z" />
                </svg>
                <span>Joho, SEMEN, Kabupaten Kediri, Jawa Timur</span>
            </div>
        </div>

        <!-- Navigation -->
        <div class="flex">
            <ul class="flex flex-wrap space-x-3">
                <li><a href="#profile" class="hover:text-primary-700">Profil</a></li>
                <li><a href="#fasilitas" class="hover:text-primary-700">Fasilitas</a></li>
                <li><a href="#galeri" class="hover:text-primary-700">Galeri</a></li>
                <li><a href="#video" class="hover:text-primary-700">Video</a></li>
                <li><a href="#virtual" class="hover:text-primary-700">Virtual Tour</a></li>
                <li><a href="#atraksi" class="hover:text-primary-700">Atraksi</a></li>
                <li><a href="#homestay" class="hover:text-primary-700">Homestay</a></li>
                <li><a href="#umkm" class="hover:text-primary-700">UMKM</a></li>
                <li><a href="#kuliner" class="hover:text-primary-700">Kuliner</a></li>
            </ul>
        </div>
        <!-- Divider -->
        <hr class="border-t border-primary-300 my-4">
        <!-- Navigation -->

        <!-- Profile Section -->
        <section id="profile" class="mt-6">
            <!-- Main Content -->
            <h2 class="text-xl font-bold text-gray-800 lg:text-2xl">Profil</h2>
            <div class="flex mt-4">
                <main class="w-2/3">
                    <article class="bg-white rounded-lg">

                        <div id="default-carousel" class="relative w-full" data-carousel="slide">
                            <!-- Carousel wrapper -->
                            <div class="relative overflow-hidden rounded-lg mb-4 w-full h-96">
                                <!-- Item 1 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="sumber podang.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-96 object-cover object-center" alt="...">
                                </div>
                                <!-- Item 2 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="Keler1.JPG" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-96 object-cover object-center" alt="...">
                                </div>
                                <!-- Item 3 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="goa.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-96 object-cover object-center" alt="...">
                                </div>
                                <!-- Item 4 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="DSC06733.JPG" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-96 object-cover object-center" alt="...">
                                </div>
                                <!-- Item 5 -->
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <img src="rest area.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-96 object-cover object-center" alt="...">
                                </div>
                            </div>
                            <!-- Slider indicators -->
                            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                            </div>
                            <!-- Slider controls -->
                            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                        </div>

                        <!-- <img src="hero-bg.jpg" alt="Gambar Artikel" class="mb-4 rounded-lg h-96 w-full object-cover object-center"> -->
                        <p class="text-gray-700 leading-7">
                            Desa Wisata Joho terletak di Kecamatan Semen, Kabupaten Kediri, Jawa Timur, Indonesia. Desa ini merupakan destinasi wisata yang menawarkan berbagai pengalaman menarik kepada para pengunjung yang ingin menjelajahi pesona alam dan budaya Jawa Timur. Berikut adalah deskripsi profil singkat Desa Wisata Joho:
                        </p>
                        <p class="text-gray-700 leading-7 mt-4">
                            <span class="font-semibold">1. Keindahan Alam:</span>
                            Desa Wisata Joho dikelilingi oleh keindahan alam yang memukau. Pengunjung dapat menikmati pemandangan perbukitan hijau yang terhampar luas, sawah-sawah hijau yang terasri, dan udara segar pegunungan. Keindahan alam ini membuat desa ini menjadi tempat yang sempurna untuk berjalan-jalan, trekking, atau bersepeda.
                        </p>
                        <!-- Tombol Selengkapnya (opsional) -->
                        <div class="mt-4">
                            <a href="#" class="text-primary-700 hover:underline">Selengkapnya...</a>
                        </div>
                    </article>
                </main>

                <!-- Sidebar -->
                <aside class="ml-8 w-1/3">
                    <div class="bg-gray-100 rounded-lg p-6">
                        <h2 class="text-2xl font-semibold mb-2">Kontak</h2>
                        <p class="text-gray-700 mb-2"><span class="font-semibold">Alamat :</span><br>Joho, SEMEN, Kabupaten Kediri, Jawa Timur</p>
                        <p class="text-gray-700 mb-2"><span class="font-semibold">Email :</span><br>desawisatajoho @gamil.com</p>
                        <p class="text-gray-700 mb-2"><span class="font-semibold">Telepon :</span><br>-</p>
                        <h2 class="text-2xl font-semibold mb-2">Media Sosial</h2>
                        <ul class="list-none">
                            <li class="mb-2">
                                <a href="#" class="text-primary-700 hover:underline flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                    </svg>
                                    -
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-primary-700 hover:underline flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                                    </svg>
                                    <span class="sm:text-xs">desawisatajohokediri</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-primary-700 hover:underline flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                    -
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-primary-700 hover:underline flex items-center">
                                    <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z" />
                                        <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02" />
                                    </svg>
                                    <span class="sm:text-xs">DESA WISATA JOHO KEDIRI</span>
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-primary-700 hover:underline flex items-center">
                                    <svg class="h-5 w-5 mr-2" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <circle cx="12" cy="12" r="9" />
                                        <line x1="3.6" y1="9" x2="20.4" y2="9" />
                                        <line x1="3.6" y1="15" x2="20.4" y2="15" />
                                        <path d="M11.5 3a17 17 0 0 0 0 18" />
                                        <path d="M12.5 3a17 17 0 0 1 0 18" />
                                    </svg>
                                    -
                                </a>
                            </li>
                        </ul>

                    </div>
                </aside>
            </div>
        </section>
        <!-- Profile Section End-->

        <!-- Fasilitas Section -->
        <section id="fasilitas" class="mt-8">
            <h2 class="text-xl font-bold text-gray-800 lg:text-2xl">Fasilitas</h2>
            <div class="mt-4">
                <ul class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                    <li class="bg-primary-100 p-2 rounded-md text-center">Area Parkir</li>
                    <li class="bg-primary-100 p-2 rounded-md text-center">Tempat Ibadah</li>
                    <li class="bg-primary-100 p-2 rounded-md text-center">Toilet</li>
                    <li class="bg-primary-100 p-2 rounded-md text-center">Balai Pertemuan</li>
                    <li class="bg-primary-100 p-2 rounded-md text-center">Spot Foto</li>
                    <li class="bg-primary-100 p-2 rounded-md text-center">Food Court</li>
                </ul>
            </div>
        </section>
        <!-- Fasilitas Section End-->

        <!-- Galeri Section -->
        <section id="galeri" class="mt-8">
            <h2 class="text-xl font-bold text-gray-800 lg:text-2xl">Galeri</h2>
            <div class="mt-4">
                <div class="mx-auto max-w-screen-xl">
                    <div class="mb-4 grid grid-cols-2 gap-4 sm:grid-cols-3 md:mb-8 md:grid-cols-4 md:gap-6 xl:gap-8">
                        <!-- image - start -->
                        <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                            <img src="festival.jpeg" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Festival Sumber Podang</span>
                        </a>
                        <!-- image - end -->

                        <!-- image - start -->
                        <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                            <img src="larung sesaji.jpeg" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Larung Sesaji</span>
                        </a>
                        <!-- image - end -->
                    </div>
                    <!-- <div class="flex items-start justify-between gap-8 sm:items-center">
                        <p class="max-w-screen-sm text-sm text-gray-500 lg:text-base">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

                        <a href="#" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">More</a>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- Galeri Section End-->

        <!-- Video Section -->
        <section id="video" class="mt-8">
            <h2 class="text-xl font-bold text-gray-800 lg:text-2xl">Video</h2>
            <div class="mt-4">
                <div class="mx-auto max-w-screen-xl">
                    <div class="mb-4 grid grid-cols-2 gap-4 sm:grid-cols-3 md:mb-8 md:grid-cols-4 md:gap-6 xl:gap-8">
                        <!-- image - start -->
                        <div class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                            <img src="thumbnail.png" id="videoThumbnail" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Video Profil</span>
                        </div>
                        <!-- image - end -->

                        <!-- Tambahkan modal untuk memutar video -->
                        <div id="videoModal" class="fixed top-0 left-0 w-full h-full justify-center items-center bg-black bg-opacity-70 hidden z-50">
                            <div class="relative">
                                <div class="absolute top-0 right-0 m-4 cursor-pointer" id="closeModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M6.293 6.293a1 1 0 011.414 0L10 8.586l2.293-2.293a1 1 0 111.414 1.414L11.414 10l2.293 2.293a1 1 0 11-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 01-1.414-1.414L8.586 10 6.293 7.707a1 1 0 010-1.414z" />
                                    </svg>
                                </div>
                                <div class="aspect-w-16 aspect-h-9">
                                    <!-- Tambahkan iframe untuk memutar video -->
                                    <!-- <iframe id="videoIframe" class="w-full h-full" src="https://youtu.be/RZux5RXTPno?si=IEu-29HGrbaQoE0S" frameborder="0" allowfullscreen></iframe> -->
                                    <iframe id="videoIframe" width="560" height="315" src="http://www.youtube.com/embed/RZux5RXTPno?si=a_9yfFI1DijDmoBZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Video Section End-->

        <!-- Virtual Section -->
        <section id="virtual" class="mt-8">
            <h2 class="text-xl font-bold text-gray-800 lg:text-2xl">Virtual Tour</h2>
            <div class="mt-4">
                <div class="mx-auto max-w-screen-xl">
                    <div class="mb-4 grid grid-cols-2 gap-4 sm:grid-cols-3 md:mb-8 md:grid-cols-4 md:gap-6 xl:gap-8">
                        Belum Tersedia
                        <!-- image - start -->
                        <!-- <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                            <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">VR</span>
                        </a> -->
                        <!-- image - end -->

                        <!-- image - start -->
                        <!-- <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                            <img src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Tech</span>
                        </a> -->
                        <!-- image - end -->

                        <!-- image - start -->
                        <!-- <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                            <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Dev</span>
                        </a> -->
                        <!-- image - end -->

                        <!-- image - start -->
                        <!-- <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                            <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Dev</span>
                        </a> -->
                        <!-- image - end -->


                    </div>

                    <!-- <div class="flex items-start justify-between gap-8 sm:items-center">
                        <p class="max-w-screen-sm text-sm text-gray-500 lg:text-base">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

                        <a href="#" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">More</a>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- Virtual Section End-->

        <!-- Atraksi Section -->
        <section id="atraksi" class="mt-8">
            <h2 class="text-xl font-bold text-gray-800 lg:text-2xl">Atraksi</h2>
            <div class="mt-4">
                <div class="mx-auto max-w-screen-xl">
                    <div class="mb-4 grid grid-cols-2 gap-4 sm:grid-cols-3 md:mb-8 md:grid-cols-4 md:gap-6 xl:gap-8">
                        <!-- image - start -->
                        <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                            <img src="camping ground.jpeg" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Camping Ground</span>
                        </a>
                        <!-- image - end -->

                        <!-- image - start -->
                        <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                            <img src="edu lebah.jpeg" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Edukasi Lebah</span>
                        </a>
                        <!-- image - end -->
                    </div>

                    <!-- <div class="flex items-start justify-between gap-8 sm:items-center">
                        <p class="max-w-screen-sm text-sm text-gray-500 lg:text-base">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

                        <a href="#" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">More</a>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- Atraksi Section End-->

        <!-- Homestay Section -->
        <section id="homestay" class="mt-8">
            <h2 class="text-xl font-bold text-gray-800 lg:text-2xl">Homestay</h2>
            <div class="mt-4">
                <div class="mx-auto max-w-screen-xl">
                    <div class="mb-4 grid grid-cols-2 gap-4 sm:grid-cols-3 md:mb-8 md:grid-cols-4 md:gap-6 xl:gap-8">
                        <!-- image - start -->
                        <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                            <img src="Hm Bougenvile.jpeg" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Homestay Bougenvile</span>
                        </a>
                        <!-- image - end -->

                        <!-- image - start -->
                        <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                            <img src="Hm Kamboja.jpeg" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Homestay Kamboja</span>
                        </a>
                        <!-- image - end -->

                        <!-- image - start -->
                        <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                            <img src="Hm teratai.jpeg" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Homestay teratai</span>
                        </a>
                        <!-- image - end -->
                    </div>

                    <!-- <div class="flex items-start justify-between gap-8 sm:items-center">
                        <p class="max-w-screen-sm text-sm text-gray-500 lg:text-base">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

                        <a href="#" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">More</a>
                    </div> -->
                </div>
            </div>

        </section>
        <!-- Homestay Section End-->

        <!-- UMKM Section -->
        <section id="umkm" class="mt-8">
            <h2 class="text-xl font-bold text-gray-800 lg:text-2xl">UMKM</h2>
            <div class="mt-4">
                <div class="mx-auto max-w-screen-xl">
                    <div class="mb-4 grid grid-cols-2 gap-4 sm:grid-cols-3 md:mb-8 md:grid-cols-4 md:gap-6 xl:gap-8">
                        <!-- image - start -->
                        <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                            <img src="madu.jpeg" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Madu</span>
                        </a>
                        <!-- image - end -->

                    </div>

                    <!-- <div class="flex items-start justify-between gap-8 sm:items-center">
                        <p class="max-w-screen-sm text-sm text-gray-500 lg:text-base">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

                        <a href="#" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">More</a>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- UMKM Section End-->

        <!-- Kuliner Section -->
        <section id="kuliner" class="mt-8">
            <h2 class="text-xl font-bold text-gray-800 lg:text-2xl">Kuliner</h2>
            <div class="mt-4">
                <div class="mx-auto max-w-screen-xl">
                    <div class="mb-4 grid grid-cols-2 gap-4 sm:grid-cols-3 md:mb-8 md:grid-cols-4 md:gap-6 xl:gap-8">
                        <!-- image - start -->
                        <a href="#" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                            <img src="https://tse2.mm.bing.net/th?id=OIP.lJX38wx4gtSD1jj_NHyZcQHaE8&pid=Api&P=0&h=220" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                            <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Tiwul Goreng</span>
                        </a>
                        <!-- image - end -->
                    </div>

                    <!-- <div class="flex items-start justify-between gap-8 sm:items-center">
                        <p class="max-w-screen-sm text-sm text-gray-500 lg:text-base">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

                        <a href="#" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">More</a>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- Kuliner Section End-->

    </div>
</div>

<script>
    // Ambil elemen-elemen HTML yang dibutuhkan
    const videoThumbnail = document.getElementById('videoThumbnail');
    const videoModal = document.getElementById('videoModal');
    const videoIframe = document.getElementById('videoIframe');
    const closeModal = document.getElementById('closeModal');

    // Tambahkan event listener untuk thumbnail
    videoThumbnail.addEventListener('click', () => {
        // Tampilkan modal dan memulai video
        videoModal.classList.add('flex');
        videoModal.classList.remove('hidden');
        videoIframe.src = 'http://www.youtube.com/embed/RZux5RXTPno?si=a_9yfFI1DijDmoBZ?autoplay=1';
    });

    // Tambahkan event listener untuk tombol close
    closeModal.addEventListener('click', () => {
        // Sembunyikan modal dan hentikan video
        videoModal.classList.add('hidden');
        videoModal.classList.remove('flex');
        videoIframe.src = '';
    });
</script>

@endsection