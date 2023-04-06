<!doctype html>
@include('admin.include.head')

<body>
    <!-- Left Panel -->
    @include('admin.include.sidebar')
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        @include('admin.include.header')
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                @yield('main_component')
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
   @include('admin.include.script')

    <!--Local Stuff-->
    

</body>
</html>
