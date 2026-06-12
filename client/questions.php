<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="heading">Questions</h1>

            <?php
            include_once(__DIR__ . "/../common/db.php");

            if (!$conn) {
                die("Database connection failed");
            }

            if (isset($_GET["c-id"])) {
                $cid = intval($_GET["c-id"]);
                $query = "SELECT * FROM questions WHERE category_id = $cid";

            } elseif (isset($_GET["u-id"])) {
                $uid = intval($_GET["u-id"]);
                $query = "SELECT * FROM questions WHERE user_id = $uid";

            } elseif (isset($_GET["latest"])) {
                $query = "SELECT * FROM questions ORDER BY id DESC";

            } elseif (isset($_GET["search"])) {
                $search = $conn->real_escape_string($_GET["search"]);
                $query = "SELECT * FROM questions WHERE title LIKE '%$search%'";

            } else {
                $query = "SELECT * FROM questions";
            }

            $result = $conn->query($query);

            if (!$result) {
                die("Query failed: " . $conn->error);
            }

            if ($result->num_rows > 0) {
                foreach ($result as $row) {
                    $title = htmlspecialchars($row['title']);
                    $id = $row['id'];

                    echo "<div class='row question-list'>
                            <h4 class='my-question'>
                                <a href='?q-id=$id'>$title</a>";

                    if (isset($_GET["u-id"])) {
                        echo " <a href='./server/requests.php?delete=$id'>Delete</a>";
                    }

                    echo "</h4>
                          </div>";
                }
            } else {
                echo "<p>No questions found.</p>";
            }
            ?>
        </div>

        <div class="col-4">
            <?php include(__DIR__ . '/categorylist.php'); ?>
        </div>
    </div>
</div>