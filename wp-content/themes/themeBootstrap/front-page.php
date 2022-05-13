<?php get_header() ?>

<div class="container-top">
    <div class="relative">
        <img src="<?= get_theme_file_uri("/assets/images/front-img.png") ?>" alt="university-monaco" class="w-full">
        <div class=" w-11/12 m-auto mt-4 lg:mt-0 lg:absolute lg:bottom-0 lg:left-36 lg:w-128 lg:py-4 lg:px-8 bg-white lg:border-l-4 border-theme-red ">
            <h2 class=" text-center text-3xl font-poppins text-theme-darkblue">A unique learning and networking experience</h2>
            <p class="text-center mt-4 font-firasans">The International University of Monaco (Licensed &recognized by the Government of the Principality of Monaco and Accredited by AMBA & AACSB) offers outstanding teaching in its small, connected, stimulating, cross-cultural environment fostering an entrepreneurial spirit, collaborative work, experiential learning and mutual understanding among students, faculty and staff.
            </p>
        </div>
    </div>

    <div class=" bg-white font-poppins m-auto  lg:absolute lg:right-20 lg:bottom-20 w-10/12 lg:w-80 lg:p-4 ">
        <h3 class="text-center text-3xl font-poppins text-theme-darkblue my-6">Ask for a program brochure</h3>
        <form class="form-container flex flex-col ">
            <label class="font-bold" for="title">Mr ou Mrs</label>
            <select name="title" id="title" class="border border-b-theme-darkblue">
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
            </select>
            <label class="font-bold" for="firstname">firstname</label>
            <input class="border border-b-theme-darkblue" type="text" required>
            <label class="font-bold" for="firstname">lastname</label>
            <input class="border border-b-theme-darkblue" type="text" required>
            <label class="font-bold" for="firstname">Email</label>
            <input class="border border-b-theme-darkblue" type="email" required>
            <label class="font-black" for="country">Country</label>
            <select class="border border-b-theme-darkblue mb-8"" name="country" id="country" >

                <?php
                $data = ingenius_forms();
                foreach ($data as $item => $value) {
                    echo '<option value="' . $value . '">' . $value . '</option>';
                }

                ?>
            </select>
            <button class="bg-theme-darkblue hover:scale-110 transition duration-200 py-2 px-4 font-barlow font-bold text-white w-6/12 lg:m-auto">Envoyer</button>
        </form>
    </div>
</div>


<?php get_footer() ?>