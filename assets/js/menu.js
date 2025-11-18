document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            
            const icon = mobileMenuButton.querySelector('i');
            if (mobileMenu.classList.contains('hidden')) {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            } else {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            }
        });
        
        document.addEventListener('click', function(event) {
            if (!mobileMenuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
                mobileMenu.classList.add('hidden');
                const icon = mobileMenuButton.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
        
        const menuItems = mobileMenu.querySelectorAll('a');
        menuItems.forEach(item => {
            item.addEventListener('click', function() {
                mobileMenu.classList.add('hidden');
                const icon = mobileMenuButton.querySelector('i');
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            });
        });
    }
    
    const searchInput = document.getElementById('institute-search');
    const instituteFilter = document.getElementById('institute-filter');
    
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            filterInstitutes();
        });
    }
    
    if (instituteFilter) {
        instituteFilter.addEventListener('change', function() {
            filterInstitutes();
        });
    }
    
    function filterInstitutes() {
        const searchTerm = searchInput ? searchInput.value.toLowerCase().trim() : '';
        const selectedInstitute = instituteFilter ? instituteFilter.value : 'all';
        const tableRows = document.querySelectorAll('tbody tr');
        let hasVisibleRows = false;
        
        tableRows.forEach(row => {
            const instituteCell = row.querySelector('td:nth-child(2)');
            const spans = instituteCell.querySelectorAll('span');
            const instituteAbbr = spans.length > 1 ? spans[1].textContent.toLowerCase() : spans[0].textContent.toLowerCase();
            const instituteFullName = spans[0].textContent.toLowerCase();
            
            const matchesSearch = searchTerm === '' || instituteAbbr.includes(searchTerm) || instituteFullName.includes(searchTerm);
            const matchesFilter = selectedInstitute === 'all' || instituteAbbr === selectedInstitute.toLowerCase();
            
            if (matchesSearch && matchesFilter) {
                row.style.display = '';
                hasVisibleRows = true;
            } else {
                row.style.display = 'none';
            }
        });
        
        const noResultsMsg = document.getElementById('no-results-message');
        if (!hasVisibleRows && (searchTerm !== '' || selectedInstitute !== 'all')) {
            if (!noResultsMsg) {
                const newMsg = document.createElement('div');
                newMsg.id = 'no-results-message';
                newMsg.className = 'text-center py-12 bg-white rounded-lg border border-gray-200 my-6';
                newMsg.innerHTML = `
                    <i class="fas fa-search text-gray-400 text-5xl mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-700 mb-2">No institutes found</h3>
                    <p class="text-gray-500">Try adjusting your search or filter</p>
                `;
                const tableSection = document.querySelector('section');
                tableSection.appendChild(newMsg);
            }
        } else if (noResultsMsg) {
            noResultsMsg.remove();
        }
    }
});

