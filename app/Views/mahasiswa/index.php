<section class="pt-32">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div>
                <h2 class="font-semibold text-teal-500 mb-5"> Daftar Mahasiswa </h2>
                <ul>
                    <?php foreach($data['mhs'] as $mhs) : ?>
                        <li class="mb-5 font-semibold text-slate-700">
                            <p> Nama : <?php echo $mhs['nama'] ?> </p>
                            <p> NIM : <?php echo $mhs['nim'] ?> </p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>