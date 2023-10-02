<nav class="navbar navbar-expand-sm bg-primary navbar-dark w-100 rounded">
    <ul class="navbar-nav px-3 w-100">
        <li class="nav-item">
            <a  class="nav-link <?php NavClass("Numero1"); ?>"
                href="index.php?action=Numero1">
                Numero1
            </a>
        </li>
        <li class="nav-item">
            <a  class="nav-link <?php NavClass("Numero2"); ?>"
                href="index.php?action=Numero2">
                Numero2
            </a>
        </li>
        <li class="nav-item">
            <a  class="nav-link <?php NavClass("Numero3"); ?>"
                href="index.php?action=Numero3">
                Numero3
            </a>
        </li>
    </ul>
</nav>

<?php
function ParDefaut() {
    if (!isset($_GET["action"])) {
        echo "active";
    }
}

function NavClass($menu) {
    if (isset($_GET["action"]) &&
        $_GET["action"] === $menu) {
        echo ' active ';
    }
}
?>
