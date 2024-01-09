<?php

$name = @$_POST['name'];
$phone =@$_POST ['phone'];
$sex = @$_POST ['sex'];
$age = @$_POST ['age'];
$doctor = @$_POST ['doctor'];
$date = @$_POST ['date'];
$img = @$_POST ['img'];
$img_dest='';

  if (isset($_POST['submit']) ){
        if(isset($_FILES['img'])){
            $img = $_FILES['img'];

            $img_name=$img['name'];

            $img_tmp=$img['tmp_name'];
            $img_size=$img['size'];
            $img_error=$img['error'];
            $img_ext=explode('.',$img_name);
            $img_ext=end($img_ext);
            $allowed=array('jpg','png','jpeg');
            if(in_array($img_ext,$allowed)){

                $img_dest='results/'.$img_name;

            }
            else{
                echo 'File Not Supported';
            }
        }
        else{
            echo "برجاء رفع صورة النتيجة";
        }

        //   //writing query for inserting data to DB
      $sql_add = "INSERT INTO patients(name,phone,sex,age,doctor,date,result) VALUES ('$name','$phone','$sex','$age','$doctor','$date','$img_dest')" ;
      //  //sending query to DB
        if(empty($name)){
            echo "يرجي ادخال الاسم";
        }
        elseif(empty($phone)){
            echo "يرجي ادخال رقم الهاتف";
        }
        elseif(empty($age)){
            echo "يرجي ادخال السن";
        }
        elseif(empty($doctor)){
            echo "يرجي ادخال اسم الطبيب المعالج";
        }
        elseif(empty($date)){
            echo "يرجي ادخال التاريخ";
        }
        elseif(empty($img_dest)){
            echo "يرجي رفع صورة النتيجة";
        }
        else {
            if(mysqli_query($connect,$sql_add)){
                if(@move_uploaded_file($img_tmp,$img_dest)){
                    echo 'تم التحميل';
                    header('Location: admin.php');
                }
                else{
                    echo 'خطأ في التحميل';

                }
            } else {
                echo 'ERROR : '.mysqli_error($connect);
            }
        }



}
?>