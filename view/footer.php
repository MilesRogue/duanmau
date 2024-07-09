<footer>
        <p>Copyright © 2020. All rights reserved</p>
    </footer>
</body>
</html>
<script>
  var listImages = document.querySelector('.list-images')
  var imgs = document.getElementsByTagName('img')
  var length = imgs.length
  var current = 0;

  setInterval(() => {
    if (current == length - 1) {
       current = 0;
       listImages.style.transform = `translateX(0px)`
    }else{
        current++
        let width = imgs[0].offsetWidth
        listImages.style.transform = `translateX(${ width * -1 * current}px)`
    }
}    , 4000
)

// var x = ['img/2.png','img/1.png'];
// var i = 0;
// var interval;
// var img = document.querySelector('img');
// var length = x.length;
// // function next(){
// //     i++;
// //     if(i >= x.length){
// //         i = 0;
// //     }
// //     document.querySelector('img').src = x[i];
// // }

// setInterval(function(){
//     i++;
//     if(i >= x.length){
//         i = 0;
//     }
//     img.src = x[i];
// }, 4000);


// // function start(){
// //     interval = setInterval(next, 4000); 
// // }

// // start();

</script>