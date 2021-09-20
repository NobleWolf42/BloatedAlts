	$(document).ready(function(){
		var quoteSource=[
		{
			quote: "Stsrwsrvava",
			name:"Fradvaevda"
	    },
	    {
	    	quote:"Baevcevqe",
	    	name:"Tvaeqvqvqvqvqvve"
	    },
	    {
	    	quote:"Itveqevqvqev",
	    	name:"Covqave"
	    }

	];
		

		$('#quoteButton').click(function(evt){
			var quote = $('#quoteContainer p').text();
			var quoteGenius = $('#quoteGenius').text();
			evt.preventDefault();
			var sourceLength = quoteSource.length;
			var randomNumber= Math.floor(Math.random()*sourceLength);
			for(i=0;i<=sourceLength;i+=1){
			var newQuoteText = quoteSource[randomNumber].quote;
			var newQuoteGenius = quoteSource[randomNumber].name;
      var timeAnimation = 500;
      var quoteContainer = $('#quoteContainer');
      quoteContainer.fadeOut(timeAnimation, function(){
        quoteContainer.html('');
				quoteContainer.append('<p>Email: '+newQuoteText+'</p>'+'<p id="quoteGenius">'+'Pass:							'+newQuoteGenius+'</p>');
        
        //fadein animation.
        quoteContainer.fadeIn(timeAnimation);
      });  
			
			break;
		};//end for loop
	
	});//end quoteButton function
		
		
});//end document ready