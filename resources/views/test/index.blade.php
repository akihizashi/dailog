<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  <!-- font Awesome 4.5.0 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


  <style type="text/css">

    .modal-header .btnGrp{
      position: absolute;
      padding: 0 1rem !important;
    }
    .close {
      padding-top: 0 !important;
      padding-bottom: 0 !important;
    }
    .modal-title {
    line-height: 0 !important;
  }
    .min{
        width: 350px;
        height: 35px;
        overflow: hidden !important;
        padding: 0px !important;
        margin: 0px;
        float: left;
        position: static !important;
      }

    .min .modal-dialog, .min .modal-content{
        height: 100%;
        width: 100%;
        margin: 0px !important;
        padding: 0px !important;
      }

    .min .modal-header{
        height: 100%;
        width: 100%;
        margin: 0px !important;
      }

    .display-none {
      display: none;
    }

    button .fa{
        font-size: 13px;
        margin-left: 10px;
      }

    .min .fa{
        font-size: 13px;
      }

    .min .menuTab {
        display: none;
    }

    button:focus {
        outline: none;
    }

    .minmaxCon{
      height: 35px;
      bottom: 0px;
      right: 0px;
      position: fixed;
      z-index: 9999;
    }

  </style>

</head>

<body>

<div class="container">

  <h2>A demo of modal</h2>
  <!-- Trigger the modal with a button -->
  <a href="#" data-toggle="modal" data-target="#modal-1" >Click here to open modal</a>

  <!-- Modal -->
  <div class="modal fade mymodal" id="modal-1" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <span class="modal-title">New log</span>
            <div class="form-inline">
              <button class="close modalMinimize"><i class='fa fa-minus'></i> </button>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="font-size:17px;">&times;</span>
              </button>
            </div>
        </div>
        <div class="modal-body"  style="padding:40px 50px;">
          <p>The content of the modal appears here</p>
        </div>

        <div class="modal-footer"  style="padding:40px 50px;">
          <p>Place the footer options like Ok, Cancel buttons here</p>
        </div>

      </div>
    </div>
  </div>
<div class="minmaxCon"></div>


<script>

  $(document).ready(function(){


      var $content, $modal, $apnData, $modalCon;

      $content = $(".min");


      //To fire modal
      $(".mdlFire").click(function(e){

          e.preventDefault();

          var $id = $(this).attr("data-target");

          $($id).modal({backdrop: false, keyboard: false});

        });


      $(".modalMinimize").on("click", function(){

                  $modalCon = $(this).closest(".mymodal").attr("id");

                  $apnData = $(this).closest(".mymodal");

                  $modal = "#" + $modalCon;

                  $(".modal-backdrop").addClass("display-none");

                  $($modal).toggleClass("min");

                    if ( $($modal).hasClass("min") ){

                        $(".minmaxCon").append($apnData);

                        $(this).find("i").toggleClass( 'fa-minus').toggleClass( 'fa-clone');

                      }
                      else {

                              $(".container").append($apnData);

                              $(this).find("i").toggleClass( 'fa-clone').toggleClass( 'fa-minus');

                            };

                  });

        $("button[data-dismiss='modal']").click(function(){

                $(this).closest(".mymodal").removeClass("min");

                $(".container").removeClass($apnData);

                $(this).next('.modalMinimize').find("i").removeClass('fa fa-clone').addClass( 'fa fa-minus');

              });

  });

</script>
</body>
</html>
