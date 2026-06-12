<select class="form-control" name="category" id="category" required>

    <option value="">Select A Category</option>

    <?php

    include_once(__DIR__ . "/../common/db.php");

    $query = "SELECT * FROM category";

    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {

        foreach ($result as $row) {

            $id = $row['id'];
            $name = ucfirst(htmlspecialchars($row['name']));

            echo "<option value='$id'>$name</option>";
        }

    } else {

        echo "<option disabled>No Category Found</option>";
    }

    ?>

</select>