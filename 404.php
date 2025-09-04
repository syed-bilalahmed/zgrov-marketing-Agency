

<?php include "header.php"; ?> 
<?php include "navbar.php"; ?> 

<main style="text-align:center; padding:80px 20px;">
    <h1 style="font-size:80px; color:#e74c3c; margin-bottom:10px;">404</h1>
    <p style="font-size:20px; margin-bottom:15px;">
        Oops! The page <code><?= htmlspecialchars($requested_url) ?></code> was not found.
    </p>
    <a href="/index.php" style="
        display:inline-block;
        margin-top:20px;
        padding:12px 24px;
        background:#3498db;
        color:#fff;
        text-decoration:none;
        border-radius:8px;
        font-size:18px;
    ">
        Go Back Home
    </a>
</main>

<?php include "footer.php"; ?> 
