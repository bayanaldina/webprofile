<?php include 'partials/header.php'; ?>

<div class="container">
    <div class="row min-vh-100 align-items-center justify-content-center">
        <div class="col-lg-6">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold">Get In Touch</h2>
                <p class="lead text-muted">Have a question or want to work together? Leave a message below.</p>
            </div>
            <form id="contact-form" action="save_message.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="sender_name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="sender_email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message_content" rows="5" required></textarea>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'partials/footer.php'; ?>
