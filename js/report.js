function showReport(title) {
  var start_date = document.getElementById('start_date').value;
  var end_date = document.getElementById('end_date').value;
  //alert(start_date + " " + end_date)
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if(xhttp.readyState = 4 && xhttp.status == 200)
      document.getElementById(title + "_report_div").innerHTML = xhttp.responseText;
  };
  xhttp.open("GET", "php/report.php?action=" + title + "&start_date=" + start_date + "&end_date=" + end_date, true);
  xhttp.send();
}


