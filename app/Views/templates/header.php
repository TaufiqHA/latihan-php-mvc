<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<title> Halaman <?php echo $data['judul'] ?> </title>
</head>
<body>

<header class="bg-transparent fixed top-0 left-0 w-full flex items-center z-10 bg-white bg-opacity-90">
        <div class="container">
            <div class="flex items-center justify-between relative ">
                <div class="px-4">
                    <a href="#home" class="font-bold text-lg text-primary block py-6 ">Taufiq Hidayah A.</a>
                </div>
                <div class="flex items-center px-4 ">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out "></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:rounded-none lg:shadow-none lg:max-w-full">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="<?php echo BASEURL ?>" class="text-base py-2 mx-8 flex  group-hover:text-primary">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="<?php echo BASEURL; ?>/about" class="text-base py-2 mx-8 flex  group-hover:text-primary">About</a>
                            </li>
                            <li class="group">
                                <a href="#portfolio" class="text-base py-2 mx-8 flex  group-hover:text-primary">Portfolio</a>
                            </li>
                            <li class="group">
                                <a href="#client" class="text-base py-2 mx-8 flex  group-hover:text-primary">Clients</a>
                            </li>
                            <li class="group">
                                <a href="#blog" class="text-base py-2 mx-8 flex  group-hover:text-primary">Blog</a>
                            </li>
                            <li class="group">
                                <a href="#contact" class="text-base py-2 mx-8 flex  group-hover:text-primary">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>