<?php
$conn = new mysqli("localhost", "root", "", "kala_nadu");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];

    $liked = isset($_POST["like"]) ? implode(", ", $_POST["like"]) : "";

    $rating = $_POST["rating"];
    $feedback = $_POST["feedback"];

    $sql = "INSERT INTO feedback (name, email, liked, rating, message)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $liked, $rating, $feedback);

    if ($stmt->execute()) {
        header("Location: thankyou.php");
        exit();
    } else {
        echo "Error submitting feedback.";
    }

    $stmt->close();
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>KALA NADU - Feedback</title>

    <style>
         header {
             background: linear-gradient(to right, #842f1d, #d98232);
             color: white;
             text-align: left;
             padding: 16px 25px;
             display:flex;
             align-items:center;
             gap:10px;
             flex-wrap: wrap;
            }

        header h1 {
             font-size: 25px;
             margin:0 10px 0 0;
             color:white;
             text-align:left;
             white-space:nowrap;
             flex-shrink:0;
            }
        header p{
             margin:0 10px;
            font-size:15px;
            }

        nav {
            display: flex;
            justify-content: flex-end;
            margin-left: auto;
            flex-wrap: wrap;
            gap: 12px;
             }
       nav a {
             color: white;
             text-decoration: none;
             font-weight: bold;
             padding: 5px;
           }
         nav a:hover {
            color: #f5d36b;
            border-bottom: 2px solid #f5d36b;
         }

        body {
            background-color: #FFF4D6;
            font-family: Arial, sans-serif;
            color: saddlebrown;
        }

        h1 {
            text-align: center;
            color: saddlebrown;
        }
        h2{
            color: #d98232;
            font-size:32px;
        }

        p {
            text-align: center;
        }

        .feedback {
            background-color: lightblue;
            border: 2px solid orange;
            padding: 30px;
            width: 405px;
            max-width: 90%;
            margin: 20px auto;
            border-radius: 10px;
        }

        .feedback label {
            display: block;
            font-weight: bold;
            margin-top: 12px;
            margin-bottom: 10px;
            
        }

        .feedback input[type="text"],
        .feedback input[type="email"],
        .feedback textarea {
            display: block;
            width: 60%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid orange;
            border-radius: 5px;
        }

        .feedback textarea {
            height: 80px;
            resize: vertical;
        }

        .feedback input[type="checkbox"],
        .feedback input[type="radio"] {
            display:inline;
            font-weight:normal;
        }

        .feedback input[type="submit"],
        .feedback input[type="reset"] {
            padding: 10px 20px;
            margin-top: 15px;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }

        .feedback input[type="submit"] {
            background-color: darkorange;
        }

        .feedback input[type="reset"] {
            background-color: saddlebrown;
        }

        .feedback input[type="submit"]:hover {
            background-color: chocolate;
        }

        .feedback input[type="reset"]:hover {
            background-color: sienna;
        }

        h2 {
            text-align: center;
            color: darkorange;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: lightyellow;
        }

        th, td {
            border: 1px solid orange;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: darkorange;
            color: white;
        }
        footer {
           background-color: #54271d;
           color: white;
           text-align: center;
           padding: 18px;
        }

    </style>
</head>

<body>
 <header>
    <h1>ಕಲಾ ನಾಡು | KALA NADU</h1>
    <p>The Land of Art. Our Roots. Our Karnataka.</p>


    <nav>
      <a href="home.html">Home</a>
      <a href="art.html">Art & Traditions</a>
      <a href="culture.html">Culture & Lifestyle</a>
      <a href="hidden.html">Hidden Karnataka</a>
      <a href="quiz.php">Quiz</a>
    </nav>
</header>


    <h2>Share your Feedback</h2>

    <p>We would love to hear your thoughts about our website!</p>

    <div class="feedback">

        <form method="POST">

            <label>Name:</label>
            <input type="text" name="name"
                   placeholder="Enter your name" required>

            <label>Email:</label>
            <input type="email" name="email"
                   placeholder="Enter your email" required>

            <label>What did you like about our website?</label>

            <input type="checkbox" name="like[]" value="Home Page"> Home Page<br>
            <input type="checkbox" name="like[]" value="Art and Traditions"> Art & Traditions<br>
            <input type="checkbox" name="like[]" value="Culture and Lifestyle"> Culture & Lifestyle<br>
            <input type="checkbox" name="like[]" value="Hidden Karnataka"> Hidden Karnataka<br>

            <label>How would you rate our website?</label>

            <input type="radio" name="rating" value="Excellent" required> Excellent<br>
            <input type="radio" name="rating" value="Good"> Good<br>
            <input type="radio" name="rating" value="Average"> Average<br>
            <input type="radio" name="rating" value="Poor"> Poor<br>

            <label>Any suggestions for us?</label>
            <textarea name="feedback"
                      placeholder="Share your suggestions..."></textarea>

            <input type="submit" value="Submit Feedback">
            <input type="reset" value="Reset">

        </form>

    </div>

    


    ?>
        
       

    </table>
    <footer>

  <p>©️ 2026 KALA NADU | Celebrating the Heritage of Karnataka</p>

  <p>Explore • Experience • Celebrate</p>

</footer>

</body>
</html>