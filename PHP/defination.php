<?php
    $conn = mysqli_connect("localhost","root","","wp_project");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Spacify</title>
    <link rel="icon" href="images/logo1.png" type="image/icon type">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
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
                        <li><input class="planets-btn" type="submit" value="Moon" name="Moon"></li>
                        <li><input class="planets-btn" type="submit" value="Meteor" name="Meteor"></li>
                        <li><input class="planets-btn" type="submit" value="Asteroid" name="Asteroid"></li>
                        <li><input class="planets-btn" type="submit" value="Comet" name="Comet"></li>
                        <li><input class="planets-btn" type="submit" value="Black Hole" name="Black_Hole"></li>
                        <li><input class="planets-btn" type="submit" value="Supernova" name="Supernova"></li>
                        <li><input class="planets-btn" type="submit" value="Nebula" name="Nebula"></li>
                        <li><input class="planets-btn" type="submit" value="Kuiper Belt" name="Kuiper"></li>
                        <li><input class="planets-btn" type="submit" value="Oort Cloud" name="Oort"></li>        
                    </ul>
                </form>
        </div>

        <div class="card-section">
            <div class="def-card">
                <h1 class="word">
                <?php
                        if((!isset($_POST["Moon"])) && (!isset($_POST["Meteor"])) && (!isset($_POST["Asteroid"])) && (!isset($_POST["Comet"])) && (!isset($_POST["Black_Hole"]) && (!isset($_POST["Supernova"])) && (!isset($_POST["Nebula"])) && (!isset($_POST["Kuiper"])) && (!isset($_POST["Oort"])))){
                            $query1=mysqli_query($conn,"select name from celestialbodies where name='Moon';");
                            while($row=mysqli_fetch_row($query1)){
                                echo '<h1>'.$row[0]."</h1>";
                            }   
                        }
                        
                        if(isset($_POST["Moon"])){
                            $query1=mysqli_query($conn,"select name from celestialbodies where name='Moon';");
                            while($row=mysqli_fetch_row($query1)){
                                echo '<h1>'.$row[0]."</h1>";
                            }       
                        }
                        if(isset($_POST["Asteroid"])){
                            $query1=mysqli_query($conn,"select name from celestialbodies where name='Asteroid';");
                            while($row=mysqli_fetch_row($query1)){
                                echo '<h1>'.$row[0]."</h1>";
                            }       
                        }

                        if(isset($_POST["Comet"])){
                            $query1=mysqli_query($conn,"select name from celestialbodies where name='Comet';");
                            while($row=mysqli_fetch_row($query1)){
                                echo '<h1>'.$row[0]."</h1>";
                            } 
                        }

                        if(isset($_POST["Black_Hole"])){
                            $query1=mysqli_query($conn,"select name from celestialbodies where name='Black Hole';");
                            while($row=mysqli_fetch_row($query1)){
                                echo "<h1>".$row[0]."</h1>";
                            }
                        }

                        if(isset($_POST["Supernova"])){
                            $query1=mysqli_query($conn,"select name from celestialbodies where name='Supernova';");
                            while($row=mysqli_fetch_row($query1)){
                                echo "<h1>".$row[0]."</h1>";
                            }
                        }

                        if(isset($_POST["Nebula"])){
                            $query1=mysqli_query($conn,"select name from celestialbodies where name='Nebula';");
                            while($row=mysqli_fetch_row($query1)){
                                echo "<h1>".$row[0]."</h1>";
                            }
                        }

                        if(isset($_POST["Meteor"])){
                            $query1=mysqli_query($conn,"select name from celestialbodies where name='Meteor';");
                            while($row=mysqli_fetch_row($query1)){
                                echo "<h1>".$row[0]."</h1>";
                            }
                        }

                        if(isset($_POST["Kuiper"])){
                            $query1=mysqli_query($conn,"select name from celestialbodies where name='Kuiper Belt';");
                            while($row=mysqli_fetch_row($query1)){
                                echo "<h1>".$row[0]."</h1>";
                            }
                        }

                        if(isset($_POST["Oort"])){
                            $query1=mysqli_query($conn,"select name from celestialbodies where name='Oort Cloud';");
                            while($row=mysqli_fetch_row($query1)){
                                echo "<h1>".$row[0]."</h1>";
                            }
                        }
                    ?>
                </h1>
                <div class="img">
                <?php
                        if((!isset($_POST["Moon"])) && (!isset($_POST["Meteor"])) && (!isset($_POST["Asteroid"])) && (!isset($_POST["Comet"])) && (!isset($_POST["Black_Hole"])) && (!isset($_POST["Supernova"])) && (!isset($_POST["Nebula"])) && (!isset($_POST["Kuiper"])) && (!isset($_POST["Oort"]))){
                            echo '<img src="images2\moon.png" alt="Moon image" class="word-img">';
                        }

                        if(isset($_POST["Moon"])){                            
                            echo '<img src="images2\moon.png" alt="Moon image" class="word-img">';
                        }       
                        if(isset($_POST["Meteor"])){                            
                            echo '<img src="images2\meteor.png" alt="Meteor image" class="word-img">';
                        }       
                        if(isset($_POST["Asteroid"])){                            
                            echo '<img src="images2\asteroid.png" alt="Asteroid image" class="word-img">';
                        }       
                        if(isset($_POST["Comet"])){                            
                            echo '<img src="images2\comet.png" alt="Comet image" class="word-img">';
                        }       
                        if(isset($_POST["Black_Hole"])){                            
                            echo '<img src="images2\blackhole.png" alt="Blackhole image" class="word-img">';
                        }       
                        if(isset($_POST["Supernova"])){                            
                            echo '<img src="images2\supernova.png" alt="Supernova image" class="word-img">';
                        }       
                        if(isset($_POST["Nebula"])){                            
                            echo '<img src="images2\nebula.png" alt="Nebula image" class="word-img">';
                        }       
                        if(isset($_POST["Kuiper"])){                            
                            echo '<img src="images2\kuiper.png" alt="Kuiper image" class="word-img">';
                        }       
                        if(isset($_POST["Oort"])){                            
                            echo '<img src="images2\oortcloud.png" alt="Oort image" class="word-img">';
                        }       
                    ?>

                    
                </div>
                <p class="meaning">
                <?php
                        if((!isset($_POST["Moon"])) && (!isset($_POST["Meteor"])) && (!isset($_POST["Asteroid"])) && (!isset($_POST["Comet"])) && (!isset($_POST["Black_Hole"]) && (!isset($_POST["Supernova"])) && (!isset($_POST["Nebula"])) && (!isset($_POST["Kuiper"])) && (!isset($_POST["Oort"])))){
                            $query2=mysqli_query($conn,"select description from celestialbodies where name='Moon';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br><br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Moon' target='blank'>For more info >></a>";
                            }
                        }

                        if(isset($_POST["Asteroid"])){
                            $query2=mysqli_query($conn,"select description from celestialbodies where name='Asteroid';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br><br>";
                                echo "<br><br><a class='studylinks' href='https://solarsystem.nasa.gov/asteroids-comets-and-meteors/asteroids/overview' target='blank'>For more info >></a>";
                            }
                        }
                        if(isset($_POST["Comet"])){
                            $query2=mysqli_query($conn,"select description from celestialbodies where name='Comet';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br><br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Comet' target='blank'>For more info >></a>";
                            }
                        }

                        if(isset($_POST["Black_Hole"])){
                            $query2=mysqli_query($conn,"select description from celestialbodies where name='Black Hole';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Black_hole' target='blank'>For more info >></a>";
                            }
                        }

                        if(isset($_POST["Supernova"])){
                            $query2=mysqli_query($conn,"select description from celestialbodies where name='Supernova';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Supernova' target='blank'>For more info >></a>";
                            }
                        }

                        if(isset($_POST["Nebula"])){
                            $query2=mysqli_query($conn,"select description from celestialbodies where name='Nebula';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Nebula' target='blank'>For more info >></a>";
                            }
                        }
                        if(isset($_POST["Oort"])){
                            $query2=mysqli_query($conn,"select description from celestialbodies where name='Oort Cloud';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Oort_cloud' target='blank'>For more info >></a>";
                            }
                        }
                        if(isset($_POST["Kuiper"])){
                            $query2=mysqli_query($conn,"select description from celestialbodies where name='Kuiper Belt';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Kuiper_belt' target='blank'>For more info >></a>";
                            }
                        }
                        if(isset($_POST["Moon"])){
                            $query2=mysqli_query($conn,"select description from celestialbodies where name='Moon';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Moon' target='blank'>For more info >></a>";

                            }
                        }
                        if(isset($_POST["Meteor"])){
                            $query2=mysqli_query($conn,"select description from celestialbodies where name='Meteor';");
                            while($row=mysqli_fetch_row($query2)){
                                echo $row[0]."<br>";
                                echo "<br><br><a class='studylinks' href='https://en.wikipedia.org/wiki/Meteoroid' target='blank'>For more info >></a>";
                            }
                        }
                    ?>
                </p>
            </div>
        </div>
    </div>

</body>

</html>