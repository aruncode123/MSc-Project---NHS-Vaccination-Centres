


<!-- Piece of code that represents news data in the form of table from database. -->


<div class="container-fluid">
        <div class="row mb-5">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <a href="addNews.php" class="btn btn-md btn-warning float-right">Add News</a>
            <div class="container mt-5">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>News Title</th>
                                <th>News Description</th>
                                <th>News Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include 'php/dbConnect.php';
                            
                                $sql="SELECT * FROM News";
                                $result=mysqli_query($connection,$sql);
                                if(mysqli_num_rows($result)>0)
                                {
                                    while($row = mysqli_fetch_array($result))
                                    { 
                                        $id=$row["id"];
                            ?>
                            <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['newsTitle']; ?></td>
                                <td><?php  echo $row['newsDescription']; ?></td>
                                <td><?php  echo $row['newsDate']; ?></td>
                                <td><button class="btn btn-success news-edit-btn" data-toggle="modal" data-target="#newsModal" id="<?php echo $row['id'];?>">Edit</button></td>
                                <td><button class="btn btn-danger" onclick="location.href='Php/deleteNews.php?id=<?php echo $row["id"]; ?>';">Delete</button></td>
                            </tr>
                            <?php
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
    </div>
</div>


 