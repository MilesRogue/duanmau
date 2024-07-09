<div class="slide-show">
        <div class="list-images">
            <img src="./layout/img/2.png" alt="" id="anh">
            <img src="./layout/img/1.png" alt="" id="anh">
            <img src="./layout/img/2.png" alt="" id="anh">
            <img src="./layout/img/1.png" alt="" id="anh">
            <img src="./layout/img/2.png" alt="" id="anh">
            <img src="./layout/img/1.png" alt="" id="anh">
            <img src="./layout/img/2.png" alt="" id="anh">
            <img src="./layout/img/1.png" alt="" id="anh">
            <img src="./layout/img/2.png" alt="" id="anh">
            <img src="./layout/img/1.png" alt="" id="anh">
            <img src="./layout/img/2.png" alt="" id="anh">
            <img src="./layout/img/1.png" alt="" id="anh">
            <img src="./layout/img/2.png" alt="" id="anh">
            <img src="./layout/img/1.png" alt="" id="anh">
            <img src="./layout/img/2.png" alt="" id="anh">
            <img src="./layout/img/1.png" alt="" id="anh">
            <img src="./layout/img/2.png" alt="" id="anh">
            <img src="./layout/img/1.png" alt="" id="anh">
            <img src="./layout/img/2.png" alt="" id="anh">
            <img src="./layout/img/1.png" alt="" id="anh">
        </div>
    </div>

<main>
        <aside>
            <div class="danhmuc">
                <h3>Danh muc san pham</h3>
            <ul>
                <?php
                    foreach($dsdm as $dm){
                        extract($dm);
                        $linkdm = "index.php?act=sanpham&iddm=".$id;
                        echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                    }
                ?>

            
            </ul>
            </div>
            
            <div class="top">
                <h3>Top 10 san pham yeu thich</h3>
                    <?php
                        foreach($dstop10 as $sp){
                            extract($sp);
                            $linksp = "index.php?act=sanphamct&idsp=".$id;
                            $img = $img_path.$img;
                            
                            echo '<div class="top-sp">
                                        <img src="'.$img.'" alt="">
                                            <a href="'.$linksp.'">'.$name.'</a>
                                        </div>';
                        }

                    ?>

              
                
            </div>
           
        </aside>
        <article>
            <div class="sanpham">
                <?php
                // $i = 0;
                    foreach($spnew as $sp){
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=".$id;
                        $hinh = $img_path.$img;
                        // if(($i == 2) || ($i == 5) || ($i == 8)){
                        //     $mr = "sp";
                        // }else{
                        //     $mr = "";
                        // }
                        echo '<div class="sp">
                            <a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a>
                                <p><a href="'.$linksp.'">'.$name.'</a></p>
                                <h3>$'.$price.'</h3>
                            </div>';

                    }
                ?>
                             
            </div>
            
        </article>
    </main>