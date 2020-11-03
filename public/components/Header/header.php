<?php
function createHeader($content) {
    return (
        "<header>
            <h1>$content</h1>
            <div class='searchFilter-container'>
                <form action='' method='get'>
                    <div class='search'>
                        <input type='search' name='search' id='search' placeholder='Pesquisar tarefas'><!--
                        --><button type='submit' name='submit' id='submit'>
                            <i><img src='public/icons/icon-magnifier.svg'></img></i>
                        </button>
                    </div>
                    <div class='filter-block'>
                        <label for='filter'>Filtrar por:</label>
                        <select name='filter' id='filter'>
                            <option value='0'>Maior validade</option>
                        </select>
                    </div>
                </form>
            </div>
            <img draggable='false' src='public/images/logo.svg' class='logo' alt='logo'>
        </header>"
    );
}
?>