function showMe() {
    "use strict";
    
 if (document.documentElement.clientWidth < 480) {
    var x = document.getElementById('noshow'),
        y = document.getElementById('show');
    if (x.style.display === 'none') {
        x.style.display = 'block';
        y.style.display = 'none';
        
    } else {
        x.style.display = 'none';
        y.style.display = 'block';
    }
}
}