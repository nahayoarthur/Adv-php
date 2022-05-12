<?php include 'CalcFun.php'; ?>
<html>
<head>
	<script>
		//function that display value
		function dis(val)
		{
			document.getElementById("result").value+=val
		}
				//function that clear the display
		function clr()
		{
			document.getElementById("result").value = ""
		}
	</script>
	<!-- for styling -->
	<style>
		.title{
		margin-bottom: 10px;
		text-align:center;
		width: 210px;
		color:<?php echo $two->color; ?>;
		border: solid black 2px;
		}

		input[type="button"]
		{
		background-color:silver;
		color: <?php echo $one->color;?>;
		border: solid black 2px;
		width:100%
		}

		input[type="text"]
		{
		background-color:white;
		border: solid black 2px;
		width:100%
		}
	</style>
</head>
<!-- create table -->
<body>
	<div class = title >Calculator</div>
	<table border="1">
		<tr>
			<td colspan="3"><input type="text" id="result"/></td>
			<!-- clr() function will call clr to clear all value -->
			<td><input type="button" value="c" onclick="clr()"/> </td>
		</tr>
		<tr>
			<!-- create button and assign value to each button -->
			<!-- dis("1") will call function dis to display value -->
			<td><input type="button" value="<?php echo $one->value;?>" onclick="dis('1')"/> </td>
			<td><input type="button" value="<?php echo $two->value; ?>" onclick="dis('2')"/> </td>
			<td><input type="button" value="<?php echo $three->value; ?>" onclick="dis('3')"/> </td>
			<td><input type="button" value="/" onclick="dis('/')"/> </td>
		</tr>
		<tr>
			<td><input type="button" value="<?php echo $four->value; ?>" onclick="dis('4')"/> </td>
			<td><input type="button" value="<?php echo $five->value; ?>" onclick="dis('5')"/> </td>
			<td><input type="button" value="<?php echo $six->value; ?>" onclick="dis('6')"/> </td>
			<td><input type="button" value="-" onclick="dis('-')"/> </td>
		</tr>
		<tr>
			<td><input type="button" value="<?php echo $seven->value; ?>" onclick="dis('7')"/> </td>
			<td><input type="button" value="<?php echo $eight->value; ?>" onclick="dis('8')"/> </td>
			<td><input type="button" value="<?php echo $nine->value; ?>" onclick="dis('9')"/> </td>
			<td><input type="button" value="+" onclick="dis('+')"/> </td>
		</tr>
		<tr>
			<td><input type="button" value="." onclick="dis('.')"/> </td>
			<td><input type="button" value="<?php echo $zero->value; ?>" onclick="dis('0')"/> </td>
			<!-- solve function call function solve to evaluate value -->
			<td><input type="button" value="=" onclick="solve()"/> </td>
			<td><input type="button" value="*" onclick="dis('*')"/> </td>
		</tr>
	</table>
</body>
</html>
