<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title>@yield('title_web')</title>
    <style>
        /* Custom scrollbar styles */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #dc2626;
            border-radius: 3px;
        }

        ::-webkit-scrollbar-track {
            background-color: #f1f1f1;
            border-radius: 3px;
        }
    </style>
</head>

<body class="body bg-white dark:bg-[#0F172A]">

    <section class="flex-grow max-w-full">
        <!-- Your page content here -->

        @yield('dash')
    </section>

    <!-- SideBar JS Start -->
    <script>
        const sidebar = document.querySelector("aside");
        const maxSidebar = document.querySelector(".max")
        const miniSidebar = document.querySelector(".mini")
        const roundout = document.querySelector(".roundout")
        const maxToolbar = document.querySelector(".max-toolbar")
        const logo = document.querySelector('.logo')
        const content = document.querySelector('.content')
        const moon = document.querySelector(".moon")
        const sun = document.querySelector(".sun")

        // function setDark(val) {
        //     if (val === "dark") {
        //         document.documentElement.classList.add('dark')
        //         moon.classList.add("hidden")
        //         sun.classList.remove("hidden")
        //     } else {
        //         document.documentElement.classList.remove('dark')
        //         sun.classList.add("hidden")
        //         moon.classList.remove("hidden")
        //     }
        // }

        // Ambil status mode gelap dari penyimpanan lokal saat halaman dimuat
        document.addEventListener("DOMContentLoaded", function() {
            const currentMode = localStorage.getItem("darkMode");
            if (currentMode === "dark") {
                document.documentElement.classList.add('dark');
                moon.classList.add("hidden");
                sun.classList.remove("hidden");
            } else {
                document.documentElement.classList.remove('dark');
                sun.classList.add("hidden");
                moon.classList.remove("hidden");
            }

            const sidebarStatus = localStorage.getItem("sidebarStatus");
            if (sidebarStatus === "max") {
                // Tampilkan max sidebar saat halaman dimuat
                sidebar.classList.remove("-translate-x-48");
                sidebar.classList.add("translate-x-none");
                maxSidebar.classList.remove("hidden");
                maxSidebar.classList.add("flex");
                miniSidebar.classList.remove("flex");
                miniSidebar.classList.add("hidden");
                maxToolbar.classList.add("translate-x-0");
                maxToolbar.classList.remove("translate-x-24", "scale-x-0");
                logo.classList.remove("ml-12");
                content.classList.remove("ml-12");
                content.classList.add("ml-12", "md:ml-60");
            } else {
                // Tampilkan mini sidebar saat halaman dimuat
                sidebar.classList.add("-translate-x-48");
                sidebar.classList.remove("translate-x-none");
                maxSidebar.classList.add("hidden");
                maxSidebar.classList.remove("flex");
                miniSidebar.classList.add("flex");
                miniSidebar.classList.remove("hidden");
                maxToolbar.classList.add("translate-x-24", "scale-x-0");
                maxToolbar.classList.remove("translate-x-0");
                logo.classList.add('ml-12');
                content.classList.remove("ml-12", "md:ml-60");
                content.classList.add("ml-12");
            }
        });

        // Fungsi untuk mengubah mode gelap dan menyimpan statusnya
        function setDark(val) {
            if (val === "dark") {
                document.documentElement.classList.add('dark');
                moon.classList.add("hidden");
                sun.classList.remove("hidden");
                // Simpan status mode gelap di penyimpanan lokal
                localStorage.setItem("darkMode", "dark");
            } else {
                document.documentElement.classList.remove('dark');
                sun.classList.add("hidden");
                moon.classList.remove("hidden");
                // Simpan status mode terang di penyimpanan lokal
                localStorage.setItem("darkMode", "light");
            }
        }

        function openNav() {
            if (sidebar.classList.contains('-translate-x-48')) {
                // max sidebar
                sidebar.classList.remove("-translate-x-48")
                sidebar.classList.add("translate-x-none")
                maxSidebar.classList.remove("hidden")
                maxSidebar.classList.add("flex")
                miniSidebar.classList.remove("flex")
                miniSidebar.classList.add("hidden")
                maxToolbar.classList.add("translate-x-0")
                maxToolbar.classList.remove("translate-x-24", "scale-x-0")
                logo.classList.remove("ml-12")
                content.classList.remove("ml-12")
                content.classList.add("ml-12", "md:ml-60")

                localStorage.setItem("sidebarStatus", "max");
            } else {
                // mini sidebar
                sidebar.classList.add("-translate-x-48")
                sidebar.classList.remove("translate-x-none")
                maxSidebar.classList.add("hidden")
                maxSidebar.classList.remove("flex")
                miniSidebar.classList.add("flex")
                miniSidebar.classList.remove("hidden")
                maxToolbar.classList.add("translate-x-24", "scale-x-0")
                maxToolbar.classList.remove("translate-x-0")
                logo.classList.add('ml-12')
                content.classList.remove("ml-12", "md:ml-60")
                content.classList.add("ml-12")

                localStorage.setItem("sidebarStatus", "mini");
            }
        }
    </script>
    <!-- SideBar JS End -->

</body>

</html>
