<?php include 'includes/header.php'; ?>
<div class="container">
    <hr>
    <header id="header">PHP :: File Upload</header>
    <hr>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_FILES)) {
            $image_origin = $_FILES['image']['name'];
            $tmp = $_FILES['image']['tmp_name'];
            $destination = 'uploads/images/' . $image_origin;
            move_uploaded_file($tmp, $destination);

            echo "File uploaded successfully";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
          enctype="multipart/form-data" >

        Profile Pic: <input type="file" name="image">
        <input type="submit" value="submit">

    </form>

</div>
<?php include 'includes/footer.php'; ?>




