// This function is called whenever a team's location is changed in the bracket
function changeImage(id, a) {
    setPermalink();
	$('#'+id).attr('src',a);
    bracket = getWholeBracket();
    $.ajax({
    	type: "POST",
    	url: "push.php",
    	data: {"json": bracket},
    	// success: function(data)
    	// {
    	// 	console.log(data);
    	// }
    })
}

// setBracket()
// Sets the entire bracket based on the current facebook user. Set this as the
// callback for the facebook login
//  Parmaters: 
//		uid (optional) is the user id (not FB id) to set the bracket to instead
//  Returns: none
function setBracket(uid)
{
	var sendData = new Object();
	if(uid != undefined)
		sendData['uid'] = uid;
	else
	    setPermalink();
	$.ajax({
		type: "GET",
		url: "pull.php",
		data: sendData,
		dataType: "json",
		success: function(data)
		{
			for(key in data)
				$('#'+key).attr('src',data[key]);
		}
	});
}


// getWholeBracket()
//  Parameters: none
//  Returns: object that represents entire bracket with only the user's
//   customizations
function getWholeBracket()
{
	var bracketCounts = new Array();
	bracketCounts[1] = 32;
	bracketCounts[2] = 16;
	bracketCounts[3] = 8;
	bracketCounts[4] = 4;
	bracketCounts[5] = 2;
	bracketCounts[6] = 1;

	var bracket = new Object();

	for(var i = 1; i < bracketCounts.length; i++)
	{
		for(var j = 1; j <= bracketCounts[i]; j++)
		{
			var team_url = $('#'+i+'-'+j).attr('src');	
			if(team_url != 'images/centersquare.png'
				&& team_url != 'images/square.png')
				bracket[i+'-'+j] = team_url.substring(team_url.indexOf('images'));
		}
	}
	return bracket;
}

function squareToWide(a) {
    return a.replace("square","wide");
}

function getNameFromURL(img) {
	var imgurl = document.getElementById(img).src;
	return imgurl.substring(imgurl.lastIndexOf("/") + 1, imgurl.lastIndexOf("square"));
}

function getInnerImage() {
	return this.getElementsByTagName("img")[0].src;
	
}

// We need the logout button to actually work
function initLogoutButton()
{
	$('#fb-logout-button').click(function(e) {
		e.preventDefault();
		FB.logout(function(response){
			location.reload();
		});
	});
}


function setPermalink()
{
	var permalink;
	$.ajax({
		type: "GET",
		url: "whoami.php",
		dataType: "json",
		success: function(data)
		{
			permalink = data['permalink'];
			$('#share-link').html('<a href="' + permalink + 
				'">Link to this bracket</a>');
		}
	});
}
