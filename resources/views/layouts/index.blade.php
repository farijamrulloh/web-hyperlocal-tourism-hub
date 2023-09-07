@extends('template')
@section('title_web', 'Hyperlocal | Home')
@section('content')
<!-- <section class="bg-white dark:bg-gray-900 h-screen flex justify-center items-center">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Payments tool for software companies</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From checkout to global sales tax compliance, companies around the world use Flowbite to simplify their payment stack.</p>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                Get started
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Speak to Sales
            </a> 
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
        </div>                
    </div>
</section> -->

<!-- Hero Section Start -->
<section class="relative text-white body-font h-screen flex justify-center items-center bg-cover bg-center" style="background-image: url('hero-background.jpg');">
    <div class="absolute inset-0 bg-black opacity-50 z-0"></div>
    <!-- <div class="container mx-auto flex px-4 py-24 md:flex-row flex-col items-center max-w-screen-xl relative z-1">
        <div class="lg:flex-grow md:w-1/2 lg:pr-0 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Before they sold out
                <br class="hidden lg:inline-block">readymade gluten
            </h1>
            <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
            <div class="flex justify-center">
                <a href="#">
                    <button class="inline-flex mr-2 text-white bg-primary-700 hover:bg-primary-800 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800  btn">Button</button>
                </a>
                <a href="#">
                    <button class="inline-flex ml-4 text-gray-700 bg-gray-100 hover:bg-gray-200 btn">Button</button>
                </a>
            </div>
        </div>
        <div class="mb-12 flex w-full md:mb-16 lg:w-2/3">
            <div class="relative left-12 top-12 z-10 -ml-12 overflow-hidden rounded-lg bg-gray-100 shadow-lg md:left-16 md:top-16 lg:ml-0">
                <img src="https://images.unsplash.com/photo-1542340916-951bb72c8f74?auto=format&q=75&fit=crop&w=550&h=550" loading="lazy" alt="Photo by Kaung Htet" class="h-full w-full object-cover object-center" />
            </div>

            <div class="overflow-hidden rounded-lg bg-gray-100 shadow-lg">
                <img src="https://images.unsplash.com/photo-1586295166487-b265f7e83a7f?auto=format&q=75&fit=crop&w=550&h=550" loading="lazy" alt="Photo by Manny Moreno" class="h-full w-full object-cover object-center" />
            </div>
        </div>
    </div> -->

    <div class="relative flex flex-col items-center p-4 sm:max-w-xl">
        <p class="mb-4 text-center text-lg text-indigo-200 sm:text-xl md:mb-8">Very proud to introduce</p>
        <h1 class="mb-8 text-center text-4xl font-bold text-white sm:text-5xl md:mb-12 md:text-6xl">Hyperlocal Tourism Hub</h1>
        <!-- <h1 class="mb-8 text-center text-4xl font-bold text-white sm:text-5xl md:mb-12 md:text-6xl">Revolutionary way to build the web</h1> -->

        <!-- <div class="flex w-full flex-col gap-2.5 sm:flex-row sm:justify-center">
          <a href="#" class="inline-block rounded-lg bg-primary-700 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-primary-700 focus-visible:ring active:bg-indigo-700 md:text-base">Start now</a>

          <a href="#" class="inline-block rounded-lg bg-gray-200 px-8 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base">Take tour</a>
        </div> -->
        <div class="flex justify-center">
            <button class="inline-flex text-white bg-primary-700 hover:bg-primary-800 btn">Explore</button>
            <button class="ml-4 inline-flex text-gray-700 bg-white hover:bg-gray-50 hover:text-primary-700 btn"><img src="play button.gif" alt="Animated GIF" class="mr-2 w-6 h-6" /><span>Video Profile</span></button>
            <!-- https://icons8.com/icons/set/play-button--animated - animated icons -->
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Stats Section Start -->
<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-xl px-4 md:px-8">
        <div class="grid grid-cols-2 gap-6 rounded-3xl bg-primary-700 p-6 md:grid-cols-4 md:gap-8 md:p-8">
            <!-- stat - start -->
            <div class="flex flex-col items-center">
                <div class="text-xl font-bold text-white sm:text-2xl md:text-3xl">200</div>
                <div class="text-sm text-gray-300 sm:text-base">People</div>
            </div>
            <!-- stat - end -->

            <!-- stat - start -->
            <div class="flex flex-col items-center">
                <div class="text-xl font-bold text-white sm:text-2xl md:text-3xl">500+</div>
                <div class="text-sm text-gray-300 sm:text-base">People</div>
            </div>

            <!-- stat - start -->
            <div class="flex flex-col items-center">
                <div class="text-xl font-bold text-white sm:text-2xl md:text-3xl">1000+</div>
                <div class="text-sm text-gray-300 sm:text-base">Customers</div>
            </div>
            <!-- stat - end -->

            <!-- stat - start -->
            <div class="flex flex-col items-center">
                <div class="text-xl font-bold text-white sm:text-2xl md:text-3xl">A couple</div>
                <div class="text-sm text-gray-300 sm:text-base">Coffee breaks</div>
            </div>
            <!-- stat - end -->
        </div>
    </div>
</div>
<!-- Stats Section End -->

<!-- Rekomendation Section Start -->
<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-xl px-4 md:px-8">
        <!-- text - start -->
        <div class="mb-10 md:mb-16">
            <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Rekomendasi Desa Wisata</h2>

            <!-- <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p> -->
        </div>
        <!-- text - end -->

        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
            <!-- image - start -->
            <a href="#" class="group relative flex h-48 items-end justify-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-96">
                <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                <span class="relative mr-3 mb-3 inline-block rounded-lg border border-gray-500 px-2 py-1 text-xs text-gray-200 backdrop-blur md:px-3 md:text-sm">VR</span>
            </a>
            <!-- image - end -->

            <!-- image - start -->
            <a href="#" class="group relative flex h-48 items-end justify-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-96">
                <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                <span class="relative mr-3 mb-3 inline-block rounded-lg border border-gray-500 px-2 py-1 text-xs text-gray-200 backdrop-blur md:px-3 md:text-sm">Retro</span>
            </a>
            <!-- image - end -->

            <!-- image - start -->
            <a href="#" class="group relative flex h-48 items-end justify-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-96">
                <img src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                <span class="relative mr-3 mb-3 inline-block rounded-lg border border-gray-500 px-2 py-1 text-xs text-gray-200 backdrop-blur md:px-3 md:text-sm">Tech</span>
            </a>
            <!-- image - end -->
        </div>
        <a href="/desa">
            <button class="flex mx-auto mt-16 text-white bg-primary-700 hover:bg-primary-800 btn">Lainnya</button>
        </a>
    </div>
</div>
<!-- Rekomendation Section End -->

<!-- News Section Start -->
<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-xl px-4 md:px-8">
        <!-- text - start -->
        <div class="mb-10 md:mb-16">
            <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Berita Terbaru</h2>

            <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p>
        </div>
        <!-- text - end -->

        <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-8">
            <!-- article - start -->
            <div class="flex flex-col overflow-hidden rounded-lg border bg-white">
                <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                    <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Minh Pham" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                </a>

                <div class="flex flex-1 flex-col p-4 sm:p-6">
                    <h2 class="mb-2 text-lg font-semibold text-gray-800">
                        <a href="#" class="transition duration-100 hover:text-primary-700 active:text-primary-700">New trends in Tech</a>
                    </h2>

                    <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

                    <div class="mt-auto flex items-end justify-between">
                        <div class="flex items-center gap-2">
                            <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                                <img src="https://images.unsplash.com/photo-1611898872015-0571a9e38375?auto=format&q=75&fit=crop&w=64" loading="lazy" alt="Photo by Brock Wegner" class="h-full w-full object-cover object-center" />
                            </div>

                            <div>
                                <span class="block text-primary-700">Mike Lane</span>
                                <span class="block text-sm text-gray-400">July 19, 2021</span>
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
                    <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Lorenzo Herrera" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                </a>

                <div class="flex flex-1 flex-col p-4 sm:p-6">
                    <h2 class="mb-2 text-lg font-semibold text-gray-800">
                        <a href="#" class="transition duration-100 hover:text-primary-700 active:text-primary-700">Working with legacy stacks</a>
                    </h2>

                    <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

                    <div class="mt-auto flex items-end justify-between">
                        <div class="flex items-center gap-2">
                            <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                                <img src="https://images.unsplash.com/photo-1586116104126-7b8e839d5b8c?auto=format&q=75&fit=crop&w=64" loading="lazy" alt="Photo by peter bucks" class="h-full w-full object-cover object-center" />
                            </div>

                            <div>
                                <span class="block text-primary-700">Jane Jackobs</span>
                                <span class="block text-sm text-gray-400">April 07, 2021</span>
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
                    <img src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Magicle" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                </a>

                <div class="flex flex-1 flex-col p-4 sm:p-6">
                    <h2 class="mb-2 text-lg font-semibold text-gray-800">
                        <a href="#" class="transition duration-100 hover:text-primary-700 active:text-primary-700">10 best smartphones for devs</a>
                    </h2>

                    <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

                    <div class="mt-auto flex items-end justify-between">
                        <div class="flex items-center gap-2">
                            <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                                <img src="https://images.unsplash.com/photo-1592660503155-7599a37f06a6?auto=format&q=75&fit=crop&w=64" loading="lazy" alt="Photo by Jassir Jonis" class="h-full w-full object-cover object-center" />
                            </div>

                            <div>
                                <span class="block text-primary-700">Tylor Grey</span>
                                <span class="block text-sm text-gray-400">March 15, 2021</span>
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
                    <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=600" loading="lazy" alt="Photo by Martin Sanchez" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                </a>

                <div class="flex flex-1 flex-col p-4 sm:p-6">
                    <h2 class="mb-2 text-lg font-semibold text-gray-800">
                        <a href="#" class="transition duration-100 hover:text-primary-700 active:text-primary-700">8 High performance Notebooks</a>
                    </h2>

                    <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>

                    <div class="mt-auto flex items-end justify-between">
                        <div class="flex items-center gap-2">
                            <div class="h-10 w-10 shrink-0 overflow-hidden rounded-full bg-gray-100">
                                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&q=75&fit=crop&w=64" loading="lazy" alt="Photo by Aiony Haust" class="h-full w-full object-cover object-center" />
                            </div>

                            <div>
                                <span class="block text-primary-700">Ann Park</span>
                                <span class="block text-sm text-gray-400">January 27, 2021</span>
                            </div>
                        </div>

                        <a href="/read" class="rounded border px-2 py-1 text-sm text-gray-500 hover:bg-primary-700 hover:text-white">Article</a>
                    </div>
                </div>
            </div>
            <!-- article - end -->
        </div>
        <a href="#">
            <button class="flex mx-auto mt-16 text-white bg-primary-700 hover:bg-primary-800 btn">Lainnya</button>
        </a>
    </div>
</div>
<!-- News Section End -->

<!-- Contact Section Start -->
<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-xl px-4 md:px-8">
        <!-- text - start -->
        <div class="mb-10 md:mb-16">
            <h2 class="text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Kontak Kami</h2>

            <!-- <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p> -->
        </div>
        <div class="container px-5 mx-auto max-w-screen-xl flex sm:flex-nowrap flex-wrap">
            <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <!-- <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0zmir+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe> -->
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.901203778152!2d111.99951017485783!3d-7.800283677428629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e785729b234e955%3A0x376d16cb3654499f!2sUniversitas%20Nusantara%20PGRI%20Kediri!5e0!3m2!1sid!2sid!4v1692905620037!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="bg-white relative flex py-6 rounded shadow-md">
                    <div class="lg:w-1/2 px-6">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
                        <p class="mt-1 text-primary-700">Jl. Ahmad Dahlan No.76, Mojoroto, Kec. Mojoroto, Kota Kediri, Jawa Timur 64112</p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=himaptikappkormawa@gmail.com&su=Subject%20Here&body=Message%20Here" class="text-primary-700 hover:text-primary-800 leading-relaxed">himaptikappkormawa@gmail.com</a>
                        <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
                        <a href="https://wa.me/6285749437004"><p class="leading-relaxed text-primary-700 hover:text-primary-800">+62 857-4943-7004</p></a>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-600">Nama</label>
                    <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Pesan</label>
                    <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button class="text-white bg-primary-700 border-0 py-2 px-6 focus:outline-none hover:bg-primary-800 rounded-lg text-lg">Kirim</button>
                <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->

    <!-- <section class="bg-white dark:bg-gray-900 h-screen flex justify-center items-center">
    <div class="container mx-auto px-4 py-24 md:flex-row flex-col items-center max-w-screen-xl mb-8 flex flex-wrap justify-between md:mb-16">
        <div class="mb-6 flex w-full flex-col justify-center sm:mb-12 lg:mb-0 lg:w-1/3 lg:pb-24 lg:pt-48">
            <h1 class="mb-4 text-4xl font-bold text-black sm:text-5xl md:mb-8 md:text-6xl">Find your<br />style online
            </h1>
            <p class="max-w-md leading-relaxed text-gray-500 xl:text-lg">This is a section of some simple filler text,
                also known as placeholder text. It shares characteristics of real text.</p>
        </div>

        <div class="mb-12 flex w-full md:mb-16 lg:w-2/3">
            <div
                class="relative left-12 top-12 z-10 -ml-12 overflow-hidden rounded-lg bg-gray-100 shadow-lg md:left-16 md:top-16 lg:ml-0">
                <img src="https://images.unsplash.com/photo-1542340916-951bb72c8f74?auto=format&q=75&fit=crop&w=550&h=550"
                    loading="lazy" alt="Photo by Kaung Htet" class="h-full w-full object-cover object-center" />
            </div>

            <div class="overflow-hidden rounded-lg bg-gray-100 shadow-lg">
                <img src="https://images.unsplash.com/photo-1586295166487-b265f7e83a7f?auto=format&q=75&fit=crop&w=550&h=550"
                    loading="lazy" alt="Photo by Manny Moreno" class="h-full w-full object-cover object-center" />
            </div>
        </div>
    </div>
</section> -->


@endsection