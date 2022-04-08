<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title> Carla's Classroom | Find Students with PHP Hints </title>
    <link href="css/carla.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" type="text/javascript">
        function showHint(str) {
            if (str.length==0){
                document.getElementById("txtHint").innerHTML="";
                return;
            }

                if (window.XMLHttpRequest) {
                    var xmlhttp = new XMLHttpRequest();
                }
                else {
                var xmlhttp =  new ActiveXObject("Microsoft.XMLHTTP");
                }

                xmlhttp.onreadystatechange = function(){
                    if (xmlhttp.readyState==4 && xmlhttp.status==200){
                        xmlhttp.responseText;
                    }
            }

            xmlhttp.open("GET","gethint.php?q = "+str,true);
            xmlhttp.send();
        }
    </script>
