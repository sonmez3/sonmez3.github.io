var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };



window.onload = function () {
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
	$("add").onclick = addScore;
	
	
};
function displayResults() {
    var average = 0;
	for(var i=0;i<scores.length;i++)
	{
		average= (average*(i)+scores[i])/(i+1);
	}



    let highestScore = Math.max(...scores);
	let highestScoreIndex = scores.indexOf(highestScore);
    let highestScoreName = names[highestScoreIndex];

    document.getElementById("results").innerHTML = `<h2>Results</h2>
                            <p>Average score = ${average}</p>
                            <p>High score = ${highestScoreName} with a score of ${highestScore}</p>`;
}

function displayScores() {

	document.getElementById("scores_table").innerHTML="";
	document.getElementById("scores_table").innerHTML+="<h2> Results </h2>  <td> <h3> Name  </h3></td> <td> <h3>Score </h3> </ td>";
	for(var i=0;i<scores.length;i++)
	{
		document.getElementById("scores_table").innerHTML+= "<td>" + names[i] + "</td><td> " + scores[i] + "</td><br \>";
	}
	   
}

function addScore() {
    
    var name = document.getElementById("name");
    var score = document.getElementById("score");

  
    if (name.value.trim() == " " || isNaN(score.value) || score.value < 0 || score.value > 100) {
        alert("You must enter a name and a valid score");
        return;
    }

    names.push(name.value);
    scores.push(Number(score.value));

    name.value = " ";
    score.value = " ";

   
}
