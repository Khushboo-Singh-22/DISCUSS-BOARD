<h5>Answers:</h5>

<?php 
$qid = intval($qid);

$query = "SELECT * FROM answers WHERE question_id = $qid";
$result = $conn->query($query);

if ($result && $result->num_rows > 0) {
    foreach ($result as $row) {
        $answer = htmlspecialchars($row['answer']);

        echo "<div class='row'>
                <p class='answer-wrapper'>$answer</p>
              </div>";
    }
} else {
    echo "<p>No answers yet.</p>";
}
?>