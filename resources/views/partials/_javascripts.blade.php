<!-- BEGIN: Vendor JS-->
<script src="{!! asset('assets/vendors/js/vendors.min.js') !!}"></script>
<script src="{!! asset('assets/vendors/js/tables/datatable/datatables.min.js') !!}"></script>
<script src="{!! asset('assets/vendors/js/forms/select/select2.full.min.js') !!}"></script>
<script>
   $(document).ready(function() {
      $('.multiselect').select2();
   });
</script>
<!-- BEGIN Vendor JS-->


<!-- BEGIN: Theme JS-->
<script src="{!! asset('assets/js/core/app-menu.min.js') !!}"></script>
<script src="{!! asset('assets/js/core/app.min.js') !!}"></script>
<script src="{!! asset('assets/js/scripts/customizer.min.js') !!}"></script>
<script src="{!! asset('assets/js/scripts/footer.min.js') !!}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{!! asset('assets/plugins/dropzone/dist/dropzone.js') !!}"></script>
<link rel="stylesheet" href="{!! asset('assets/plugins/dropzone/dist/dropzone.css') !!}">
 <!-- END: Page JS-->


<!-- BEGIN: Page JS-->
<script src="{!! asset('assets/js/scripts/pages/dashboard-sales.min.js') !!}"></script>
<!-- END: Page JS-->

<script src="{!! asset('assets/js/scripts/tables/datatables/datatable-basic.min.js') !!}"></script>

<script src="{!! asset('assets/js/scripts/ui/scrollable.min.js') !!}"></script>

<!-- preview uploaded image -->
<script type="text/javascript">
   $(document).ready(function() {
      if(window.File && window.FileList && window.FileReader) {
      $("#thumbnail").on("change",function(e) {
      var files = e.target.files ,
      filesLength = files.length ;
      for (var i = 0; i < filesLength ; i++) {
         var f = files[i]
         var fileReader = new FileReader();
         fileReader.onload = (function(e) {
            var file = e.target;
            $("<img></img>",{
            class : "imageThumb",
            src : e.target.result,
            title : file.name
            }).insertAfter("#thumbnail");
         });
         fileReader.readAsDataURL(f);
      }
   });
   } else { alert("Your browser doesn't support to File API") }
   });
</script>
<script type="text/javascript">
   $(document).ready(function(){
      $("form").on("submit", function(){
         $(".submit").hide();
         $(".submit-load").show();
      });
   });
</script>
<script>
   $(".delete").on("click", function(){
       return confirm("Are you sure?");
   });
</script>

<script src="{{ asset('assets/vendor/file-manager/js/file-manager.js') }}"></script>

{{-- tinymcy --}}
<script src="{!! asset('assets/plugins/tinymce/js/tinymce/tinymce.min.js') !!}"></script>
{{-- <script src="{!! asset('assets/vendor/laravel-filemanager/js/stand-alone-button.js') !!}"></script> --}}
<script>
   var editor_config = {
      path_absolute : '/',
      selector: '.tinymce',
      relative_urls: false,
      plugins: [
         "advlist autolink lists link image charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars code fullscreen",
         "insertdatetime media nonbreaking save table directionality",
         "emoticons template paste textpattern"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
   };
   tinymce.init(editor_config);
</script>

@yield('scripts')
