<?php
$score = 0;
$submitted = false;

if (isset($_POST["submit"])) {
    $submitted = true;

    if (isset($_POST["q1"]) && $_POST["q1"] == "Bengaluru") {
        $score++;
    }

    if (isset($_POST["q2"]) && $_POST["q2"] == "Yakshagana") {
        $score++;
    }

    if (isset($_POST["q3"]) && $_POST["q3"] == "Mysuru Dasara") {
        $score++;
    }

    if (isset($_POST["q4"]) && $_POST["q4"] == "Hampi") {
        $score++;
    }

    if (isset($_POST["q5"]) && $_POST["q5"] == "Bisi Bele Bath") {
        $score++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>KALA NADU | Heritage Quiz</title>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #FFFAF0;
    color: #43251C;
}

/* Header */

header {
      background: linear-gradient(to right, #842f1d, #d98232);
      color: white;
      text-align: left;
      padding: 16px 35px;
      display:flex;
      align-items:center;
    }

header h1 {
      font-size: 25px;
      margin:0 10px 0 0;
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
  gap: 18px;
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

/* Quiz Container */


.container {
    width: 85%;
    max-width: 850px;
    margin: 35px auto;
    background-color: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 3px 12px rgba(0,0,0,0.12);
}

.container h1 {
    text-align: center;
    color: #842F1D;
    margin-bottom: 12px;
}

.intro {
    text-align: center;
    color: #725347;
    margin-bottom: 25px;
    line-height: 1.6;
}

/* Questions */

.question {
    background-color: #FFF5E6;
    padding: 20px;
    margin-bottom: 20px;
    border-left: 5px solid #D98232;
    border-radius: 8px;
}

.question h3 {
    color: #641E16;
    margin-bottom: 14px;
}

.question label {
    display: block;
    margin: 11px 0;
    cursor: pointer;
}

input[type="radio"] {
    margin-right: 9px;
    accent-color: #842F1D;
}

/* Button */

button {
    display: block;
    margin: 28px auto 0;
    padding: 14px 32px;
    background-color: #842F1D;
    color: white;
    border: none;
    border-radius: 7px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background-color: #D98232;
    transform: scale(1.04);
}

/* Result */

.result {
    text-align: center;
    background-color: #E8F0E3;
    color: #263D2B;
    padding: 25px;
    margin-top: 28px;
    border-radius: 9px;
}

.result h2 {
    color: #263D2B;
    margin-bottom: 10px;
}

.result p {
    margin-top: 8px;
}

/* Footer */

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
     <a href="feedback.php">Feedback</a>
  </nav>
</header>

<div class="container">

    <h1>🏆 Explore Karnataka – Heritage Challenge</h1>

    <p class="intro">
        How well do you know Karnataka?
        Take this fun challenge and discover how much you know
        about its history, culture, traditions and heritage!
    </p>

    <form method="POST" action="quiz.php">

        <div class="question">
            <h3>1. What is the capital of Karnataka?</h3>

            <label><input type="radio" name="q1" value="Bengaluru" required> Bengaluru</label>
            <label><input type="radio" name="q1" value="Mysuru"> Mysuru</label>
            <label><input type="radio" name="q1" value="Hubballi"> Hubballi</label>
            <label><input type="radio" name="q1" value="Mangaluru"> Mangaluru</label>
        </div>

        <div class="question">
            <h3>2. Which traditional dance is famous in Karnataka?</h3>

            <label><input type="radio" name="q2" value="Yakshagana" required> Yakshagana</label>
            <label><input type="radio" name="q2" value="Kathak"> Kathak</label>
            <label><input type="radio" name="q2" value="Garba"> Garba</label>
            <label><input type="radio" name="q2" value="Bhangra"> Bhangra</label>
        </div>

        <div class="question">
            <h3>3. Which festival is celebrated grandly in Mysuru?</h3>

            <label><input type="radio" name="q3" value="Mysuru Dasara" required> Mysuru Dasara</label>
            <label><input type="radio" name="q3" value="Onam"> Onam</label>
            <label><input type="radio" name="q3" value="Bihu"> Bihu</label>
            <label><input type="radio" name="q3" value="Pongal"> Pongal</label>
        </div>

        <div class="question">
            <h3>4. Which place is famous for ancient ruins in Karnataka?</h3>

            <label><input type="radio" name="q4" value="Hampi" required> Hampi</label>
            <label><input type="radio" name="q4" value="Coorg"> Coorg</label>
            <label><input type="radio" name="q4" value="Gokarna"> Gokarna</label>
            <label><input type="radio" name="q4" value="Udupi"> Udupi</label>
        </div>

        <div class="question">
            <h3>5. Which is a famous traditional food of Karnataka?</h3>

            <label><input type="radio" name="q5" value="Mysore pak" required> Mysore pak</label>
            <label><input type="radio" name="q5" value="Ragi Mudde"> Rag Mudde</label>
            <label><input type="radio" name="q5" value="Masala Dosa">Masala dosa</label>
            <label><input type="radio" name="q5" value="Bisi bele bath"> Bisi bele bath</label>
        </div>

        <button type="submit" name="submit">Unlock My Result!</button>

    </form>

    <?php
    if ($submitted) {

        echo "<div class='result' id='quizResult'>";

        echo "<h2>Your Score: $score / 5</h2>";

        if ($score == 5) {
            echo "<p>Excellent! You are a Karnataka Heritage Expert!</p>";
        }
        elseif ($score >= 3) {
            echo "<p>Great job! You know Karnataka's heritage well!</p>";
        }
        else {
            echo "<p>Good try! Keep exploring the beautiful heritage of Karnataka!</p>";
        }

        echo "</div>";
    }
    ?>

</div>

<footer>

  <p>©️ 2026 KALA NADU | Celebrating the Heritage of Karnataka</p>

  <p>Explore • Experience • Celebrate</p>

</footer>
<?php 
if ($submitted) { ?>
<script>
document.getElementById("quizResult").scrollIntoView({
    behavior: "smooth",
    block: "center"
});
</script>
<?php } ?>


</body>
</html>
