<!DOCTYPE html>

<html lang="en">
<head>

    @include("admin.layout.head")

</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include("admin.layout.header")
    @include("admin.layout.sidebar")

    @section("main-content")
    @show


</div>

@include("admin.layout.footer")

</body>


</html>

