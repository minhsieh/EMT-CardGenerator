<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example that shows off a blog page with a list of posts.">
<title>ID Card Generator</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

<!--[if lte IE 8]>
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
  
<![endif]-->
<!--[if gt IE 8]><!-->
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
  
<!--<![endif]-->
<?php 




?>




  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/blog-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/blog.css">
    <!--<![endif]-->
  

<script>
        window.onload = function() {

            function loadImages(sources, callback) {
                var images = {};
                var loadedImages = 0;
                var numImages = 0;
                // get num of sources
                for(var src in sources) {
                  numImages++;
                }
                for(var src in sources) {
                  images[src] = new Image();
                  images[src].onload = function() {
                    if(++loadedImages >= numImages) {
                      callback(images);
                    }
                  };
                  images[src].src = sources[src];
                }
              }

            var canvas = document.getElementById("myCanvas");
            var context = canvas.getContext("2d");
            var imageObj = new Image();
            var photosrc= document.getElementById('testimg').src;

        imageObj.onload = function() {
       
                var sources = {
                back: 'lv1.jpg',
                code1d: '../codegenerator/html/image.php?code=code39&o=1&t=60&r=2&text=N125507851&f=4&a1=&a2=',
                code2d: 'http://chart.apis.google.com/chart?cht=qr&chs=200x200&chl=http://min0.tw/card/',
                photo: photosrc
             };

                loadImages(sources, function(images) {
                context.drawImage(images.back, 0, 0, 638, 1010);
                context.drawImage(images.code2d, 400, 810, 200, 200);

                // draw cropped image

                var img = document.getElementById('testimg'); 
                //or however you get a handle to the IMG
                var width = img.clientWidth;
                var height = img.clientHeight;
                if(width/305 >= height/430){

                    var sourceHeight = height;
                    var sourceWidth  = height/430*305;
                    var sourceX = (width/2)-(sourceWidth/2);
                    var sourceY = 0;
                }
                if(width/305 < height/430){
                    var sourceWidth = width;
                    var sourceHeight  = width/305*430;
                    var sourceY = (height/2)-(sourceHeight/2);
                    var sourceX = 0;
                }
                var destWidth = 305;
                var destHeight = 430;
                var destX = 33;
                var destY = 35;

                context.drawImage(images.photo, sourceX, sourceY, sourceWidth, sourceHeight, destX, destY, destWidth, destHeight);

                context.font = 'bold 24pt microsoft jhenghei';
                context.fillText('服務員', 440, 680);
                context.font = 'bold 12pt Arial';
                context.fillText('Adult Leader', 444, 700);

                context.font = 'bold 24pt microsoft jhenghei';
                context.fillText('團本部', 440, 800);
                context.font = 'bold 12pt Arial';
                context.fillText('HQ Troop', 444, 820);

                context.font = 'bold 24pt microsoft jhenghei';
                context.fillText('初級救護技術員', 170, 680);
                context.font = 'bold 12pt Arial';
                context.fillText('EMT-1', 170, 700);

                context.font = 'bold 38pt microsoft jhenghei';
                context.fillStyle = 'white';
                context.fillText('陳 以 倫', 30, 545);
                context.font = 'bold 20pt Arial';
                context.fillText('Chen Yi-Lun', 35, 580);
                context.font = 'bold 36pt Arial';
                context.fillText('AL-005', 470, 590);

                context.rotate(90*Math.PI/180);
                context.drawImage(images.code1d, 640, -120, 350, 120);
          });

        
      };
      imageObj.src = 'lv1.jpg';

      
                //可以開始畫圖了:)
    };
        </script>

<script type="text/javascript">
function ImageViewer(args) {
    for (var p in args)
        this[p] = args[p];
 
    this.reader = new FileReader();
 
    function _event_handler(self, method) {
        return function(){
            method.call(self);
        };
    }
    this.reader.onloadend = _event_handler(this, this.loaded);
}
ImageViewer.prototype.load = function() {
    this.file = this.controller.files[0];
    this.reader.readAsDataURL(this.file);
}
ImageViewer.prototype.loaded = function() {
    this.view_name.value = this.file.name;
    this.view_size.value = this.file.size;
    this.view_data.value = this.reader.result.substring(0,100);
 
    if ( ! /^image/.test(this.file.type) )
        alert("This is not an image file. Type: " + this.file.type);
    else
        this.view.src = this.reader.result;
}
 
var file_viewer = undefined;
 
function init() {
    file_viewer = new ImageViewer({
        controller: document.getElementById('file_selector'),
        view_name: document.getElementById('show_filename'),
        view_size: document.getElementById('show_filesize'),
        view: document.getElementById('show_image'),
        view_data: document.getElementById('show_data')
    });
}
</script>
 
<body  onload="init();">
<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">EMS ID Card Generator</h1>
            <h2 class="brand-tagline">Creating your ID card.</h2>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="pure-button" href="http://purecss.io">產生</a>
                    </li>
                    <li class="nav-item">
                        <a class="pure-button" href="http://yuilibrary.com">預留</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <!-- A wrapper for all the blog posts -->
            <div class="posts">
                <h1 class="content-subhead">Pinned Post</h1>

                <!-- A single blog post -->
                <section class="post">
                    <header class="post-header">
                        <img class="post-avatar" alt="Tilo Mitra&#x27;s avatar" height="48" width="48" src="img/common/tilo-avatar.png">
                        
                        <h2 class="post-title">Introducing Pure</h2>
                        
 
                        <div>
                        <input id="file_selector" type="file" value=""
                            onchange="file_viewer.load();"/>
                        </div>
                         
                        <div>
                        Name: <input id="show_filename" type="text"
                                    readonly="true" value=""/>
                        Size: <input id="show_filesize" type="text"
                                    readonly="true" value=""/>
                        <br/>
                        <textarea id="show_data" readonly="true" cols="60" rows="2">
                        </textarea>
                        <br/>
                        <img id="show_image" alt="Show Image" width="200px"/>
                        </div>

                    </header>

                    <div class="post-description">
                        <canvas id="myCanvas" width="638" height="1010"></canvas>
                    </div>
                </section>
            </div>

            <div class="posts">
                <h1 class="content-subhead">Recent Posts</h1>

                <section class="post">
                    <header class="post-header">
                        <img class="post-avatar" alt="Eric Ferraiuolo&#x27;s avatar" height="48" width="48" src="img/common/ericf-avatar.png">

                        <h2 class="post-title">Everything You Need to Know About Grunt</h2>

                        <p class="post-meta">
                            By <a class="post-author" href="#">Eric Ferraiuolo</a> under <a class="post-category post-category-js" href="#">JavaScript</a>
                        </p>
                    </header>

                    <div class="post-description">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                </section>

                <section class="post">
                    <header class="post-header">
                        <img class="post-avatar" alt="Reid Burke&#x27;s avatar" height="48" width="48" src="img/common/reid-avatar.png">

                        <h2 class="post-title">Photos from CSSConf and JSConf</h2>

                        <p class="post-meta">
                            By <a class="post-author" href="#">Reid Burke</a> under <a class="post-category" href="#">Uncategorized</a>
                        </p>
                    </header>

                    <div class="post-description">
                        <div class="post-images pure-g">
                            <div class="pure-u-1 pure-u-md-1-2">
                                <a href="http://www.flickr.com/photos/uberlife/8915936174/">
                                    <img alt="Photo of someone working poolside at a resort"
                                         class="pure-img-responsive"
                                         src="http://farm8.staticflickr.com/7448/8915936174_8d54ec76c6.jpg">
                                </a>

                                <div class="post-image-meta">
                                    <h3>CSSConf Photos</h3>
                                </div>
                            </div>

                            <div class="pure-u-1 pure-u-md-1-2">
                                <a href="http://www.flickr.com/photos/uberlife/8907351301/">
                                    <img alt="Photo of the sunset on the beach"
                                         class="pure-img-responsive"
                                         src="http://farm8.staticflickr.com/7382/8907351301_bd7460cffb.jpg">
                                </a>

                                <div class="post-image-meta">
                                    <h3>JSConf Photos</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="post">
                    <header class="post-header">
                        <img class="post-avatar" alt="Andrew Wooldridge&#x27;s avatar" height="48" width="48" src="img/common/andrew-avatar.png">

                        <h2 class="post-title">YUI 3.10.2 Released</h2>

                        <p class="post-meta">
                            By <a class="post-author" href="#">Andrew Wooldridge</a> under <a class="post-category post-category-yui" href="#">YUI</a>
                        </p>
                    </header>

                    <div class="post-description">
                        <p>
                            We are happy to announce the release of YUI 3.10.2! You can find it now on the Yahoo! CDN, download it directly, or pull it in via npm. We’ve also updated the YUI Library website with the latest documentation.
                        </p>
                    </div>
                </section>
            </div>

            <div class="footer">
                <div class="pure-menu pure-menu-horizontal">
                    <ul>
                        <li class="pure-menu-item"><a href="http://purecss.io/" class="pure-menu-link">About</a></li>
                        <li class="pure-menu-item"><a href="http://twitter.com/yuilibrary/" class="pure-menu-link">Twitter</a></li>
                        <li class="pure-menu-item"><a href="http://github.com/yahoo/pure/" class="pure-menu-link">GitHub</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
