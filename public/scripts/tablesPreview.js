const tables = document.querySelectorAll('.table-item');
const tablePreviewContainer = document.querySelector('.tablePreviewContainer');
tables.forEach(table => {
    table.addEventListener('click', e => {
        tablePreviewContainer.classList.add('show');
    });
});