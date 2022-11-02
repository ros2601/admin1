<html>

<head>
    <title>
     Control pannel 
    </title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="header.css" >

</head>

<body>
<!----------------------------------->
<div class="container1">
    <div class="subcontainer1">
        <img src="logo.png" /> 
        <button>Logout</button>
    </div>
</div> 
<!----------------------------------->
<div class="container2">
    <div class="subcontainer2">
    <?php
       echo date('d-m-Y');
       ?>
    </div>   
</div>
<!----------------------------------->
<div class="maincontainer">
    <div class="innerconatiner">

        <div class="left-section">
            <div class="left">
                <br/>
                <div class="content1">
                    <h3><a href="<?php echo e(url('/summarypage')); ?>">Page Summary</a></h3><hr/>
                    <p><a href="<?php echo e(url('/addpage')); ?>">Add Page</a></p><hr/>
                    <h3><a href="<?php echo e(url('/summarycat')); ?>">Category Summary</a></h3><hr/>
                    <p><a href="<?php echo e(url('/addcat')); ?>">Add Category</a></p><hr/>
                    <h3><a href="<?php echo e(url('/summaryproduct')); ?>">Product Summary</a></h3><hr/>
                    <p><a href="<?php echo e(url('/addproduct')); ?>">Add Product</a></p><hr/>
                    <h3><a href="<?php echo e(url('/summarypage')); ?>">Change Password</a></h3><hr/>
                    <p>Login Information<br/>Username : admin</p>
                 </div> 
            </div>
        </div> 

        <div class="right-section">
            <div class="right">

            <div class="heading">
                <h2>Category Manager</h2>
            </div>
            <div class="addpage">
                <p>Add Category</p>
           
                <form method="post" action="<?php echo e(url('/add-category')); ?>" > 
                <?php echo e(csrf_field()); ?>

                    <table>
                        <tr>
                            <td class="t1">Name*</td>
                            <td><input type="text" name="name" value="<?php echo e(isset($findrec[0]->name) ? $findrec[0]->name:""); ?>"></td>
                        </tr>
                       
                    </table>

                    <div class="btns" >
                         <input type="submit" name="save" value="Save" />
                         <input type="button" name="cancel" value="Cancel" />  
                    </div>

               </form>  
            </div>
        </div>
    </div>
</div>

</div>
<div class="container4"></div>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\admin-panel\resources\views/addcategory.blade.php ENDPATH**/ ?>