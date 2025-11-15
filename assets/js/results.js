
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-results');
    const sportFilter = document.getElementById('sport-filter');
    const genderFilter = document.getElementById('gender-filter');
    const sportSections = document.querySelectorAll('.sport-section');
    const sportHeaders = document.querySelectorAll('.sport-header');
    
    sportHeaders.forEach(header => {
        header.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector('.fa-chevron-down');
            
            content.classList.toggle('hidden');
            this.classList.toggle('active');
            icon.classList.toggle('rotate-180');
            
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
    
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            filterResults();
        });
    }
    
    if (sportFilter) {
        sportFilter.addEventListener('change', function() {
            filterResults();
        });
    }
    
    if (genderFilter) {
        genderFilter.addEventListener('change', function() {
            filterResults();
        });
    }
    
    function filterResults() {
        const searchTerm = searchInput ? searchInput.value.toLowerCase() : '';
        const selectedSport = sportFilter ? sportFilter.value : 'all';
        const selectedGender = genderFilter ? genderFilter.value : 'all';
        
        sportSections.forEach(section => {
            const sport = section.getAttribute('data-sport');
            const sportName = section.querySelector('h3').textContent.toLowerCase();
            const content = section.querySelector('.sport-content');
            const tables = content.querySelectorAll('table');
            
            let hasVisibleRows = false;
            
            const matchesSport = selectedSport === 'all' || sport === selectedSport;
            
            if (matchesSport && (sportName.includes(searchTerm) || searchTerm === '')) {
                section.style.display = '';
                
                tables.forEach(table => {
                    const rows = table.querySelectorAll('tbody tr');
                    let tableHasVisibleRows = false;
                    
                    rows.forEach(row => {
                        const eventText = row.querySelector('td:first-child').textContent.toLowerCase();
                        const medalCells = row.querySelectorAll('td:not(:first-child)');
                        let rowHasMatchingMedal = false;
                        
                        medalCells.forEach(cell => {
                            const athleteText = cell.textContent.toLowerCase();
                            if (athleteText.includes(searchTerm)) {
                                rowHasMatchingMedal = true;
                            }
                        });
                        
                        const matchesSearch = eventText.includes(searchTerm) || rowHasMatchingMedal || searchTerm === '';
                        const matchesGender = selectedGender === 'all' || 
                                            (selectedGender === 'men' && eventText.includes('men')) ||
                                            (selectedGender === 'women' && eventText.includes('women')) ||
                                            (selectedGender === 'mixed' && eventText.includes('mixed'));
                        
                        if (matchesSearch && matchesGender) {
                            row.style.display = '';
                            tableHasVisibleRows = true;
                            hasVisibleRows = true;
                        } else {
                            row.style.display = 'none';
                        }
                    });
                    
                    const tableContainer = table.closest('div');
                    if (tableHasVisibleRows) {
                        tableContainer.style.display = '';
                    } else {
                        tableContainer.style.display = 'none';
                    }
                });
                
            } else {
                section.style.display = 'none';
            }
            
            if (!hasVisibleRows && searchTerm !== '') {
                section.style.display = 'none';
            }
        });
    }
    
    if (sportHeaders.length > 0) {
        sportHeaders[0].click();
    }
});