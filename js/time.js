function updateDateTime() {
    const now = new Date();
    const date = now.toISOString().split('T')[0];
    const time = now.toTimeString().split(' ')[0];

    document.querySelectorAll('.current-date').forEach(element => {
        element.textContent = date;
    });

    document.querySelectorAll('.current-time').forEach(element => {
        element.textContent = time;
    });
}

updateDateTime(); 
setInterval(updateDateTime, 1000);
