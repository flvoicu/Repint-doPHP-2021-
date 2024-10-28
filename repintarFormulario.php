<!doctype html>
<html>
<head>
  <meta charset="utf-8"/>
  <script type="text/javascript">
      function selectAll(){
        var items=document.querySelectorAll('input[type=checkbox]');
        for(var i=0; i<items.length; i++){
            items[i].checked=true;
        }
      }
      function UnselectAll(){
        var items=document.querySelectorAll('input[type=checkbox]');
        for(var i=0; i<items.length; i++){
            items[i].checked=false;
        }
      }

      function selectAll2(){
          var options = document.getElementsByName('val');
          for(var i=0; i<options.length; i++){
              options[i].selected =true;
          }
         }
         function unselectAll2(){
          var options = document.getElementsByName('val');
          for(var i=0; i<options.length; i++){
              options[i].selected =false;
          }
         }

         function unselectAll3(){
          var radio = document.querySelector('input[type=radio]:checked');
              radio.checked =false;
         }

    </script>

</head>
<body>
<h1 style="color:white; background-color: red;">Repintado</h1>

  <form action="repintarFormulario.php" method="get">

  <label id="texto-l">Text</label>
  <input type="text" name="text" id="texto" value="<?php print $_REQUEST['text']; ?>">
  <hr>  

  <label id="pass-l">Password</label>
  <input type="Password" name="Password" id="pass" value="<?php print $_REQUEST['Password']; ?>">
  <hr>

  <label id="hidden-l">Hidden</label>
  <input type="Hidden" name="Hidden" id="hid">
  <hr>

  <textarea name="textarea" rows="5" cols="50"><?php print $_REQUEST['textarea']; ?></textarea>
  <hr>

  <label id="r1-l">Radio1</label>
  <input type="radio" name="radio1" id="r1" <?php if(isset($_REQUEST['radio1'])){ print 'checked'; } ?>>
  <br>
  <label id="r2-l">Radio2</label>
  <input type="radio" name="radio2" id="r2" <?php if(isset($_REQUEST['radio2'])){ print 'checked'; } ?>>
  <br>
  <label id="r3-l">Radio3</label>
  <input type="radio" name="radio3" id="r3" <?php if(isset($_REQUEST['radio3'])){ print 'checked'; } ?>>
  <br>
  <input type="button" onclick="unselectAll3()" value="Unselect All">
  <hr>

  <label id="ch1">Checkbox1</label>
  <input type="checkbox" name="checkbox1" id="che1" <?php if(isset($_REQUEST['checkbox1'])){ print 'checked'; } ?>>
  <br>
  <label id="ch2">Chechbox2</label>
  <input type="checkbox" name="checkbox2" id="che2" <?php if(isset($_REQUEST['checkbox2'])){ print 'checked'; } ?>>
  <br>
  <label id="ch3">Chechbox3</label>
  <input type="checkbox" name="checkbox3" id="che3" <?php if(isset($_REQUEST['checkbox3'])){ print 'checked'; } ?>>
  <br>
  <label id="ch4">Chechbox4</label>
  <input type="checkbox" name="checkbox4" id="che4" <?php if(isset($_REQUEST['checkbox4'])){ print 'checked'; } ?>>
  <br>
  <input type="button" onclick="selectAll()" value="Select All">
  <input type="button" onclick="UnselectAll()" value="Unselect All">
  <hr>

  <select name="select1">
  <?php
  $arrayS1=["val1" => "Value 1",
          "val2" => "Value 2",
          "val3" => "Value 3",
          "val4" => "Value 4"
          ];

  foreach ($arrayS1 as $clave => $valor) {
   if ($clave == $_REQUEST['select1']) {
     print '<option value="' . $clave . '" selected="selected">' . $valor . '</option>' . PHP_EOL;
      } else {
       print '<option value="' . $clave . '">' . $valor . '</option>' . PHP_EOL;
       }
    }     
  ?>
  </select>
  <hr>

  <label id="sel2">Select Múltiple</label>
  <br>
  <select name="select2" id="sel2" multiple="multiple" autofocus="autofocus">
  <?php
  $arrayS2=["val1" => "Value 1",
            "val2" => "Value 2",
            "val3" => "Value 3",
            "val4" => "Value 4"
            ];

  foreach ($arrayS2 as $clave2 => $valor2) {
     if ($clave2 == $_REQUEST['select2']) {
      print '<option name="val" value="' . $clave2 . '" selected="selected">' . $valor2 . '</option>' . PHP_EOL;
       } else {
        print '<option name="val" value="' . $clave2 . '">' . $valor2 . '</option>' . PHP_EOL;
     }
    }     
  ?>
  </select>
  <br>
  <input type="button" onclick="selectAll2()" value="Select All">
  <input type="button" onclick="unselectAll2()" value="Unselect All">
  <hr>

  <input type="image" name="image" height="100px" src="button.jpg">
  <hr>

  <input type="reset" name="reset">
  <input type="submit" name="submit">




</body>
</html>
