<div class="container">
    <div class="row">
        <div class="column col-md-1"></div>
        <div class="column col-md-5">
            <form action="" method="POST">
                <div class="card">
                    <div class="card-header bg-primary">
                       <h3 class="text-center"> Your Personal Info</h3>
                    </div>
                    <div class="card-body">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name">
                        <label for="gender">Gender</label>
            
                        
                            <select name="gender" class="custom-select" id="inputGroupSelect01">
                                
                                <option value="Male">Male</option>
                                <option value="Femal">Femal</option>
                            </select>
                           



                        <label for="province">Province</label>
                        <input type="text" class="form-control" name="province">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email">
                        <br>
                        <button style="margin-left:80%;" type="submit" class="btn btn-primary pull-right" name="send">Send</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="column col-md-5">
            <?php
                include "getValue.php";
            ?>
        </div>
        <div class="column col-mg-1"></div>
    </div>
</div>