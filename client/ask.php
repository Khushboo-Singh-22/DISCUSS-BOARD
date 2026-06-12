<div class="container">

    <h1 class="heading text-center mt-3 mb-4">
        Ask A Question
    </h1>

    <form action="./server/requests.php" method="POST">

        <!-- Title -->

        <div class="col-md-6 offset-md-3 mb-3">
            <label class="form-label">
                Question Title
            </label>

            <input
                type="text"
                name="title"
                class="form-control"
                placeholder="Enter your question title"
                required>
        </div>

        <!-- Description -->

        <div class="col-md-6 offset-md-3 mb-3">
            <label class="form-label">
                Description
            </label>

            <textarea
                name="description"
                rows="6"
                class="form-control"
                placeholder="Describe your question..."
                required></textarea>
        </div>

        <!-- Category -->

        <div class="col-md-6 offset-md-3 mb-3">
            <label class="form-label">
                Category
            </label>

            <?php
            include("category.php");
            ?>
        </div>

        <!-- Button -->

        <div class="col-md-6 offset-md-3 mb-3">
            <button
                type="submit"
                name="ask"
                class="btn btn-primary w-100">

                Ask Question

            </button>
        </div>

    </form>

</div>