 $(function() 
 {
    $(".draggable").draggable({helper : "clone"});
 //   $(".draggable").disableSelection();

    $("#droppable").droppable(
    	{
    		accept: ".draggable",
    		drop: function(ev, ui){

    			var droppedItem = $(ui.draggable).clone();
    			$(this).append(droppedItem);
    		}
    	}
    );
 });