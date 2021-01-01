const tables = document.querySelectorAll('.table-item');
const tablePreviewContainer = document.querySelector('.tablePreview-container');
tables.forEach(table => {
    table.addEventListener('click', e => {
        tablePreviewContainer.classList.remove('hide');
        tablePreviewContainer.classList.add('popin');
    });
});

const tableAddButton = document.querySelector('.table-add');
const tableAddContainer = document.querySelector('.tableAdd-container');
tableAddButton.addEventListener('click', _ => {
    tableAddContainer.classList.remove('hide');
    tableAddContainer.classList.add('popin');
});

const closeContainersButtons = document.querySelectorAll('.closeContainer');
closeContainersButtons.forEach((closeContainersButton) => {
    closeContainersButton.addEventListener('click', e => {
        tableAddContainer.classList.remove('popin');
        tablePreviewContainer.classList.remove('popin');

        tableAddContainer.classList.add('hide');
        tablePreviewContainer.classList.add('hide');
    });
});
