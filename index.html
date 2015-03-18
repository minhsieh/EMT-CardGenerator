<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example that shows off a blog page with a list of posts.">
<title>童軍緊急醫療救護團-線上識別證產生器 ID Card Generator</title>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

<!--[if lte IE 8]>
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
  
<![endif]-->
<!--[if gt IE 8]><!-->
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
  
<!--<![endif]-->





  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/blog-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/blog.css">
    <!--<![endif]-->

<script type="text/javascript" src="jquery.js"></script>
<script>
         function create() {
            //$('#step1').css("display", "none");
            //$('#step2').css("display", "none");
            $('#create-btn').css("display", "none");
            $('#myCanvas').css('display','inline');

            var cht_name = $("#cht_name").val();
            var eng_name = $("#eng_name").val();
            var num = $("#num").val();
            var level = $("#level").val();
            var title = $("#cht_title").val();
            var cht_unit = $("#cht_unit").val();
            var eng_unit = $("#eng_unit").val();
            var qua = $("#cht_qua").val();
            var code1d = $("#code1d").val();
            var code2d = $("#code2d").val();


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
            var photosrc = $('#show_image').attr('src');

            if(level == '1'){
               var backsrc = '1.jpg';
            }
            else if(level == '2'){
                var backsrc = '2.jpg';
            }
            else if(level == '3'){
               var backsrc = '3.jpg';
            }
            else if(level == '4'){
                var backsrc = '4.jpg';
            }
           else if(level == '5'){
               var backsrc = '5.jpg';
           }

           if(title == '1'){
               var cht_title = '主任委員';
               var eng_title = 'Group Council Chairman';
            }
            else if(title == '2'){
                var cht_title = '團務委員';
               var eng_title = 'Member of Group Council';
            }
            else if(title == '3'){
               var cht_title = '團長';
               var eng_title = 'Troop Leader';
            }
            else if(title == '4'){
               var cht_title = '服務員';
               var eng_title = 'Adult Leader';
            }
           else if(title == '5'){
               var cht_title = '羅浮';
               var eng_title = 'Rover';
           }
           else if(title == '6'){
               var cht_title = $("#qua_other_cht").val();
               var eng_title = $("#qua_other_eng").val();
           }



            if(qua == '1'){
               var cht_qua = '初級救護技術員';
               var eng_qua = 'EMT-I';
            }
            else if(qua == '2'){
                var cht_qua = '中級救護技術員';
               var eng_qua = 'EMT-II';
            }
            else if(qua == '3'){
               var cht_qua = '高級救護技術員';
               var eng_qua = 'PARAMEDIC';
            }
            else if(qua == '4'){
               var cht_qua = '護理師';
               var eng_qua = 'Nurse';
            }
           else if(qua == '5'){
               var cht_qua = '醫生';
               var eng_qua = 'Doctor';
           }
           else if(qua == '6'){
               var cht_qua = '實習護生';
               var eng_qua = 'Student Nurse';
           }
           else if(qua == '7'){
               var cht_qua = '藥劑師';
               var eng_qua = 'Pharmacist';
           }
           else if(qua == '8'){
               var cht_qua = '放射師';
               var eng_qua = 'Radiological Technologist';
           }
           else if(qua == '9'){
               var cht_qua = '牙醫師';
               var eng_qua = 'Dentist';
           }
           else if(qua == '10'){
               var cht_qua = '檢驗師';
               var eng_qua = 'Medical Technologist';
           }
           else if(qua == '11'){
               var cht_qua = '學員';
               var eng_qua = 'Student';
           }
           else if(qua == '12'){
               var cht_qua = $("#title_other_cht").val();
               var eng_qua = $("#title_other_eng").val();
           }
            



                var code1dsrc = '../codegenerator/html/image.php?code=code39&o=1&t=60&r=1&text='+code1d+'&f=0&a1=&a2=';
                var code2dsrc = 'http://chart.apis.google.com/chart?cht=qr&chs=200x200&chl='+code2d;

                var sources = {
                back: backsrc,
                code1d: code1dsrc,
                code2d: code2dsrc,
                photo: photosrc
             };

                loadImages(sources, function(images) {
                context.drawImage(images.back, 0, 0, 638, 1010);
                context.drawImage(images.code2d, 420, 810, 200, 200);

                // draw cropped image

                var pic = $("#show_image");

                // need to remove these in of case img-element has set width and height
                pic.removeAttr("width"); 
                pic.removeAttr("height");

                var width = pic.width();
                var height = pic.height();
                //or however you get a handle to the IMG

                if(width/height >= 0.709){
                    var sourceHeight = height;
                    var sourceWidth  = height/430*305;
                    var sourceX = (width/2)-(sourceWidth/2);
                    var sourceY = 0;
                }
                else{
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
                context.fillText(cht_title, 440, 680);
                context.font = 'bold 12pt Arial';
                context.fillText(eng_title, 444, 700);

                context.font = 'bold 24pt microsoft jhenghei';
                context.fillText(cht_unit, 440, 800);
                context.font = 'bold 12pt Arial';
                context.fillText(eng_unit, 444, 820);

                context.font = 'bold 24pt microsoft jhenghei';
                context.fillText(cht_qua, 170, 680);
                context.font = 'bold 12pt Arial';
                context.fillText(eng_qua, 170, 700);

                context.font = 'bold 38pt microsoft jhenghei';
                context.fillStyle = 'white';
                context.fillText(cht_name, 30, 545);
                context.font = 'bold 20pt Arial';
                context.fillText(eng_name, 35, 580);
                context.font = 'bold 36pt Arial';
                context.fillText(num, 470, 590);

                context.rotate(90*Math.PI/180);
                context.drawImage(images.code1d, 620, -140, 350, 120);
          });

        //var canvaslink  = document.getElementById('myCanvas').toDataURL("image/jpge");
        //$('#downloadbtn').attr('href',canvaslink);
        // save canvas image as data url (png format by default)
        //var dataURL = canvas.toDataURL();

      // set canvasImg image src to dataURL
      // so it can be saved as an image
        //document.getElementById('myCanvas').src = dataURL;
        $('#myCanvas').css("height","500px");

        //window.location = canvaslink;

                //可以開始畫圖了:)
    };
    function downloadCanvas(link, canvasId, filename) {
    link.href = document.getElementById(canvasId).toDataURL();
    link.download = filename;
    }
    $('#downloadbtn').click(function(){
        downloadCanvas(this, 'myCanvas', 'test.png');
    });


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
            <img src="img/emt_logo.gif" style="margin-top:-300px;width:60%;">
            <h1 class="brand-title">EMS ID Card Generator</h1>
            <h2 class="brand-tagline">Emergency Medical Scout</h2>
            <h2 class="brand-tagline">童軍緊急醫療救護團</h2>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="pure-button" href="#">關於</a>
                    </li>
                    <li class="nav-item">
                        <a class="pure-button" href="javascript:window.location.reload()">重新製作</a>
                    </li>
                    
                </ul>
            </nav>
        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>
            <!-- A wrapper for all the blog posts -->
            <canvas name="testing" id="myCanvas" width="638" height="1010" style="display:none;border-style:dashed;border-width: 1px;"></canvas>
            <div class="posts"  id="step1">
                <h1 class="content-subhead">Step-1 上傳照片</h1>

                <!-- A single blog post -->
                <section class="post">
                    <header class="post-header">
                        <form class="pure-form ">
                        <div>
                            <input id="file_selector" type="file" value="" onchange="file_viewer.load();"/>
                        </div> 
                        <div>
                        <input id="show_filename" type="text" readonly="true" value="" style="display:none"/>
                        <input id="show_filesize" type="text" readonly="true" value="" style="display:none"/>
                        
                        <textarea id="show_data" readonly="true" cols="60" rows="2" style="display:none">
                        </textarea>
                        <br>

                        <img id="show_image" width="300px"/>
                        </div>
                        <div class="pure-controls">
                            <button id="btn-step1" type="button" class="pure-button pure-button-primary" onclick="if($('#show_image').attr('src')!= null){$('#btn-step1').css('display','none');$('#step2').css('display','inline');window.scrollTo(0, 300);}else{alert('請務必上傳一張個人照片，證件照或是生活照皆不拘。');}">下一步</button>
                        </div>
                    </form>
                    </header>
                </section>
            </div>
            <div class="posts" id="step2" style="display:none;">
                <h1 class="content-subhead">Step-2 填寫資料</h1>
                <form class="pure-form pure-form-aligned">
                    <fieldset>
                        <div class="pure-control-group">
                            <label for="cht_name">中文姓名</label>
                            <input id="cht_name" type="text" placeholder="Chinese Name">
                        </div>

                        <div class="pure-control-group">
                            <label for="eng_name">英文姓名</label>
                            <input id="eng_name" type="text" placeholder="English Name">
                        </div>

                        <div class="pure-control-group">
                            <label for="num">識別編號</label>
                            <input id="num" type="text" placeholder="Id Number">
                        </div>
                        <div class="pure-control-group">
                            <label for="level">底圖</label>
                                <select id="level">
                                    <option value="1">AL-1 (白橫條)</option>
                                    <option value="2">AL-2 (銀橫條)</option>
                                    <option value="3">AL-3 (黃橫條)</option>
                                    <option value="4">RS-1 (白橫條)</option>
                                    <option value="5">RS-2 (黃橫條)</option>
                                </select>
                        </div>

                        <div class="pure-control-group">
                            <label for="cht_title">職別、職級 </label>
                                <select id="cht_title" onchange="if($('#cht_title').val()=='6'){$('#title_other_cht').css('display','inline');$('#title_other_eng').css('display','inline');}else{$('#title_other_cht').css('display','none');$('#title_other_eng').css('display','none');}">
                                    <option value="1">主任委員 Group Council Chairman</option>
                                    <option value="2">團務委員  Member of Group Council</option>
                                    <option value="3">團長 Troop Leader</option>
                                    <option value="4">服務員 Adult Leader</option>
                                    <option value="5">羅浮 Rover</option>
                                    <option value="6">其他 Other  <input id="title_other_cht" placeholder="請輸入專業項目(中文)" style="display:none;"/> <input id="title_other_eng" placeholder="請輸入專業項目(English)" style="display:none;"/></option>
                                </select>
                        </div>

                        <div class="pure-control-group">
                            <label for="cht_unit">群團、單位(中文) <br><em style="font-size:8px">例如:營本部、XX羅浮群</em>
                            </label>
                            <input id="cht_unit" type="text" placeholder="Chinese Unit">
                        </div>

                        <div class="pure-control-group">
                            <label for="eng_unit">群團、單位(英文)</label>
                            <input id="eng_unit" type="text" placeholder="English Unit">
                        </div>

                        <div class="pure-control-group">
                            <label for="cht_qua">證照別</label>
                            <select id="cht_qua" onchange="if($('#cht_qua').val()=='12'){$('#qua_other_cht').css('display','inline');$('#qua_other_eng').css('display','inline');}else{$('qua_other_cht').css('display','none');$('qua_other_eng').css('display','none');}">
                                    <option value="1">初級救護技術員 EMT-I</option>
                                    <option value="2">中級救護技術員 EMT-II</option>
                                    <option value="3">高級救護技術員 PARAMEDIC</option>
                                    <option value="4">護理師 Nurse</option>
                                    <option value="5">醫生 Doctor</option>
                                    <option value="6">實習護生 Student Nurse</option>
                                    <option value="7">藥劑師  Pharmacist</option>
                                    <option value="8">放射師  Radiological Technologist </option>
                                    <option value="9">牙醫師 Dentist</option>
                                    <option value="10">檢驗師 Medical Technologist</option>
                                    <option value="11">學員 Student</option>
                                    <option value="12">其他 Other  <input id="qua_other_cht" placeholder="請輸入專業項目(中文)" style="display:none;"/> <input id="qua_other_eng" placeholder="請輸入專業項目(English)" style="display:none;"/></option>
                            </select>
                        </div>

                        <div class="pure-control-group">
                            <label for="code1d">一維條碼內容 <br><em style="font-size:8px">限英文、數字</em></label>
                            <input id="code1d" type="text" placeholder="Barcode Place -1">
                        </div>

                        <div class="pure-control-group">
                            <label for="code2d">二維條碼內容 <br><em style="font-size:8px">可放入網址、電子信箱、名片資訊等</em></label>
                            <input id="code2d" type="text" placeholder="Barcode Place -2">
                        </div>

                        <div class="pure-controls">
                            <p id="description">完成後請務必立刻存檔，以免檔案消失。</p>
                            <button id="create-btn" type="button" class="pure-button pure-button-primary" onclick="create();window.scrollTo(0, 0);$('#description').html('請至頁頂盡速將所需要的ID Card下載，一離開本頁面檔案會隨即刪除。');">完成</button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="footer">
                <div class="pure-menu pure-menu-horizontal">
                    <ul>
                        <li class="pure-menu-item"><a href="https://www.facebook.com/minyann.hsieh" class="pure-menu-link">Made by Min</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
