<?php
    if(is_array($dm)){
        extract($dm);
    }
?>

<div class="row">
        
        <div class="row-content">
        <div class="row-header" >
            <h1>    Cap nhat loai hang</h1>
        </div>
            <form action="index.php?act=updatedm" method="post">
                <div class="row">
                    <label for="">Ten loai</label><br>
                    <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;  ?>" placeholder="nhap ten loai...">
                </div>
                <div class="row-btn">
                    <input type="hidden" name = "id" value =" <?php if(isset($id)&&($id>0)) echo $id;  ?>" >
                    <input type="submit" value="cap nhat" name="capnhat">
                    <input type="reset" value="Nhap Lai">
                    <a href="index.php?act=listdm"><input type="button" value="Danh sach"></a>
                </div>
                <?php

                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
                   
                ?>
            </form>
        </div>
    </div>