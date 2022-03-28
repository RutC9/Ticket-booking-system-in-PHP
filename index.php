<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Train Ticket Booking System</title>
    <link rel="stylesheet" href="./styles/index.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,500;0,700;1,300&display=swap"
        rel="stylesheet" />
    <!-- font end -->
</head>

<body>
    <?php include 'navigation.php' ?>

    <form method="post" class="form" action="search.php"
        style="display: flex;flex-direction: column;justify-content:space-between;align-items:center;width:100%">
        <section class="title">
            <div class="title_container">
                <h1>TRAIN TICKET BOOKING</h1>
                <p>authorised by IRCTC</p>
            </div>
            <div class="title_image">
                <img src="./images/image.png" alt="Title section svg" width="300px" />
            </div>
        </section>
        <section class="city_inputs">
            <div class="from">
                <h4>From</h4>
                <input type="text" id="from" name='from' />
            </div>
            <div class="to">
                <h4>To</h4>
                <input type="text" id='to' name='to' />
            </div>
        </section>
        <section class="date_input" style="margin: 20px 0;width:600px">
            <h4>Date of departure</h4>
            <input type="date" name="date" id="date" required />
            <div class="date_buttons">
                <button class="dt_btn">Today</button>
                <button class="dt_btn">Tomorrow</button>
            </div>
        </section>
        <input id="button" type="submit" class="search" name='submit' value="Search"><br><br>
    </form>

    <script>
    let from = document.getElementById("from");
    let to = document.getElementById("to");
    let date = document.getElementById("date");

    function search() {
        let from_city = from.value;
        let to_city = to.value;
        let travel_date = date.value;
        if (from_city == "" || to_city == "" || travel_date == "") {
            alert("Please enter all values");
        } else {
            location.href("../search_result.php");
        }
    }
    </script>


</body>

</html>