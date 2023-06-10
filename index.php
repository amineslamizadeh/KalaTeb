<!DOCTYPE html>
<?php
include "code/db-ettesal.php";
$natigeh = [];
$sql = @"select * from `tbl_kala`";
$result = $con->query($sql);
if ($result !== false && $result->num_rows > 0)
{
    while ($row = $result->fetch_assoc())
    {
        array_push($natigeh, $row);
    }
    $status = 1; //ok
}
$con->close();
?>


<html lang="fa-ir">
<head>
    <meta charset="UTF-8">
    <!--    <title>--><?php //echo NAM_NAMAYESHI_SITE; ?><!--</title>-->
    <title>کالا طب</title>

    <!--import bootstrap-->
    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
            integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <link rel="stylesheet" href="style/main.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body dir="rtl">
<div class="kadrFull">
    <!-------------------هدر سات -------------->
    <?php
    require "code/header.php";
    ?>

    <!-------------------تیتر -------------->
    <div class="container my-5">
        <h2 class="fs-4">
            تجهیزات پزشکی خانگی
        </h2>
    </div>

    <!-------------------مرتب سازی -------------->

    <div class="container d-flex justify-content-start">
        <div class="row">
            <div class="col"><span>مرتب سازی :</span></div>
            <div class="col">
                <div class="d-flex justify-content-start">
                    <div class="me-3 itemSort"><a href="#">پربازدیدترین</a></div>
                    <div class="me-3 itemSort"><a href="#">جدیدترین</a></div>
                    <div class="me-3 itemSort"><a href="#">ارزان‌ترین</a></div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <hr/>
    </div>


    <!-------------------کالاها -------------->
    <div class="container d-flex flex-wrap justify-content-start">

        <?php
        foreach ($natigeh as $value)
        {
            ?>
            <div class=" px-3 py-2 col-md-3  kadrItemKala">
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="card rounded itemKala">
                        <div class="ratio ratio-1x1">
                            <div class="card-img-top my-3 p-3 " style="text-align: center">
                                <img src="<?php echo $value["urlAks"]; ?>"
                                     width="100%" alt="<?php echo $value["nam"]; ?>">
                            </div>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text mb-4" style="font-size: 0.75rem;height: 36px;line-height: 1.5">
                                <?php echo $value["nam"]; ?>
                            </h3>

                            <div class="d-flex mb-4 justify-content-between align-items-center">
                                <div class="rounded-pill " style="font-size: 0.875rem;color:#ef394e">
                                    <span style="font-size: 0.75rem">تنها <?php echo $value["mojodi"]; ?> عدد در انبار باقی مانده</span>
                                </div>

                                <div>
                                    <span style="font-size: 0.875rem"><?php echo $value["emtiaz"]; ?></span>
                                    <span class="ps-2" style="font-size: 0.75rem;color: #f9bc00"><i
                                                class="fas fa-star"></i></span>
                                </div>

                            </div>


                            <div class="d-flex justify-content-between align-items-center " >
                                <div class="rounded-pill  <?php echo($value["takhfif"]>0 ? '' : 'invisible');  ?>" style="font-size: 0.875rem;color:#ef394e">
                                    <span>%</span>
                                    <span><?php echo $value["takhfif"]; ?></span>
                                </div>

                                <div>
                                    <span style="font-size: 0.875rem"><?php echo number_format($value["gheimat"] - (($value["gheimat"] * $value["takhfif"]) / 100)); ?></span>
                                    <span style="font-size: 0.75rem">تومان</span>
                                </div>

                            </div>

                            <div class="d-flex justify-content-end align-items-center">

                                <div class="text-decoration-line-through" style="height: 24px;">
                                    <span class="<?php echo($value["takhfif"]>0 ? '' : 'd-none');  ?>" style="font-size: 0.75rem;opacity: 0.5"><?php echo number_format($value["gheimat"]); ?> تومان</span>
                                </div>

                            </div>

                        </div>
                    </div>
                </a>
            </div>


            <?php
        }
        ?>


    </div>



    <?php
    require "code/footer.php";
    ?>

    <!-------------------مودال -------------->
    <div class="modal" id="exampleModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


</div>
</body>
</html>