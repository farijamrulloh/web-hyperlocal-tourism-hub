@extends('adminTemplate')
@section('title_web', 'Hyperlocal | Fasilitas')
@section('dash')
@include('partials.sidebar')
<!-- CONTENT -->
<div class="content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">
    <h1 class="uppercase font-extrabold text-xl dark:text-white">Fasilitas</h1>
    <!-- Divider -->
    <hr class="border-t border-primary-300 my-4">
    <form id="fasilitas-form" class="mt-6">
        <div class="mb-4">
            <label for="nama-fasilitas" class="block uppercase tracking-wide text-gray-700 dark:text-gray-300 text-xs font-bold mb-2">Nama Fasilitas</label>
            <input type="text" id="nama-fasilitas" name="nama-fasilitas" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-300">
        </div>
        <div class="mb-4">
            <!-- <button id="simpan-button" type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Simpan</button> -->
            <button type="submit" id="simpan-button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-primary-700 hover:bg-primary-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Tambahkan Fasilitas
            </button>
        </div>
    </form>

    <p class="text-red-500 text-md font-extrabold">Catatan :</p>
    <ul class="list-disc pl-5">
        <li class="text-red-500 text-xs italic">Fasilitas bisa lebih dari satu.</li>
        <li class="text-red-500 text-xs italic">Dilarang mengisi sesuatu yang menyinggung SARA.</li>
    </ul>

    <!-- Daftar Fasilitas (Read) -->
    <label class="block mt-4 uppercase tracking-wide text-gray-700 dark:text-gray-300 text-md font-bold mb-2">Daftar Fasilitas</label>
    <ul id="daftar-fasilitas" class="mb-4"></ul>
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

<script>
    const fasilitasForm = document.getElementById('fasilitas-form');
    const namaFasilitasInput = document.getElementById('nama-fasilitas');
    const simpanButton = document.getElementById('simpan-button');
    const daftarFasilitas = document.getElementById('daftar-fasilitas');

    let fasilitasData = [];

    // Function untuk menampilkan daftar fasilitas
    function renderFasilitas() {
        daftarFasilitas.innerHTML = '';
        fasilitasData.forEach((fasilitas, index) => {
            const listItem = document.createElement('li');
            listItem.innerHTML = `
                    ${fasilitas.nama}
                    <button class="text-red-600 ml-2" onclick="deleteFasilitas(${index})">Hapus</button>
                    <button class="text-blue-600 ml-2" onclick="editFasilitas(${index})">Edit</button>
                `;
            daftarFasilitas.appendChild(listItem);
        });
    }

    // Function untuk menambah fasilitas baru (Create)
    function createFasilitas(nama) {
        fasilitasData.push({
            nama
        });
        renderFasilitas();
        clearForm();
    }

    // Function untuk menghapus fasilitas (Delete)
    function deleteFasilitas(index) {
        fasilitasData.splice(index, 1);
        renderFasilitas();
    }

    // Function untuk mengedit fasilitas (Update)
    function editFasilitas(index) {
        const fasilitas = fasilitasData[index];
        namaFasilitasInput.value = fasilitas.nama;
        simpanButton.innerHTML = 'Update';
        simpanButton.onclick = function() {
            fasilitas.nama = namaFasilitasInput.value;
            renderFasilitas();
            clearForm();
        };
    }

    // Function untuk mengosongkan form
    function clearForm() {
        namaFasilitasInput.value = '';
        simpanButton.innerHTML = 'Simpan';
        simpanButton.onclick = function(event) {
            event.preventDefault();
            createFasilitas(namaFasilitasInput.value);
        };
    }

    // Handle submit form
    fasilitasForm.addEventListener('submit', function(event) {
        event.preventDefault();
        createFasilitas(namaFasilitasInput.value);
    });

    // Menampilkan daftar fasilitas awal
    renderFasilitas();
</script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<!-- <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script> -->
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
<script>
    CKEDITOR.replace('customTextarea');
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