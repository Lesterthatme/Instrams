// Sidebar functionality for admin pages
document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const menuToggle = document.getElementById('menuToggle');
    const mainContent = document.getElementById('mainContent');
    const overlay = document.getElementById('overlay');
    
    let isCollapsed = false;
    let isToggling = false;

    function toggleSidebar() {
        if (isToggling) return;
        isToggling = true;
        setTimeout(() => { isToggling = false; }, 300);

        if (window.innerWidth > 768) {
            isCollapsed = !isCollapsed;
            sidebar.classList.toggle('sidebar-collapsed');
            sidebar.classList.toggle('w-64');
            sidebar.classList.toggle('w-20');
            mainContent.classList.toggle('md:pl-64');
            mainContent.classList.toggle('md:pl-20');
            
            const logoutBtnFull = document.querySelector('.logout-btn-full');
            const logoutBtnIcon = document.querySelector('.logout-btn-icon');
            
            if (isCollapsed) {
                logoutBtnFull?.classList.add('hidden');
                logoutBtnIcon?.classList.remove('hidden');
            } else {
                logoutBtnFull?.classList.remove('hidden');
                logoutBtnIcon?.classList.add('hidden');
            }
        }
    }

    function toggleMobileSidebar() {
        if (isToggling) return;
        isToggling = true;
        setTimeout(() => { isToggling = false; }, 300);

        sidebar.classList.toggle('open');
        overlay.classList.toggle('active');
        if (sidebar.classList.contains('open')) {
            sidebar.classList.remove('sidebar-collapsed');
            sidebar.classList.remove('w-20');
            sidebar.classList.add('w-64');
            
            document.querySelector('.logout-btn-full')?.classList.remove('hidden');
            document.querySelector('.logout-btn-icon')?.classList.add('hidden');
        }
    }

    function closeMobileSidebar() {
        if (isToggling) return;
        isToggling = true;
        setTimeout(() => { isToggling = false; }, 300);

        sidebar.classList.remove('open');
        overlay.classList.remove('active');
    }

    // Event Listeners
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', toggleSidebar);
    }

    if (menuToggle) {
        menuToggle.addEventListener('click', toggleMobileSidebar);
    }

    if (overlay) {
        overlay.addEventListener('click', closeMobileSidebar);
    }

    // Handle window resize
    function handleResize() {
        if (window.innerWidth > 768) {
            sidebar.classList.remove('open');
            overlay.classList.remove('active');
            if (!isCollapsed) {
                sidebar.classList.remove('sidebar-collapsed');
                sidebar.classList.remove('w-20');
                sidebar.classList.add('w-64');
                mainContent.classList.remove('md:pl-20');
                mainContent.classList.add('md:pl-64');
                
                document.querySelector('.logout-btn-full')?.classList.remove('hidden');
                document.querySelector('.logout-btn-icon')?.classList.add('hidden');
            } else {
                sidebar.classList.add('sidebar-collapsed');
                sidebar.classList.remove('w-64');
                sidebar.classList.add('w-20');
                mainContent.classList.remove('md:pl-64');
                mainContent.classList.add('md:pl-20');
                
                document.querySelector('.logout-btn-full')?.classList.add('hidden');
                document.querySelector('.logout-btn-icon')?.classList.remove('hidden');
            }
        } else {
            sidebar.classList.remove('sidebar-collapsed');
            sidebar.classList.remove('open');
            overlay.classList.remove('active');
            sidebar.classList.remove('w-20');
            sidebar.classList.add('w-64');
            mainContent.classList.remove('md:pl-20');
            mainContent.classList.add('md:pl-64');
            
            document.querySelector('.logout-btn-full')?.classList.remove('hidden');
            document.querySelector('.logout-btn-icon')?.classList.add('hidden');
            isCollapsed = false;
        }
    }

    window.addEventListener('resize', handleResize);

    // Initialize sidebar state
    if (window.innerWidth > 768) {
        sidebar.classList.remove('sidebar-collapsed');
        sidebar.classList.add('w-64');
        mainContent.classList.add('md:pl-64');
        
        document.querySelector('.logout-btn-full')?.classList.remove('hidden');
        document.querySelector('.logout-btn-icon')?.classList.add('hidden');
    }

    // Close mobile sidebar when clicking on nav items
    const navItems = document.querySelectorAll('.nav-item');
    navItems.forEach(item => {
        item.addEventListener('click', function() {
            if (window.innerWidth <= 768) {
                closeMobileSidebar();
            }
        });
    });
});