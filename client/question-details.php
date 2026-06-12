<div class="container">
    <h1 class="heading">Question</h1>

    <div class="row">
        <div class="col-8">

            <?php
            include("./common/db.php");

            $qid = intval($qid);

            $query = "SELECT * FROM questions WHERE id=$qid";
            $result = $conn->query($query);

            if($result && $result->num_rows > 0){

                $row = $result->fetch_assoc();
                $cid = $row['category_id'];

                echo "<h4 class='margin-bottom-15 question-title'>
                Question : ".$row['title']."</h4>";

                echo "<p class='margin-bottom-15'>".$row['description']."</p>";

                include("answers.php");
            ?>

            <form action="./server/requests.php" method="post">

                <input type="hidden"
                name="question_id"
                value="<?php echo $qid; ?>">

                <textarea
                name="answer"
                class="form-control margin-bottom-15"
                placeholder="Your answer..."
                required></textarea>

                <button
                type="submit"
                name="answerBtn"
                class="btn btn-primary">
                Write your answer
                </button>

            </form>

            <?php
            }
            ?>

        </div>

        <div class="col-4">

            <?php

            $categoryQuery="SELECT name FROM category WHERE id=$cid";
            $categoryResult=$conn->query($categoryQuery);

            if($categoryResult->num_rows>0){

                $categoryRow=$categoryResult->fetch_assoc();

                echo "<h1>".ucfirst($categoryRow['name'])."</h1>";
            }

            $query="SELECT * FROM questions
            WHERE category_id=$cid
            AND id!=$qid";

            $result=$conn->query($query);

            foreach($result as $row){

                $id=$row['id'];
                $title=$row['title'];

                echo "<div class='question-list'>
                <h4>
                <a href='?q-id=$id'>$title</a>
                </h4>
                </div>";
            }

            ?>

        </div>
    </div>
</div>