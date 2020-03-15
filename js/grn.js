// function readURL(input) {
//     if (input.files && input.files[0]) {
  
//       var reader = new FileReader();
  
//       reader.onload = function(e) {
//         $('.image-upload-wrap').hide();
  
//      $('.file-upload-image').attr('src', e.target.result);
//        $('.file-upload-content').show();
  
//         $('.file-title').html(input.files[0].name);
//       };
  
//       reader.readAsDataURL(input.files[0]);
  
//     } else {
//       removeUpload();
//     }
//   }
  // function readURL(input) {
  //     if (input.files && input.files[0]) {
  //         var reader = new FileReader();
  
  //         reader.onload = function (e) {
  //             $('#blah')
  //                 .attr('src', e.target.result)
  //                 .width(150)
  //                 .height(200);
  //         };
  
  //         reader.readAsDataURL(input.files[0]);
  //     }
  // }
  function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
  }
  $('.image-upload-wrap').bind('dragover', function () {
          $('.image-upload-wrap').addClass('image-dropping');
      });
      $('.image-upload-wrap').bind('dragleave', function () {
          $('.image-upload-wrap').removeClass('image-dropping');
  });


  
  
  