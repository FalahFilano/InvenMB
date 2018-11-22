<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>@yield("title")</title>
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