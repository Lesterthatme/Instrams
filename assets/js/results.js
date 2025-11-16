document.addEventListener('DOMContentLoaded', function() {
    const sportFilter = document.getElementById('sport-filter');
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
    
    // Sport filter functionality only
    if (sportFilter) {
        sportFilter.addEventListener('change', filterSports);
    }
    
    function filterSports() {
        const selectedSport = sportFilter.value;
        
        sportSections.forEach(section => {
            const sportType = section.getAttribute('data-sport');
            
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
            
            if (matchesSport) {
                section.style.display = '';
            } else {
                section.style.display = 'none';
            }
        });
    }
    
    // Auto-open first section on load
    if (sportHeaders.length > 0) {
        setTimeout(() => {
            sportHeaders[0].click();
        }, 100);
    }
});