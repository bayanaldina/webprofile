<?php include 'partials/header.php'; ?>

<div class="container">
    <div class="row min-vh-100 align-items-center">
        <div class="col-lg-10 mx-auto">
            <div class="row align-items-center">
                <div class="col-lg-5 text-center">
                    <img src="assets/images/<?php echo htmlspecialchars($profile['photo_url']); ?>" alt="Foto Profil" class="img-fluid rounded-circle profile-photo-main">
                </div>

                <div class="col-lg-7 text-center text-lg-start mt-4 mt-lg-0 ps-lg-5">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Hi, I'm <br>
                        <span class="text-primary"><?php echo htmlspecialchars($profile['name']); ?></span>
                    </h1>
                    <p class="lead text-muted mb-4"><?php echo htmlspecialchars($profile['introduction']); ?></p>
                    <div class="d-flex flex-column flex-md-row gap-2 justify-content-center justify-content-lg-start">
                        <a href="about.php" class="btn btn-primary btn-lg">More About Me</a>
                        <a href="about.php#projects" class="btn btn-outline-primary btn-lg">My Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>
