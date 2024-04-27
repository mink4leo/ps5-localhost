<style>
    .navbar {
        background: rgb(9, 4, 97);
        background: linear-gradient(90deg, rgba(9, 4, 97, 1) 0%, rgba(135, 8, 191, 1) 53%, rgba(226, 14, 202, 1) 100%);
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="ps_manage.php">THANNAM POOMSAE SCORE v3.5</a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
    </div>
    <?php if (empty($page)) { ?>
        <form class="d-flex" role="search" method="POST">
            <input class="form-control me-2 sm" type="search" name="keyword" aria-label="Search" autofocus="autofocus">
            <!-- <button class="btn btn-success" type="submit">+</button> -->
        </form>
    <?php } ?>
</nav>