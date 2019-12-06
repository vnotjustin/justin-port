function showMe2() {
    "use strict";
    
 if (document.documentElement.clientWidth < 480) {
    var a = document.getElementById('noshow2'),
        b = document.getElementById('show2');
    if (a.style.display === 'none') {
        a.style.display = 'block';
        b.style.display = 'none';
        
    } else {
        a.style.display = 'none';
        b.style.display = 'block';
    }
}
}