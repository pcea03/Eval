function display(strSection, inclFile, blnWhat) {
   if (strSection === "") {
      document.getElementById(strSection).innerHTML = "";
      return;
   } else {
      if (window.XMLHttpRequest) {
         // code for IE7+, Firefox, Chrome, Opera, Safari
         xmlhttp = new XMLHttpRequest();
      } else {
         // code for IE6, IE5
         xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function () {
         if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
            document.getElementById(strSection).innerHTML = xmlhttp.responseText;
         }
      };
      xmlhttp.open("POST", inclFile, blnWhat);
      xmlhttp.send();
   }
}