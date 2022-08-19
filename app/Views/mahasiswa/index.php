<section class="pt-32">
    <div class="container mx-auto relative">
        <div class="flex flex-wrap">
            <div>
                <h2 class="font-semibold text-teal-500 mb-5"> Daftar Mahasiswa </h2>
                <button class="font-semibold p-2 px-10 bg-teal-500 mb-5 rounded-xl text-white" id="button2_modal"> Tambah Mahasiswa </button>
                <ul>
                    <?php foreach ($data['mhs'] as $mhs) : ?>
                        <li class="font-semibold border border-slate-500 px-5 py-2 w-[600px]">
                            <?php echo $mhs['nama'] ?>
                            <span class="inline-block w-1/2 float-right">
                                <a href="<?php echo BASEURL; ?>/Mahasiswa/hapus/<?php echo $mhs['id'] ?>" class="text-white bg-pink-600 px-3 rounded-full float-right" onclick="return confirm('anda yakin ingin menghapus data ini?')">hapus</a>
                                <a href="#" class="text-white bg-teal-600 px-3 rounded-full float-right tampil_modal_ubah" id="button2_modal" data-id="<?php echo $mhs['id'] ?>">ubah</a>
                                <a href="<?php echo BASEURL; ?>/Mahasiswa/detail/<?php echo $mhs['id'] ?>" class="text-white bg-sky-600 px-3 rounded-full float-right">detail</a>
                            </span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <!-- tambah modal box -->

        <div class=" modal-box w-1/3 bg-white border border-slate-600 rounded-xl py-5 px-10 absolute right-1/2 top-10 translate-x-1/2 shadow-2xl z-50 hidden_modal" id="modal_box">
            <div class="judul-modal font-semibold text-lg mb-7 flex justify-between">
                <h1 id="modal_label"> Tambah Data Mahasiswa </h1>
                <a href="#" class="hover:cursor-pointer" id="button_modal"><img src="<?php echo BASEURL; ?>/img/close.svg" alt="close"></a>
            </div>
            <div class="form-modal">
                <form action="<?php echo BASEURL; ?>/mahasiswa/tambah" id="modal" method="post">
                    <input type="hidden" name="id" id="id">
                    <label for="name" class="font-semibold mb-3 block"> Nama </label>
                    <input type="text" class="mb-7 p-2 w-full rounded-lg outline-none border border-teal-500 focus:ring focus:ring-teal-500" placeholder="..." name="name" id="nama" autocomplete="off" autofocus>
                    <label for="nim" class="font-semibold mb-3 block"> NIM </label>
                    <input type="text" class="mb-7 p-2 w-full rounded-lg outline-none border border-teal-500 focus:ring focus:ring-teal-500" placeholder="..." name="nim" id="nim" autocomplete="off" autofocus>
                </form>
            </div>
            <div class="button w-full flex justify-end">
                <button class="p-1 bg-teal-500 rounded-md px-3 font-semibold text-md text-white" form="modal" type="submit" id="modal_button"> Tambah </button>
            </div>
        </div>
    </div>
</section>