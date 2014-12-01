<?php
echo '
        <div class="jumbotron">
        
        <h1>Verein radio-meltdown.ch</h1>
<p>Hier meldest du dich für das Vereinsjahr 2014 an.<br />Um Vereinsmitglied zu werden, bitte vollständig ausfüllen:</p>
<div align="center"><form action="/index.php/supporter" method="post" name="Formular" onsubmit="return chkFormular()">
<table style="margin-left: auto; margin-right: auto;" width="330" border="0" cellspacing="0" cellpadding="5">
<tbody>
<tr>
<td align="right">Anrede:*</td>
<td align="center"><select name="anrede" size="1">
<option>Frau</option>
<option>Herr</option>
</select></td>
</tr>
<tr>
<td align="right">Vorname:*</td>
<td><input type="text" name="name" size="30" maxlength="50" /></td>
</tr>
<tr>
<td align="right">Nachname:*</td>
<td><input type="text" name="nachname" size="30" maxlength="50" /></td>
</tr>
<tr>
<td align="right">Strasse/Nr.:*</td>
<td><input type="text" name="strasse" size="30" maxlength="50" /></td>
</tr>
<tr>
<td align="right">Plz./Ort:*</td>
<td><input type="text" name="ort" size="30" maxlength="50" /></td>
</tr>
<tr>
<td align="right">E-Mail:*</td>
<td>
<p><input type="email" name="mail" size="30" maxlength="50" /></p>
</td>
</tr>
<tr>
<td align="right">Ich Stimme den <a href="/images/Statuten-22-12-2013.pdf">Statuten</a> zu:*</td>
<td align="center"><input type="checkbox" name="agree" value="true" /></td>
</tr>
<tr>
<td align="right">Ich möchte den <a href="/index.php/newsletter" target="_blank">Newsletter</a> abonnieren:*</td>
<td align="center"><input type="checkbox" name="news" value="true" /></td>
</tr>
</tbody>
</table>
<div id="dynamic_recaptcha_1"> </div>
<table width="178" border="0" cellspacing="0" cellpadding="5">
<tbody>
<tr>
<td style="text-align: middle;" align="center"><input type="submit" value="Beitreten" /></td>
</tr>
</tbody>
</table>
<input type="hidden" name="Hidden" value="Supporter" /></form></div>
        </div>
    ';


/*
<script type="text/javascript">
function chkFormular2 (){
  if (document.Formular2.name.value == "") {
    alert("Bitte einen Namen eingeben!");
    document.Formular2.name.focus();
    return false;
  }
  if (document.Formular2.mail.value == "") {
    alert("Bitte Ihre E-Mail-Adresse eingeben!");
    document.Formular2.mail.focus();
    return false;
  }
  if (document.Formular2.mail.value.indexOf("@") == -1) {
    alert("Keine E-Mail-Adresse!");
    document.Formular2.mail.focus();
    return false;
  }
return true;
}

function chkFormular (){
  if (document.Formular.name.value == "") {
    alert("Bitte einen Namen eingeben!");
    document.Formular.name.focus();
    return false;
  }
  if (document.Formular.mail.value == "") {
    alert("Bitte Ihre E-Mail-Adresse eingeben!");
    document.Formular.mail.focus();
    return false;
  }
  if (document.Formular.mail.value.indexOf("@") == -1) {
    alert("Keine E-Mail-Adresse!");
    document.Formular.mail.focus();
    return false;
  }
  if (document.Formular.nachname.value == "") {
    alert("Bitte einen Namen eingeben!");
    document.Formular.nachname.focus();
    return false;
  }
  if (document.Formular.ort.value == "") {
    alert("Bitte einen Ort eingeben!");
    document.Formular.ort.focus();
    return false;
  }
  if (document.Formular.strasse.value == "") {
    alert("Bitte eine Strasse eingeben!");
    document.Formular.strasse.focus();
    return false;
  }
  if (document.Formular.anrede.value == "") {
    alert("Bitte eine Anrede eingeben!");
    document.Formular.anrede.focus();
    return false;
  }
  if (document.Formular.agree.checked != true) {
    alert("Statuten müssen akzeptiert werden!");
    document.Formular.agree.focus();
    return false;
  }
return true;
}
</script>

*/

?>