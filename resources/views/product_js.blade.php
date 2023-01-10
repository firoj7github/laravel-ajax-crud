<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <<script>
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    </script>

    <script>
      $(document).ready(function () {
       $(".add_product").click(function (e) { 
        e.preventDefault();
        let name = $('#name').val();
        let price = $('#price').val();
        $.ajax({
            url: "{{route('add-product')}}",
            method:'post',
            data:{name:name, price:price},
            success: function(res){
               
              if(res.status=='success'){
                $('#exampleModal').modal('hide');
                $('#addProductForm')[0].reset();
                $('.table').load(location.href+' .table');
              }
            },
            error: function(err){
              // let error =err.responseJson;
              // $.each(error.errors,function(index, value){
              //   $(".errorMsg").append('<span class="text-danger">'+value+'</span>'+'<br>')
              // });
            }
        });
        
       });
      });
    </script>