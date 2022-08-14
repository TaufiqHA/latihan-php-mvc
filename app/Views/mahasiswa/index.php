<section class="pt-32">
    <div class="container mx-auto relative">
        <div class="flex flex-wrap">
            <div>
                <h2 class="font-semibold text-teal-500 mb-5"> Detail Mahasiswa </h2>
                <button class="font-semibold p-2 px-10 bg-teal-500 mb-5 rounded-xl text-white" id="button2_modal"> Tambah Mahasiswa </button>
                <ul>
                    <?php foreach ($data['mhs'] as $mhs) : ?>
                        <li class="font-semibold border border-slate-500 px-5 py-2 w-96 flex justify-between">
                            <?php echo $mhs['nama'] ?>
                            <a href="<?php echo BASEURL; ?>/Mahasiswa/detail/<?php echo $mhs['id'] ?>" class="text-white bg-sky-600 px-3 rounded-full ">detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="modal-box w-1/3 h-[200px] border border-slate-600 rounded-xl py-5 px-10 absolute right-1/2 top-10 translate-x-1/2 shadow-xl hidden_modal" id="modal_box">
            <div class="judul-modal font-semibold text-lg mb-7 flex justify-between">
                <h1> Tambah Data Mahasiswa </h1>
                <a href="#" class="hover:cursor-pointer" id="button_modal"><img src="<?php echo BASEURL; ?>/img/close.svg" alt="close"></a>
            </div>
            <div class="form-modal">
                <form action="" id="modal">
                    <input type="text" class="mb-7 p-2 w-full rounded-lg outline-none border border-teal-500 focus:ring focus:ring-teal-500" placeholder="Nama mahasiswa">
                </form>
            </div>
            <div class="button w-full relative">
                <button class="absolute right-0 p-1 bg-teal-500 rounded-md px-3 font-semibold text-md" form="modal"> Tambah </button>
            </div>
        </div>
    </div>
</section>