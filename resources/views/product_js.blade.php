<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
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
        $.post({
            url: "{{URL::to('add-product')}}",
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
      
       
      // show update product form

     
        // $(".update_product_form").click(function (e) { 
        //   e.preventDefault();
        //   let id= $(this).data('id');
        //   let name= $(this).data('name');
        //   let price= $(this).data('price');

        //   $('#up_id').val(id);
        //   $('#up_name').val(name);
        //   $('#up_price').val(price);
        // });

        $(document).on('click', '.update_product_form', function(event){
          event.preventDefault();
          let id= $(this).data('id');
          let name= $(this).data('name');
          let price= $(this).data('price');

          $('#up_id').val(id);
          $('#up_name').val(name);
          $('#up_price').val(price);
            });
        
     
     
      // update product
      // $('#updateProductForm').on('submit', function(e){
      //           e.preventDefault();
      //           var form = $(this).serialize();
      //           var url = $(this).attr('action');
                
      //           $.post(url,form,function(data){
      //               $('#updateModal').modal('hide');
      //               $('#updateProductForm')[0].reset();
      //           $('.table').load(location.href+' .table');
                   
      //           })
      //       });
     
      $(document).on('.update', function(e){
                e.preventDefault();
        let up_id = $('#up_id').val();
        let up_name = $('#up_name').val();
        let up_price = $('#up_price').val();
       
        $.ajax({
            url:"{{URL::to('update')}}",
            method:"post",
            data:{up_id:up_id, up_name:up_name, up_price:up_price},
            success: function(res){
               
              if(res.status=='success'){
                $('#updateModal').modal('hide');
                $('#updateProductForm')[0].reset();
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
        
    
      // delete product
      
       $(".delete_product").click(function (e) { 
        e.preventDefault();
        let product_id = $(this).data('id');

        if(confirm('Are you sure want to delete?')){
         
          $.ajax({
            url: "{{URL::to('delete')}}",
            method:'post',
            data:{product_id:product_id},
            success: function(res){
               
              if(res.status=='success'){
                
                $('.table').load(location.href+' .table');
              }
            },
            
        });
        
        }
        
        
    })
    
  
  
  
  });
        
     
    
    
    </script>