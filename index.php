<?php include_once 'header.php';?>
    <section class="index-intro" >
        <?php
            if (isset($_SESSION['useruid'])) {
                echo "<p>Welcome Back ". $_SESSION['username'] ."</p>";
            }
        ?>
        <h1>
            This is Heading
        </h1>
        <p>
            this is a demo paragraph to show somethings up
        </p>
    </section>
<?php include_once 'footer.php'; ?>