<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>

<body>

    <?php include('header.php'); ?>
    <?php include('menu.php');
    include('db.php');


    $res1 = mysqli_query($con, "SELECT * from users ");
    $u = mysqli_num_rows($res1);

    $res2 = mysqli_query($con, "SELECT * from blogs ");
    $b = mysqli_num_rows($res2);

    $res3 = mysqli_query($con, "SELECT * from fooditems ");
    $f = mysqli_num_rows($res3);

    $res4 = mysqli_query($con, "SELECT * from foodlog ");
    $l = mysqli_num_rows($res4);

    ?>



    <div class="restsection">
        <h1 style="text-align: center; color: #333">Dashboard </h1>

        <div class="row">

            <div class="dashboard">
                <div class="card bg-success">
                    <h2>Total Users</h2>
                    <p> <?php echo $u; ?> </p>
                </div>

                <div class="card">
                    <h2>Food Items</h2>
                    <p><?php echo $f; ?></p>
                </div>

                <div class="card">
                    <h2>Blogs</h2>
                    <p> <?php echo  $b; ?></p>
                </div>
                <br><br>
                <div class="card">
                    <h2>Food Items Logged By user</h2>
                    <p> <?php echo  $l; ?></p>
                </div>


            </div>


        </div>

    </div>
</body>

</html>


<style type="text/css">
    .restsection {
        background-color: white;
        padding: 40px;
        margin-left: 200px;
        margin-top: 70px;
        height: 1000px;
    }

    .dashboard {
        display: flex;
        /*justify-content: space-around;
    align-items: center;
    flex-wrap: nowrap;*/
        padding: 20px;
        background-color:lightgrey;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .card {
        flex: 1;
        text-align: center;
        padding: 20px;
        /* background-color: #fff; */
        background-image:url('https://img.freepik.com/free-vector/network-mesh-wire-digital-technology-background_1017-27428.jpg?size=626&ext=jpg&ga=GA1.2.1159437748.1689699623&semt=ais');
        border-radius: 5px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.7);
    }

    .card h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .card p {
        font-size: 18px;
    }
</style>