

<!-- jQuery 3 -->
<script src="{{ url('dist/js/jquery.min.js') }}"></script>
<script src="{{ url('dist/js/popper.min.js') }}"></script>

<!-- v4.0.0-alpha.6 -->
<script src="{{ url('dist/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- template -->
<script src="{{ url('dist/js/adminkit.js') }}"></script>

@include('sweet::alert')

@yield('injs')

<script src="{{ url('dist/plugins/hmenu/ace-responsive-menu.js') }}" ></script>
<!--Plugin Initialization-->
<script >
         $(document).ready(function () {
             $("#respMenu").aceResponsiveMenu({
                 resizeWidth: '768', // Set the same in Media query
                 animationSpeed: 'fast', //slow, medium, fast
                 accoridonExpAll: false //Expands all the accordion menu on click
             });
         });
</script>





