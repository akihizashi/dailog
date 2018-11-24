@push('style')
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
@endpush
@push('script')
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
@endpush
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