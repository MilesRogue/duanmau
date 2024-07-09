<div class="row">
        
        <div class="row-content">
        <div class="row-header">
            <h1>Danh sach loai hang</h1>
        </div>
            <form action="" method="post">
                <div class="row-tb">
                   <table>
                        <tr>
                            <th></th>
                            <th>Ma loai</th>
                            <th>Ten Loai</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listdanhmuc as $dm){
                                extract($dm);
                                $suadm="index.php?act=suadm&id=".$id;
                                $xoadm="index.php?act=xoadm&id=".$id;
                                echo '<tr>
                                            <td><input type="checkbox"></td>
                                            <td>'.$id.'</td>
                                            <td>'.$name.'</td>
                                            <td><a href="'.$suadm.'"><input type="button" value="sua"></a>
                                            <a href="'.$xoadm.'"> <input type="button" value="xoa"></td></a>
                                    </tr>';
                            }
                        ?>
                       
                   </table>
                </div>
                <div class="row-btn">
                    <input type="button" value="Chon tat ca">
                    <input type="button" value="Bo chon tat ca">
                    <input type="button" value="Xoa cac muc da chon">
                    <input type="button" value="Bo chon tat ca">
                    <a href="index.php?act=adddm"><input type="button" value="Nhap them"></a>
                </div>
                
            </form>
        </div>
    </div>