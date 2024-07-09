

<div class="row">
        <div class="row-header" >
            <h1>Them moi san pham</h1>
        </div>
        <div class="row-content">
            <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row">
                    <label for="">Ma loai</label><br>
                    <select name="iddm">
                        <?php
                        foreach($listdanhmuc as $danhmuc){
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                        ?>
                       
                    </select>
                </div>
                <div class="row">
                    <label for="">Ten san pham</label><br>
                    <input type="text" name="tensp" placeholder="nhap ten San Pham...">
                </div>
                <div class="row">
                    <label for="">Gia</label><br>
                    <input type="text" name="giasp" placeholder="nhap gia...">
                </div>
                <div class="row">
                    <label for="">Hinh</label><br>
                    <input type="file" name="hinh" >
                </div>
                <div class="row">
                    <label for="">Mo ta</label><br>
                    <textarea name="mota" id=""></textarea>
                </div>
                <div class="row-btn">
                    <input type="submit" value="Them" name="themmoi">
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