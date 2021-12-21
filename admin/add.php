<?php
    if (isset($_POST['addProduct'])) {
        $name = $_POST['name'];
        $manu_id = $_POST['manu_id'];
        $type_id = $_POST['type_id'];
        $price = $_POST['price'];
        $pro_image = $_FILES['fileUpload']['name'];
        $description = $_POST['description'];
        $feature = $_POST['feature'];
        $created_at  = date("Y-m-d h:m:s");
        $path = "../images/" . basename($pro_image);
        //Kiểm tra ảnh có hợp k
        if(getimagesize($_FILES['fileUpload']['tmp_name'])){
            if(move_uploaded_file($_FILES['fileUpload']['tmp_name'],$path)){
            $product->addNewProduct($name, $manu_id, $type_id, $price, $pro_image, $description, $feature, $created_at);
                echo "<script>alert('Đã Thêm');window.location.href='index.php'</script>";
            }       
            else echo "Thêm không thành công";   
}        
else{
    echo "<script>alert('Ảnh không hợp lệ');window.location.href='form.php?value=product'</script>";
}
        
    } if (isset($_POST['addManufacture'])) {

        $manu_name = $_POST['name'];
        $manufacture->addNewManufacture($manu_name);
        echo "<script>alert('Thêm thành công');window.location.href='manufactures.php'</script>";
    } if (isset($_POST['addProtype'])) {

        $type_name = $_POST['typename'];
        $protype->addNewProtype($type_name);
        echo "<script>alert('Thêm thành công');window.location.href='protypes.php'</script>";
    }if (isset($_POST['addUser'])) {

        $user_name = $_POST['name'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $user->register($user_name, $password, $role);
        echo "<script>alert('Thêm thành công');window.location.href='users.php'</script>";
    }