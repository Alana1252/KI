<link rel="icon" href="images/logo/logo-ki.png">
<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">KEDAI INDONESIA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto ftco-navbar-light">
                <li class="nav-item"><a href="/home" class="nav-link">Home</a></li>
                <li class="nav-item "><a href="/about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
<div class="absolute ">
    <a href="#" class="mouse-icon">
        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
    </a>
</div>
<!-- Add this script after including jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        // Get the current page URL
        var currentURL = window.location.pathname;

        // Loop through each navigation item and compare with the current page URL
        $(".navbar-nav .nav-item").each(function() {
            var linkURL = $(this).find(".nav-link").attr("href");

            // Check if the link URL is the same as the current page URL
            if (currentURL === linkURL) {
                // Add the "active" class to the matching nav-item
                $(this).addClass("active");
            }
        });
    });
</script>