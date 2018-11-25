<!DOCTYPE html>
<html>
<head>
    <title>@yield("title") - InvenMB</title>
    @include("dashboard.part.css")
</head>
<body>
    @include("dashboard.part.sidenav")
    <div class="main-content">
        @include("dashboard.part.topnav")
        @include("dashboard.part.header")
        <div class="container-fluid mt--7">
            @yield("content")
            @include("dashboard.part.footer")
        </div>
    </div>
    @include("dashboard.part.js")
</body>
</html>