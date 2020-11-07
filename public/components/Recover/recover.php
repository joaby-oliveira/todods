<?php
function createRecover($header, $elements, $description = '', $step, $nextStep = null) {
    $recoverElement = "
    <div class='login-title'>
        <h1>$header</h1>
    </div>
    <form method='get'>
        $elements
        <p class='recover-description'>$description</p>
        <div class='submit-block'>
            <button name='step' value='$nextStep'>Avançar</button>
        </div>
    </form>
    <div id='loading-track'>
        <div id='loading-thumb' class='loading" . $step . "'>
        </div>
    </div>
    ";
    return $recoverElement;
}
?>