function addLineToTableEaten(q, w, e, r, t, y, u, i, o, p, a, s, d, f, g, h, j){
    var formData = new FormData();
    formData.append('Datta', q);
    formData.append('Smes', w);
    formData.append('Ovoschi', e);
    formData.append('Kasha', r);
    formData.append('Fruit', t);
    formData.append('RastMaslo', y);
    formData.append('SlivMaslo', u);
    formData.append('Meat', i);
    formData.append('Pechenie', o);
    formData.append('Zeltok', p);
    formData.append('Fish', a);
    formData.append('Tvorog', s);
    formData.append('Sok', d);
    formData.append('Milk', f);
    formData.append('Hleb', g);
    formData.append('Kompot', h);
    formData.append('Tea', j);

    var request = new XMLHttpRequest();
    function reqReadyStateChange() {
        if (request.readyState == 4 && request.status == 200)
          //  document.getElementById("output").innerHTML=request.responseText;
          alert(request.response);
        }
 
    request.open("POST", "http://localhost/table_eaten.php");
    request.onreadystatechange = reqReadyStateChange;
    request.send(formData);
}