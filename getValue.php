<?php
include "src/get_value_class.php";

if(isset($_POST['send'])){
    $name = new get_info();
    include 'header.php';
    
    ?>              
                <link rel="stylesheet" href="public/style.css">
                <div class="card">
                    <div class="card-header bg-primary">
                       <h3 class="text-center"> Your Personal Info</h3>
                    </div>
                    <div class="card-body">
                        <p>Name: <?php echo $_POST['name']?></p>
                        <p>Gender: <?php echo $_POST['gender']?></p>
                        <p>Province: <?php echo $_POST['province']?></p>
                        <p>Email: <?php echo $_POST['email']?></p>
                    </div>
                </div>
</div> 
<?php
include 'footer.php';
}
?>