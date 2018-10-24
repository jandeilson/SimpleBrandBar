$(function(){

// Submit Site Details ---------------------
$("#formSiteDetails").submit(function(){
  var dados = $(this).serialize();
  var form = this;
  
  $("#loadingSiteDetails").show();

  $.ajax({
    type: "POST",
    url: "../admin/inc/insertSiteDetails",
    data: dados,
    success: function(html) {
      $('.sentSiteDetails').html(html);
    }
  });

  setTimeout(function () {
    $("#loadingSiteDetails").hide();
    $(".sentSiteDetails").show();
  }, 2000);
  setTimeout(function () {
    $(".sentSiteDetails").hide();
  }, 3000);

  return false;
});

// Submit New Link ---------------------
$("#formSiteLink").submit(function(){
  var dados = $(this).serialize();
  var form = this;

  $("#loadingNewLink").show();

  $.ajax({
    type: "POST",
    url: "../admin/inc/insertLink",
    data: dados,
    success: function(html) {
      $('.sentLink').html(html);
    }
  });

  setTimeout(function () {
    $("#loadingNewLink").hide();
    $(".sentLink").show();

    $(".getLastLinks").load("../admin/inc/lastLinks", { 'action': 'update' }); 
  }, 3000);
  setTimeout(function () {
    $(".sentLink").hide();
  }, 5000);

  return false;
	});

// Submit BrandBar Logo ---------------------
$("#BrandBarLogo").submit(function(){
  var formData = new FormData($(this)[0]);

  $("#loadingLogo").show();

  $.ajax({
    url: "../admin/inc/fileUpload",
    dataType: "text",
    cache: false,
    contentType: false,
    processData: false,
    data: formData,   
    type: "POST",
    success: function(html) {
      $(".sentLogo").html(html);
    }
  });

  setTimeout(function () {
    $("#loadingLogo").hide();
    $(".sentLogo").show();
  }, 3000);
  setTimeout(function () {
    $(".sentLogo").hide();
  }, 5000);

  return false;
});

// Check BrandBar Style ---------------------
$("#checkBrandBarStyle").submit(function(){
  var dados = $(this).serialize();
  var form = this;

  $("#loadingCheckBrandBarStyle").show();

  $.ajax({
    type: "POST",
    url: "../admin/inc/insertCheckBrandBarStyle",
    data: dados,
    success: function(html) {
      $('.sentCheckBrandBarStyle').html(html);
    }
  });

  setTimeout(function () {
    $("#loadingCheckBrandBarStyle").hide();
    $(".sentCheckBrandBarStyle").show();
  }, 2000);
  setTimeout(function () {
    $(".sentCheckBrandBarStyle").hide();
  }, 3000);

  return false;
  });

  $(".getLastLinks").load("../admin/inc/lastLinks", { 'action': 'update' } );
   
  $("#selectBrandBar").change(function(){
    $("#brandBarStyle1").load("../admin/inc/bars/brandBarStyle1").fadeIn("fast")[ $.inArray('1', $(this).val()) >= 0 ? 'show' : 'hide' ](); 
  });
  $("#selectBrandBar").change();

});