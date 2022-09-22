<?php
 
    if(isset($_POST['add'])){
        include('../db.php');
        $nameSeri = $_POST['name'];
        $genreSeri = implode(", ", $_POST['genre']);
        $realeseSeri = $_POST['realese'];
        $episodeSeri = $_POST['episode'];
        $seasonSeri = $_POST['season'];
        $synopsisSeri = $_POST['synopsis'];
        
        $query = mysqli_query($con,
        "INSERT INTO series(name, genre, realese, episode, season, synopsis)
            VALUES
        ('$nameSeri', '$genreSeri', '$realeseSeri', '$episodeSeri', '$seasonSeri', '$synopsisSeri')")
        or die(mysqli_error($con)); 

        if($query){
            echo
                '<script>
                alert("Add Success");
                window.location = "../page/listSeriesPage.php"
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