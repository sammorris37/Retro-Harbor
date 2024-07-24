<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <link rel="stylesheet" href="../assets/retro-harbor/reset.css">
    <link rel="stylesheet" href="../assets/retro-harbor/variables.css">
    <link rel="stylesheet" href="../assets/retro-harbor/utility.css">
    <link rel="stylesheet" href="../assets/retro-harbor/layout.css">
    <link rel="stylesheet" href="../assets/retro-harbor/typography.css">
    <link rel="stylesheet" href="../assets/retro-harbor/skeleton.css">
    <link rel="stylesheet" href="../assets/retro-harbor/buttons.css">
    <link rel="stylesheet" href="../assets/retro-harbor/navigation.css">
    <link rel="stylesheet" href="../assets/default/style.css">

</head>
<body>
    <main id="content" class="grid-container">



<div class="grid-content example-container">
    <button class="openDrawer drawerBtn" id="openDrawer">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor" class="nc-icon-wrapper">
                <path d="M3 12h18"></path>
                <path d="M3 6h18"></path>
                <path d="M3 18h18"></path>
            </g>
        </svg>
    </button>
    <hr>
    <h6>Mobile Navigation Example 2</h6>
    <p>This example shows 2 levels of navigation with paged functionality and dropdowns for to show the third level. Click the burger nav icon to see the example.</p>
    <div class="MobileDrawerNav no-scrollbars" id="MobileDrawerNav">
        <button class="closeDrawer drawerBtn" id="closeDrawer">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g fill="none" class="nc-icon-wrapper">
                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z" fill="currentColor"></path>
                </g>
            </svg>
        </button>
        <nav>
            <div class="navPage active" data-nav-page="level-1">
                <ul class="menu-items">
                    <li class="menu-item">
                        <a href="test.html" class="menu-link has-link">Menu Item</a>
                    </li>
                    <li class="menu-item has-children" data-target="level-2-1">
                        <a href="javascript:void(0)" class="menu-link">Menu Item</a>
                    </li>
                    <li class="menu-item has-children" data-target="level-2-2">
                        <a href="javascript:void(0)" class="menu-link">Menu Item</a>
                    </li>
                </ul>
            </div>
            <div class="navPage" data-nav-page="level-2-1">
                <a href="javascript:void(0)" class="backBtn" data-target="level-1">
                    Back to Level 1
                </a>
                <ul class="menu-items">
                    <li class="menu-item">
                        <a href="test.html" class="menu-link has-link">Menu Item</a>
                    </li>
                    <li class="menu-item has-submenu">
                        <a href="javascript:void(0)" class="menu-link">Has Submenu</a>
                        <ul class="submenu">
                            <li class="menu-item sub-item has-link"><a href="test.html" class="menu-link">Sub Item</a></li>
                            <li class="menu-item sub-item has-link"><a href="test.html" class="menu-link">Sub Item</a></li>
                            <li class="menu-item sub-item has-link"><a href="test.html" class="menu-link">Sub Item</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="navPage" data-nav-page="level-2-2">
                <a href="javascript:void(0)" class="backBtn" data-target="level-1">
                    Back to Level 1
                </a>
                <ul class="menu-items">
                    <li class="menu-item">
                        <a href="test.html" class="menu-link has-link">Menu Item</a>
                    </li>
                    <li class="menu-item has-submenu">
                        <a href="javascript:void(0)" class="menu-link">Has Submenu</a>
                        <ul class="submenu">
                            <li class="menu-item sub-item has-link"><a href="test.html" class="menu-link">Sub Item</a></li>
                            <li class="menu-item sub-item has-link"><a href="test.html" class="menu-link">Sub Item</a></li>
                            <li class="menu-item sub-item has-link"><a href="test.html" class="menu-link">Sub Item</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="grid-content">
    <a href="/retro-harbor/#navigation">Back</a>
</div>


<script src="/retro-harbor/assets/js/nav.js"></script>

<?php include '../footer.php'; ?>