<?php
/**
 * Template Name: Names
 *
 * @version 1.0
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

    <title>Digitalni kumašin</title>

    <style>
        h1, h2, h3, h4, h5, h6, p, a {font-family: 'Poppins', sans-serif;}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2 style="text-align: center;">Digitalni kumašin</h2>
                <form class="text-center border border-light p-5" action="" method="post">

                    <div class="custom-control custom-checkbox">
                        <h3 style="text-align: left;">Unesite Vaše ime*</h3>
                        <input id="defaultSubscriptionFormPassword" class="form-control mb-4" type="text" placeholder="Unesite Vase ime" name="user_name">
                    </div>

                    <!-- Pol -->
                    <h3 style="text-align: left;">Odaberite željeni pol*</h3>
                    <div style="text-align: left;" class="custom-control custom-checkbox">
                        <input type="radio" class="custom-control-input" id="musko" name="male_gender" value="Musko">
                        <label class="custom-control-label" for="musko">Muško</label>
                    </div>

                    <div style="text-align: left;" class="custom-control custom-checkbox">
                        <input type="radio" class="custom-control-input" id="zensko" name="female_gender" value="Zensko">
                        <label class="custom-control-label" for="zensko">Žensko</label>
                    </div>

                    <div style="text-align: left;" class="custom-control custom-checkbox col-md-4 col-md-offset-4">
                        <input class="btn btn-info btn-block" type="submit" name="submit" value="Pronadji ime">
                    </div>
                </form>

                <?php

                $male_string = 'Luka Nikola Lazar Stefan Vuk Filip Aleksa Petar Uroš Marko Andrej Pavle Jovan Mihajlo Ognjen Dušan Aleksandar Đorđe Viktor Mateja Andrija Vukašin Strahinja Vasilije Nemanja Miloš Mihailo Veljko David Dimitrije Bogdan Ilija Danilo Milan Matija Kosta Relja Maksim Novak Konstantin Ivan Sergej Vojin Sava Teodor Damjan Vanja Jakov Tadija Todor Boris Vukan Vladimir Lav Janko Dragan Aleksej Stevan Rastko Kristijan Nenad Gavrilo Milutin Danijel Igor Mladen Darko Zoran Matej Dejan Leon Uglješa Miljan Andreja Vidak Bojan Martin Ignjat Simon Matea Jakša Srđan Arsenije Saša Balša Elmedin Denis Vid Branko Alen Božidar Adam Nebojša Damir Branislav Mijat Momčilo Aljoša Dario Muhamed Miroslav Đurađ Željko Boško Leonardo Slobodan Nikolaj Edin Žarko Predrag Simeon Nikša Radovan Ervin Goran Milorad Mirko Mario Vasil Despot Daris Adrian Oliver Mitar Miodrag Oleg Eldin Jug Njegoš Enis Daniel Tadej Vojislav Davor Bajram Nestor Amel Rade Emir Emil Tomislav Adrijan Milovan Arsen Antonio Kristian Vladan Isak Teo Almir';

                $female_string = 'Dunja Milica Lena Sofija Sara Teodora Nina Ana Nikolina Maša Anđela Jana Petra Jovana Marija Nađa Katarina Iva Una Elena Helena Anastasija Lana Anja Mila Andrea Mia Natalija Tara Lara Aleksandra Tamara Kristina Nevena Tijana Hana Emilija Mina Vanja Danica Ivona Lenka Staša Jelena Magdalena Anđelija Iskra Isidora Ivana Neda Valentina Minja Tea Kalina Ema Irina Maja Đurđa Andrijana Milena Nataša Darija Marta Sonja Ksenija Ljubica Marina Bojana Lola Simona Nikolija Višnja Vera Julija Angelina Nika Viktorija Srna Irena Luna Olga Miona Anđelina Janja Lea Sanja Tatjana Ena Zoja Dragana Anita Dorotea Medina Sofia Leonora Eva Dijana Marijana Hristina Mirjana Nada Lucija Vida Tina Nora Selena Doroteja Elmedina Martina Klara Miljana Tanja Vasilija Lejla Dina Laura Manja Saša Dejana Dušica Anđelka Ružica Anastasia Sandra Melisa Danijela Ljiljana Zorana Iris Lidija Anika Daria Kruna Gala Lina Barbara Vesna Anabela Katja Emina Ina Alisa Julijana Jelisaveta Olivera Snežana Selma Jasmina Amina Mitra';

                // Male names
                $male_string_ar = (explode(' ', $male_string));
                $translate_male_array = $male_string_ar[mt_rand(0, count($male_string_ar) - 1)];

                // Female names
                $female_string_ar = (explode(' ', $female_string));
                $translate_female_array = $female_string_ar[mt_rand(0, count($female_string_ar) -1)];

                if (isset ($_POST['submit'])) {
                    $user_name = $_POST['user_name'];

                    if (!empty ($_POST['male_gender'])) {

                        $male_gender = $_POST['male_gender'];
                        echo '<br>';
                        echo '<h3>Pol: ' . '<b>' . $male_gender . '</b></h3>';
                        echo '<h3>' . $user_name . ' vaše ime je: <b>' . $translate_male_array . '</b></h3>';
                    } elseif (!empty ($_POST['female_gender'])) {

                        $female_gender = $_POST['female_gender'];
                        echo '<br>';
                        echo '<h3>Pol: ' . '<b>' . $female_gender . '</b></h3>';
                        echo '<h3>' . $user_name . ' vaše ime je: <b>' . $translate_female_array . '</b></h3>';
                    } else {
                        echo '<script>alert("Molimo popunite sva potrebna polja. Pokušajte ponovo.")</script>';
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
