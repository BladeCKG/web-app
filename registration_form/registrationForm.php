<html>
	<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<center><h1>Student Registration Form</h1></center>
		<form method="POST" action="register.php">
		<table border="2" align="center">
		<th>
		<tr>
			<td>First Name</td>
			<td>Middle Name</td>
			<td>Last Name</td>
		</tr>
		<tr>
			<td><input type='text' name="first_name"></td>
			<td><input type='text' name="middle_name"></td>
			<td><input type='text' name="last_name"></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="radio" name="gender" value="Male">Male</td>
			<td><input type="radio" name="gender" value="Female">Female</td>
		</tr>
		<tr>
			<td colspan="3">Birthday</td>
		</tr>
		<tr>
			<td>Month
			<select name="Month">
				<option value="" selected>Please select...</option>
				<option>January</option>
				<option>February</option>
				<option>March</option>
				<option>April</option>
				<option>May</option>
				<option>June</option>
				<option>July</option>
				<option>August</option>
				<option>September</option>
				<option>October</option>
				<option>November</option>
				<option>December</option>
			</select>
			</td>
			<td>Day
			<select name="Day">
				<option value="" selected>Please select...</option>
				<?php for($day = 1; $day <= 31; $day++): ?>
				<option value= "<?php echo $day; ?>" >
					<?php echo $day; ?>	
				</option>
    			<?php endfor; ?>
			</select>
			</td>
			<td>Year
			<select name="Year">
				<option value="" selected>Please select...</option>
				<?php for($year = 2015; $year > 1980; $year--): ?>
				<option value= "<?php echo $year; ?>" >
					<?php echo $year; ?>	
				</option>
   				<?php endfor; ?>
			</select>
			</td>
		</tr>
		<tr>
			<td>Program</td>
			<td colspan="2">
			<select name="program">
				<option value="" selected>Please select...</option>
				<option value="AB Broadcasting">ABB</option>
				<option value="BS Accountancy">BSA</option>
				<option value="BS Accounting Technology">BSAT</option>
				<option value="BS Information System">BSIS</option>
				<option value="Associate Computer Technology">ACT</option>
				<option value="Mass Communication Technology">MCT</option>
				<option value="Health Care Services">HCS</option>
				<option value="Office Management">OM</option>
				<option value="International Cookery">IC</option>
			</select>			
			</td>
		</tr>
		<tr>
			<td colspan="3">Student Type</td>
		</tr>
		<tr>
			<td colspan="3">
			<input type="radio" name="student_type" value="Full Scholar">Full-scholar<br>
			<input type="radio" name="student_type" value="Partial Scholar">Partial-scholar<br>
			<input type="radio" name="student_type" value="Payee">Payee<br>
			</td>			
		</tr>
		<tr>
			<td colspan="3">Address</td>		
		</tr>
		<tr>	
			<td colspan="3"><textarea style="width: 720px; height: 100px;" name="address"></textarea>
		</tr>
		<tr>
			<td colspan="2"><button type="submit" value="save">Submit Registration</button></td>
			<td><button type="reset" value="reset">Clear</td>
		</tr>
		</table>
		</form>
	</body>
</html>
