<div class="row">
        
        <div class="row-content">
        <div class="row-header">
            <h1>Danh sach loai hang</h1>
            
            <form action="index.php?act=listsp" method="post">
                 <input type="text" name="kyw" class="form-control"  placeholder="nhap ten san pham...">
                        <select name="iddm">
                            <option value="0" selected>Tat ca</option>
                                <?php
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                                ?>
                            </select>
                           
                        <input type="submit" name="listok" value="Tim kiem">
                    </form>
        </div>
        
            <form action="" method="post">
                <div class="row-tb">
                    
                   <table>
                        <tr>
                            <th></th>
                            <th>Ma loai</th>
                            <th>Ten San Pham</th>
                            <th>Hinh</th>
                            <th>Gia</th>
                            <th>Luot Xem</th>
                            <th></th>
                            
                        </tr>
                        <?php
                            foreach($listsanpham as $sanpham){
                                extract($sanpham);
                                $suasp="index.php?act=suasp&id=".$id;
                                $xoasp="index.php?act=xoasp&id=".$id;
                                $hinhpath = "./upload/".$img;
                                if(is_file($hinhpath)){
                                    $hinh = '<img src="'.$hinhpath.'" height="100" width="100">';
                                }else{
                                    $hinh = "no photo";
                                }
                                echo '<tr>
                                            <td><input type="checkbox"></td>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td>'.$hinh.'</td>
                                            <td>'.$price.'</td>
                                            <td>'.$view.'</td>
                                            <td><a href="'.$suasp.'"><input type="button" value="sua"></a>
                                            <a href="'.$xoasp.'"> <input type="button" value="xoa"></td></a>
                                    </tr>';
                            }
                        ?>
                       
                   </table>
                </div>
                <div class="row-btn">
      
                    <input type="button" value="Xoa cac muc da chon">
                    <input type="button" value="Bo chon tat ca">
                    <a href="index.php?act=addsp"><input type="button" value="Nhap them"></a>
                </div>
                
            </form>
        </div>
    </div>