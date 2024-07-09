<div class="row">
        <div class="row-header" >
            <h1>Them moi loai hang</h1>
        </div>
        <div class="row-content">
            <form action="index.php?act=adddm" method="post">
                <div class="row">
                    <label for="">Ten loai</label><br>
                    <input type="text" name="tenloai" placeholder="nhap ten loai...">
                </div>
                <div class="row-btn">
                    <input type="submit" value="Them" name="themmoi">
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