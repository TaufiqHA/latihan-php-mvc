<section class="pt-32">
    <div class="container mx-auto">
        <div class="block">
            <div>
                <h2> ini adalah halaman mahasiswa </h2>
                <p> ini adalah teks random. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <h3>Daftar Mahasiswa</h3>
            <ul>
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li>
                        <p>Nama : <?php echo $mhs['nama'] ?></p>
                        <p>Nim : <?php echo $mhs['nim'] ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>