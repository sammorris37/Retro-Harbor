/* =============================================================
Mobile Nav JS

** This JS can be modified to suit your needs

============================================================= */
/* =============================================================
    Mobile Nav JS
============================================================= */
document.addEventListener('DOMContentLoaded', () => {
    const getById = id => document.getElementById(id);
    const queryAll = selector => document.querySelectorAll(selector);
    
    const openDrawerButton = getById('openDrawer');
    const closeDrawerButton = getById('closeDrawer');
    const mobileDrawerNav = getById('MobileDrawerNav');
    const bodyClass = document.body;

    const toggleClass = (element, className, action) => {
        element.classList[action](className);
    };

    const toggleDrawer = (action) => {
        toggleClass(mobileDrawerNav, 'open', action);
        toggleClass(bodyClass, 'overflow-none', action);
        if (action === 'remove') resetToFirstLevel();
    };

    const handlePageChange = (target) => {
        queryAll('.navPage').forEach(p => {
            toggleClass(p, 'active', p.getAttribute('data-nav-page') === target ? 'add' : 'remove');
        });
    };

    const resetToFirstLevel = () => {
        handlePageChange('level-1');
        resetSubmenus();
    };

    openDrawerButton.addEventListener('click', () => toggleDrawer('add'));
    closeDrawerButton.addEventListener('click', () => toggleDrawer('remove'));

    queryAll('.menu-item.has-children').forEach(item => 
        item.addEventListener('click', () => handlePageChange(item.getAttribute('data-target')))
    );

    queryAll('.backBtn').forEach(button => {
        button.addEventListener('click', () => {
            handlePageChange(button.getAttribute('data-target'));
            resetSubmenus();
        });
    });

    queryAll('.has-link').forEach(link => 
        link.addEventListener('click', () => toggleDrawer('remove'))
    );

    // START - Remove this if not using mobile-navigation-example-2
    queryAll('.menu-item.has-submenu > a').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const submenu = link.nextElementSibling;
            if (submenu) {
                toggleClass(submenu, 'active', submenu.classList.contains('active') ? 'remove' : 'add');
            }
        });
    });

    const resetSubmenus = () => {
        queryAll('.submenu').forEach(submenu => 
            toggleClass(submenu, 'active', 'remove')
        );
    };
    // END - Remove this if not using mobile-navigation-example-2
});
