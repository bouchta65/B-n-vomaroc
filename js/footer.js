    function toggleSection(sectionId) {
        const section = document.getElementById(sectionId);
        const icon = document.getElementById(sectionId + '-icon');
        
        section.classList.toggle('hidden');
        icon.classList.toggle('rotate-180');
    }
