@if (Session::has('success'))
	<style type="text/css">
		.alert-danger, .alert-default, .alert-info, .alert-primary, .alert-secondary, .alert-success, .alert-warning {
			/*box-shadow: none !important;*/
			box-shadow: 0 1px 15px 1px rgba(69,65,78,.08);
		}
	</style>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"></button>
        {{-- <button type="button" class="close" data-dismiss="alert">&times;</button> --}}
            {{ Session::get('success') }}
    </div>
@endif