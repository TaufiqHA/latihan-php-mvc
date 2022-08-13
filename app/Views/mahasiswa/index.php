<section class="pt-32">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div>
                <h2 class="font-semibold text-teal-500 mb-5"> Daftar Mahasiswa </h2>
                <ul>
                    <?php foreach ($data['mhs'] as $mhs) : ?>
                        <li class="font-semibold border border-slate-500 px-5 py-2 w-96 flex justify-between">
                            <?php echo $mhs['nama'] ?>
                            <a href="#" class="text-white bg-sky-600 px-3 rounded-full ">detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>