<!-- seo-tools/index.php -->
<?php include('../header.php'); ?>
<?php include('../nav.php'); ?>

<div class="container-fluid">
  <div class="row mt-4">
    
    <!-- Sidebar -->
    <div class="col-md-3">
      <div class="list-group">
        <a href="index.php?tool=keyword-planner" class="list-group-item list-group-item-action">Keyword Planner</a>
        <a href="index.php?tool=backlink-checker" class="list-group-item list-group-item-action">Backlink Checker</a>
        <a href="index.php?tool=rank-tracker" class="list-group-item list-group-item-action">Rank Tracker</a>
        <a href="index.php?tool=site-audit" class="list-group-item list-group-item-action">Site Audit</a>
      </div>
    </div>
    
    <!-- Content Area -->
    <div class="col-md-9">
      <div class="card p-4 shadow-sm">
        <?php
          if(isset($_GET['tool'])){
            $tool = $_GET['tool'];
            if(file_exists($tool.".php")){
              include($tool.".php");
            } else {
              echo "<h4>Select a tool from the sidebar</h4>";
            }
          } else {
            echo "<h4>Welcome to SEO Tools. Please choose a tool from the sidebar.</h4>";
          }
        ?>
      </div>
    </div>
    
  </div>
</div>

<?php include('../footer.php'); ?>
