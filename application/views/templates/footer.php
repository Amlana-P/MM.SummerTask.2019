</div>
</div> 
</body>
<script>
	
	CKEDITOR.replace( 'editor1' );
	
	var myVar;

	function myFunction() {
		myVar = setTimeout(showPage, 3000);
	}

	function showPage() {
		document.getElementById("loader").style.display = "none";
		document.getElementById("myDiv").style.display = "block";
	}
	$('.carousel .vertical .item').each(function(){
		var next = $(this).next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo($(this));

		for (var i=1;i<4;i++) {
			next=next.next();
			if (!next.length) {
				next = $(this).siblings(':first');
			}

			next.children(':first-child').clone().appendTo($(this));
		}
	});
	var figure = $(".video").hover( hoverVideo, hideVideo );

	function hoverVideo(e) {  
		$('video', this).get(0).play(); 
	}

	function hideVideo(e) {
		$('video', this).get(0).pause(); 
	}
	window.onscroll = function() {myFunction1()};

	function myFunction1() {
		var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
		var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
		var scrolled = (winScroll / height) * 100;
		document.getElementById("myBar").style.width = scrolled + "%";
	}
	function on() {
		document.getElementById("overlay").style.display = "block";
	}

	function off() {
		document.getElementById("overlay").style.display = "none";
	}
	function openNav() {
		document.getElementById("mySidebar").style.width = "250px";
		document.getElementById("main").style.marginLeft = "250px";
	}

	function closeNav() {
		document.getElementById("mySidebar").style.width = "0";
		document.getElementById("main").style.marginLeft= "0";
	}

	$(document).ready(function(){
		
		fetch_poll_data();

		function fetch_poll_data()
		{
			$.ajax({
				url:"fetch_poll_data.php",
				method:"POST",
				success:function(data)
				{
					$('#poll_result').html(data);
				}
			})  
		}

	});  

	$(document).ready(function(){
		

		$('#poll_form').on('submit', function(event){
			event.preventDefault();
			var poll_option = '';
			$('.poll_option').each(function(){
				if($(this).prop("checked"))
				{
					poll_option = $(this).val();
				}
			});
			if(poll_option != '')
			{
				$('#poll_button').attr("disabled", "disabled");
				var form_data = $(this).serialize();
				$.ajax({
					url:"poll.php",
					method:"POST",
					data:form_data,
					success:function(data)
					{
						$('#poll_form')[0].reset();
						$('#poll_button').attr('disabled', false);
						fetch_poll_data();
						alert("Poll Submitted Successfully");
					}
				});
			}
			else
			{
				alert("Please Select Option");
			}
		});

	});  

	
</script>
</html>