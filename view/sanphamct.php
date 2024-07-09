<div class="row-content">
<?php
            extract($onesp);
            ?>
<div class="product-content">
    <h1>CHI TIET</h1>
        <div class="product">
            
            <div class="detail">
                <div class="detail-image">
                <?php
                        $img = $img_path.$img;
                        echo '<img src="'.$img.'" alt="">';
                    ?>
                    <!-- <img src="img/demo18/products/product-10.jpg" alt=""> -->
                </div>
                <div class="detail-content">
                    <?php
                        echo '<h1>'.$name.'</h1>';
                        echo '<h3>$'.$price.'</h3>';
                        echo '<p>'.$mota.'</p>';
                    ?>
                  <!-- <h1> Backpack Sfs Responder</h1>
                        <h3>$1,699.00</h3>
                        <p>Pellentesque habitant morbi tristique senectus  
                            et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, 
                            ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                             Aenean ultricies  mi vitae est. Mauris placerat eleifend leo.</p> -->
                        
                        <button>Add to cart</button>
                
                    </div>
            </div>
        </div>

        <div class="row">
        <h2>Binh luan</h2>
        <div class="review-content">
           

            

            
        </div>
        </div>
        <div class="row">
        <h2>San pham cung loai</h2>
        <div class="review-content">
            
        <?php
            foreach($sp_cung_loai as $sp_cung_loai){
                extract($sp_cung_loai);
                $linksp = "index.php?act=sanphamct&idsp=".$id;
                echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
            }

        ?>
            

            
        </div>
        </div>

        
        <div class="row">
            <h1>Reviews</h1>
            <form action="">
                <div class="row">
                    <label for="">Your review*</label><br>
                    <input type="text" name="" id="">
                </div>
                <div class="row">
                    <label for="">Name*</label><br>
                    <input type="text" name="" id="">
                </div>
                <div class="row">
                    <label for="">Email*</label><br>
                    <input type="email" name="" id="">
                </div>
                <div class="row">
                    <input type="checkbox" name="" id=""> Save my name, email, and website in this browser for the next time I comment.
                </div>
                <div class="row">
                    
                    <input type="submit" value="submit">
                </div>
            </form>
        </div>
    </div>
</div>