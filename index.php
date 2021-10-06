<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Meera+Inimai&family=Montserrat+Subrayada&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div id="navbar-atas">
        <div class="container-nav">
            <header class="d-flex justify-content-center py-2 text-white">
                <ul class="nav nav-pills" color="dark">
                    <li class="nav-item"><a href="#navbar-atas" class="nav-link link-secondary">
                            <ion-icon name="arrow-up-outline"></ion-icon>
                        </a></li>
                    <li class="nav-item"><a href="#navbar-atas" class="nav-link link-secondary">
                            <ion-icon name="home-outline"></ion-icon>
                        </a></li>
                    <li class="nav-item"><a href="#footer-bawah" class="nav-link link-secondary">
                            <ion-icon name="arrow-down-outline"></ion-icon>
                        </a>
                    </li>

                </ul>
            </header>
        </div>
    </div>
    <main>

        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <h1 class="display-4 fw-normal">TUGAS 1</h1>
                <p class="lead fw-normal">PRAKTIK PEMROGRAMAN WEB 2 || DENGAN PHP
                    Muhammad Benny Fathurrahman
                </p>
                <a class="btn btn-outline-secondary" href="#explain1">MULAI!</a>
            </div>
            <div class="product-device shadow-sm d-none d-md-block"></div>
            <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
        </div>

        <div class="container materi">
            <hr class="featurette-divider">
            <div id="explain1">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading"><b>2.1</b>Komentar</h2>
                        <p class="lead" style="font-size:15px">Komentar merupakan bagian yang penting didalam program,
                            komentar tidak
                            berarti apa-apa bagi komputer tetapi sangat berguna bagi pemrogram atau pembaca
                            program dalam memahami isi program karena komentar biasanya berisi keterangan-keterangan
                            atau penjelasan dari program. Komentar juga tidak akan dieksekusi. Komentar dibagi menjadi
                            2, yang pertama adalah Komentar dengan menggunakan double // biasanya untuk komentar satu
                            baris. dan yang kedua yaitu Komentar menggunakan simbol /* ( slash asterisk ) dan ditutup
                            dengan */
                            biasanya digunakan untuk memberikan komentar lebih dari satu baris.
                        </p>
                        </p>
                        <p>OUTPUT : ()/None</p>
                    </div>
                    <div class="col-md-5">
                        <img src="img/komentar.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        </img>

                    </div>
                </div>
            </div>
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading"><b>2.2</b>Standar OUTPUT</h2>
                    <p class="lead" style="font-size:15px">Ada beberapa perintah yang digunakan untuk menampilkan output
                        dalam
                        pemrograman PHP diantaranya : echo, print, printf, print_r dan var_dump.</p>
                    <p>OUTPUT :
                        <?php
                        echo "<br>";
                        echo "<br>";
                        // output dengan echo
                        echo "Muhammad Benny Fathurrahman<br>";
                        ?>
                        <?php
                        // output dengan print
                        print "Muhammad Benny Fathurrahman<br>";
                        print("Muhammad Benny Fathurrahman<br>");
                        ?>
                        <?php
                        // output dengan printf
                        printf("Muhammad Benny Fathurrahman<br>");
                        ?>
                        <?php
                        // output dengan print_r
                        print_r("Muhammad Benny Fathurrahman<br>");
                        ?>
                        <?php
                        // output dengan var_dump
                        var_dump("Muhammad Benny Fathurrahman");
                        ?>
                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="img/varprint.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    </img>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading"><b>2.3</b>Tipe Data</h2>
                    <p class="lead">Tipe data di PHP ada 4, yaitu:
                        <b> A. Interger </b>
                        Interger merupakan tipe data bilangan bulat
                        <b> B. Double/Float </b>
                        Double/Float merupakan tipe data bilangan real/pecahan
                        <b> C.String </b>
                        String merupakan tipe data teks
                        <b> D. Boolean </b>
                        Boolean merupakan tipe data untuk menyatakan nilai kebenaran.
                    </p>
                    <P>
                        OUTPUT :
                        <?php
                        //string
                        echo "<br>";
                        echo "<br>";
                        $testing = "Ini Tipe data string";
                        print("$testing"); // Ini Tipe data string adalah output yang ditampilkan
                        echo "<br>";

                        //integer
                        $umur = 12;
                        echo $umur;
                        echo "<br>";

                        //float/double
                        $contoh_desimal = 12.6;
                        echo $contoh_desimal; //12.6 output yang ditampilkan
                        echo "<br>";

                        //boolean
                        $x = true;
                        $y = false;

                        echo "$x"; //Hasil: 1
                        "<br>";
                        echo "$y"; //Tidak ada hasil yang ditampilkan
                        ?>

                    </P>
                </div>
                <div class="col-md-5">
                    <img src="img/tipedata.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    </img>

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading"><b>2.4</b>Variable</h2>
                    <p class="lead"> Variabel digunakan untuk menyimpan nilai yang berubah-ubah. Variabel pada
                        PHP tidak boleh diawali dengan angka, tapi boleh mengandung angka dan ditulis dengan
                        $ diawalnya. </p>
                    <!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Document</title>
                    </head>

                    <body>
                        <p> OUTPUT :</p>
                        <?php
                        $gaji = 250000;
                        Printf("Gaji semula = %d <BR>", $gaji);
                        $gaji = 1.5 * $gaji;
                        Printf("Gaji sekarang = %d <BR>", $gaji);
                        ?>
                    </body>

                    </html>
                    </h2>

                </div>
                <div class="col-md-5 order-md-1">
                    <img src="img/variable.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" role="img" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    </img>

                </div>
            </div>
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading"><b>2.5</b>Operator</h2>
                    <p class="lead">Operator adalah simbol yang digunakan dalam program untuk melakukan suatu operasi, seperti penjumlahan, perkalian perbandingan kesamaan dua buah bilangan.</p>
                    <h4 class="featurette-heading"><b>2.5.1</b></h4>
                    <p class="lead">Operator aritmatika adalah operator yang digunakan dalam operasi matematika.Tabel dibawah ini memperlihatkan daftar operator aritmatika.</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Operator</th>
                                <th scope="col">keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>+</td>
                                <td>Penjumlahan</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>Pengurangan</td>
                            </tr>
                            <tr>
                                <td>*</td>
                                <td>Perkalian</td>
                            </tr>
                            <tr>
                                <td>/</td>
                                <td>Pembagian</td>
                            </tr>
                            <tr>
                                <td>%</td>
                                <td>Sisa Pembagian</td>
                            </tr>
                            <tr>
                                <td>--</td>
                                <td>Penaikan</td>
                            </tr>
                            <tr>
                                <td>++</td>
                                <td>Perkalian</td>
                            </tr>

                        </tbody>
                    </table>

                    <p>
                        OUTPUT :
                        <?php

                        echo "<br>";
                        echo "<br>";

                        $bil1 = 10;
                        $bil2 = 5;
                        $hasil = $bil1 + $bil2;
                        echo "$bil1+$bil2 =$hasil<br>\n";

                        $hasil = $bil1 - $bil2;
                        echo "$bil1-$bil2=$hasil<br>\n";

                        $hasil = $bil1 * $bil2;
                        echo "$bil1*$bil2=$hasil<br>\n";

                        $hasil = $bil1 / $bil2;
                        echo "$bil1/$bil2=$hasil<br>\n";

                        $hasil = $bil1 % $bil2;
                        echo "$bil1%$bil2=$hasil<br>\n";

                        $hasil = $bil1++;
                        echo "$bil1++=$hasil<br>\n";

                        $hasil = $bil2--;
                        echo "$bil2--=$hasil<br>\n";

                        ?></p>
                </div>
                <div class="col-md-5">
                    <img src="img/arit.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    </img>
                </div>
            </div>

            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading"><b>2.5.2</b>Operator Pembandingan</h2>
                    <p class="lead">Operator pembandingan atau dikenal dengan operator relasional adalah operator
                        yang digunakan untuk melakukan perbandingan dua buah operand dan
                        menghasilkan nilai benar atau salah. Tabel dibawah ini memperlihatkan daftar
                        operator perbandingan.</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Operator</th>
                                <th scope="col">keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>==</td>
                                <td>Sama dengan</td>
                            </tr>
                            <tr>
                                <td>
                                    << /td>
                                <td>Kurang dari</td>
                            </tr>
                            <tr>
                                <td>></td>
                                <td>Lebih dari</td>
                            </tr>
                            <tr>
                                <td>
                                    <=< /td>
                                <td>Kurang dari atau sama dengan</td>
                            </tr>
                            <tr>
                                <td>>=</td>
                                <td>Lebih dari atau sama dengan</td>
                            </tr>
                            <tr>
                                <td>!=</td>
                                <td>Tidak sama dengan</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>OUTPUT :</p>
                    <html>

                    <head>
                        <title>contoh operator pembanding</title>
                    </head>

                    <body>
                        <?php
                        $a = 1;
                        $b = 2;
                        $c = 1;
                        $S1 = "Halo";
                        $S2 = "HALO";
                        printf("$a > $b -> %d<BR>\n", $a > $b);
                        printf("$b > $a -> %d<BR>\n", $b > $a);
                        printf("$a < $b -> %d<BR>\n", $a < $b);
                        printf("$a == $c -> %d<BR>\n", $a == $c);
                        printf("$a == $b -> %d<BR>\n", $a == $b);
                        printf("$a != $c -> %d<BR>\n", $a != $c);
                        printf("$a <> $c -> %d<BR>\n", $a <> $c);
                        ?>
                    </body>

                    </html>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="img/banding.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    </img>

                </div>
            </div>


            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading"><b>2.5.3</b>Operator Logika</h2>
                    <p class="lead">Operator logika biasa digunakan untuk menggabungkan kondisi berganda dan
                        menghasilkan sebuah ekspresi yang bernilai benar (nilai 1) atau salah (nilai 0).
                        Yang termasuk operator logika seperti berikut.
                        And atau &&
                        , Or atau ||
                        , Xor
                        , ! atau not
                        Tabel dibawah ini memperlihatkan daftar operator logika.</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Operand 1</th>
                                <th scope="col">Operand 2</th>
                                <th scope="col">And(&&)</th>
                                <th scope="col">Or(||)</th>
                                <th scope="col">xor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Salah</td>
                                <td>Salah</td>
                                <td>Salah</td>
                                <td>Salah</td>
                                <td>Salah</td>
                            </tr>
                            <tr>
                                <td>Salah</td>
                                <td>Benar</td>
                                <td>Salah</td>
                                <td>Benar</td>
                                <td>Benar</td>
                            </tr>
                            <tr>
                                <td>Benar</td>
                                <td>Salah</td>
                                <td>Salah</td>
                                <td>Benar</td>
                                <td>Benar</td>
                            </tr>
                            <tr>
                                <td>Benar</td>
                                <td>Benar</td>
                                <td>Benar</td>
                                <td>Benar</td>
                                <td>Salah</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>OUTPUT :</p>
                    <html>

                    <head>
                        <title>contoh operator logika</title>
                    </head>

                    <body>
                        <?php
                        $kar = 'a';
                        printf(
                            "$kar adalah huruf kapital : %d<BR>\n",
                            $kar >= 'A' and $kar <= 'Z'
                        );
                        printf(
                            "$kar adalah huruf kecil : %d<BR>\n",
                            $kar >= 'a' and $kar <= 'z'
                        );
                        printf(
                            "$kar adalah angka : %d<BR>\n",
                            $kar >= '0' and $kar <= '9'
                        );
                        ?>
                    </body>

                    </html>
                </div>
                <div class="col-md-5">
                    <img src="img/log.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    </img>
                </div>
            </div>

            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading"><b>2.5.4</b>Operator Penggabung String / Concatenation</h2>
                    <p class="lead">Operator ini berfungsi untuk menggabungkan string</p>
                    <p>OUTPUT :</p>
                    <?php
                    // operator penggabung string/ concat
                    $nama_depan = "Muhammad";
                    $nama_tengah = "Benny";
                    $nama_belakang = "Fathurrahman";
                    echo $nama_depan . " " . $nama_tengah . " " . $nama_belakang;
                    ?>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="img/gab.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    </img>

                </div>
            </div>


            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading"><b>2.5.5</b>Operator Penugasan/ Assignment</h2>
                    <p class="lead">Merupakan operator yang digunakan untuk menyingkat beberapa operator yang
                        berkaitan dengan operasi aritmatika, diantaranya =, +=, -=, /=, %= dan .=</p>
                    <p>OUTPUT : </p>
                    <?php
                    $x = 1;
                    $x += 5;
                    echo $x;
                    echo "<br>";
                    echo "atau";
                    echo "<br>";
                    $nama = "Muhammad";
                    $nama .= " ";
                    $nama .= "Benny";
                    $nama .= " ";
                    $nama .= "Fathurrahman";
                    echo $nama;
                    ?>
                </div>
                <div class="col-md-5">
                    <img src="img/gas.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    </img>

                </div>
            </div>



            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading"><b>2.5.6</b>Operator Penaikan dan Penurunan</h2>
                    <p class="lead">Operator ini berfungsi untuk menuliskan bentuk singkat dari operasi penaikan
                        dan penurunan nilai data dengan satu, yaitu ++ dan --.</p>
                    <p>OUTPUT :</p>
                    <?php
                    $x = 10;
                    $x++;
                    echo $x;
                    echo "<br>";
                    echo "atau";
                    echo "<br>";
                    $x = 10;
                    $x--;
                    echo $x;
                    ?>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="img/nakrun.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    </img>
                </div>
            </div>

            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading"><B>LATIHAN/TUGAS</B></h2>
                    <p>OUTPUT :</p>
                    <?php

                    $bil1 = 25;
                    $bil2 = 5;

                    $hasil = $bil1 + $bil2;
                    $hasil2 = $bil1 - $bil2;
                    $hasil3 = $bil1 / $bil2;
                    $hasil4 = $bil1 % $bil2;


                    echo $hasil;
                    echo "<br>";
                    echo $hasil2;
                    echo "<br>";
                    echo $hasil3;
                    echo "<br>";
                    echo $hasil4;

                    ?>
                </div>
                <div class="col-md-5">
                    <img src="img/tugas.png" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                    </img>

                </div>
            </div>











        </div>

        <hr class="featurette-divider">
        <div id="footer-bawah">
            <footer class="container">
                <p class="float-end"><a href="#">
                        <ion-icon name="home-outline"></ion-icon>
                    </a></p>
                <p>Copyleft© Muhammad Benny Fathurrahman ,2021</p>
            </footer>
        </div>
    </main>









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>