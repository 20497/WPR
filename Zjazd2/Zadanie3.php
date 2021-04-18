<!doctype html>
<html>
<body>
<form action="Zadanie2.php" method="post">
    <label>
        <tr>
            <td>Number of people</td>
            <td><select name="numPeople" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </td>
            <br>
        </tr>
        <tr>
            <td>First name of the client</td>
            <td><input type="text" name="name" required></td>
            <br>
        </tr>
        <tr>
            <td>Last name of the client</td>
            <td><input type="text" name="lastName" required></td>
            <br>
        </tr>
		<br>
        <tr>
            <td>Mobile phone number</td>
            <td><input type="tel" name="phoneNumber" size="12"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" required></td>
            <br>
        </tr>
        <tr>
            <td>Email adress </td>
            <td><input type="email" name="email" required></td>
            <br>
        </tr>
        <tr>
            <td>Arrival date</td>
            <td><input type="date" name="arrivalDate" required></td>
            <br>
        </tr>
        <tr>
            <td>Leaving date</td>
            <td><input type="date" name="leavingDate" required></td>
            <br>
        </tr>
        <tr>
            <td>Arrival hour</td>
            <td><input type="time" name="arrivalHour"></td>
            <br>
        </tr>
		<tr>
            <td>Leaving hour</td>
            <td><input type="time" name="leavingHour"></td>
            <br>
            <br>
        </tr>
        <tr>
            <td>Additional amenities<br></td>
            <td>Cot for a small child</td>
            <td><input type="checkbox" name="childBed"></td>
            <br>
        </tr>
        <tr>
            <td>Air conditioning</td>
            <td><input type="checkbox" name="airConditioning"></td>
            <br>
        </tr>
        <tr>
            <td>Ashtray</td>
            <td><input type="checkbox" name="ashtray"></td>
            <br>
        </tr>
        <tr>
            <td><input type="submit" value="SEND"/></td>
        </tr>
    </label>
</form>


<?php
if (isset($_POST["numPeople"]) && isset($_POST["name"]) && isset($_POST["lastName"]) &&
isset($_POST["phoneNumber"]) && isset($_POST["arrivalDate"]) && isset($_POST["leavingDate"])) 
{
    $numPeople = $_POST["numPeople"];
    $name = $_POST["name"];
    $lastName = $_POST["lastName"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $arrivalDate = $_POST["arrivalDate"];
    $leavingDate = $_POST["leavingDate"];
    $arrivalHour = $_POST["arrivalHour"];
    $leavingHour = $_POST["leavingHour"];


echo ("Number of people " . $numPeople . "<br>" .
    "Client's data" . "<br>" .
    "Name " . $name . "<br>" .
    "Last name " .$lastName . "<br>" .       
    "Phone number " . $phoneNumber . "<br>" .
    "Email " . $email . "<br>" .
    "Arrival date " . $arrivalDate . "<br>" .
    "Leaving date " . $leavingDate . "<br>" .
    "Arrival hour " . $arrivalHour . "<br>" .
    "Leaving hour " . $leavingHour . "<br>"
);


if (isset($_POST["childBed"])) 
{
    echo "Additional Cot for a small child" . "<br>";
}
if (isset($_POST["airConditioning"])) 
{
    echo "Air conditioning" . "<br>";
}
if (isset($_POST["ashtray"])) 
{
    echo "Ashtray" . "<br>";
}
	
	if($numPeople>1) {
		echo ('<form>');
		for($i=1; $i<numPeople; $i++)
        {
			echo('</br>
				<label>
					<tr>
						<td>Clients name</td>
						<td><input type="text" name="name" required></td>
					</tr>
					<tr>
						<td>Clients last name</td>
						<td><input type="text" name="lastName" required></td>
					</tr>
				</label>');
		}
	echo ('
<br>
    <input type="submit" value="Send">
</form>'
);
}
    }
?>
</body>
</html>