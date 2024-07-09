<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    
    $hinhpath = "./upload/".$img;
         if(is_file($hinhpath)){
                                    $hinh = '<img src="'.$hinhpath.'" height="100" width="100">';
                                }else{
                                    $hinh = "no photo";
                                }
?>

<div class="row">
        <div class="row-header" >
            <h1>Them moi san pham</h1>
        </div>
        <div class="row-content">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row">
                    <label for="">Ma loai</label><br>
                                 <select name="iddm">
                            <option value="0" selected>Tat ca</option>
                                <?php
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    if($id==$iddm) $s = "selected";
                                    else $s = "";
                                    echo '<option value="'.$id.'"'.$s.'>'.$name.'</option>';
                                        
                                    
                                   
                                }
                                ?>
                            </select>
                </div>
                <?php
                   if(is_array($sanpham)){
                    extract($sanpham);
                }
                ?>
                <div class="row">
                    <label for="">Ten san pham</label><br>
                    <input type="text" name="tensp" placeholder="nhap ten San Pham..." value="<?= $name ?>">
                </div>
                <div class="row">
                    <label for="">Gia</label><br>
                    <input type="text" name="giasp" placeholder="nhap gia..." value="<?= $price?>"> 
                </div>
                <div class="row">
                    <label for="">Hinh</label><br>
                    <input type="file" name="hinh"> <br>
                    <?= $hinh?>
                </div>
                <div class="row">
                    <label for="">Mo ta</label><br>
                    <textarea name="mota" id=""><?= $mota?></textarea>
                </div>
                <div class="row-btn">
                    <input type="hidden" name = "id" value ="<?= $id?>">
                    <input type="submit" value="cap nhat" name="capnhat">
                    <input type="reset" value="Nhap Lai">
                    <a href="index.php?act=listsp"><input type="button" value="Danh sach"></a>
                </div>
                <?php

                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
                   
                ?>
            </form>
        </div>
    </div>