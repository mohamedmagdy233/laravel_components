<!DOCTYPE html>
<html lang="en">
<head>
    @include('dash.layouts.head')
</head>
<body>

<div class="container-scroller">
    @include('dash.layouts.nav')

    <div class="container-fluid page-body-wrapper">

        @include('dash.layouts.setting')
        @include('dash.layouts.sidebar')
        <!-- partial:partials/_sidebar.html -->
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <x-tires.table   :data="$data"  :word="$word" />

            </div>


        </div>
    </div>
</div>

@include('dash.layouts.js')

</body>
</html>
