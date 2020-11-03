<?php
echo "<header>
    <h1>Aqui estão suas tabelas 😉</h1>
    <div class='searchFilter-container'>
        <form action='' method='get'>
            <div class='search'>
                <input type='search' name='search' id='search'>
                <input type='submit' name='submit' id='submit'>
            </div>
            <div class='filter-block'>
                <label for='filter'>Filtrar por:</label>
                <select name='filter' id='filter'>
                    <option value='0'>Maior validade</option>
                </select>
            </div>
        </form>
    </div>
    <img src='public/images/logo.svg' alt='logo'>
</header>";
?>