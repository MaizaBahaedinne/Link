

 <div id="content-page" class="content-page" onload="countDown()" >
    <div class="container" >
        
     
        
        <div class="row">
        	<div class="col-sm-12">
	        <div class="iq-card">
		        <div class="iq-card-header d-flex justify-content-between">
		        	<div class="iq-header-title">
		        	<h4 class="card-title" ><?php echo $Formation->label ?></h4>
		        	
		        	
		        	</div>
		        </div>
		        <div class="iq-card-body">	
		        <h4 id="horloge" style="border: 10px ; border-color: red " class="text-right" onload="timerContDown()" ></h4>	        		
		        <div id="quiz"></div>
		        
                <button id="submit">Envoyer</button>
				
				<div id="results"></div>
		        </div>
		      </div>
	       </div>
	    </div>

		

    </div>
</div>


<script type="text/javascript">
    // Set the date we're counting down to
                                var countDownDate = new Date().getTime() + 15 * 60000;

                                // Update the count down every 1 second
                                var x = setInterval(function() {

                                  // Get today's date and time
                                  var now = new Date().getTime();
                                    
                                  // Find the distance between now and the count down date
                                  var distance = countDownDate - now;
                                    
                                  // Time calculations for days, hours, minutes and seconds
                                  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                    
                                  // Output the result in an element with id="demo"
                                  document.getElementById("horloge").innerHTML =  minutes + "m " + seconds + "s ";
                                    
                                  // If the count down is over, write some text 
                                  if (distance < 0) {
                                    clearInterval(x);
                                    document.getElementById("horloge").innerHTML = "EXPIRED";
                                  }
                                }, 1000);

                
                            
</script>

<script type="text/javascript">






var myQuestions = [
    <?php foreach ($questions as $key ) { ?>
    {
        question: "<?php echo $key->Question ; ?> ",
        answers: {
            a: '<?php echo $key->choice1 ; ?>',
            b: '<?php echo $key->choice2 ; ?>',
            c: '<?php echo $key->choice3 ; ?>',
            d: '<?php echo $key->choice4 ; ?>'
        },
        correctAnswer: '<?php echo $key->Answer1 ; ?>'
    },
    <?php } ?> 
    
];

var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');
var submitButton = document.getElementById('submit');

generateQuiz(myQuestions, quizContainer, resultsContainer, submitButton);

function generateQuiz(questions, quizContainer, resultsContainer, submitButton){

    function showQuestions(questions, quizContainer){
        // we'll need a place to store the output and the answer choices
        var output = [];
        var answers;

        // for each question...
        for(var i=0; i<questions.length; i++){
            
            // first reset the list of answers
            answers = [];

            // for each available answer...
            for(letter in questions[i].answers){

                // ...add an html radio button
                answers.push(
                    '<label>'
                        + '<input type="radio" name="question'+i+'" value="'+letter+'"> &nbsp;&nbsp; '
                        + letter + ': '
                        + questions[i].answers[letter]
                    + '</label> <br>'
                );
            }

            // add this question and its answers to the output
            output.push(
                '<div class="question"> <h4>' + questions[i].question + '</h4></div> <br> '
                + '<div class="answers">' + answers.join('') + '</div>'
            );
        }

        // finally combine our output list into one string of html and put it on the page
        quizContainer.innerHTML = output.join('');
    }


    function showResults(questions, quizContainer, resultsContainer){
        
        // gather answer containers from our quiz
        var answerContainers = quizContainer.querySelectorAll('.answers');
        
        // keep track of user's answers
        var userAnswer = '';
        var numCorrect = 0;
        
        // for each question...
        for(var i=0; i<questions.length; i++){

            // find selected answer
            userAnswer = (answerContainers[i].querySelector('input[name=question'+i+']:checked')||{}).value;
            
            // if answer is correct
            if(userAnswer===questions[i].correctAnswer){
                // add to the number of correct answers
                numCorrect++;
                
                // color the answers green
                answerContainers[i].style.color = 'lightgreen';
            }
            // if answer is wrong or blank
            else{
                // color the answers red
                answerContainers[i].style.color = 'red';
            }
        }

        var a = (numCorrect / (questions.length + numCorrect)) * 100
        var b = 100 - a
        if( b>70  ){   alert('Félicitaion vous avez réussir dans ce exam')  ; }
        
        // show number of correct answers out of total
        resultsContainer.innerHTML = numCorrect + '/' + questions.length + ' = ' b;

       
    }

    // show questions right away
    showQuestions(questions, quizContainer);
    
    // on submit, show results
    submitButton.onclick = function(){
        showResults(questions, quizContainer, resultsContainer);
        quizContainer.style.display = 'none';
        submitButton.style.display = 'none';
    }

}

</script>
