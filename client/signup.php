<div class="container">

    <h1 class="heading text-center mt-3 mb-4">
        Signup
    </h1>

    <form action="./server/requests.php" method="POST">

        <div class="col-md-6 offset-md-3 mb-3">
            <label class="form-label">User Name</label>
            <input
                type="text"
                name="username"
                class="form-control"
                placeholder="Enter user name"
                required>
        </div>

        <div class="col-md-6 offset-md-3 mb-3">
            <label class="form-label">User Email</label>
            <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Enter user email"
                required>
        </div>

        <div class="col-md-6 offset-md-3 mb-3">
            <label class="form-label">User Password</label>
            <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Enter user password"
                required>
        </div>

        <div class="col-md-6 offset-md-3 mb-3">
            <label class="form-label">User Address</label>
            <input
                type="text"
                name="address"
                class="form-control"
                placeholder="Enter user address"
                required>
        </div>

        <div class="col-md-6 offset-md-3 mb-3">
            <button
                type="submit"
                name="signup"
                class="btn btn-primary w-100">

                Signup

            </button>
        </div>

    </form>

</div>