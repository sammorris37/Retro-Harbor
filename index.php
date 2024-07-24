<?php include 'header.php'; ?>

<section class="grid-content">
    <div class="container grid intro">
        <aside class="sidebar">
            <div class="links">
                <ul>
                    <li><a href="#intro">Introduction</a></li>
                    <li><a href="#getting-started">Getting Started</a></li>
                    <li class="separator"><li>
                    <li><a href="#skeleton">Skeleton</a></li>
                    <li class="separator"><li>
                    <li><a href="#containers">Containers</a></li>
                    <li><a href="#grids">Grids</a></li>
                    <li><a href="#navigation">Nav</a></li>
                    <li><a href="#buttons">Buttons</a></li>
                    <li><a href="#chips">Chips</a></li>
                    <li><a href="#typography">Typography</a></li>
                    <li><a href="#inputs">Inputs</a></li>
                    <li><a href="#images">Images</a></li>
                    <li><a href="#videos">Videos</a></li>
                </ul>
            </div>
        </aside> 
        <div class="content-container">
            <?php include 'sections/intro.php'; ?>
            <?php include 'sections/getting-started.php'; ?>
            <?php include 'sections/skeleton.php'; ?>
            <?php include 'sections/containers.php'; ?>
            <?php include 'sections/grid.php'; ?>
            <?php include 'sections/navigation.php'; ?>
            <?php include 'sections/buttons.php'; ?>
            <?php include 'sections/chips.php'; ?>
            <?php include 'sections/typography.php'; ?>
            <?php include 'sections/inputs.php'; ?>
            <?php include 'sections/images.php'; ?>
            <?php include 'sections/videos.php'; ?>
        </div>
    </div>
</section>





<?php include 'footer.php'; ?>