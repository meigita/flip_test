<?php 
include 'config.php';

class database{


	private $username = DBUSER;
	private $password = DBPASS;
	private $database = DBNAME;
	private $host = DBHOST;
	
	function __construct(){
		$this->connection = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Database connection failed : " . mysqli_connect_error();
		}
	}


	function getId()
	{
		$query = "select max(id)  as id from T_Disbursement ";
		$data = mysqli_query($this->connection,$query);
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
		mysqli_close($this->connection);
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

		$query = "insert into T_Disbursement (id,amount,status,timestamp,bank_code,account_number,beneficiary_name,remark,receipt,time_served,fee) " .
		" values('$id','$amount','$status','$timestamp','$bank_code','$account_number','$beneficiary_name','$remark','$receipt','$time_served','$fee')";

		mysqli_query($this->connection,$query);
		mysqli_close($this->connection);
	}
	
	function UpdateData($response)
	{
		$obj = json_decode($response);
		$id = $obj->{'id'};
		$status = $obj->{'status'};
		$receipt = $obj->{'receipt'};
		$time_served = $obj->{'time_served'};
		$query = "update T_Disbursement set status = '$status', receipt = '$receipt', time_served = '$time_served' where id='$id'";
		mysqli_query($this->connection, $query);
		mysqli_close($this->connection);
	}
}

?>