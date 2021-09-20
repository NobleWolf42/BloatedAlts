	$(document).ready(function(){
		var quoteSource=[
		{
			quote:"minecraft@gmail.com:Passme1234"
	    },
	    {
	    	quote:"MyEmail@gmail.com:ThePasscode"
	    },
	    {
	    	quote:"randomacct@gmail.com:PassMe"
	    },
	    {
	    	quote:"anemail@gmail.com:Password123"
	    }

	];
		

		$('#quoteButton').click(function(evt){
			var quote = $('#quoteContainer p').text();
			evt.preventDefault();
			var sourceLength = quoteSource.length;
			var randomNumber= Math.floor(Math.random()*sourceLength);
			for(i=0;i<=sourceLength;i+=1){
			var newQuoteText = quoteSource[randomNumber].quote;
      var timeAnimation = 500;
      var quoteContainer = $('#quoteContainer');
      quoteContainer.fadeOut(timeAnimation, function(){
        quoteContainer.html('');
				quoteContainer.append('<p>'+newQuoteText+'</p>'+'<p id="quoteGenius">'+'								'+'</p>');
        
        quoteContainer.fadeIn(timeAnimation);
      });  
			
			break;
		};
	
	});
		
		
});