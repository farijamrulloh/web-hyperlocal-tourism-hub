@extends('adminTemplate')
@section('title_web', 'Hyperlocal | Profile')
@section('dash')
@include('partials.sidebar')
<!-- CONTENT -->
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">
    <h1 class="uppercase font-extrabold text-xl dark:text-white">Profile</h1>
    <!-- Divider -->
    <hr class="border-t border-primary-300 my-4">
    <form id="Profile-form" class="mt-6">
        <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-300 text-xs font-bold mb-2" for="grid-first-name">
                    Nama Desa
                </label>
                <input type="text" id="namaDesa" name="namaDesa" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
                <p class="text-red-500 text-xs italic mt-1">Wajib diisi.</p>
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-300 text-xs font-bold mb-2" for="grid-last-name">
                    Nama Desa Wisata
                </label>
                <input type="text" id="namaDewi" name="namaDewi" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
                <p class="text-red-500 text-xs italic mt-1">Wajib diisi.</p>
            </div>
        </div>
        <div class="mb-4">
            <label for="alamatDesa" class="block uppercase tracking-wide text-gray-700 dark:text-gray-300 text-xs font-bold mb-2">Alamat Desa</label>
            <input type="text" id="alamatDesa" name="alamatDesa" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
            <p class="text-red-500 text-xs italic mt-1">Wajib diisi.</p>
        </div>
        <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-300 text-xs font-bold mb-2" for="grid-first-name">
                    Foto Profil
                </label>
                <input type="file" name="pp" id="pp" accept="image/*" class="border border-gray-300 rounded-lg w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-300 text-xs font-bold mb-2" for="grid-last-name">
                    Nomor SK Desa Wisata
                </label>
                <input type="text" id="SKDesa" name="SKDesa" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
            </div>
        </div>
        <div class="mb-4">
            <label for="deskripsi" class="block uppercase tracking-wide text-gray-700 dark:text-gray-300 text-xs font-bold mb-2">Deskripsi Desa Wisata</label>
            <textarea id="deskripsi" name="deskripsi" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300" style="font-family: 'Your Font', sans-serif; font-size: 16px; line-height: 1.5;"></textarea>
        </div>
        <div class="mb-4">
            <label for="photos" class="block uppercase tracking-wide text-gray-700 dark:text-gray-300 text-xs font-bold mb-2">Pilih Foto Sampul (Bisa lebih dari satu)</label>
            <input type="file" name="photos" id="photos" accept="image/*" multiple class="border border-gray-300 rounded-lg w-full focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
        </div>
        
        <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-300 text-xs font-bold mb-2" for="grid-first-name">
                    Nomor HP / Whatsapp
                </label>
                <input type="tel" id="telp" name="telp" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-300 text-xs font-bold mb-2" for="grid-last-name">
                    Email
                </label>
                <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-300 text-xs font-bold mb-2" for="grid-first-name">
                    Facebook
                </label>
                <input type="text" id="facebook" name="facebook" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-300 text-xs font-bold mb-2" for="grid-last-name">
                    Instagram
                </label>
                <input type="text" id="instagram" name="instagram" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-300 text-xs font-bold mb-2" for="grid-first-name">
                    Twitter
                </label>
                <input type="text" id="twitter" name="twitter" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-300 text-xs font-bold mb-2" for="grid-last-name">
                    Youtube
                </label>
                <input type="text" id="youtube" name="youtube" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
            </div>
        </div>
        <div class="mb-4">
            <label for="website" class="block uppercase tracking-wide text-gray-700 dark:text-gray-300 text-xs font-bold mb-2">Alamat Website</label>
            <input type="text" id="website" name="website" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
        </div>
        <div class="mb-4">
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-700 hover:bg-primary-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Submit
            </button>
        </div>
    </form>
</div>

<!-- SideBar JS Start -->
<!-- <script>
    const sidebar = document.querySelector("aside");
    const maxSidebar = document.querySelector(".max")
    const miniSidebar = document.querySelector(".mini")
    const roundout = document.querySelector(".roundout")
    const maxToolbar = document.querySelector(".max-toolbar")
    const logo = document.querySelector('.logo')
    const content = document.querySelector('.content')
    const moon = document.querySelector(".moon")
    const sun = document.querySelector(".sun")

    function setDark(val) {
        if (val === "dark") {
            document.documentElement.classList.add('dark')
            moon.classList.add("hidden")
            sun.classList.remove("hidden")
        } else {
            document.documentElement.classList.remove('dark')
            sun.classList.add("hidden")
            moon.classList.remove("hidden")
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
            
        }
        
    }
</script> -->
<!-- SideBar JS End -->

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<!-- <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script> -->
<!-- <script>
    CKEDITOR.replace('deskripsi');
</script> -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#deskripsi'), {
            // Konfigurasi CKEditor disini
        })
        .then(editor => {
            editor.editing.view.change(writer => {
                writer.setStyle('background-color', 'white', editor.editing.view.document.getRoot());
            });
        })
        .catch(error => {
            console.error(error);
        });
</script>

@endsection