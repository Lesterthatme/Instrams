document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-results');
    const sportFilter = document.getElementById('sport-filter');
    const genderFilter = document.getElementById('gender-filter');
    const sportSections = document.querySelectorAll('.sport-section');
    const sportHeaders = document.querySelectorAll('.sport-header');
    
    // Accordion functionality
    sportHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector('.fa-chevron-down');
            
            content.classList.toggle('hidden');
            this.classList.toggle('active');
            icon.classList.toggle('rotate-180');
            
            // Close other sections
            sportHeaders.forEach(otherHeader => {
                if (otherHeader !== this) {
                    const otherContent = otherHeader.nextElementSibling;
                    const otherIcon = otherHeader.querySelector('.fa-chevron-down');
                    otherContent.classList.add('hidden');
                    otherHeader.classList.remove('active');
                    otherIcon.classList.remove('rotate-180');
                }
            });
        });
    });
    
    // Event listeners for filters
    if (searchInput) {
        searchInput.addEventListener('input', debounce(filterResults, 300));
    }
    
    if (sportFilter) {
        sportFilter.addEventListener('change', filterResults);
    }
    
    if (genderFilter) {
        genderFilter.addEventListener('change', filterResults);
    }
    
    // Debounce function for search performance
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
    
    function filterResults() {
        const searchTerm = searchInput ? searchInput.value.toLowerCase().trim() : '';
        const selectedSport = sportFilter ? sportFilter.value : 'all';
        const selectedGender = genderFilter ? genderFilter.value : 'all';
        
        let anySectionVisible = false;
        
        sportSections.forEach(section => {
            const sportType = section.getAttribute('data-sport');
            const sportName = section.querySelector('h3').textContent.toLowerCase();
            const sportDescription = section.querySelector('.text-gray-600').textContent.toLowerCase();
            
            // Sport mapping for filtering
            const sportMap = {
                'arnis': 'combat',
                'taekwondo': 'combat',
                'badminton': 'racket',
                'table-tennis': 'racket', 
                'lawn-tennis': 'racket',
                'basketball': 'ball',
                'volleyball': 'ball',
                'beach-volleyball': 'ball',
                'sepak-takraw': 'ball',
                'chess': 'mind',
                'mobile-legends': 'mind'
            };
            
            const matchesSport = selectedSport === 'all' || 
                               sportMap[selectedSport] === sportType;
            
            const matchesSearch = searchTerm === '' || 
                                sportName.includes(searchTerm) || 
                                sportDescription.includes(searchTerm);
            
            if (matchesSport && matchesSearch) {
                section.style.display = '';
                anySectionVisible = true;
                
                // Filter content within this section
                filterSectionContent(section, searchTerm, selectedGender);
            } else {
                section.style.display = 'none';
            }
        });
        
        // Show no results message
        showNoResultsMessage(!anySectionVisible && (searchTerm !== '' || selectedSport !== 'all' || selectedGender !== 'all'));
    }
    
    function filterSectionContent(section, searchTerm, selectedGender) {
        const tables = section.querySelectorAll('table');
        let sectionHasVisibleContent = false;
        
        tables.forEach(table => {
            const rows = table.querySelectorAll('tbody tr');
            let tableHasVisibleRows = false;
            
            rows.forEach(row => {
                // Skip gender header rows for search
                if (row.cells.length === 1) {
                    // This is a gender header row (colspan=4)
                    const genderText = row.cells[0].textContent.toLowerCase();
                    const matchesGender = selectedGender === 'all' || 
                                        (selectedGender === 'men' && genderText.includes('men')) ||
                                        (selectedGender === 'women' && genderText.includes('women'));
                    
                    if (matchesGender) {
                        row.style.display = '';
                        tableHasVisibleRows = true;
                        sectionHasVisibleContent = true;
                    } else {
                        row.style.display = 'none';
                    }
                    return;
                }
                
                // Regular data rows
                const eventCell = row.querySelector('td:first-child');
                const eventText = eventCell ? eventCell.textContent.toLowerCase() : '';
                const medalCells = row.querySelectorAll('td:not(:first-child)');
                
                // Get gender from previous rows
                let currentGender = '';
                let prevRow = row.previousElementSibling;
                while (prevRow) {
                    if (prevRow.cells.length === 1) {
                        currentGender = prevRow.cells[0].textContent.toLowerCase();
                        break;
                    }
                    prevRow = prevRow.previousElementSibling;
                }
                
                const matchesGender = selectedGender === 'all' || 
                                    (selectedGender === 'men' && currentGender.includes('men')) ||
                                    (selectedGender === 'women' && currentGender.includes('women'));
                
                let matchesSearch = searchTerm === '' || eventText.includes(searchTerm);
                
                // Check athlete names if search term exists
                if (!matchesSearch && searchTerm !== '') {
                    medalCells.forEach(cell => {
                        const athleteName = cell.querySelector('span')?.textContent.toLowerCase();
                        if (athleteName && athleteName.includes(searchTerm)) {
                            matchesSearch = true;
                        }
                    });
                }
                
                if (matchesGender && matchesSearch) {
                    row.style.display = '';
                    tableHasVisibleRows = true;
                    sectionHasVisibleContent = true;
                } else {
                    row.style.display = 'none';
                }
            });
            
            // Show the table container if it has visible rows
            const tableContainer = table.closest('.mb-8');
            if (tableHasVisibleRows) {
                tableContainer.style.display = '';
            } else {
                tableContainer.style.display = 'none';
            }
        });
        
        return sectionHasVisibleContent;
    }
    
    function showNoResultsMessage(show) {
        let noResultsMsg = document.getElementById('no-results-message');
        
        if (show && !noResultsMsg) {
            noResultsMsg = document.createElement('div');
            noResultsMsg.id = 'no-results-message';
            noResultsMsg.className = 'text-center py-12 bg-white rounded-lg border border-gray-200 my-6';
            noResultsMsg.innerHTML = `
                <i class="fas fa-search text-gray-400 text-5xl mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-700 mb-2">No results found</h3>
                <p class="text-gray-500">Try adjusting your search terms or filters</p>
            `;
            
            const accordion = document.getElementById('results-accordion');
            accordion.parentNode.insertBefore(noResultsMsg, accordion);
        } else if (!show && noResultsMsg) {
            noResultsMsg.remove();
        }
    }
    
    // Auto-open first section on load
    if (sportHeaders.length > 0) {
        setTimeout(() => {
            sportHeaders[0].click();
        }, 100);
    }
});