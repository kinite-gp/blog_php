<?php while ($row = mysqli_fetch_array($posts)) { ?>

    <a>
       <div class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true" id="center">
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
                <h6 class="mb-0"><?php echo $row["user"] ?></h6>
                <span class="d-inline-block text-truncate"
                      style="max-width: 150px;"><?php echo $row["comment"] ?></span>
            </div>
            <small class="text-nowrap"><a class="btn btn-primary" href="publish_comment.php?id=<?php echo $row["id"] ?>">Publish</a><a class="btn btn-danger" href="drop_comment.php?id=<?php echo $row["id"] ?>">Drop</a></small>
        </div>
       </div>
    </a>


<?php } ?>

    <nav aria-label="..." id="pagination">
        <ul class="pagination">
            <?php if ($page == 1) { ?>
                <li class="page-item disabled">
                    <a class="page-link" tabindex="-1">Previous</a>
                </li>
            <?php } else { ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $page - 1 ?>">Previous</a>
                </li>
            <?php } ?>

            <?php for ($page = 1; $page <= $number_of_page; $page++) { ?>
                <li class="page-item"><a class="page-link" href="?page=<?php echo $page ?>"><?php echo $page ?></a></li>
            <?php } ?>
            <?php if ($page == $number_of_page or $page > $number_of_page) { ?>
                <li class="page-item disabled">
                    <a class="page-link" tabindex="-1">Next</a>
                </li>
            <?php } else { ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $page + 1 ?>">Next <?php echo $page ?></a>
                </li>
            <?php } ?>

        </ul>
    </nav>
<?php
