function showMe3() {
    "use strict";
    
 if (document.documentElement.clientWidth < 480) {
    var j = document.getElementById('noshow3'),
        k = document.getElementById('show3');
    if (j.style.display === 'none') {
        j.style.display = 'block';
        k.style.display = 'none';
        
    } else {
        j.style.display = 'none';
        k.style.display = 'block';
    }
}
}