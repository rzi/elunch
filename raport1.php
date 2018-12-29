<html>

<head>
<title>Orders</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="/www/css/bootstrap.min.css">
<link rel="stylesheet" href="/www/css/style.css" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="/www/js/skrypt3.js"></script>
</head>
<body>


<!-- gora strony -->
<header class="site-top">
    <div class="container ">
        <div class="d-flex flex-row">
            <div class="flex-fill p-2 bd-highlight">
                <a href="/"><img src="/www/img/logo.png"> </a>
            </div>

            <div class="flex-fill align-self-center ">
                <h3 style="width:700px; text-align :center;">Raport  </h3>

            </div>
            <div class="flex-fill align-self-center">
                <button type="submit" class="btn btn-success" id="idBtn2"> Powrót</button>
            </div>
        </div>

        <div id="hrline">
        </div>
    </div>

</header>

<!-- Tresc strony -->
<section class="container">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 ">
                <div class="container-fluid mh-100 ">
                    <div class=ramkaLewa>
                        <!--						<?php echo "<form action='' method='get'>";?>-->
                        <p> Wybierz zakres raportu: <input name="my_datapicker" type="text" style="width:150px;" id="datepicker"></p>

                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="container">
                    <div class=ramkaLewa>
                        <p> Wybierz raport:</p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dzienny</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Miesięczny</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                <?php
                                require "connection.php";
                                connection();
                                echo "<table id='table2' class='fixed_headers_d' border='1'><thead><tr ><td>Imię</td><td >Nazwisko</td><td>Dostawca</td><td> Danie</td> <td> Cena</td></tr></thead>";
                                echo "<tbody>";
                                if($result = mysqli_query($link,"select * from login, orders WHERE data='2018-12-03' and login.id_users = orders.id_users ")){

//                                    if($result = mysqli_query($link,"select login.my_first_name login.my_name from login, orders WHERE login.id_users = orders.id_users and dostawca='Opoka' and data='2018-12-02'")){
                                     while($row = mysqli_fetch_assoc($result)) {
                                         echo "<tr><td>";
                                         echo $row["my_first_name"];
                                         echo "</td>";
                                         echo "<td>";
                                         echo  $row["my_name"];
                                         echo "</td>";
                                         echo "<td>";
                                         echo $row["dostawca"];
                                         echo "</td>";
                                         echo "<td>";
                                         echo $row["numer"];
                                         echo "</td>";
                                         echo "<td>";
                                         echo $row["cena"];
                                         echo "</td>";
                                         echo "<tr>";
                                    }
                                 }
                                mysqli_free_result($result);
                                mysqli_close($link);
                                echo "</td>
                                        </tr>
                                        </tbody>
                                        </table>";

                                ?>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
<!--
                        <?php
                        require "dane_do_bazy.php";

                        ?>
-->

                    </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="w-100"></div>
<br />
<div class="col-12 ">
    <div class="container">
        <div class=ramkaLewa>
            <button type="button" class="btn btn-success" id="idBtn">Do excel</button>

            <!--							<button input type="submit" class="btn btn-success" id="idBtn3" value="Wyślij" name="submit" /> wyślij</button>-->
        </div>
    </div>
</div>
</div>
</section>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>
