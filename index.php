<H1 align="center">Welcome</H1>

<marquee direction="right" color="red">Welcome To Home Server</marquee><hr>
<br>
<h4><sup>*</sup>  To Upload Multiple Files You Have To Compress Them (i.e. tar, zip, tar.gz etc.)</h4>
<h4><sup>*</sup>  Max Upload Size is ""MB</h4>

<br>
<br>

<form method="POST" action="upload.php"  style="margin: auto; width: 220px;" enctype="multipart/form-data">

       <input type="file" name="file" style="background-color: #808080;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;"><br><br><br>
    <input type="submit" value="Upload" style="background-color: #04AA6D;
  border: none;
  color: white;
  width: 220px;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;">
</form><br>
<hr>
<h3><b>  Recently Uploaded Files On The Server :~~  </b></h3>
<hr>
<br>
<?php

$files = scandir("uploads");
for ($a = 2; $a < count($files); $a++)
{
    ?>
    <p>
        <?php echo $files[$a]; ?>

        <a href="uploads/<?php echo $files[$a]; ?>" style="margin: auto; width: 220px;" download="<?php echo $files[$a]; ?>">
            Download
        </a>

        <a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" style="color: white; margin: auto; width: 220px;">
            Delete
        </a>
        <a href="uploads/<?php echo $files[$a]; ?>" style="margin: auto; width: 220px; " load="<?php echo $files[$a]; ?>">
            Open
        </a>
    </p>
    <?php
}


?>


<style>
a:link, a:visited {
  background-color: #000000;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}


</style>


