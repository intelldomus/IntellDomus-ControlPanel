function prova() {
  // Let's check if the browser supports notifications
  if (!("Notification" in window)) {
    alert("This browser does not support desktop notification");
  }

  // Let's check if the user is okay to get some notification
  else if (Notification.permission === "granted") {
    // If it's okay let's create a notification
    var notification = new Notification("Test Notifica");
  }

  // Otherwise, we need to ask the user for permission
  else if (Notification.permission !== 'denied') {
    Notification.requestPermission(function (permission) {
      // If the user is okay, let's create a notification
      if (permission === "granted") {
        var notification = new Notification("Test Notifica!");
      }
    });
  }

  // At last, if the user already denied any notification, and you 
  // want to be respectful there is no need to bother them any more.
}

function loadUser() {
	var id = document.getElementById("utenti").value;
	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("user").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "/paginesito/option1.php?id=" + id, true);
	xmlhttp.send();
}