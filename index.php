<!DOCTYPE html>

<?php
include "head.php";
include "database.php";
?>
<?php
/*
        * Get Total Questions
        */

$query = "SELECT * FROM questions_tak";

//Get results
$results = $mysqli->query($query) or die($mysqli->error . __LINE__);
$total = $results->num_rows;
?>





<body>
    <main>
        <div class="container">
            <h2> Quiz </h2>
            <p>Fill with your quiz info!</p>
            <ul>
                <li><strong>Number of questions: </strong><?php echo $total; ?></li>
                <li><strong>Kind of quiz: </strong>Multiple-Choice</li>
                <li><strong>Expected time: </strong><?php echo $total * .5; ?> Minutes</li>
            </ul>
            <a href="question.php?n=1" class="start">Start Quiz</a>
        </div>
    </main>
</body>

</html>