<?php 
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "disburse";
	var $connection = "";
	
	function __construct(){
		$this->connection = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Database connection failed : " . mysqli_connect_error();
		}
	}


	function getId()
	{
		$data = mysqli_query($this->connection,"select * from T_Disbursement Limit 1");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function InsertData($response)
	{
		$obj = json_decode($response);	
		$id = $obj->{'id'};
		$amount = $obj->{'amount'};
		$status = $obj->{'status'};
		$timestamp = $obj->{'timestamp'};
		$bank_code = $obj->{'bank_code'};
		$account_number = $obj->{'account_number'};
		$beneficiary_name = $obj->{'beneficiary_name'};
		$remark = $obj->{'remark'};
		$receipt = $obj->{'receipt'};
		$time_served = $obj->{'time_served'};
		$fee = $obj->{'fee'};

		mysqli_query($this->connection,"insert into T_Disbursement values('$id','$amount','$status','$timestamp','$bank_code','$account_number','$beneficiary_name','$remark','$receipt','$time_served','$fee')");

	}
	
	function UpdateData($response)
	{
		$obj = json_decode($response);
		$id = $obj->{'id'};
		$status = $obj->{'status'};
		$receipt = $obj->{'receipt'};
		$time_served = $obj->{'time_served'};
		mysqli_query($this->connection,"update T_Disbursement set status = '$status', receipt = '$receipt', time_served = '$time_served' where id='$id'");
	}
}

?>