<!DOCTYPE html>
<html lang="en">
<head>
    @include('dash.layouts.head')
</head>
<body>
@if(session()->has('success'))
    <script>
        toastr.success("{{ session()->get('success') }}");
    </script>
@endif


<div class="container-scroller">
    @include('dash.layouts.nav')

    <div class="container-fluid page-body-wrapper">

        @include('dash.layouts.setting')
        @include('dash.layouts.sidebar')
        <!-- partial:partials/_sidebar.html -->
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <x-tires.form    :action="$route"  :method="'post'"  />

            </div>


        </div>
    </div>
</div>

@include('dash.layouts.js')

</body>
</html>
