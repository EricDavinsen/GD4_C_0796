<?php
include '../component/sidebar.php';
    $id = $_GET['id']; // get id through query string

    $qry = mysqli_query($con,"select * from series where id='$id'"); // select query

    $data = mysqli_fetch_assoc($qry); // fetch data
    $name = $data["name"];
    $_SESSION['genre'] =$data["genre"];
    $realese = $data["realese"];
    $episode = $data["episode"];
    $season = $data["season"];
    $synopsis = $data["synopsis"];
?>

<div class="container p-3 m-4 h-100" style=" background-color: #FFFFFF; border-top: 5px solid #D40013;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4>Edit Series</h4>
    <hr>
    <form action="../process/editSeriesProcess.php?id=<?php echo $id; ?>" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input class="form-control" id="name" name="name">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Genre</label>
            <select class="form-select" aria-label="multiple select example" name="genre[]" id="genre" 
            multiple> 
                <?php
                    $array = array("Action", "Comedy", "Romance");
                    session_start();
                    $genreSelect = $_SESSION['genreSeries'];
                    foreach($array as $value=>$name)
                    {
                        if($name == $genreSelect)
                        {
                             echo "<option selected value='".$name."'>".$name."</option>";
                        }
                        else
                        {
                             echo "<option value='".$name."'>".$name."</option>";
                        }
                    }
                ?> 
                </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Realese</label>
            <input class="form-control" id="realese" name="realese">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Episode</label>
            <input class="form-control" id="episode" name="episode">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Season</label>
            <input class="form-control" id="season" name="season">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Synopsis</label>
            <input class="form-control" id="synopsis" name="synopsis">
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" name="edit">Edit Movies</button>
        </div>
    </form>
</div>

</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>