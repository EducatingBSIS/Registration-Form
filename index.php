<html>
<head>
<title>My Activity</title>
<head>
<link href = "style.css" rel = "stylesheet" type="text/css">
<center><table border = "1">
<tr>
<td><h1><center>Students Registration Form</center><h1></td>
<tr>
<td>
<body bgcolor = "gray">
<form method="POST" action="reg.php">
<table border = "1" cellpadding="10">
<tr>
<td>firstname</td>
<td>lastname</td>
<td>surname</td></tr>
<form>
<tr>
<td><input type = "text" name = "fname" placeholder = "firstname"></td>
<td><input type = "text" name = "mname" placeholder = "middlename"></td>
<td><input type = "text" name = "sname" placeholder = "surname"></tr></td>
<tr>
<td>Gender</td>
<td><input type = "radio" name = "gen" value = "male" name = "Gender"> male</td>
<td><input type = "radio" name = "gen" value = "female" name = "Gender"> female</td></tr>
<tr>
<td colspan = "3">Birthday</td></tr>
<tr>
<td>
month
<select name = "mth">
<option>january</option>
<option>february</option>
<option>march</option>
<option>april</option>
<option>may</option>
<option>june</option>
<option>july</option>
<option>august</option>
<option>september</option>
<option>october</option>
<option>november</option>
<option>december</option>
</td>
<td>
day
<select name = "dy">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
</td>
<td>
year
<select name = "yr">
<option>1880</option>
<option>1881</option>
<option>1882</option>
<option>1883</option>
<option>1884</option>
<option>1885</option>
<option>1886</option>
<option>1887</option>
<option>1888</option>
<option>1889</option>
<option>1890</option>
<option>1891</option>
<option>1892</option>
<option>1893</option>
<option>1895</option>
<option>1896</option>
<option>1894</option>
<option>1897</option>
<option>1898</option>
<option>1899</option>
<option>1996</option>
<option>1997</option>
<option>1998</option></select>
</td>
<tr>
<td>
Program
</td>
<td>
<select name = "pgm">
<option>AB BroadCasting</option>
<option>Nursing Assistant</option>
<option>Assiociate in Computer Technology</option>
<option>Bachelor of Science in Information System</option>
<option>Bachelor of Science in Accountancy</option>
<option>BS Social Works</option>
<option>INternational Coockery</option>
<option>Mass Communication Technology</option>
</td>
</tr>
<tr>
<td colspan = "3">
Student type
</td>
<tr>
<td colspan = "3">
<input type = "radio" name = "st" value = "Full-scholar" name = "Studenttype">Full-scholar<br>
<input type = "radio" name = "st" value = "Partial" name = "Studenttype">Partial-scholar<br>
<input type = "radio" name = "st" value = "Payee" name = "Studenttype">Payee<br>
</td>
</tr>
<tr>
<td colspan = "3">
Address
</td>
</tr>
<tr>
<td colspan="3">
<textarea style="width: 100%;height: 103px;" name = "ta"></textarea>
</tr>
</td>
<tr>
<td>
<input type = "submit" value = "Submit Registration" />
</td>
</tr>






</table>
</center>
</form>
</body>
</html>
