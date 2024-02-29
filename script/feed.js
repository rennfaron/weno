$(document).ready(function(){
	$.ajax({
		type: "GET",
		url: "/blog/feed/",
		dataType: "xml",
		success: function(xml) {

			var contain = $(".weno-blog .triple-col-wrap");
			var limit = 3;
						
			$(xml).find('item').each(function(index){
			if( index < limit ){
				var category = $(this).find('category').text();
				var title = $(this).find('title').text(); 
				var url = $(this).find('link').text();
				var pubDate = new Date($(this).find('pubDate').text()); 
				var day = pubDate.getDate();
				var month = pubDate.getMonth() + 1;
				var year = pubDate.getFullYear();
				var date = month + '/' + day + '/' + year;
				var des = $(this).find('description').text().slice(0,-6);
				$('<ul class="weno-blog-post triple-col-item"></ul>').html('<li><h2>'+category+'.</h2></li><li><h3><a href="'+url+'">'+title+'</a></h3></li><li class="byline">'+date+'</li><li><p>'+des+'&hellip;</p></li><li><a class="more-link no-tablet" href="'+url+'">Click to read more.</a><a class="more-link tablet" href="'+url+'">Read More</a></li>').appendTo(contain);
				return;
			}

			});//end each
		}
	});
});