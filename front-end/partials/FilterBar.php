<?php ob_start();
?>

<div class="filter-bar-container">
    <ul class="list-filter">
        <button><</button>
        <li class="filters-element">
            <a href="">Tous</a>
        </li>
        <li class="filters-element">
            <a href="">Jeux Vidéos</a>
        </li>
        <li class="filters-element">
            <a href="">Anime</a>
        </li>
        <li class="filters-element">
            <a href="">Manga</a>
        </li>
        <li class="filters-element">
            <a href="">Sport</a>
        </li>
        <li class="filters-element">
            <a href="">Apple</a>
        </li>
        <li class="filters-element">
            <a href="">Samsung</a>
        </li>
        <li class="filters-element">
            <a href="">Musculation</a>
        </li>
        <li class="filters-element">
            <a href="">Mix</a>
        </li>
        <li class="filters-element">
            <a href="">Vidéos Mise en ligne Récemment</a>
        </li>
        <li class="filters-element">
            <a href="">En direct</a>
        </li>
        <li class="filters-element">
            <a href="">Nouveautés</a>
        </li>
        <li class="filters-element">
            <a href="">Regardées</a>
        </li>
        <button>></button>

    </ul>

</div>

<?php $filterbar = ob_get_clean() ?>