<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Dana Pensiun Semen Gresik</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="{{ url('webprof/images/fevicon/fevicon.png') }}" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="{{ url('webprof/css/bootstrap.min.css') }}" />
<!-- Site css -->
<link rel="stylesheet" href="{{ url('webprof/css/style2.css') }}" />
<!-- responsive css -->
<link rel="stylesheet" href="{{ url('webprof/css/responsive.css') }}" />
<!-- colors css -->
<link rel="stylesheet" href="{{ url('webprof/css/colors5.css') }}" />
<!-- custom css -->
<link rel="stylesheet" href="{{ url('webprof/css/custom.css') }}" />
<!-- wow Animation css -->
<link rel="stylesheet" href="{{ url('webprof/css/animate.css') }}" />
<!-- zoom effect -->
<link rel='stylesheet' href="{{ url('webprof/css/hizoom.css') }}">
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="{{ url('webprof/revolution/css/settings.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('webprof/revolution/css/layers.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ url('webprof/revolution/css/navigation.css') }}" />

<link href="{{ url('webprof/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ url('webprof/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ url('webprof/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ url('webprof/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<link href="{{ url('dist/plugins/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@yield('cs')

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>--}}
    <script src="{{ url('webprof/vendor/light/gallery.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('webprof/vendor/light/gallery.css') }}" media="screen" />

<style>
       .modal-box{ font-family: 'Poppins', sans-serif; }
.show-modal{
    color: #fff;
    background: linear-gradient(to right, #ffc018, #ff7800, #fff030);
    font-size: 18px;
    font-weight: 600;
    text-transform: capitalize;
    padding: 10px 15px;
    margin: 200px auto 0;
    border: none;
    outline: none;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    display: block;
    transition: all 0.3s ease 0s;
}
.show-modal:hover,
.show-modal:focus{
    color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    outline: none;
}
.modal-dialog{
    width: 400px;
    margin: 70px auto 0;
}
.modal-dialog{ transform: scale(0.5); }
.modal-dialog{ transform: scale(1); }
.modal-dialog .modal-content{
    text-align: center;
    border: none;
}
.modal-content .close{
    color: #fff;
    background: linear-gradient(to right, #ffc018, #ff7800, #fff030);
    font-size: 25px;
    font-weight: 400;
    text-shadow: none;
    line-height: 27px;
    height: 25px;
    width: 25px;
    border-radius: 50%;
    overflow: hidden;
    opacity: 1;
    position: absolute;
    left: auto;
    right: 8px;
    top: 8px;
    z-index: 1;
    transition: all 0.3s;
}
.modal-content .close:hover{
    color: #fff;
    box-shadow: 0 0 5px rgba(0,0,0,0.5);
}
.close:focus{ outline: none; }
.modal-body{ padding: 60px 40px 40px !important; }
.modal-body .title{
    color: #ff7800;
    font-size: 33px;
    font-weight: 700;
    letter-spacing: 1px;
    margin: 0 0 10px;
}
.modal-body .description{
    color: #9A9EA9;
    font-size: 16px;
    margin: 0 0 20px;
}
.modal-body .form-group{
    text-align: left;
    margin-bottom: 20px;
    position: relative;
}
.modal-body .input-icon{
    color: #777;
    font-size: 18px;
    transform: translateY(-50%);
    position: absolute;
    top: 50%;
    left: 20px;
}
.modal-body .form-control{
    font-size: 17px;
    height: 45px;
    width: 100%;
    padding: 6px 0 6px 50px;
    margin: 0 auto;
    border: 2px solid #eee;
    border-radius: 5px;
    box-shadow: none;
    outline: none;
}
.form-control::placeholder{
    color: #AEAFB1;
}
.form-group.checkbox{
    width: 130px;
    margin-top: 0;
    display: inline-block;
}
.form-group.checkbox label{
    color: #9A9EA9;
    font-weight: normal;
}
.form-group.checkbox input[type=checkbox]{
    margin-left: 0;
}
.modal-body .forgot-pass{
    color: #7F7FD5;
    font-size: 13px;
    text-align: right;
    width: calc(100% - 135px);
    margin: 2px 0;
    display: inline-block;
    vertical-align: top;
    transition: all 0.3s ease 0s;
}
.forgot-pass:hover{
    color: #9A9EA9;
    text-decoration: underline;
}
.modal-content .modal-body .btn{
    color: #fff;
    background: linear-gradient(to right, #ffc018, #ff7800, #fff030);
    font-size: 16px;
    font-weight: 500;
    letter-spacing: 1px;
    text-transform: uppercase;
    line-height: 38px;
    width: 100%;
    height: 40px;
    padding: 0;
    border: none;
    border-radius: 5px;
    border: none;
    display: inline-block;
    transition: all 0.6s ease 0s;
}
.modal-content .modal-body .btn:hover{
    color: #fff;
    letter-spacing: 2px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}
.modal-content .modal-body .btn:focus{ outline: none; }
@media only screen and (max-width: 480px){
    .modal-dialog{ width: 95% !important; }
    .modal-content .modal-body{
        padding: 60px 20px 40px !important;
    }
}

hr.new5 {
  border: 3px solid #ff7800;
}

#popup {
    display:none;
    position:absolute;
    margin:0 auto;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 0px 0px 50px 2px #000;
    z-index:100;
}

  </style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <style>
    .floating{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px;
        right:40px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        box-shadow: 2px 2px 3px #999;
    z-index:100;
    }

    .float-button{
        margin-top:16px;
    }
</style>
    {{--  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('webprof/floatwa/floating-wpp.css') }}">
    <script type="text/javascript" src="{{ url('webprof/floatwa/floating-wpp.js') }}"></script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif
        }
    </style>  --}}
