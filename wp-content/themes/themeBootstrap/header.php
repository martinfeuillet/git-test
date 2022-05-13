
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php wp_head(); ?>
    <title>University of monaco</title>
</head>
<body>
    <header class="flex flex-col lg:flex-row justify-center lg:justify-around items-center  relative">
        <div class="logo flex justify-center">
            <img src="<?= get_theme_file_uri("/assets/images/logo.png") ?>" alt="logo" class="w-60 lg:w-40">
        </div>
        <nav class="flex flex-col lg:flex-row lg:items-center">
            <div class="buttons flex justify-center gap-2 mt-4 mb-4 md:mt-0 text-white">
                <a href="/events" class="bg-theme-red py-2 px-4 font-barlow font-bold">EVENTS</a>
                <a href="/events" class="bg-theme-darkblue py-2 px-4 font-barlow font-bold">DOWNLOAD</a>
                <a href="/events" class="bg-theme-whiteblue py-2 px-4 font-barlow font-bold">APPLY</a>
            </div>
            <div class="languages flex justify-end absolute lg:relative top-3 right-2 lg:top-0 lg:right-0 ml-3">
                <button class="border px-2 font-firasans">FR</button>
                <button class="border border-theme-whiteblue text-theme-whiteblue px-2">EN</button>
            </div>
        </nav>
    </header>
