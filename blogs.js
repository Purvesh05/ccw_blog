console.log(sessionStorage.getItem('status'));
$(document).ready(function(){
	var maxLength = 300;
	$(".blog_content").each(function(){
		var myStr = $(this).text();
		if($.trim(myStr).length > maxLength){
			var newStr = myStr.substring(0, maxLength);
			var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
			$(this).empty().html(newStr);
			$(this).append('<span>... </span><span class="read_more">read more</span>');
			$(this).append('<span class="more_text">' + removedStr + '</span>');
		}
	});
	$(".read_more").click(function(){
		$(this).siblings(".more_text").contents().unwrap();
		$(this).prev().remove();
		$(this).remove();
	});
	
	// like and unlike click
  $(".like, .unlike").click(function(){
    if(sessionStorage.getItem('status')){ //check if user has logged in
    
      //diable the button
      $(this).attr('disabled',true);

      var id = this.id;   // Getting Button id
      var split_id = id.split("_");

      var text = split_id[0];
      var blogid = split_id[1];  // postid

      // Finding click type
      var type = 0;
      if(text == "like"){
          type = 1;									
      }
      else{
          type = 0;                  
      }
      console.log(blogid+" "+type);
      // AJAX Request
      $.ajax({
          url: 'like.php',
          type: 'post',
          data: {b_id:blogid,action:type},
          dataType: 'json',
          success: function(data){
            
            console.log(data);

            $("#likes_"+blogid).text(data["likes"]+" likes");
                        
            if(type == 1){
                  $("#like_"+blogid).attr("class","unlike icon-heart icon-large");
  								$("#like_"+blogid).attr("id","unlike_"+blogid);	
            }
            else{
            	$("#unlike_"+blogid).attr("class","like icon-heart-empty icon-large");
            	$("#unlike_"+blogid).attr("id","like_"+blogid);
            }
            //enable the button
            $(this).attr('disabled',false);
          }                  	                  
      });
    }
    else{
      alert("You have to be logged in to give a like!");
    }

  });
		
	  // bookmark
  $(".save, .remove").click(function(){
    var id = this.id;   // Getting Button id
    var split_id = id.split("_");

    var text = split_id[0];
    var blogid = split_id[1];  // postid

    // Finding click type
    var type = 0;
    if(text == "save"){
        type = 1;
						$(this).attr("class","remove icon-bookmark icon-large");
						$(this).attr("id","remove_"+blogid);
    }else{
        type = 0;
        $(this).attr("class","save icon-bookmark-empty icon-large");
        $(this).attr("id","save_"+blogid);
    }

    /* AJAX Request
    $.ajax({
        url: 'like.php',
        type: 'post',
        data: {id:blogid,action:type},
        dataType: 'json',
        success: function(){}                  	                  
    });*/

  });
	
});