<H1 align="center">Welcome</H1>

<marquee direction="right" color="red">Welcome To Home Server</marquee><hr>

<br>

<h4><sup>*</sup>  To Upload Multiple Files You Have To Compress Them (i.e. tar, zip, tar.gz etc.)</h4>
<h4><sup>*</sup>  Max Upload Size is ""MB</h4>

<br>
<br>

<script type="text/javascript" src="../js/script.js"></script>
<link rel="stylesheet" type="text/css" href="../style/style.css">

<div align="center"><form method="POST" action="upload.php"  style="margin: auto; width: 220px;" enctype="multipart/form-data">

    <div class="chosebtn"><input type="file" name="file" id="fakebtn" hidden><label for="fakebtn" style="background-color: indigo; color: white; padding: 0.5rem; font-family: sans-serif; border-radius: 0.3rem; cursor: pointer; margin-top: 1rem;">Choose File</label></div>
    <br>
    <br>
    <br>
    <div class="uploadbtn"><input type="submit" value="Upload" id="fakeupload" hidden><lebel for="fakeupload" style="background-color: grey; color: white; padding: 0.5rem; font-family: sans-serif; border-radius: 0.3rem; cursor: pointer; margin-top: 1rem;">Upload</label></div>

</form></div>

<br>
<hr>

<h3><b>  Recently Uploaded Files On The Server :~~  </b></h3>

<hr>
<br>

<div class="a">
<?php

$files = scandir("../../uploads");
for ($a = 2; $a < count($files); $a++)
{
    ?>
    <p>
        <?php echo $files[$a]; ?>

        <a class="label" href="../../uploads/<?php echo $files[$a]; ?>" style="margin: auto; width: 220px;" download="<?php echo $files[$a]; ?>">
            Download
        </a>

        <a class="delete" href="delete.php?name=../../uploads/<?php echo $files[$a]; ?>" style="color: white; margin: auto; width: 220px;">
            Delete
        </a>
        
        <a class="label" href="../../uploads/<?php echo $files[$a]; ?>" style="margin: auto; width: 220px; " load="<?php echo $files[$a]; ?>">
            Open
        </a>
    </p>
    <?php
}


?>
</div>


