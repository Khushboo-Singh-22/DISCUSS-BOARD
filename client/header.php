<?php
$username = $_SESSION['user']['username'] ?? null;
$user_id = $_SESSION['user']['user_id'] ?? null;
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">

    <a class="navbar-brand fw-bold" href="./">
      Discuss
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        </li>

        <?php if ($username) { ?>
          <li class="nav-item">
            <a class="nav-link" href="./server/requests.php?logout=true">
              Logout(<?php echo ucfirst($username); ?>)
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?ask=true">Ask A Question</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?u-id=<?php echo $user_id; ?>">My Questions</a>
          </li>
        <?php } ?>

        <?php if (!$username) { ?>
          <li class="nav-item">
            <a class="nav-link" href="?login=true">Login</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="?signup=true">SignUp</a>
          </li>
        <?php } ?>

        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Questions</a>
        </li>

      </ul>
    </div>

    <form class="d-flex" action="./" method="GET">
      <input class="form-control me-2" name="search" type="search" placeholder="Search questions">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

  </div>
</nav>
