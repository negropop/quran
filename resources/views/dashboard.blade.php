<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha256-WqU1JavFxSAMcLP2WIOI+GB2zWmShMI82mTpLDcqFUg=" crossorigin="anonymous"></script>
    <div class="col-md-6 offset-3 mt-5">
        <div class="card">
            <div class="card-header">
                <h5></h5>
            </div>
            <div class="card-body">
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>
      

                <div class="success alert alert-success">
                    Image Upload Successfully
                </div>
                <form enctype="multipart/form-data" id="imageUpload">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="form-group">
                        <label><strong>Image : </strong></label>
                        <input type="file" name="image" class="form-control">
                    </div>


                    <div class="form-group">
                        <label><strong>title : </strong></label>
                        <input type="text" name="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label><strong>title : </strong></label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label><strong>duration : </strong></label>
                        <input type="text" name="duration" class="form-control">
                    </div>

                    <div class="form-group">
                        <label><strong>section : </strong></label>
                        <input type="text" name="section" class="form-control">
                    </div>

                    <div class="form-group">
                        <label><strong>reader : </strong></label>
                        <input type="text" name="reader" class="form-control">
                    </div>

                    <div class="form-group text-center">
                        <button class="btn btn-success">Save</button>
                    </div>
                </form>                        
            </div>
        </div>
    </div>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
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
               url: "{{ route('image.ajax.store')}}",
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
            </div>
        </div>
    </div>
</x-app-layout>
