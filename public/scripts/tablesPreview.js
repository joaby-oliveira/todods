const tables = document.querySelectorAll('.table-item');
const tablePreviewContainer = document.querySelector('.tablePreview-container');
const closeTablePreviewContainer = document.querySelector('.close-tablePreview img');
tables.forEach(table => {
    table.addEventListener('click', e => {
        tablePreviewContainer.classList.remove('hide');
    });
});
closeTablePreviewContainer.addEventListener('click', _=>{
    tablePreviewContainer.classList.add('hide');
});