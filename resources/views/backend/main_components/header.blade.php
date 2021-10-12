<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Dashboard </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="{{ asset('assets/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css">
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style">
        <link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style">
        <script src="{{ asset('js/sweetalertone.min.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert.min.css') }}">

        <script>
            function deleteFunction() {
            event.preventDefault(); // prevent form submit
            var form = event.target.form; // storing the form
                    swal({
              title: "Are you sure?",
              text: "But you will still be able to retrieve this .",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Yes, Delete it!",
              cancelButtonText: "No, cancel !",
              closeOnConfirm: false,
              closeOnCancel: false
            },
            function(isConfirm){
              if (isConfirm) {
                form.submit();

              } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
              }
            });
            }
            </script>
    </head>


