<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Modern Laravel App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); }
        .hero { background: linear-gradient(rgba(0,123,255,.8), rgba(0,123,255,.8)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><polygon fill="%23ffffff" points="0,1000 1000,0 1000,1000"/></svg>'); min-height: 60vh; display: flex; align-items: center; }
        .feature-card { transition: transform 0.3s ease, box-shadow 0.3s ease; }
        .feature-card:hover { transform: translateY(-10px); box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <section class="hero text-white text-center py-5">
        <div class="container">
            <h1 class="display-4 fw-bold animate__animated animate__fadeIn">Discover Our Laravel-Powered World</h1>
            <p class="lead animate__animated animate__fadeInUp">A modern application built with elegance and efficiency. Explore features that redefine your experience.</p>
            <a href="about.html" class="btn btn-light btn-lg animate__animated animate__pulse animate__infinite">Learn More</a>
        </div>
    </section>
    <section class="container my-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card feature-card h-100 text-center p-4 border-0 shadow-sm">
                    <h3>Scalable Architecture</h3>
                    <p>Leverage Laravel's robust framework for seamless growth and performance.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card feature-card h-100 text-center p-4 border-0 shadow-sm">
                    <h3>Intuitive Design</h3>
                    <p>Crafted with user-centric principles to ensure effortless navigation.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card feature-card h-100 text-center p-4 border-0 shadow-sm">
                    <h3>Innovative Solutions</h3>
                    <p>Integrate cutting-edge tools to solve real-world challenges.</p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</body>
</html>