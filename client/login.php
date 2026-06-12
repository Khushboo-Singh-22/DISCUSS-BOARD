<div class="container">

    <h1 class="heading text-center mt-3 mb-4">Login</h1>

    <form action="./server/requests.php" method="POST">

        <div class="col-md-6 offset-md-3 mb-3">
            <label for="email" class="form-label">User Email</label>
            <input
                type="email"
                name="email"
                class="form-control"
                id="email"
                placeholder="Enter user email"
                required>
        </div>

        <div class="col-md-6 offset-md-3 mb-3">
            <label for="password" class="form-label">User Password</label>
            <input
                type="password"
                name="password"
                class="form-control"
                id="password"
                placeholder="Enter user password"
                required>
        </div>

        <div class="col-md-6 offset-md-3 mb-3">
            <button type="submit" name="login" class="btn btn-primary w-100">
                Login
            </button>
        </div>

    </form>

</div>