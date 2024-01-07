jQuery(function () {
  jQuery(document).on("click", ".clickbutton", function () {
    // console.log(ajaxurl);
    var para = "action=custom_plugin&param=get_massage";
    $.post(ajaxurl, para, function (response) {
      console.log(response);
    });
  });

  jQuery("#frmPost").validate({
    submitHandler: function () {
      var post =
        jQuery("#frmPost").serialize()+"&action=custom_plugin&param=post_data";
      $.post(ajaxurl,post,function(response) {
        var data = $.parseJSON(response);
        console.log("name : " + data.name);
      });
    },
  });

 jQuery("#frmOther").validate({
    submitHandler:function () {
      var post = jQuery("#frmOther").serialize()+"&action=custom_ajax_req";
      jQuery.post(ajaxurl,post,function(response) {
        console.log(response);
      });
    }
  });





});

// jQuery(function () {
//   jQuery(document).on("click", ".clickbutton", function () {
//     var ajaxurl = "your_server_endpoint"; // Replace with your actual server endpoint
//     var para = {
//       action: "custom_plugin",
//       param: "get_massage",
//     };

//     jQuery
//       .post(ajaxurl, para)
//       .done(function (response) {
//         console.log(response);
//       })
//       .fail(function (error) {
//         console.error("AJAX request failed:", error);
//       });
//   });

//   jQuery("#frmPost").validate(); // Assuming jQuery Validation plugin is properly included
// });
