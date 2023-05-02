<?php
session_start();

require_once 'controller.php';

$controller=new controller();
//signup
if(isset($_POST['signup_btn'])){

    $name=$controller->check_validation($_POST['name']);
    $email=$controller->check_validation($_POST['email']);
    $password=$controller->check_validation($_POST['password']);
    $hash_pass=password_hash($password, PASSWORD_DEFAULT);
    $cpassword=$controller->check_validation($_POST['cpassword']);
    $dob=$controller->check_validation($_POST['dob']);
    $gender=$controller->check_validation($_POST['gender']);
    $idno=$controller->check_validation($_POST['idno']);
    $nationality=$controller->check_validation($_POST['nationality']);
    $phone=$controller->check_validation($_POST['phone']);
    $kra=$controller->check_validation($_POST['kra']);
    $profile=uniqid('', true).$_FILES['profile']['name'];
    $profile="image/".$profile;

    if($password==$cpassword){
      if($controller->user_exist($email)){
        echo "<script>alert('Email already registered!')</script>";
        echo "<script>window.open('../create.php', '_self')</script>";
      }else{
          $controller->register($name, $email, $hash_pass, $dob, $gender, $idno, $nationality, $phone, $kra, $profile);
          $_SESSION['user']=$email;
          echo "<script>alert('Successfully registered!')</script>";
          echo "<script>window.open('../apply.php', '_self')</script>";
          move_uploaded_file($_FILES['profile']['tmp_name'], $profile);
        }
      }else{
      echo "<script>alert('Password do not match!')</script>";
      echo "<script>window.open('../create.php', '_self')</script>";
    }
}
//user login
if(isset($_POST['login_btn'])){
    $email = $controller->check_validation($_POST['email']);
    $password = $controller->check_validation($_POST['password']);

    $loggedinuser = $controller->login($email);

    if($loggedinuser!= null){
      if(password_verify($password, $loggedinuser['password'])){
        $_SESSION['user']=$email;
        echo "<script>alert('Successfully logged in as a User')</script>";
        echo "<script>window.open('../apply.php', '_self')</script>";
      }else{
        echo "<script>alert('Password does not match')</script>";
        echo "<script>window.open('../login.php', '_self')</script>";
      }
    }else{
      echo "<script>alert('User is not registered')</script>";
      echo "<script>window.open('../login.php', '_self')</script>";
    }
}
//Apply details to the database
if(isset($_POST['mtoto_btn'])){
    $name=$controller->check_validation($_POST['name']);
    $email=$controller->check_validation($_POST['email']);
    $phone=$controller->check_validation($_POST['phone']);
    $empid=$controller->check_validation($_POST['empid']);
    $marital=$controller->check_validation($_POST['marital']);
    $pf=$controller->check_validation($_POST['pf']);
    $kra=$controller->check_validation($_POST['kra']);
    $dob=$controller->check_validation($_POST['dob']);
    $employer=$controller->check_validation($_POST['employer']);
    $appointment=uniqid('', true).$_FILES['appointment']['name'];
    $appointment="image/".$appointment;
    $residential=$controller->check_validation($_POST['residential']);
    $loan=$controller->check_validation($_POST['loan']);
    $loanamount=$controller->check_validation($_POST['loanamount']);
    $period=$controller->check_validation($_POST['period']);
    $installment=$controller->check_validation($_POST['installment']);
    $insuarance=$controller->check_validation($_POST['insuarance']);
    $number=$controller->check_validation($_POST['number']);
    $branch=$controller->check_validation($_POST['branch']);
    $choose=$controller->check_validation($_POST['choose']);
    $balance=$controller->check_validation($_POST['balance']);
    $payslip1=uniqid('', true).$_FILES['payslip1']['name'];
    $payslip1="image/".$payslip1;
    $payslip2=uniqid('', true).$_FILES['payslip2']['name'];
    $payslip2="image/".$payslip2;
    $payslip3=uniqid('', true).$_FILES['payslip3']['name'];
    $payslip3="image/".$payslip3;
    $kinname=$controller->check_validation($_POST['kinname']);
    $kinphone=$controller->check_validation($_POST['kinphone']);
    $nok=$controller->check_validation($_POST['nok']);
    $kinkra=$controller->check_validation($_POST['kinkra']);

    $controller->upload_apply($name, $email, $phone, $empid, $marital, $pf, $kra, $dob, $employer, $appointment, $residential, $loan, $loanamount, $period, $installment, $insuarance, $number, 
    $branch, $choose, $balance, $payslip1, $payslip2, $payslip3, $kinname, $kinphone, $nok, $kinkra);
    echo "<script>alert('Application Uploaded successfully!')</script>";
    echo "<script>window.open('../applydetails.php', '_self')</script>";
    move_uploaded_file($_FILES['appointment']['tmp_name'], $appointment);
    move_uploaded_file($_FILES['payslip1']['tmp_name'], $payslip1);
    move_uploaded_file($_FILES['payslip2']['tmp_name'], $payslip2);
    move_uploaded_file($_FILES['payslip3']['tmp_name'], $payslip3);
}
//Edit product in the database
if(isset($_POST['editproduct_btn'])){
    $productid=$controller->check_validation($_POST['productid']);
    $productname=$controller->check_validation($_POST['productname']);
    $newimage=uniqid('', true).$_FILES['newimage']['name'];
    $newimage="image/".$newimage;
    $sellername=$controller->check_validation($_POST['sellername']);
    $price=$controller->check_validation($_POST['price']);
    $description=$controller->check_validation($_POST['description']);

    $controller->update_product($productname, $newimage, $sellername, $price, $description, $productid);
    echo "<script>alert('Product Updated successfully!')</script>";
    echo "<script>window.open('../product.php', '_self')</script>";
    move_uploaded_file($_FILES['newimage']['tmp_name'], $newimage);
}
//Admin uploading products to the database
if(isset($_POST['adminupload_btn'])){
    $pname=$controller->check_validation($_POST['pname']);
    $pimage=uniqid('', true).$_FILES['pimage']['name'];
    $pimage="image/".$pimage;
    $sname=$controller->check_validation($_POST['sname']);
    $price=$controller->check_validation($_POST['price']);
    $location=$controller->check_validation($_POST['location']);
    $description=$controller->check_validation($_POST['description']);

    $controller->upload_product($pname, $pimage, $sname, $price, $location, $description);
    echo "<script>alert('Product Uploaded successfully!')</script>";
    echo "<script>window.open('../createproduct.php', '_self')</script>";
    move_uploaded_file($_FILES['pimage']['tmp_name'], $pimage);
}
//Adding a comment to a product
if(isset($_POST['comments_btn'])){
    $productid=$controller->check_validation($_POST['productid']);
    $firstname=$controller->check_validation($_POST['firstname']);
    $secondname=$controller->check_validation($_POST['secondname']);
    $comments=$controller->check_validation($_POST['comments']);

    $controller->insert_comment($productid, $firstname, $secondname, $comments);
    echo "<script>alert('Comment sent Successfully!')</script>";
    echo "<script>window.open('../index.php', '_self')</script>";
}
//adding cart
if(isset($_POST['cart_btn'])){
  $userid=$controller->check_validation($_POST['userid']);
  $productimage=$controller->check_validation($_POST['productimage']);
  $productname=$controller->check_validation($_POST['productname']);
  $qty=$controller->check_validation($_POST['qty']);
  $price=$controller->check_validation($_POST['price']);
  $total=$price * $qty;
  $type="cart";

  $controller->insert_cart($userid, $productimage, $productname, $qty, $price, $total, $type);
  echo "<script>alert('Product added to cart Successfully!')</script>";
  echo "<script>window.open('../cart.php', '_self')</script>";

}
//deleting item from cart
if(isset($_GET['delcart'])){
  $id=$_GET['delcart'];
  $controller->delete_cart($id);
  header("location:../cart.php");
}
//deleting item from wishlist
if(isset($_GET['delwishlist'])){
  $id=$_GET['delwishlist'];
  $controller->delete_wishlist($id);
  header("location:../wishlist.php");
}
//adding wishlist
if(isset($_POST['wishlist_btn'])){
  $userid=$controller->check_validation($_POST['userid']);
  $productimage=$controller->check_validation($_POST['productimage']);
  $productname=$controller->check_validation($_POST['productname']);
  $price=$controller->check_validation($_POST['price']);
  $type="wishlist";

  $controller->insert_wishlist($userid, $productimage, $productname, $price, $type);
  echo "<script>alert('Product added to wishlist Successfully!')</script>";
  echo "<script>window.open('../wishlist.php', '_self')</script>";

}
//Submit orders
if(isset($_POST['order_btn'])){
  $country=$controller->check_validation($_POST['country']);
  $firstname=$controller->check_validation($_POST['firstname']);
  $lastname=$controller->check_validation($_POST['lastname']);
  $street=$controller->check_validation($_POST['street']);
  $city=$controller->check_validation($_POST['city']);
  $county=$controller->check_validation($_POST['county']);
  $zip=$controller->check_validation($_POST['zip']);
  $email=$controller->check_validation($_POST['email']);
  $mobile=$controller->check_validation($_POST['mobile']);
  $products=$controller->check_validation($_POST['products']);
  $grand_total=$controller->check_validation($_POST['grand_total']);

  $controller->insert_order($country, $firstname, $lastname, $street, $city, $county, $zip, $email, $mobile, $products, $grand_total);
  echo "<script>alert('Thank you for Your Order. Await processing!')</script>";
  echo "<script>window.open('../index.php', '_self')</script>";
}
//verify item from orders
if(isset($_GET['verify'])){
  $id=$_GET['verify'];
  $controller->verify_order($id);
  header("location:../orders.php");
}
//deleting item from orders
if(isset($_GET['orderdel'])){
  $id=$_GET['orderdel'];
  $controller->delete_order($id);
  header("location:../orders.php");
}
//deleting item from products
if(isset($_GET['productdel'])){
  $id=$_GET['productdel'];
  $controller->delete_product($id);
  header("location:../product.php");
}
//deleting user
if(isset($_GET['userdel'])){
  $id=$_GET['userdel'];
  $controller->delete_user($id);
  header("location:../customers.php");
}
//update admin
if(isset($_POST['updateadmin_btn'])){

    $adminid=$controller->check_validation($_POST['adminid']);
    $firstname=$controller->check_validation($_POST['firstname']);
    $secondname=$controller->check_validation($_POST['secondname']);
    $email=$controller->check_validation($_POST['email']);
    $location=$controller->check_validation($_POST['location']);
    $mobile=$controller->check_validation($_POST['mobile']);
    $password=$controller->check_validation($_POST['password']);
    $hash_pass=password_hash($password, PASSWORD_DEFAULT);

    $controller->update_admin($firstname, $secondname, $email, $location, $mobile, $hash_pass, $adminid);
    echo "<script>alert('Successfully updated admin!')</script>";
    echo "<script>window.open('../adminprofile.php', '_self')</script>";

}
?>
