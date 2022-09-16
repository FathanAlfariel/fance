<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Home Page</title>
    <style>
      .tales {
        width: 100%;
      }
      .carousel-inner{
        width: 100%;
        max-height: 300px !important;
      }
      .dropdown{
        width: 140px;
        display: inline-block;
        position: relative;
      }
      .dropdown.toggle > input{
        display: block;
      }
      .dropdown > a, .dropdown.toggle > label{
        border-radius: 2px;
      }
      .dropdown ul{
        list-style-type: none;
        display: block;
        margin: 0;
        padding: 0 0 0 0;
        position: absolute;
        width: 100%;
        box-shadow: 0 6px 5px -5px rgba(0, 0, 0, 0.3);
        overflow: hidden;
      }
      .dropdown a, .dropdown.toggle > label{
        display: block;
        padding: 0 10px 0 10px;
        text-decoration: none;
        height: auto;
        font-size: 13px;
        background-color: #fff; 
      }
      .dropdown li{
        height: 0;
        overflow: hidden;
      }
      .dropdown.hover li{
        transition-delay: 0ms;
      }
      .dropdown li:first-child a{
        border-radius: 2px 2px 0 0; 
      }
      .dropdown li:last-child a {
        border-radius: 0 0 2px 2px;
      }
      .dropdown li:first-child a::before{
        content: "";
        display: block;
        position: absolute;
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 10px solid #fff;
        margin: -10px 0 0 30px; 
      }
      .dropdown a:hover, .dropdown.toggle > label:hover, .dropdown.toggle > input:checked ~ label::after{
        border-top-color: #aaa;
      }
      .dropdown.hover:hover li, .dropdown.toggle > input:checked ~ ul li{
        height: auto;
      }
      .dropdown.hover:hover li:first-child, .dropdown.toggle > input:checked ~ ul li:first-child{
        margin-top: 15px;
      }
    </style>
</head>
<body>
    @include('layouts.navbar')
    @include('layouts.second_nav')
    @include('layouts.carousel')
    @include('layouts.kategori_produk')
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
    <script>
      $(document).click(function(event) {
        if(
          $('.toggle > input').is(':checked') &&
          !$(event.target).parents('.toggle').is('.toggle')
        ) {
          $('.toggle > input').prop('checked', false);
        }
      });
    </script>
</body>
</html>