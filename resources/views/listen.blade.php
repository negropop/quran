<!DOCTYPE html>
<html>
    <head>
        <title>Alan Walker Mp3 Player especially for Alan Walker</title>
         <meta name="viewport" charset="UTF-8" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
         <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css"> 
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <script src="jquery-2.1.4.js"></script>
    </head>
    
    <body id="body">
   <div id="loader">
       <div class="pair pair-1">
           <div class="dot dot-1"></div>
           <div class="dot dot-2"></div>
       </div>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <div class="pair pair-2">
           <div class="dot dot-1"></div>
           <div class="dot dot-2"></div>
       </div>
        <div class="text">التحميل</div>
         <span id ="android" class="fa fa-android" aria-hidden="true"></span>
          <span id ="apple" class="fa fa-apple" aria-hidden="true"></span>
   </div>   
  
    <div id="app">
        <span id="about" class="fas fa-moon" style="font-size: 28px; color:black" ></span>
        <span id="about" class="fas fa-sun" style="font-size: 28px;" ></span>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="{{ asset('js/main.js') }}"></script>      

<div class="song-details">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>          

            <div class="song-pic">
                <img src="https://dl.dropbox.com/s/hezhpxo37hic9hb/alan_walker_logo.jpg?raw=0" id="thumbnail" class="act-img">
            </div>
        </div>          
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content" style="text-align: center;">
                <div class="modal-header">
                  <h5 class="modal-title" style="margin: 0 auto; float: revert; margin-left: 13pc;" id="exampleModalLabel">أخر 5 تحميلات</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                 <ul style="list-style: none; text-decoration: none;">
                     <style>a:hover {
                        color: #0056b3;
                        text-decoration: none;
                    }
                    ul li{
                        padding: 11px;
                    }
                    </style>
                     @foreach ($rand as $item)
                <li><a class="btn btn-dark" href="/{{$item->id}}/listen/">
                    {{$item->title}}
                -
                بصوت الشيخ 
                 {{$item->reader}}
                    
                </a></li>
                     @endforeach
                 </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">غلق</button>
                </div>
              </div>
            </div>
          </div>
        <div id="song-name">Project CSS</div>
        <div id="artist-name">Rishabh Singh</div>
        <div class="button-control">
<form action="fav" method="POST" id="imageUpload">
    @csrf
    
    <span id="prev" data-toggle="modal" data-target="#exampleModal" class="fas fa-assistive-listening-systems" onclick="prev()"></span>
    <span id="play" onclick="play()" class="fa fa-play"></span>
<button type="submit"> 
    <span id="next" style="bottom: 37px;" class="fa fa-heart" onclick="fav()"></span>
</button>
</form>

<script type="text/javascript">
    $(document).ready(function () {
        $('.success').hide();// or fade, css display however you'd like.
    });

    $('#imageUpload').on('submit',(function(e) {
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
         
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
           type:'POST',
           url: "fav",
           data:formData,
           cache:false,
           contentType: false,
           processData: false,
         
             complete: function(response) 
            {
                if($.isEmptyObject(response.responseJSON.error)){
                        $('.success').show();
                       setTimeout(function(){
                       $('.success').hide();
                    }, 5000);
                }else{
                    printErrorMsg(response.responseJSON.error);
                }
            }

        });
    }));
   function printErrorMsg(msg){
           $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display','block');
        $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
        });
   }
</script>

        </div>
    
            <!-- side bar -->
      <div id="Sidebar">
            <div class="Tg_Button" onclick="Sidebar()">
                <span class="fa fa-chevron-right"></span>
            </div>
            <ol>
                <style>a{text-decoration: none}</style>
                <li>الشيخ</li>
                <li> 
                <a href="{{$explorer->title}}">{{$explorer->title}}</a>
                </li>
                <li>العودة للسور</li>
                <li>
                    <a href="/explorer">العودة</a>
                </li>
                
            </ol>
        </div>
</div>

</div>
    </body>
</html>

<style>
    body {
    background-color:#00002a;
    margin: 0;
    padding: 0;
    overflow: hidden;
}
#loader{
    position:absolute ;
    top:50%;
    left:50%;
    width:140px;
    transform:translate(-50%, -50%);
}
#loader .pair{
    position:absolute;
    width:60px;
    height:10px;
}
#loader .pair .dot{
    position:absolute ;
    width:10px;
    height:10px;
    background-color:#fefcf6;
    border-radius:50%;
}
#loader .pair .dot-2{
    right:0;
}
#loader .pair-2{
    left:50px;
}
#loader .pair-1{
    animation:move 1000ms ease-in-out infinite;
}
#loader .pair-2{
    animation:move 1000ms ease-in-out infinite reverse;
}
@keyframes move{
    0%{
        transform:rotate(0deg);
    }
    50%,100%{
        transform:rotate(180deg);
    }
}
#loader .pair-1 .dot-1{
    animation:hide 1000ms ease-in-out infinite reverse;
    opacity:0;
}
#loader .pair-2 .dot-2{
    animation:hide 1000ms ease-in-out infinite;
    opacity:0;
}
@keyframes hide{
    0%,49%{
        opacity:0;
    }
    50%,100%{
        opacity:1;
    }
}
.text{
    position:absolute ;
    margin-top:60%;
    left:50%;
    font-size:50px;
    transform:translate(-50%,-50%);
    color:#fefcf6;
    font-family:courier new;
}
#android{
    position:absolute ;
    top:200px;
    left:40%;
    transform:translate(-50%, -50%);
    font-size:20px;
    color:#43A047;
}
#apple{
    position:absolute ;
    top:200px;
    left:60%;
    transform:translate(-50%, -50%);
    font-size:20px;
    color:#CFD8DC;
}
#copyright{
    position:absolute ;
    top:230px;
    left:50%;
    transform:translate(-50%, -50%);
    font-size:10px;
    font-family:courier new;
    color:#CFD8DC;
}
#loader{
    display:block;
}

#app{
    display:none;
}
.header{ 
    display: flex;
    width: 100%;
    height: 7vh;
    align-items: center;
    justify-content: space-around;
    color: white; 
    margin-top: 5vh;
    font-size: 15px;
    font-family: 'Montserrat', sans-serif;
}

.song-details{
    width: 100%;
    height: 40vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.act-img{
    width:260px;
    height: 260px;
    border: 1px solid #154360;
    box-shadow: 0px 0px 10px 1px black;
    border-radius:50%;
}
#song-name, #artist-name{
    width: 100%;
    height: 5vh;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    color: white;
    font-family:courier new;
}
#song-name{
    font-weight: bolder;
    position:absolute ;
    top:60%;
    margin-bottom: 5px;
    font-size:35px;
}
#artist-name{
    position:absolute ;
    top:65%;
    color: #fefcf6;
    font-size: 20px;
    }
.button-control{
    width: 100%;
    position:absolute ;
    height: 20vh;
    display: flex;
    top:90%;
    left:50%;
    transform:translate(-50%, -50%);
    justify-content: space-around;
    align-items: center;
}
#prev{
    position:absolute ;
    font-size:40px;
    color:#fefcf6;
    margin-left:-20%;
}
#next{
    position:absolute ;
    font-size:40px;
    color:#fefcf6;
    margin-left:20%;
}
#fav{
    position:absolute ;
    font-size:20px;
    color:#fff;
    margin-left:40%;
}
#play{
    position:absolute ;
    font-size:40px;
    color:#fefcf6;
    margin-left:0%;
}
#shuffle{
    position:absolute ;
    font-size:20px;
    color:#fefcf6;
   margin-left:-40%;
}
.song-pic{
    position:absolute ;
    top:20%;
}

               /*SIDEBAR*/
#Sidebar{
    position:absolute;
    width: 200px;
    height:100%;
    background-color:#00002a; 
    left: -200px;
    transition: all 500ms linear;
    top:2%;
    font-family:courier new;
    display:flex;
}

#Sidebar.active{
    left: 0px;
}

#Sidebar .Tg_Button{
    position:absolute;
    left: 210px;
    top: 10px;
    background-color:none;
    
}

#Sidebar .Tg_Button span{
    display: block;
    color: #fefcf6;
    background-color:transparent;
    border-radius:50%;
}
#Sidebar ol li {
    color:#fefcf6;
    list-style: none;
    padding: 15px 10px;
    border-bottom: 1px solid rgba(100, 100, 100, 0.3)
}  
#about{
    position:absolute ;
    top:3%;
    left:93%;
    color:#fefcf6;
    font-size:25px;
}

</style>
<script>



// alert("من فضلك انتظر حتي يتم تحميل السورة وهذا يعود للانترنت الخاص بك");
    var playBtn;
    var sngname;
    var artname;
    var tts;
    var app;
    var body;
    var thumbnail;

    var songs = [
        {id: 1, songName: "{{$explorer->title}}", artist: '{{$explorer->reader}}', link: "{{asset('upload/'. $explorer->path)}} ", thumbnail: "https://dl.dropbox.com/s/brlk8ano6w6qzd9/wp2383971-alan-walker-logo-wallpapers.jpg?raw=1"},        

    ];

    // var my_var = <?php echo ('s'); ?>;

    var isPlaying = false;
    var songIndex = 0;
    
    var playSong;
    
    var apply = false;
    window.onload = () => {
        body = document.getElementById("body");
        var loader = document.getElementById("loader");
        app = document.getElementById("app");
        thumbnail = document.getElementById("thumbnail");
        setTimeout(() => {
            loader.style.display = "none";
            app.style.display = "block";
        }, 2000);
        playBtn = document.getElementById("play");
        sngname = document.getElementById("song-name");
        artname = document.getElementById("artist-name");
        sngname.innerText = songs[songIndex].songName;
        artname.innerText = songs[songIndex].artist;
        thumbnail.src = songs[songIndex].thumbnail;
    }
    
    function fav() {
        alert("تم اضافة الإعجاب بالسورة")

    }
    const play = () =>{
        if(!isPlaying){
            playSong = new Audio();
            playSong.src = songs[songIndex].link;
            playSong.play();
            
            isPlaying = true;
            playBtn.className = "fa fa-pause";
        }else{
            playSong.pause();
            isPlaying = false;
            playBtn.className = "fa fa-play";
        }
        sngname.innerText = songs[songIndex].songName;
        artname.innerText = songs[songIndex].artist;
        thumbnail.src = songs[songIndex].thumbnail;
    }
    tts = songs.length;
    const next = () => {
        if(isPlaying){playSong.pause();isPlaying = false;}
        if(songIndex < tts-1){
            songIndex++;
        }else{
            songIndex = 0;
        }
        play();
    } 
    
    const prev = () => {
        if(isPlaying){playSong.pause();isPlaying = false;}
        if(songIndex > 0){songIndex--};
        play();
    }
    function Sidebar(){
        document.getElementById("Sidebar").classList.toggle('active');
    }
    $('#next').click(function name() {
        $(this).css("color" , "red");
    })
  
    </script>