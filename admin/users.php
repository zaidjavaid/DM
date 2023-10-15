<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>

<body>

    <?php include('header.php'); ?>
    <?php include('menu.php'); ?>
    <?php include('db.php'); ?>

    <div class="restsection">
        <h1 style="text-align: center; color: #333">All Users </h1>

        <?php
        $res = mysqli_query($con, "SELECT * FROM users ");

        if (mysqli_num_rows($res) > 0) {
            echo "<table  style='margin:30px;' class='table table-bordered table-striped' >";
            echo "<tr class='info'>";
            echo "<td> Name </td>";
            echo "<td> Email</td>";
            echo "<td> Age </td>";
            echo "<td> Gender </td>";
            echo "<td> Status</td>";

            echo "</tr>";

            while ($record = mysqli_fetch_assoc($res)) {
                echo "<tr>";

                echo "<td> " .  $record["name"] . "</td>";
                echo "<td>" . $record['email'] . "</td>";
                echo "<td>" . $record["age"] . "</td>";
                echo "<td>" . $record["gender"] . "</td>";
                echo "<td>" . $record["status"] . "</td>";


                echo "</tr>";
            }
            echo "</table>";
        } ?>


    </div>
</body>

</html>


<style type="text/css">
    .restsection {
        /* background-color: white; */
        background-image:url('https://img.freepik.com/premium-photo/scientific-molecule-background-with-flow-waves-medicine-science-technology-chemistry-wallpaper-o_230610-906.jpg?size=626&ext=jpg&ga=GA1.2.1159437748.1689699623&semt=ais');
        background-size:cover;
        background-repeat:no-repeat;
        padding: 40px;
        margin-left: 200px;
        margin-top: 70px;
        height: 1000px;
    }
</style>