<?php
    $conn = mysqli_connect("localhost","root","","wp_project");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Spacify</title>
    <link rel="icon" href="images/logo1.png" type="image/icon type">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <link rel="stylesheet" type="text/css" href="CSS/style1.css">
    <style>

    </style>
</head>

<body>
    <!-- Navbar -->
    <nav>
        <div>
            <div class="logo-div">
                <a href="home.php"><img src="images/logo-c.jpg" alt="Spacify" class="logo"></a>
            </div>
            <div class="nav-div">
                <ul class="nav-list">
                    <li class="nav-item"><a href="home.php#about">about</a></li>
                    <li class="nav-item"><a href="home.php#pod">Picture Of Day</a></li>
                    <li class="nav-item"><a href="home.php#info">Information</a></li>
                    <li class="nav-item"><a href="home.php#contactUs">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- list of definations -->
    <div class="defination-section">
        <div class="list">
            <form class="planets_form" action="" method="post">
                <ul>
                    <li><input class="planets-btn" type="submit" value="Sun" name="Sun"></li>
                    <li><input class="planets-btn" type="submit" value="Mercury" name="Mercury"></li>
                    <li><input class="planets-btn" type="submit" value="Venus" name="Venus"></li>
                    <li><input class="planets-btn" type="submit" value="Earth" name="Earth"></li>
                    <li><input class="planets-btn" type="submit" value="Mars" name="Mars"></li>
                    <li><input class="planets-btn" type="submit" value="Jupiter" name="Jupiter"></li>
                    <li><input class="planets-btn" type="submit" value="Saturn" name="Saturn"></li>
                    <li><input class="planets-btn" type="submit" value="Uranus" name="Uranus"></li>
                    <li><input class="planets-btn" type="submit" value="Neptune" name="Neptune"></li>
                    <li><input class="planets-btn" type="submit" value="Pluto" name="Pluto"></li>
                    <li><input class="planets-btn" type="submit" value="Proxima Centauri" name="Proxima"></li>
                    <li><input class="planets-btn" type="submit" value="Barnard Star" name="Barnard"></li>
          
                </ul>
            </form>
        </div>

        <div class="card-section">
            <div class="def-card">
                <h1 class="word">
                    <?php
                        if((!isset($_POST["Sun"])) && (!isset($_POST["Earth"])) && (!isset($_POST["Mercury"])) && (!isset($_POST["Venus"])) && (!isset($_POST["Mars"]) && (!isset($_POST["Jupiter"])) && (!isset($_POST["Saturn"])) && (!isset($_POST["Uranus"])) && (!isset($_POST["Neptune"])) && (!isset($_POST["Pluto"])) && (!isset($_POST["Proxima"])) && (!isset($_POST["Barnard"])))){
                            $query1=mysqli_query($conn,"select name from planets where name='Sun';");
                            while($row=mysqli_fetch_row($query1)){
                                echo '<h1>'.$row[0]."</h1><br>";
                            }   
                        }
                        
                        if(isset($_POST["Sun"])){
                            $query1=mysqli_query($conn,"select name from planets where name='Sun';");
                            while($row=mysqli_fetch_row($query1)){
                                echo '<h1>'.$row[0]."</h1><br>";
                            }       
                        }
                        if(isset($_POST["Earth"])){
                            $query1=mysqli_query($conn,"select name from planets where name='Earth';");
                            while($row=mysqli_fetch_row($query1)){
                                echo '<h1>'.$row[0]."</h1><br>";
                            }       
                        }

                        if(isset($_POST["Mercury"])){
                            $query1=mysqli_query($conn,"select name from planets where name='Mercury';");
                            while($row=mysqli_fetch_row($query1)){
                                echo '<h1>'.$row[0]."</h1><br>";
                            } 
                        }

                        if(isset($_POST["Venus"])){
                            $query1=mysqli_query($conn,"select name from planets where name='Venus';");
                            while($row=mysqli_fetch_row($query1)){
                                echo "<h1>".$row[0]."</h1><br>";
                            }
                        }

                        if(isset($_POST["Mars"])){
                            $query1=mysqli_query($conn,"select name from planets where name='Mars';");
                            while($row=mysqli_fetch_row($query1)){
                                echo "<h1>".$row[0]."</h1><br>";
                            }
                        }

                        if(isset($_POST["Jupiter"])){
                            $query1=mysqli_query($conn,"select name from planets where name='Jupiter';");
                            while($row=mysqli_fetch_row($query1)){
                                echo "<h1>".$row[0]."</h1><br>";
                            }
                        }

                        if(isset($_POST["Saturn"])){
                            $query1=mysqli_query($conn,"select name from planets where name='Saturn';");
                            while($row=mysqli_fetch_row($query1)){
                                echo "<h1>".$row[0]."</h1><br>";
                            }
                        }

                        if(isset($_POST["Uranus"])){
                            $query1=mysqli_query($conn,"select name from planets where name='Uranus';");
                            while($row=mysqli_fetch_row($query1)){
                                echo "<h1>".$row[0]."</h1><br>";
                            }
                        }

                        if(isset($_POST["Neptune"])){
                            $query1=mysqli_query($conn,"select name from planets where name='Neptune';");
                            while($row=mysqli_fetch_row($query1)){
                                echo "<h1>".$row[0]."</h1><br>";
                            }
                        }

                        if(isset($_POST["Pluto"])){
                            $query1=mysqli_query($conn,"select name from planets where name='Pluto';");
                            while($row=mysqli_fetch_row($query1)){
                                echo "<h1>".$row[0]."</h1><br>";
                            }
                        }

                        if(isset($_POST["Proxima"])){
                            $query1=mysqli_query($conn,"select name from planets where name='Proxima Centauri';");
                            while($row=mysqli_fetch_row($query1)){
                                echo "<h1>".$row[0]."</h1><br>";
                            }
                        }

                        if(isset($_POST["Barnard"])){
                            $query1=mysqli_query($conn,"select name from planets where name='Barnard Star';");
                            while($row=mysqli_fetch_row($query1)){
                                echo "<h1>".$row[0]."</h1><br>";
                            }
                        }
                    ?>
                </h1>

                <div class="img">
                    <?php
                        if( (!isset($_POST["Sun"])) && (!isset($_POST["Earth"])) && (!isset($_POST["Mercury"])) && (!isset($_POST["Venus"])) && (!isset($_POST["Mars"]) && (!isset($_POST["Jupiter"])) && (!isset($_POST["Saturn"])) && (!isset($_POST["Uranus"])) && (!isset($_POST["Neptune"])) && (!isset($_POST["Pluto"])) && (!isset($_POST["Proxima Centauir"])) && (!isset($_POST["Neptune"])) && (!isset($_POST["Proxima"])) && (!isset($_POST["Barnard"])))){
                            echo '<img src="images\sun.png" alt="Earth image" class="word-img"><br>';
                        }

                        if(isset($_POST["Sun"])){                            
                            echo '<img src="images\sun.png" alt="Earth image" class="word-img"><br>';
                        }       
                        if(isset($_POST["Earth"])){                            
                            echo '<img src="images\earth.jpeg" alt="Earth image" class="word-img"><br>';
                        }       
                        if(isset($_POST["Mercury"])){                            
                            echo '<img src="images\mercury.jpg" alt="Mercury image" class="word-img"><br>';
                        }       
                        if(isset($_POST["Venus"])){                            
                            echo '<img src="images\venus.jpg" alt="Venus image" class="word-img"><br>';
                        }       
                        if(isset($_POST["Mars"])){                            
                            echo '<img src="images\mars.jpg" alt="Mars image" class="word-img"><br>';
                        }       
                        if(isset($_POST["Jupiter"])){                            
                            echo '<img src="images\jupiter.png" alt="Jupiter image" class="word-img"><br>';
                        }       
                        if(isset($_POST["Saturn"])){                            
                            echo '<img src="images\saturn.png" alt="Saturn image" class="word-img"><br>';
                        }       
                        if(isset($_POST["Uranus"])){                            
                            echo '<img src="images\uranus.png" alt="Uranus image" class="word-img"><br>';
                        }       
                        if(isset($_POST["Neptune"])){                            
                            echo '<img src="images\neptune.png" alt="Neptune image" class="word-img"><br>';
                        }       
                        if(isset($_POST["Pluto"])){                            
                            echo '<img src="images\pluto.png" alt="Pluto image" class="word-img"><br>';
                        }       
                        if(isset($_POST["Proxima"])){                            
                            echo '<img src="images\proxima.png" alt="Pluto image" class="word-img"><br>';
                        }       
                        if(isset($_POST["Barnard"])){                            
                            echo '<img src="images\bernard.png" alt="Pluto image" class="word-img"><br>';
                        }       
                        
                    ?>
                </div>

                <p class="meaning">
                    <?php
                        if((!isset($_POST["Sun"])) && (!isset($_POST["Earth"])) && (!isset($_POST["Mercury"])) && (!isset($_POST["Venus"])) && (!isset($_POST["Mars"]) && (!isset($_POST["Jupiter"])) && (!isset($_POST["Saturn"])) && (!isset($_POST["Uranus"])) && (!isset($_POST["Neptune"])) && (!isset($_POST["Pluto"])) && (!isset($_POST["Proxima Centauir"])) && (!isset($_POST["Neptune"])) && (!isset($_POST["Proxima"])) && (!isset($_POST["Barnard"])))){
                            $query2=mysqli_query($conn,"select description from planets where name='Sun';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br><br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Sun' target='blank'>For more info >></a>";
                            }
                        }

                        if(isset($_POST["Sun"])){
                            $query2=mysqli_query($conn,"select description from planets where name='Sun';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br><br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Sun' target='blank'>For more info >></a>";
                            }
                        }
                        if(isset($_POST["Earth"])){
                            $query2=mysqli_query($conn,"select description from planets where name='Earth';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br><br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Earth' target='blank'>For more info >></a>";
                            }
                        }

                        if(isset($_POST["Mercury"])){
                            $query2=mysqli_query($conn,"select description from planets where name='Mercury';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Mercury_(planet)' target='blank'>For more info >></a>";
                            }
                        }

                        if(isset($_POST["Venus"])){
                            $query2=mysqli_query($conn,"select description from planets where name='Venus';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Venus' target='blank'>For more info >></a>";
                            }
                        }

                        if(isset($_POST["Mars"])){
                            $query2=mysqli_query($conn,"select description from planets where name='Mars';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Mars' target='blank'>For more info >></a>";
                            }
                        }
                        if(isset($_POST["Jupiter"])){
                            $query2=mysqli_query($conn,"select description from planets where name='Jupiter';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Jupiter' target='blank'>For more info >></a>";
                            }
                        }
                        if(isset($_POST["Saturn"])){
                            $query2=mysqli_query($conn,"select description from planets where name='Saturn';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Saturn' target='blank'>For more info >></a>";
                            }
                        }
                        if(isset($_POST["Uranus"])){
                            $query2=mysqli_query($conn,"select description from planets where name='Uranus';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Uranus' target='blank'>For more info >></a>";
                            }
                        }
                        if(isset($_POST["Neptune"])){
                            $query2=mysqli_query($conn,"select description from planets where name='Neptune';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Neptune' target='blank'>For more info >></a>";
                            }
                        }
                        if(isset($_POST["Pluto"])){
                            $query2=mysqli_query($conn,"select description from planets where name='Pluto';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Pluto' target='blank'>For more info >></a>";
                            }
                        }
                        if(isset($_POST["Proxima"])){
                            $query2=mysqli_query($conn,"select description from planets where name='Proxima Centauri';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br>";echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Proxima_Centauri' target='blank'>For more info >></a>";
                            }
                        }
                        if(isset($_POST["Barnard"])){
                            $query2=mysqli_query($conn,"select description from planets where name='Barnard Star';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Barnard' target='blank'>For more info >></a>";
                            }
                        }
                    ?>
                </p>
            </div>
        </div>
    </div>

</body>

</html>