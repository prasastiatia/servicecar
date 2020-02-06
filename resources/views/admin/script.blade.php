<script src="js/jquery-1.11.1.min.js"></script>
	<script src="{{url('assets/admin/js/bootstrap.min.js')}}"></script>
	{{-- <script src="{{url('assets/admin/js/bootstrap-datepicker.js')}}"></script> --}}
	<script src="{{url('assets/admin/js/custom.js')}}"></script>
	<script src="{{url('assets/users/theme-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<script>
			$(function() {
			$( "#datepicker" ).datepicker({ dateFormat: 'dd/mm/yy',
										changeMonth: true,
	changeYear: true})
			});
			</script>

<script>
		$(function(){
		$('.add-file').click(function(){
		$('div.files').append('<input type="file" name="files[]">')
		})
		})
		</script>

