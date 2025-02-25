$(document).ready(function () {
  ClicDetails();
   console.log("sdsdsdsd")
});


function ClicDetails(){
    $("#Detalles").on("show.bs.collapse", function () {
      $("#icon-down").hide();
      $("#icon-up").show();
    });

    $("#Detalles").on("hide.bs.collapse", function () {
      $("#icon-down").show();
      $("#icon-up").hide();
    });
}
