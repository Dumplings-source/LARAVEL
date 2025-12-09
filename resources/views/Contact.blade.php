<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Modern Laravel App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #f8f9fa; }
        .map-placeholder { background: #e9ecef; border-radius: 8px; transition: background 0.3s ease; }
        .map-placeholder:hover { background: #dee2e6; }
        .form-control:focus { border-color: #007bff; box-shadow: 0 0 0 0.2rem rgba(0,123,255,0.25); }
        .btn-submit { background: linear-gradient(45deg, #007bff, #0056b3); border: none; }
    </style>
</head>
<body>
    <section class="container my-5">
        <div class="row">
            <div class="col-md-6 mb-4">
                <h1>Get in Touch</h1>
                <p class="text-muted">We'd love to hear from you. Share your thoughts or inquiries below.</p>
                <form id="contactForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-submit text-white px-4">Send Message</button>
                </form>
            </div>
            <div class="col-md-6">
                <h3>Our Location</h3>
                <div class="map-placeholder p-4 text-center mb-3" style="height: 200px;">
                    <p>Global Headquarters<br>Virtual Space, Digital Realm</p>
                    <small>📍 Coordinates: Innovation Ave, Tech City</small>
                </div>
                <div>
                    <h5>Connect With Us</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">📧 info@yourapp.com</li>
                        <li class="mb-2">📞 +1-234-567-8900</li>
                        <li>🌐 Follow us on social media</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message! It has been submitted successfully.');
            this.reset();
        });
    </script>
</body>
</html>