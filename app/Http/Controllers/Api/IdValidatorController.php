<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IdValidatorController extends Controller
{
	public function getCheckDigit(Request $request){
		$no=$request->id_num;
		$tmpno= $this->_fulltohalf($no);
		//if(!preg_match("/([1|5|7][0-9]{6}[(][0-9][)])|([1|5|7][\/][0-9]{6}[\/][0-9])/",$tmpno))
		if(!preg_match("/([1|5|7][0-9]{6}[(][0-9][)])|([1|5|7][0-9]{6}[0-9])/",$tmpno))
			return FALSE;

		$onlynum=preg_replace("/[^0-9]/","",$tmpno);

		$strsplit=str_split($onlynum);

		$num1=$strsplit[0].$strsplit[2].$strsplit[4].$strsplit[6];
		$num2=$strsplit[1].$strsplit[3].$strsplit[5];

		$num1m2=$num1*2;

		$num1split=str_split($num1m2);
		$num2split=str_split($num2);

		$dsum1=0;
		$dsum2=0;
		foreach ($num1split as $key => $value)
			$dsum1 +=$value; 
		foreach ($num2split as $key => $value) 
			$dsum2 +=$value;
		
		$dsum = $dsum1+$dsum2;
		$cd = (10 - ($dsum%10))%10;
		return substr($no, 0, 7).$cd;

	}
    public function verifyId(Request $request)
    {
        //dd($request->all());
        // Define validation rules
        $rules = [
            'id_num' => 'required|string|max:255',
            'id_type' => 'required|in:MO,CN,MPU',
        ];

        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ], 422);
        }

        // Access validated data
        $idNum = $request->input('id_num');
        $idType = $request->input('id_type');

        // Perform your ID validation logic here
		switch ($idType) {
			case 'MO':	// Macau ID
				$isValid = $this->_birm_version_1_0($idNum);
				break;
			case 'CN':	// China ID
				$isValid = $this->_china_id_version_1_0($idNum);
				break;
			case 'MPU':	// MPU ID
				$isValid = $this->_ipm_student_id_version_1_0($idNum);
				break;
			default:	// Invalid type
				$isValid = false;	// Set to false
				break;
		}
		return $isValid;
		// return response()->json([
        //     'id' => $id,
        //     'type' => $type,
        //     'is_valid' => $isValid,
        // ]);
    }

	function _fulltohalf($no){
		$full=array("０","１","２","３","４","５","６","７","８","９","／","（","）","Ｘ","ｘ","Ｐ","ｐ","Ｃ","ｃ","－");
		$half=array("0","1","2","3","4","5","6","7","8","9","/","(",")","X","x","P","p","C","c","-");
		return str_replace($full,$half,$no);
	}

	function _hongkong_id_version_1($no){
		$tmpno= $this->_fulltohalf($no);
		if(!preg_match("/^[A-Z]{1,2}[0-9]{6}[A0-9]{1}/",$tmpno))
			return false;

		$strsplit=str_split(strrev($tmpno));
		$sum=0;
		(strlen($tmpno)==9)?$sum = (ord($strsplit[8])-55)*9:$sum=58*9;
		$sum += (ord($strsplit[7])-55)*8;
		for($i=1; $i<=6;$i++){
			$sum +=$strsplit[$i]*($i+1);
		}

		//Edit by fong :2021/02/25
		// $checkdigit = 11-($sum%11);
		if( ($sum%11)==0 ){
			$checkdigit = 0;
		}else{
			$checkdigit = 11-($sum%11);
		}
		//Edit

		if ($checkdigit==10)
			$checkdigit='A';

		return $checkdigit == $strsplit[0];

	}

	function _student_id_version_1_0($no)
	{
		$tmpno= $this->_fulltohalf($no);
		if(!preg_match("/[Cc][-][0-9]{2}[-][0-9]{4}[-][0-9]/",$tmpno))
			return false;

		$onlynum=preg_replace("/[^0-9]/","",$tmpno);
		$strsplit=str_split($onlynum);
		$num=0;
		for($i=1;$i<count($strsplit);$i++)
			$num += $strsplit[$i-1]*$i;
		$num = 11 - $num % 11;
		if($num>9)
			$num=0;


		if(strtoupper($strsplit[6]) == $num)
			return true;
		return false;
	}
	function _birm_version_1_0($no)
	{
		$tmpno= $this->_fulltohalf($no);
		//if(!preg_match("/([1|5|7][0-9]{6}[(][0-9][)])|([1|5|7][\/][0-9]{6}[\/][0-9])/",$tmpno))
		if(!preg_match("/([1|5|7][0-9]{6}[(][0-9][)])|([1|5|7][0-9]{6}[0-9])/",$tmpno))
			return FALSE;

		$onlynum=preg_replace("/[^0-9]/","",$tmpno);

		$strsplit=str_split($onlynum);

		$num1=$strsplit[0].$strsplit[2].$strsplit[4].$strsplit[6];
		$num2=$strsplit[1].$strsplit[3].$strsplit[5];

		$num1m2=$num1*2;

		$num1split=str_split($num1m2);
		$num2split=str_split($num2);

		$dsum1=0;
		$dsum2=0;
		foreach ($num1split as $key => $value)
			$dsum1 +=$value; 
		foreach ($num2split as $key => $value) 
			$dsum2 +=$value;
		
		$dsum = $dsum1+$dsum2;
		$cd = (10 - ($dsum%10))%10;
		if($cd == $strsplit[7])
			return TRUE;
		return FALSE;
	}
	function _china_id_version_1_0($no)
	{
  		$table = array("1", "0", "X", "9", "8", "7", "6", "5", "4", "3", "2");
		$wi = array( 7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
		$tmpno= $this->_fulltohalf($no);
		if(!preg_match("/[0-9]{17}[0-9Xx]/",$tmpno))
			return false;

		$strsplit=str_split($tmpno);
		$num=0;
		for($i=0;$i<count($strsplit)-1;$i++){
			$num += $strsplit[$i]*$wi[$i];
		}
		$num = $num % 11;
		if(strtoupper($strsplit[17]) == $table[$num])
			return true;
		return false;
	}

	function _ipm_student_id_version_1_0($no)
	{
		$table = array("1","3","7","1","3","7");
		$tmpno= $this->_fulltohalf($no);
		if(!preg_match("/[Pp][-][0-9]{2}[-][0-9]{4}[-][0-9]/",$tmpno))
			return false;

		$onlynum=preg_replace("/[^0-9]/","",$tmpno);
		$strsplit=str_split($onlynum);
		$num=0;
		for($i=0;$i<count($strsplit)-1;$i++)
			$num += $strsplit[$i]*$table[$i];
		$num = 13 - ($num % 13);

		if($num>9)
			$num=$num-10;

		if(strtoupper($strsplit[6]) == $num)
			return true;
		return false;	
	}	

}