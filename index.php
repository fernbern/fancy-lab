<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body <?php body_class(); ?>>
    <div id="page" class="site">
        <header>
            <section class="search">Search </section>
            <section class="top-bar">
                <div class="brand">LOGO</div>
                <div class="second-column">
                    <dic class="account">Account</dic>
                    <nav class="main-menu">MENU</nav>
                </div>
            </section>
        </header>
        <div class="content-area">
            <main>
                <section class="slider">SLIDER</section>
                <section class="popular-products">POPULAR PRODUCTS</section>
                <section class="new-arrivals">NEW ARRIVALS</section>
                <section class="deal-of-the-week">DEAL OF THE WEEK</section>
                <section class="lab-blog">NEWS</section>
            </main>
        </div>
        <footer>
            <section class="footer-widgets">WIDGET</section>
            <section class="copyright">ALL RIGHTS RESERVED</section>
        </footer>
        <?php get_footer(); ?>
    </div>
</body>
</html>
