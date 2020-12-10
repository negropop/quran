<link rel="stylesheet" href="{{ asset('css/explorer-css.css') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
<body style="background: #dce1df; color: #4f585e; font-family: 'Source Sans Pro', sans-serif; text-rendering: optimizeLegibility;">
    <style>
        .table-striped>tbody>tr:nth-of-type(odd){
            background-color:transparent;
        }
    </style>
    <button  onclick="location.href='/'" class="nav-toggle" type="button">
        <span>
            <i style="color: #8a8181;" class="fas fa-house-damage"></i>
                </span>
    </button>
<br><br>
      <div class="container box" style="margin-top: 42px;">
        <div class="panel panel-default">
            <div class="panel-heading" >ابحث بإسم السورة او القاريء المفضل 
            <i class="fas fa-plus text-left" id="exp_plus" ></i>
            <i class="fas fa-minus text-left" id="exp_minus" ></i>
            </div>
         <div class="panel-body" >
          <div class="form-group">
           <input type="text" name="search" id="search" class="form-control" placeholder="يرجي إدخال إسم السورة" />
          </div>
          <div class="table-responsive">
           <h3 align="center">نتائج البحث : <span id="total_records"></span></h3>
           <table class="table table-striped table-bordered">
            <thead>
             <tr>
              <th>رابط الإستماع</th>
              <th>الشيخ</th>
              <th>السوره</th>
             </tr>
            </thead>
            <tbody>
     
            </tbody>
           </table>
          </div>
         </div>    
        </div>
       </div>
       <script src="{{ asset('js/main.js') }}"></script>
{{-- <style> --}}
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<main class="page-content">
  @foreach ($explorer as $explore)

  <div class="card">
    <div class="content">
      <h2 class="title">{{$explore->title}}</h2>
    <p class="copy">الإستماع الى السورة بصوت الشيخ {{$explore->reader}}</p>
    <button class="btn" onclick="location.href='{{$explore->id}}/listen/'" >الإستماع</button>
    </div>
  </div>
  

  @endforeach
</main>


  <script>
  $(".cards-list").mouseover(function() {
      $("a#listen").css("opacity", "1");
      $("a#listen").addClass("animate__animated animate__fadeInUp");
  });</script>

</body>

<!-- search -->

<script>
    $(document).ready(function(){
    
     fetch_customer_data();
    
     function fetch_customer_data(query = '')
     {
      $.ajax({
       url:"{{ route('live_search.action') }}",
       method:'GET',
       data:{query:query},
       dataType:'json',
       success:function(data)
       {
        $('tbody').html(data.table_data);
        $('#total_records').text(data.total_data);
       }
      })
     }
    
     $(document).on('keyup', '#search', function(){
      var query = $(this).val();
      fetch_customer_data(query);
     });
    });
    </script>
    
  