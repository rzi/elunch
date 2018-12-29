<!doctype html>
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
                    <h3>Wprowadź dane </h3>
                </div>
                <div class="flex-fill align-self-center ">

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
                            						<?php echo "<form action='' method='post'>";?>
                            <p> Wybierz zakres raportu: <input name="my_datapicker" type="text" style="width:150px;" id="datepicker"></p>
                              <p> <?php  echo"rrr";
                                  $_POST['imie'];
                                 echo " </form> "?></p>


                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="container">
                        <div class=ramkaLewa>
                            <p> Wybierz raport:</p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Opoka</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mucha</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                            <?php
                                            require "connection.php";
                                            connection();
                                    echo "<table id='table1' class='fixed_headers' border='1'><thead><tr ><td>id_user</td><td >Imię</td><td>Nazwisko</td><td> Danie</td></tr></thead>";
                                            echo "<tbody>";

                                            if($result = mysqli_query($link,'select * from login WHERE 1')){
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $val = $row['id_users'];
                                                    $val2 = $row['my_first_name'];
                                                    $val3 = $row['my_name'];

                                                    echo "<tr><td>";
                                                    echo "<input type='text' name='danie0' value='$val' readonly> ";
                                                    echo "</td>";
                                                    echo "<td>";
                                                    echo "<input type='text' name='danie1' value='$val2' readonly>";
                                                    echo "</td>";
                                                    echo "<td>";
                                                    echo "<input type='text' name='danie2' value='$val3' readonly>";
                                                    echo "</td>";
                                                    echo "<td>";
                                                    echo "<input type='text' id='danie3' class='danie3' name='danie3' value=''>";
                                                    echo "</td>";
    //												echo "<td>";
    //												echo "<input type='text'  name='danie4' value=''>";
    //												echo "</td>";
    //												echo "<td>";
    //												echo "<input type='text' name='danie5' value=''>";
    //												echo "</td>";
                                                    echo "</tr>" ;
                                                }
                                            }

                                            // if($result = mysqli_query($link,"select * from orders WHERE dostawca='Opoka' and data='2018-08-12'")){
                                                // echo "<table class='tableOrder' border='1'><thead><tr ><td>Imię</td><td>Nazwisko</td><td> Danie1</td><td> Danie2</td><td> Danie3</td></tr></thead>";
                                                // while($row = mysqli_fetch_assoc($result)) {
                                                    // echo "<tr><td>";
                                                    // echo $row["data"];
                                                    // echo "</td>";
                                                    // echo "<td>";
                                                    // echo  $row["dostawca"];
                                                    // echo "</td>";
                                                    // echo "<td>";
                                                    // echo $row["numer"];
                                                    // echo "</td>";
                                                    // echo "<td>";
                                                    // echo $row["danie"];
                                                    // echo "</td>";
                                                    // echo "<td>";
                                                    // echo $row["cena"];
                                                    // echo "</td>";
                                                    // echo "<tr>";
                                                // }
                                            // }
                                            mysqli_free_result($result);
                                            mysqli_close($link);
                                            echo "</td>
                                            </tr>
                                            </tbody>
                                            </table>";

                                        ?>

                                    <br/>
                                    <h3> Danie dodatkowe</h3>
                                    <br/>

                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <?php
                                   require "dane_do_bazy.php";

                                ?>

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
                        <button type="button" class="btn btn-success" id="idBtn3">baza</button>
                        <button type="submit" class="btn btn-success" id="idBtn1">raport</button>
                        <!--							<button input type="submit" class="btn btn-success" id="idBtn3" value="Wyślij" name="submit" /> wyślij</button>-->
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div>
            </br>
            <p class="act"><b>Active Tab</b>: <span></span></p>
            </br>

            <p class="act1"><b>Active Tab</b>: <span></span></p>

        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
