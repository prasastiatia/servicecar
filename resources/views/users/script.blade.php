<script src="{{url('assets/users/theme-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{url('assets/users/theme-assets/vendors/js/charts/chartist.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="{{url('assets/users/theme-assets/js/core/app-menu-lite.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/users/theme-assets/js/core/app-lite.js')}}" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{url('assets/users/theme-assets/js/scripts/pages/dashboard-lite.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    {{-- <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script> --}}
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">

     $(function(){
        $( "#datepicker" ).datepicker({dateFormat:'dd/mm/yy',
									changeMonth: true,
changeYear: true,
minDate:0,
maaxDate:30,})
        })
    

    $('#delete').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget) 
    
    var cat_id = button.data('catid') 
    var modal = $(this)
    
    modal.find('.modal-body #cat_id').val(cat_id);
    })


    $('#edit').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget) 
        var name = button.data('myname') 
        var email = button.data('myemail')
        var subject = button.data('mysubject') 
        var tanggal = button.data('mytanggal')
        var waktu = button.data('mywaktu')
        var cat_id = button.data('catid') 
        var modal = $(this)
  
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #email').val(email);
        modal.find('.modal-body #subject').val(subject);
        modal.find('.modal-body #datepicker').val(tanggal);
        modal.find('.modal-body #waktu_pesan').val(waktu);
        modal.find('.modal-body #cat_id').val(cat_id);
  })
   
            $(function(){
            $('.add-file').click(function(){
            $('div.files').append('<input type="file" name="files[]">')
            })
            })
            

        
        $(document).ready(function(){
            $(document).on('change','.jenis_servis', function(){
                var jenis_servis = $(this).val();

                console.log(jenis_servis);

                $.ajax({
                    type:'get',
                    url:"{{ route('harga_servis') }}",
                    data:{'jenis_servis':jenis_servis},
                    dataType:'json',
                    success: function(data)
                    {
                        console.log(data.harga);

                        $('input[name=harga]').val(data.harga);
                    },
                    
                });
            });
        });


       $("#jenis_servis").change(function() {
            if ($(this).val() == "0") {
            $('#pilih_harga').hide();
             } else { 
            $('#pilih_harga').show();
        }
        });
            $("#jenis_servis").trigger("change");


 
</script>

