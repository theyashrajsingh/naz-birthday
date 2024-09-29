document.getElementById("loginForm").addEventListener("submit", function(event){ 
    event.preventDefault(); 
    let username = document.getElementById("username").value; 
    let password = document.getElementById("password").value; // Example validation
     
       if (username === "Nazyash" && password === "Nazyash") { window.location.href = "welcome.html"; // Redirect to another page on success } 
       }else { alert("Invalid login credentials!"); 

        } 
    });