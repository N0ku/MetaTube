<?php ob_start();
?>

<div class="filter-bar-container">
    <ul class="list-filter">
        <li class="filters-element">
            <a class="filter-text" href="">Tous</a>
        </li>
        <li class="filters-element">
            <a class="filter-text" href="">Jeux Vidéos</a>
        </li>
        <li class="filters-element">
            <a class="filter-text" href="">Anime</a>
        </li>
        <li class="filters-element">
            <a class="filter-text" href="">Sport</a>
        </li>
        <li class="filters-element">
            <a class="filter-text" href="">Apple</a>
        </li>
        <li class="filters-element">
            <a class="filter-text" href="">Mix</a>
        </li>
        <li class="filters-element">
            <a class="filter-text" href="">Vidéos Mise en ligne Récemment</a>
        </li>
        <li class="filters-element">
            <a class="filter-text" href="">En direct</a>
        </li>
        <li class="filters-element">
            <a class="filter-text" href="">Nouveautés</a>
        </li>
        <li class="filters-element">
            <a class="filter-text" href="">Regardées</a>
        </li>
    </ul>

</div>

<?php $filterbar = ob_get_clean() ?>