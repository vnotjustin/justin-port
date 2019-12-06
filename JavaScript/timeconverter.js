        var a = "",
            b = "",
            c = "",
            d = "";
        
        function convertTime() {
            a = parseInt(document.getElementById("hour").value);
            b = document.getElementById("minutes").value;
            c = document.getElementById("meridian").value;
    
            console.log(a + " " + b + " " + c);
            
        if (isNaN(a+b) || a > 12 || b > 59){
            document.getElementById("output").innerHTML = "Input a number less than or equal to 12 for hour and 59 for minutes.";}
            
        else {
            if (c === "AM" && a < 10){
                a = "0" + a;
            }
            if (c === "PM" && a < 12){
                a = (a + 12);
            }   
            if (c === "AM" && a == 12){
                a = "00";
            } 
            d = "" + a + b +""
                }
            
        document.getElementById("output").innerHTML = d;
            
        }