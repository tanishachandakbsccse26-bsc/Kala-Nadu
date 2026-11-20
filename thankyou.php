<?php
$conn = new mysqli("localhost", "root", "", "kala_nadu");

if ($conn->connect_error) {
    die("Database connection failed");
}

$sql = "SELECT * FROM feedback ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Thank You | KALA NADU</title>

<style>

body {
    background-color: #F5F0E8;
    font-family: Arial, sans-serif;
    text-align: center;
    padding: 55px 20px;
    margin: 0;
}

/* THANK YOU SECTION */

.thank-you {
    background-color: white;
    border: 2px solid #D98232;
    border-radius: 18px;
    padding: 45px 35px;
    max-width: 650px;
    margin: auto;
}

.thank-you h1 {
    color: #D98232;
    font-size: 42px;
    margin-bottom: 12px;
}

.thank-you h2 {
    color: #842F1D;
    font-size: 24px;
    margin-bottom: 22px;
}

.thank-you p {
    color: #842F1D;
    font-size: 17px;
    line-height: 1.8;
}

.success {
    background-color: #F8EDE0;
    padding: 13px;
    border-radius: 8px;
    font-weight: bold;
    margin: 22px 0;
}

.closing {
    color: #D98232 !important;
    font-weight: bold;
    font-size: 18px !important;
    margin-top: 25px;
}

/* BUTTONS */

a, button {
    display: inline-block;
    background-color: #842F1D;
    color: white;
    padding: 13px 25px;
    text-decoration: none;
    border: none;
    border-radius: 7px;
    margin: 10px;
    cursor: pointer;
    font-size: 15px;
}

a:hover, button:hover {
    background-color: #D98232;
}

/* FEEDBACK RECORDS */

.records {
    max-width: 1050px;
    margin: 60px auto;
}

.records h2 {
    color: #842F1D;
    font-size: 29px;
    margin-bottom: 25px;
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: white;
}

th {
    background-color: #842F1D;
    color: white;
    padding: 16px 12px;
    font-size: 15px;
}

td {
    padding: 15px 12px;
    color: #842F1D;
    border-bottom: 1px solid #E5DED4;
    font-size: 14px;
}

tr:nth-child(even) {
    background-color: #F8EDE0;
}

/* FOOTER */

footer {
    margin-top: 55px;
    padding: 20px;
    color: #842F1D;
    font-size: 14px;
}

/* MOBILE VIEW */

@media (max-width: 600px) {

    body {
        padding: 30px 12px;
    }

    .thank-you {
        padding: 30px 18px;
    }

    .thank-you h1 {
        font-size: 34px;
    }

    .records {
        overflow-x: auto;
    }

    table {
        min-width: 750px;
    }
}

</style>
</head>

<body>

<!-- THANK YOU SECTION -->

<div class="thank-you">

    <h1>Thank You!</h1>

    <h2>Your Voice Matters to Us</h2>

    <p class="success">
        Your feedback has been submitted successfully.
    </p>

    <p>
        We truly appreciate your time and interest in KALA NADU.
        Your thoughts help us share and celebrate the rich
        art, traditions and cultural heritage of Karnataka.
    </p>

    <p>
        We hope you enjoyed exploring the beauty and diversity
        of Karnataka through our website.
    </p>

    <p class="closing">
        Keep Exploring. Keep Discovering.
        Keep Celebrating Karnataka!
    </p>

    <button onclick="showMessage()">Click Here</button>

    <br>

    <a href="home.html">Back to Home</a>

</div>


<!-- FEEDBACK RECORDS SECTION -->

<div class="records">

    <h2>Visitor Feedback Records</h2>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Pages Liked</th>
            <th>Rating</th>
            <th>Suggestions</th>
        </tr>

        <?php

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {

        ?>

        <tr>

            <td><?php echo htmlspecialchars($row["id"]); ?></td>

            <td><?php echo htmlspecialchars($row["name"]); ?></td>

            <td><?php echo htmlspecialchars($row["email"]); ?></td>

            <td><?php echo htmlspecialchars($row["liked"]); ?></td>

            <td><?php echo htmlspecialchars($row["rating"]); ?></td>

            <td><?php echo htmlspecialchars($row["message"]); ?></td>

        </tr>

        <?php
            }

        } else {

        ?>

        <tr>
            <td colspan="6">No feedback submitted yet.</td>
        </tr>

        <?php
        }
        ?>

    </table>

</div>


<!-- FOOTER -->

<footer>

    <p><b>ಕಲಾ ನಾಡು | KALA NADU</b></p>

    <p>The Land of Art. Our Roots. Our Karnataka.</p>

</footer>


<script>

function showMessage() {
    alert("Thank you for being a part of KALA NADU!");
}

</script>

<?php
$conn->close();
?>

</body>
</html>