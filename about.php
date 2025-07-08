<?php 
include 'partials/header.php'; 

$social_res = mysqli_query($conn, "SELECT * FROM social_media ORDER BY id");
$skills_res = mysqli_query($conn, "SELECT * FROM skills ORDER BY id");
$projects_res = mysqli_query($conn, "SELECT * FROM projects ORDER BY id DESC");
?>

<div class="container">
       <div class="row min-vh-100 align-items-center">
        <div class="col-lg-10 mx-auto">
            <div class="row align-items-center">
                <div class="col-lg-5 text-center">
                    <img src="assets/images/<?php echo htmlspecialchars($profile['photo_url']); ?>" alt="Foto Profil" class="img-fluid rounded-circle profile-photo-main">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0 ps-lg-5">
                    <h2 class="display-5 fw-bold mb-3">About Me</h2>
                    <p class="lead text-muted"><?php echo nl2br(htmlspecialchars($profile['about_me'])); ?></p>
                    
                    <h3 class="mt-5 mb-3">My Skills</h3>
                    <div class="skills-list d-flex flex-wrap gap-2">
                        <?php while($skill = mysqli_fetch_assoc($skills_res)): ?>
                            <span class="badge rounded-pill text-bg-light px-3 py-2"><?php echo htmlspecialchars($skill['skill_name']); ?></span>
                        <?php endwhile; ?>
                    </div>

                    <div class="social-icons my-4">
                        <?php while($social = mysqli_fetch_assoc($social_res)): ?>
                            <a href="<?php echo htmlspecialchars($social['link_url']); ?>" target="_blank" title="<?php echo htmlspecialchars($social['platform']); ?>">
                                <i class="<?php echo htmlspecialchars($social['icon_class']); ?>"></i>
                            </a>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="projects" class="py-5 border-top">
        <h2 class="display-5 fw-bold text-center mb-5">My Projects</h2>
        <div class="row g-4">
            <?php if(mysqli_num_rows($projects_res) > 0): ?>
                <?php while($project = mysqli_fetch_assoc($projects_res)): ?>
                    <div class="col-md-6">
                        <div class="card project-card h-100">
                            <img src="assets/images/<?php echo htmlspecialchars($project['image_url']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($project['title']); ?>">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fw-bold"><?php echo htmlspecialchars($project['title']); ?></h5>
                                <p class="card-text text-muted"><?php echo htmlspecialchars($project['description']); ?></p>
                                <a href="<?php echo htmlspecialchars($project['link_url']); ?>" class="btn btn-outline-primary mt-auto" target="_blank">View Project</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                 <div class="col-12 text-center text-muted">No projects to display yet.</div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>
