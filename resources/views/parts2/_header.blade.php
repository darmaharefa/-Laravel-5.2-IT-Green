<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>IT Green @yield('title')</title>


<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="<?php url("/") ?>/css/bootstrap.min.css">

<!-- Custom CSS -->
<link rel="stylesheet" href="<?php url("/") ?>/admin/css/sb-admin.css">

<!-- Morris Charts CSS -->
<link rel="stylesheet" href="<?php url("/") ?>/admin/css/plugins/morris.css">

<!-- Custom Fonts -->
<link rel="stylesheet" href="<?php url("/") ?>/admin/font-awesome/css/font-awesome.min.css">

<!-- Custome Style CSS -->
<link rel="stylesheet" href="<?php url("/") ?>/admin/css/style.css">

<!-- TinyMCE -->
<script src='{{url("/js/tinymce")}}/tinymce.min.js'></script>

<script>
	tinymce.init({
	    selector: 'textarea',
	    plugins: [
	      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
	      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
	      'save table contextmenu directionality emoticons template paste textcolor'
	    ],
	    menubar : 'false',
	    content_css: '{{url("/css")}}/content.css',
	    toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | preview fullpage | forecolor'
	  });
</script>