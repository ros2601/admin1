<html>

<head>
    <title>
    Add Products
    </title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('http://localhost/admin-panel/resources/css/login.css')); ?>">
    <link rel="stylesheet" type="text/css"  href="<?php echo e(asset('http://localhost/admin-panel/resources/css/header.css')); ?>" >
    
</head>

<body>
<!----------------------------------->
<div class="container1">
    <div class="subcontainer1">
    <image src="<?php echo e(asset('logo.png')); ?>" />
        <button><a href="<?php echo e(url('/logout')); ?>">Logout</a></button>
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
                    <h3><a href="<?php echo e(url('/password')); ?>">Change Password</a></h3><hr/>
                    <p>Login Information<br/>Username : admin</p>
                 </div> 
            </div>
        </div> 

        <div class="right-section">
            <div class="right">
                    <div class="heading">
                    <h2>Product Manager</h2>
                    </div>

                  
            <div class="addpage">
            <div class="sea">Add Product</div><br/>
            
            <?php if(@isset($findrec[0])): ?>
                <form action="<?php echo e(url('p_editdata/'.$findrec[0]->id)); ?>" method="post" enctype="multipart/form-data">
            <?php else: ?>
                <form method="post" enctype="multipart/form-data" action="<?php echo e(url('/add-product')); ?>" > 
            <?php endif; ?>

                <?php echo e(csrf_field()); ?>

                
                <div class="product">
                    <table>
                        <tr>
                            <td></td>
                            <td>
                            <select name="c_id">Choose Category
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($row->name); ?>">  <?php echo e($row->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                           </td>
                   
                        </tr>

                        <tr>
                            <td class="t1">Name*</td>
                            <td><input type="text" name="name" value="<?php echo e(isset($findrec[0]->name) ? $findrec[0]->name:""); ?>"></td>
                        </tr>
                        <tr>
                            <td class="t1">Price</td>
                            <td><input type="text" name="price" value="<?php echo e(isset($findrec[0]->price) ? $findrec[0]->price:""); ?>"></td>
                        </tr>
                
                        <tr>
                            <td class="t1"> Description</td>
                            <td ><input type="text" name="description" rows="5" cols="55" value="<?php echo e(isset($findrec[0]->description) ? $findrec[0]->description:""); ?>"></td>
                        </tr>

                        <tr>
                            <td class="t1">Image</td>
                            <td><input type="file" name="image" value="<?php echo e(isset($findrec[0]->image) ? $findrec[0]->image:""); ?>">Choose any picture </td>
                            
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

</div>
<div class="container4"></div>
</body>
</html><?php /**PATH C:\xampp\htdocs\admin-panel\resources\views/productadd.blade.php ENDPATH**/ ?>