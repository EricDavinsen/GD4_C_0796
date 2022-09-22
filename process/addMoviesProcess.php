<?php
 
    if(isset($_POST['add'])){
        include('../db.php');
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realese = $_POST['realese'];
        $season = $_POST['season'];
        
        $query = mysqli_query($con,
        "INSERT INTO movies(name, genre, realese, season)
            VALUES
        ('$name', '$genre', '$realese', '$season')")
        or die(mysqli_error($con)); 

        if($query){
            echo
                '<script>
                alert("Add Success");
                window.location = "../page/listMoviesPage.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Add Failed");
                </script>';
        }

    }else{
        echo
            '<script>
            window.history.back()
            </script>';
        }
?>