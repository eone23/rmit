<?php
// Connect to a MySQL database
	function RMITconnect()
	{
		// connection variables
		$hostname = 'mysql.cs.rmit.edu.au:4022';
		$username = 's3520755';
		$password = 'NVQq9rL7';
		$dbname = 's3520755';
		$connection = @mysql_connect($hostname, $username, $password)
			or die("Cannot connect to " . $hostname . " with username " . $username);		
		@mysql_select_db($dbname, $connection)
			or die("Cannot connect to database " . $dbname);

		return $connection;
	}

//  local connection	
	function localConnect()
	{
		$localConnect = @mysqli_connect('localhost','root', '', 'test');		
		if (!$localConnect) { die('Connect error' . mysqli_connect_error()); }
		return $localConnect;
	}
	
// Execute select query and return a results table
	function executeselect($query)
	{
		$result_set = @mysql_query($query, myconnection())
			or	die('Query error: ' . mysql_error());
		$num_results = @mysql_num_rows($result_set);
		if($num_results == 0)
		{
			return $num_results;
		}
		else
		{
			for($i = 0 ; $i < $num_results ; $i++)
			{
				$rows[$i] = mysql_fetch_array($result_set);	
			}																
			return $rows;							
		}
	}

// Execute select query and return number of rows
	function executecountquery($query)
	{
		$result_set = @mysql_query($query, myconnection())
			or	die('Query error: ' . mysql_error());
		$result_array = @mysql_fetch_array($result_set);		
		$row_count = $result_array[0];					
		
		
		return $row_count;
	}

// Execute insert, update or delete
	function executemodify($query)
	{
		$result_set = @mysql_query($query, myconnection())
			or	die('Query error: ' . mysql_error());		
		return mysql_affected_rows();
	}
?>