
function okReview(id) {
    console.log('ok')

    jQuery.ajax({
      type: "POST",
      url: 'php/processReview.php',
      dataType: 'html',
      data: { state: 'ok', id: id },
      success: function () {
        console.log("succes");
        refreshReview()
      },
      error: function(xhr, textStatus, error){
        console.log(xhr.statusText);
        console.log(textStatus);
        console.log(error);
    }
    });
  }


function deleteReview(id) {
    jQuery.ajax({
      type: "POST",
      url: 'php/processReview.php',
      dataType: 'html',
      data: { state: 'delete', id: id },
      success: function () {
        refreshReview()
      }
    });
  }


  

function refreshReview() {
    $.ajax({
      type: 'POST',
      url: 'php/getReviews.php',
      success: function (html) {
        $('#main').html(html);
      }
    });
  }
  
  