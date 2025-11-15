document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-schedule');
    const dayFilter = document.getElementById('day-filter');
    const venueFilter = document.getElementById('venue-filter');
    const scheduleRows = document.querySelectorAll('.schedule-row');
    
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            filterSchedule();
        });
    }
    
    if (dayFilter) {
        dayFilter.addEventListener('change', function() {
            filterSchedule();
        });
    }
    
    function filterSchedule() {
        const searchTerm = searchInput ? searchInput.value.toLowerCase() : '';
        const selectedDay = dayFilter ? dayFilter.value : 'all';
        const selectedVenue = venueFilter ? venueFilter.value : 'all';
        
        scheduleRows.forEach(row => {
            const sport = row.querySelector('td:nth-child(2) span').textContent.toLowerCase();
            const venue = row.getAttribute('data-venue').toLowerCase();
            const day = row.getAttribute('data-day');
            
            const matchesSearch = sport.includes(searchTerm) || venue.includes(searchTerm);
            const matchesDay = selectedDay === 'all' || day === selectedDay;
            const matchesVenue = selectedVenue === 'all' || venue === selectedVenue.toLowerCase();
            
            if (matchesSearch && matchesDay && matchesVenue) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    }
    
    function highlightToday() {
        const today = new Date();
        const options = { month: 'short', day: 'numeric' };
        const todayString = today.toLocaleDateString('en-US', options).toLowerCase();
        
        scheduleRows.forEach(row => {
            const dateCell = row.querySelector('td:first-child span:first-child');
            if (dateCell) {
                const rowDate = dateCell.textContent.toLowerCase();
                if (rowDate === todayString) {
                    row.classList.add('bg-amber-50', 'border-l-4', 'border-amber-500');
                }
            }
        });
    }
    
    highlightToday();
});