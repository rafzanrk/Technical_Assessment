(function() 
    {
        var LightBox = document.getElementById('LB.js');
    
        // When the user clicks anywhere outside of the LightBox, close it
        window.onclick = function(event) 
        {
            if (event.target == LightBox) 
            {
                LightBox.style.display = "none";
            }
        }
    }
)();
