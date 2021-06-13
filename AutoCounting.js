
// call onload or in script segment below form
function attachCheckboxHandlers() {
    // get reference to element containing toppings checkboxes
    var el = document.getElementById('gejala');
    // get reference to input elements in toppings container element
    var tops = el.getElementsByTagName('input');
    // assign updateTotal function to onclick property of each checkbox
    for (var i=0, len=tops.length; i<len; i++) {
        if ( tops[i].name === 'A' ) {
            tops[i].onclick = updateTotalA; 
        }else if (tops[i].name === 'AB' ) {
            tops[i].onclick = updateTotalAB;
        }else if (tops[i].name === 'B' ) {
            tops[i].onclick = updateTotalB;
        }else if (tops[i].name === 'C' ) {
            tops[i].onclick = updateTotalC;
        }else if (tops[i].name === 'CF' ) {
            tops[i].onclick = updateTotalCF;
        }else if (tops[i].name === 'D' ) {
            tops[i].onclick = updateTotalD;
        }else if (tops[i].name === 'DE' ) {
            tops[i].onclick = updateTotalDE;
        }else if (tops[i].name === 'E' ) {
            tops[i].onclick = updateTotalE;
        }else if (tops[i].name === 'F' ) {
            tops[i].onclick = updateTotalF;
        }
    }
}

// called onclick of toppings checkboxes
function updateTotalA() {
    // 'this' is reference to checkbox clicked on
    var form = this.form;    
    // get current value in total text box, using parseFloat since it is a string
    var val = parseFloat( form.elements['total'].value );
    // if check box is checked, add its value to val, otherwise subtract it
    if ( this.checked ) val++;
     else val--;
    //proses angka pada 
    form.elements['total'].value = prosesAngka(val);
}
function updateTotalB() {
    // 'this' is reference to checkbox clicked on
    var form = this.form;    
    // get current value in total text box, using parseFloat since it is a string
    var val = parseFloat( form.elements['totalB'].value );
    // if check box is checked, add its value to val, otherwise subtract it
    if ( this.checked ) val++;
     else val--;
    //proses angka pada 
    form.elements['totalB'].value = prosesAngka(val);
}function updateTotalC() {
    // 'this' is reference to checkbox clicked on
    var form = this.form;    
    // get current value in total text box, using parseFloat since it is a string
    var val = parseFloat( form.elements['totalC'].value );
    // if check box is checked, add its value to val, otherwise subtract it
    if ( this.checked ) val++;
     else val--;
    //proses angka pada 
    form.elements['totalC'].value = prosesAngka(val);
}function updateTotalD() {
    // 'this' is reference to checkbox clicked on
    var form = this.form;    
    // get current value in total text box, using parseFloat since it is a string
    var val = parseFloat( form.elements['totalD'].value );
    // if check box is checked, add its value to val, otherwise subtract it
    if ( this.checked ) val++;
     else val--;
    //proses angka pada 
    form.elements['totalD'].value = prosesAngka(val);
}function updateTotalE() {
    // 'this' is reference to checkbox clicked on
    var form = this.form;    
    // get current value in total text box, using parseFloat since it is a string
    var val = parseFloat( form.elements['totalE'].value );
    // if check box is checked, add its value to val, otherwise subtract it
    if ( this.checked ) val++;
     else val--;
    //proses angka pada 
    form.elements['totalE'].value = prosesAngka(val);
}
function updateTotalF() {
    // 'this' is reference to checkbox clicked on
    var form = this.form;    
    // get current value in total text box, using parseFloat since it is a string
    var val = parseFloat( form.elements['totalF'].value );
    // if check box is checked, add its value to val, otherwise subtract it
    if ( this.checked ) val++;
     else val--;
    //proses angka pada 
    form.elements['totalF'].value = prosesAngka(val);
}

function updateTotalAB() {
    // 'this' is reference to checkbox clicked on
    var form = this.form;    
    // get current value in total text box, using parseFloat since it is a string
    var valA = parseFloat( form.elements['total'].value );
    var valB = parseFloat( form.elements['totalB'].value );
    // if check box is checked, add its value to val, otherwise subtract it
    if ( this.checked ){
        valA++;
        valB++;
    }else{
        valA--;
        valB--;
    } 
    //proses angka pada 
    form.elements['total'].value = prosesAngka(valA);
    form.elements['totalB'].value = prosesAngka(valB);
}
function updateTotalCF() {
    // 'this' is reference to checkbox clicked on
    var form = this.form;    
    // get current value in total text box, using parseFloat since it is a string
    var valA = parseFloat( form.elements['totalC'].value );
    var valB = parseFloat( form.elements['totalF'].value );
    // if check box is checked, add its value to val, otherwise subtract it
    if ( this.checked ){
        valA++;
        valB++;
    }else{
        valA--;
        valB--;
    } 
    //proses angka pada 
    form.elements['totalC'].value = prosesAngka(valA);
    form.elements['totalF'].value = prosesAngka(valB);
}
function updateTotalDE() {
    // 'this' is reference to checkbox clicked on
    var form = this.form;    
    // get current value in total text box, using parseFloat since it is a string
    var valA = parseFloat( form.elements['totalD'].value );
    var valB = parseFloat( form.elements['totalE'].value );
    // if check box is checked, add its value to val, otherwise subtract it
    if ( this.checked ){
        valA++;
        valB++;
    }else{
        valA--;
        valB--;
    } 
    //proses angka pada 
    form.elements['totalD'].value = prosesAngka(valA);
    form.elements['totalE'].value = prosesAngka(valB);
}

// proses angka untuk merubah string agar tidak null 
function prosesAngka(val, n) {
    n = n || 2;
    var str = "" + Math.round ( parseFloat(val) * Math.pow(10, n) );
    // membalikkan nilai ke nilai 0 dan tidak null apablia bernilai 0
    while (str.length <= n) {
        str = "0" + str;
    }
    var pt = str.length - n;
    return str.slice(0,pt);
}


// in script segment below form
attachCheckboxHandlers();