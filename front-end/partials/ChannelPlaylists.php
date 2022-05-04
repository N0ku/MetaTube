
<select class="filterby">
  <option value="all">Show All</option>
  <option value="1">Playlists créées</option>
  <option value="2">Playlists enregistrées</option>
</select>

<div id="FilterContainer">
  <section class="all 1 ">
      <h1>Playlists créées</h1>
      <?php include "./front-end/views/components/video.php" ?>
</section>

  <section class="all 2 ">
      <h1>Playlists enregistrées</h1>
      <?php include "./front-end/views/components/video.php" ?>
</section>
</div>

<script>
    $("select.filterby").change(function(){
    var filters = $.map($("select.filterby").toArray(), function(e){
        return $(e).val();
    }).join(".");
    $("div#FilterContainer").find("section").hide();
    $("div#FilterContainer").find("section." + filters).show();
});
</script>