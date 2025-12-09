<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Modern Laravel App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: linear-gradient(to bottom, #667eea 0%, #764ba2 100%); color: #333; }
        .timeline { position: relative; max-width: 800px; margin: 0 auto; }
        .timeline::after { content: ''; position: absolute; width: 6px; background: rgba(255,255,255,0.3); top: 0; bottom: 0; left: 50%; margin-left: -3px; }
        .timeline-item { padding: 10px 40px; position: relative; background: inherit; width: 50%; opacity: 0; transform: translateY(20px); transition: all 0.6s ease; }
        .timeline-item:nth-child(odd) { left: 0; }
        .timeline-item:nth-child(even) { left: 50%; }
        .timeline-item.visible { opacity: 1; transform: translateY(0); }
        .timeline-item::before { content: ''; position: absolute; width: 20px; height: 20px; right: -10px; background: #fff; border: 4px solid #667eea; top: 15px; border-radius: 50%; z-index: 1; }
        .timeline-item:nth-child(even)::before { left: -10px; right: inherit; }
    </style>
</head>
<body class="text-white">
    <section class="container my-5">
        <h1 class="text-center mb-5">Our Journey</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p class="lead text-center mb-5">Founded on principles of innovation and reliability, we harness Laravel to create exceptional digital experiences.</p>
                <div class="timeline">
                    <div class="timeline-item">
                        <h5>2023: Inception</h5>
                        <p>Launched with a vision to simplify complex workflows using open-source excellence.</p>
                    </div>
                    <div class="timeline-item">
                        <h5>2024: Expansion</h5>
                        <p>Integrated advanced features, serving over 1,000 users with unparalleled efficiency.</p>
                    </div>
                    <div class="timeline-item">
                        <h5>2025: Horizon</h5>
                        <p>Embracing future technologies to pioneer the next era of web development.</p>
                    </div>
                </div>
                <blockquote class="blockquote mt-5 text-center">
                    <p>"Innovation distinguishes between a leader and a follower."</p>
                    <footer class="blockquote-footer">Steve Jobs</footer>
                </blockquote>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        });
        document.querySelectorAll('.timeline-item').forEach(item => observer.observe(item));
    </script>
</body>
</html>