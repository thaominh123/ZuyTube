<div class="dropdown show">
  <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-filter"></i>
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href=<?=isset($_GET["search_query"]) ? "?search_query=" . $_GET["search_query"] . "&orderBy=1" : ""?>>Views</a>
    <a class="dropdown-item" href=<?=isset($_GET["search_query"]) ? "?search_query=" . $_GET["search_query"] . "&orderBy=2" : ""?>>Date</a>
  </div>
</div>

