<?php

/**
* @version 2.7.0
* @package Joomla 1.5
* @subpackage DT Register
* @copyright Copyright (C) 2006 DTH Development
* @copyright contact dthdev@dthdevelopment.com
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*/
require_once( JPATH_SITE.'/administrator/components/com_dtregister/models/cbprofiler.php');
class DtregisterModelUser extends DtrModel {

   function __construct($config = array()){

       parent::__construct($config);

	   $this->table =  new TableDuser($this->getDBO());

	   $this->defaultfields =  array('firstname','lastname','zip','city','state','phone','email');

	   $this->combinedFields =  array('name'=>array('firstname','lastname'));

	   $this->orderByfields =  array('name'=>array(

	                                                'firstname',

													'lastname'

											 ),

									  'email'=>'email',

									  'date'=>'u.register_date',

									  'event'=>'e.title',

									  'amount'=>'f.fee',

									  'paid'=>'f.status',

									  'attend'=>'u.attend',

									  'members'=>'u.memtot',

									  'due_amount'=>'f.due',

									  'status'=>'u.status',

									  'discount_code'=>'d.code',

									  'confirmNum' =>'u.confirmNum',

									  'type'=>'u.type'

								);

	}

	function orderBYPivot(&$query , $order='name'){

	   	$array = array('name','email');

		$this->fieldNameMap = $this->table->TableUserfield->Tablefield->mapNametoId();

		$fieldNameMap = $this->fieldNameMap;

		if(in_array($order,$array)){

			   $field = $this->orderByfields[$order];

				$orderByJoinSql = " ";

			    if(is_array($field)){

				   foreach($field as $fval){

					   $orderByJoinSql = "";

					   $field_id = $fieldNameMap[$fval];

				   	$orderByJoinSql = " left join ( select value as $fval , user_id from #__dtregister_user_field_values where field_id=$field_id ) orderByJoin{$field_id} on u.userId = orderByJoin{$field_id}.user_id  ";

					$query .= $orderByJoinSql;

				   }

				}else{

				  $field_id = $fieldNameMap[$field];

				   	$orderByJoinSql = " left join ( select value as $field , user_id from #__dtregister_user_field_values where field_id=$field_id ) orderByJoin{$field_id} on u.userId = orderByJoin{$field_id}.user_id  ";

					$query .= $orderByJoinSql;

				}

		}else{
			$field = trim($order);
		   	if(isset($fieldNameMap[$field])){
				    $field_id = $fieldNameMap[$field];
			   		$orderByJoinSql = " left join ( select value as $field , user_id from #__dtregister_user_field_values where field_id=$field_id ) orderByJoin{$field_id} on u.userId = orderByJoin{$field_id}.user_id  ";

					$query .= $orderByJoinSql;
			}
	    }

	}

	function userlistquery($search = array(),$filter_order=" name ",$filter_order_Dir=" asc "){

	    $fieldSelectQuery = $this->table->TableUserfield->pivotFields();

	    $query = "Select SQL_CALC_FOUND_ROWS  u.*, f.* , ju.* , ju.id as user_id ,e.title, f.paid_amount,f.fee , f.status as feestatus , u.status , (f.fee - f.paid_amount) as amount_due from #__dtregister_user u 

	           left join #__dtregister_group_event e on u.eventId = e.slabId  

			   left join #__dtregister_fee f on f.user_id = u.userId

			   left join #__dtregister_codes d on d.id = u.discount_code_id 

			   left join #__users ju on ju.id = u.user_id 

			   "; // left join #__dtregister_user_field_values as uf on uf.user_id = u.userId

			   $this->orderBYPivot($query,trim($filter_order));

		$Andwhere =  array();

	    if(isset($search['eventId'])){

		   	 $Andwhere[] = "e.slabId=".$search['eventId'];

		}

		 if(isset($search['user_id'])){

		   	 $Andwhere[] = "u.user_id=".$search['user_id'];

		}
        if (isset($search['query']) && $search['query']!="") {

		if (get_magic_quotes_gpc()) {

		    $search['query'] = stripslashes( $search['query']);

	    }

		$searchQuery = $this->_db->getEscaped( trim( strtolower( $search['query'] ) ) );

		$searchJoinSql = " inner join ( select distinct user_id from #__dtregister_user_field_values where value like '%".$searchQuery."%' ) searchable on u.userId = searchable.user_id ";

		$query .= $searchJoinSql;

        $Orwhere =  array();

		if (get_magic_quotes_gpc()) {

		    $search['query']	= stripslashes( $search['query']);

	    }

		//$grpByHaving = " having ";

		//$grpByHaving .= $this->searchQuery('u',$searchQuery);

	}
		$where = (count($Andwhere)>0)?" where ".implode(' and ', $Andwhere):'';

		$query .= " $where group  by u.userId ";

		$query .= $this->orderBy($filter_order,$filter_order_Dir);

	    $this->listQuery = $query;

		return  $this->listQuery;

	}

	function getUsers($search = array(),$filter_order=" name ",$filter_order_Dir=" asc ",$limitstart,$limit){

	   	$query = $this->userlistquery($search,$filter_order,$filter_order_Dir);

		$data = $this->table->query($query,$limitstart,$limit);

		if($data){

			$this->attachVirtualFields($data);

		}

		return $data;

	}

	function attachVirtualFields(&$data){

	   	foreach($data as & $row){

			foreach($this->combinedFields as $name=>$fieldnames){

			        $temp = array();

					foreach($fieldnames as $fieldname){
                       if(isset($row->{$fieldname}))
					    $temp[] = $row->{$fieldname};

					}

				$row->{$name} = implode(" ",$temp);

			}

		}

	}

	function searchQuery($prefix="u",$searchQuery=""){

		$condition = array();

		foreach($this->defaultfields as $field){

			$condition[] = " ".$field." like '%{$searchQuery}%'";

	    }

		return implode(" Or ",$condition);

	}

	function orderBy($field=" name " , $direction=" asc "){

		$this->fieldNameMap = $this->table->TableUserfield->Tablefield->mapNametoId();

		$ordByflds =  array();

		if(isset($this->orderByfields[trim($field)])){  

			$dbfields = $this->orderByfields[trim($field)];

		  if(is_array($dbfields)){

			  

			  foreach($dbfields as $field){

				  $field_id = $this->fieldNameMap[$field];

				  if($field_id){

					  $ordByflds[] = "orderByJoin{$field_id}.".$field." ".$direction;

				  }else{

					  $ordByflds[] = $dbfields." ".$direction;

				  }

			  }

		  }elseif(isset($this->fieldNameMap[$field])){
///pr($dbfields);
			  $field_id =  $this->fieldNameMap[$field];

			  if($field_id){

				  $ordByflds[] =  "orderByJoin{$field_id}.".$field." ".$direction;

			  }else{

					$ordByflds[] =  $dbfields." ".$direction; 

			  }

			}else{
			   
			     $ordByflds[] =  $dbfields." ".$direction; 	
			
			}

		}else{
			$field =  trim($field);
            if(isset($this->fieldNameMap[$field])){
///pr($dbfields);
			  $field_id =  $this->fieldNameMap[$field];

			  if($field_id){

				  $ordByflds[] =  "orderByJoin{$field_id}.".$field." ".$direction;

			  }else{

					$ordByflds[] =  $dbfields." ".$direction; 

			  }

			}
			else{
			  $ordByflds[] =  $field." ".$direction;
			}

		}

//pr($ordByflds);
		return (count($ordByflds))?" order by ".implode(", ",$ordByflds):'';

	}

}

class TableJuser extends DtrTable {

	var $id;

	var $email;

	var $username;
	var $name;

	function __construct( &$db = null ) {

		$db = &JFactory::getDBO();

	    parent::__construct( '#__users', 'id', $db );

	}

	function getProfile($user_id=0){

	    global $cb_integrated;

		global $map_cb_fields;

		global $map_jomsocial_fields;

		$models = array('1'=>'cbprofiler',2=>'jomsocial');

		$profileFields = array(1=>'map_cb_fields',2=>'map_jomsocial_fields');
        $this->load($user_id);
		$temp=  array();
		if($cb_integrated > 0){

		  $profile = &DtrModel::getInstance($models[$cb_integrated],'dtregisterModel');

		  $parr = $profile->load($user_id,$this);

		  $this->profile = $profile;

		  $temp = array();
		  $Utable =  new TableDuser($this->_db);
		  $fieldTable = $Utable->TableUserfield->Tablefield;
		  $fieldTable->mfieldType;
		  $fieldTypes = $fieldTable->mfieldType->getTypes();
		  
    	if(is_array($$profileFields[$cb_integrated]))
		  foreach($$profileFields[$cb_integrated] as $dtreg_id => $profile_id){
  
			  if(isset($parr[$profile_id]) && $dtreg_id != ""){
				  $row = $fieldTable->find(' id ='.$dtreg_id);
				  $row = $row[0];
				  
				   if($fieldTypes[$row->type] == 'Dropdown' || $fieldTypes[$row->type] == 'Checkbox' || $fieldTypes[$row->type] == 'Radio' ){                   
						$class = "Field_".$fieldTypes[$row->type];
						$fTble = new $class();
						$fTble->load($row->id);
						$parr[$profile_id] = $fTble->getkeyByValue($parr[$profile_id]);
					   
				   }
				   
				  $temp[$dtreg_id] = $parr[$profile_id];
			  }

		  }
  
		  $this->setName($temp);
		  $this->setEmail($temp);
		}
		
		return $temp;

	}

   function setName(&$temp){
	     global $cb_integrated;
        if($cb_integrated != 2){
			return;
		}
	    $namefields = $this->query("select * from #__dtregister_fields where name='firstname' or name ='lastname'");
         
		$nameparts = explode(" ",$this->name);
		
		$firstname = array_shift($nameparts);
		$lastname = implode(" ",$nameparts);
		if($namefields && is_array($namefields)){
            
		    $firstnamefield = $namefields[0];
            foreach($namefields as $namefield){
				if($namefield->name == 'firstname'){
					$temp[$namefield->id] = $firstname;
				}else{
					$temp[$namefield->id] = $lastname;
				}
			    	
			}
		}	

	}
	

	function setEmail(&$temp){

	    $emailfield = $this->query("select * from #__dtregister_fields where name='email'");

		if($emailfield && isset($emailfield[0])){
           
		    $emailfield = $emailfield[0];

			$temp[$emailfield->id] = $this->email;		

		}	

	}
	
	function optionslist($condition=null,$ordering='name asc '){
		$data = $this->find($condition,$ordering);
		
		 $list = array();
		if($data)
		 foreach($data as $value){ 
		    
			$list[$value->{$this->_tbl_key}] = stripslashes($value->name." (".$value->username.")" );
			
		 }
		 //pr($list);
		 return $list;
	}

}

class TableDuser extends DtrTable {

    var $userId;

	var $eventId;

	var $memtot;

	var $cancel;

	var $paid_amount;

	var $confirmNum;

	var $discount_code_id;

	var $created;

	var $modified;

	var $register_date;

	var $type;

	var $user_id = 0;

	var $attend;

	var $status;
    
	var $transaction_id;

    function __construct( &$db = null ) {

		$db = &JFactory::getDBO();

	    $this->displayField = 'title';

		$this->db =&$db;

	    $this->TableEvent  =& DtrTable::getInstance('Event','Table');

		$this->TableUsergroup  =& DtrTable::getInstance('Usergroup','Table');

		$this->TableUsergroupamount  =& DtrTable::getInstance('Usergroupamount','Table');

		$this->TableUserfield = & DtrTable::getInstance('Userfield','Table');

		$this->TableMember  =& DtrTable::getInstance('Member','Table');

		$this->TableFee  =& DtrTable::getInstance('Fee','Table');

		$this->TableDiscountcode  =& DtrTable::getInstance('Discountcode','Table');

		$this->statustxt =  array(-2=>JText::_('DT_WAITING'),-1=>JText::_('DT_CANCELLED'),0=>JText::_('DT_PENDING'),1=>JText::_('DT_ACTIVE'));
		
		$this->attendtxt =  array(0=>JText::_('DT_NOT_ATTENDED'),1=>JText::_('DT_ATTENDED'));

		$this->TableJUser = & DtrTable::getInstance('Juser','Table');

		parent::__construct( '#__dtregister_user', 'userId', $db );

   }

   function getObjData(){

	   $data = parent::getObjData();

	   unset($data->TableEvent);

	   unset($data->TableUsergroup);

	   unset($data->TableUsergroupamount);

	   unset($data->TableUserfield);

	   unset($data->TableMember);

	   unset($data->TableFee);

	   unset($data->TableDiscountcode);

	   unset($data->TableJUser);

	   return $data;

	}
	
	function delete($id=null){
	    
		$this->TableUserfield->removeByUserId(($id)?$id:$this->userId);
		$this->TableMember->removeByUserId(($id)?$id:$this->userId);
		$this->TableFee->removeByUserId(($id)?$id:$this->userId);
		parent::delete($id);	
	}

   function removeByeventId($eventId=0){
	  
	  $users =  $this->find('eventId='.$eventId);
	  
	  foreach($users as $user){
		  
		  $this->delete($user->userId);
	  }
	   
   }
   function load($id=0){

	   parent::load($id);

	   $date = new JDate($this->register_date);

	   $this->TableEvent->load($this->eventId);

	   $this->fee = $this->TableFee->findByUserId($this->userId);

	   $this->members = $this->TableMember->findByUserId($this->userId);

	   $this->fields = $this->TableUserfield->findByUserId($this->userId);

	   $this->TableDiscountcode->load($this->discount_code_id);

	   if($this->user_id > 0 ){

		   $this->juser = $this->TableJUser->load($this->user_id);

	   }

     }

     function barCodeImg(){
	   
	   global $barCodeImagetypeToExt , $barcode_image_type ,$barcode_enable ;
	   $this->barcodePath = "";
	   if(!$barcode_enable){
		   
		   return '';
	   }else{
           $barcodePath =JURI::root( false )."images/dtregister/barcode/".$this->confirmNum.".".$barcode_image_type;
		   $this->barcodePath = $barcodePath;
           return $barcodeImg = '<img border="0" src="'.$barcodePath.'" />';
  
	   }
	   	
    }

	 function getFieldByName($name=''){

	  //  pr($this->TableUserfield);

		if($name==""){

			return "";   

		} else {

			$rows = $this->TableUserfield->TableField->find(' name="'.$name.'"');

			if($rows){

				$row = $rows[0];

				if(isset($this->fields[$row->id])){

				   return $this->fields[$row->id];

				}else{

				   return "";	

				}

			}else{

			   return "";	

			}	  

		}

	}

	function contact_custom_fields(){

	    $defaultfields =  array('firstname','lastname','zip','city','state','phone','email');

		$contactCustomFields = '';

		foreach($this->fields as $field_id => $dfield){

			 if(is_array($dfield)){

				 $dfield = implode(',',$dfield);	 

			 }

		     $fld = $this->TableUserfield->TableField->find(' id = '.$field_id);

		   	 $fld = $fld[0];

			 if(!in_array($fld->name,$defaultfields)){

				 $contactCustomFields .= $fld->label.': '.$dfield.'<br />';

			 }

		}

		return $contactCustomFields;

	}

	function showRegDate(){

		 return strftime("%Y-%m-%d" , strtotime($this->register_date));

	 }

	 function is_payable(){

	    global $paymentmethod;

		 $arrPaymentMethods=$paymentmethod;

	    if(count($arrPaymentMethods) == 1 && in_array('pay_later',$arrPaymentMethods)){

		  return false;

	    }else{

		   return true;

		}

	}

     function is_editable(){

	   global $now,$paymentmethod;

	   $is_passed = $this->TableEvent->is_passed();

	    $arrPaymentMethods=$paymentmethod;

	    if(count($arrPaymentMethods) == 1 && in_array('pay_later',$arrPaymentMethods)  && !$is_passed){

		 $totamount = $totamount = $this->TableFee->fee;

		 $change_fee = DT_Fee::change_fee($totamount);

		 if($change_fee <= 0){

			return true;

		 }else{

			return false;

		 }

	  }

	   if($this->TableEvent->change_date =="" || $this->TableEvent->change_date =="0000-00-00"){

	     $this->TableEvent->change_date = strtotime($now->toMySQL('%Y-%m-%d')." +1 day");

	  }else{

	     $this->TableEvent->change_date = strtotime($this->TableEvent->change_date.' '.$this->TableEvent->change_time);

	  }

	  if($this->TableEvent->change_date < $now->toUnix(true)){

	      return false;

	  }

	   if($is_passed || $this->TableEvent->is_cutoff($this->TableEvent) || $this->status== -1 || $this->TableEvent->edit_fee==0

	   ){

	     return false;

	   }else{

	     return true;

	   }

	}

    function isCancelable(){

	  global $now ,$paymentmethod;

	  $arrPaymentMethods=$paymentmethod;

	 // $this->TableEvent->resumeGlobal($this->eventId);

	  if($this->status == -1){

	    return false;

	  }
      if(!$this->TableEvent->cancel_enable){
	    return false;
	  }
	  $is_passed = $this->TableEvent->is_passed();

	  if(count($arrPaymentMethods) == 1 && in_array('pay_later',$arrPaymentMethods) && !$is_passed){

	     $totamount = $this->TableFee->fee;

         $cancel_amount = DT_Fee::cancel_fee($totamount);

		 if($cancel_amount <= 0){

		    return true;

		 }else{

		   return false;

		 }

	  }

	  if($this->TableEvent->cancel_date ==""){

	     $this->TableEvent->cancel_date = strtotime($now->toFormat('%Y-%m-%d')." +1 day");

	  }else{

	     $this->TableEvent->cancel_date = strtotime($this->TableEvent->cancel_date.' '.$this->TableEvent->cancel_time);

	  }

	  //echo "<br>".$this->event->cancel_date." > ".strtotime("today")." && ".$this->event->cancelfee_enable." && ".$this->cancel ;

	  if($this->TableEvent->cancel_date >= $now->toUnix(true) && $this->TableEvent->cancel_enable ==1 && $this->status != -1 && !$is_passed){

	     return true; 

	  }else{
         
	     return false;

	  }

	}

   function calculateFee(){

	   if($this->discount_code_id!=""){

		  $this->TableEvent->loadDiscountCode($this->discount_code_id);

	   }

	   $feeObj = new DT_Fee($this->TableEvent,$this);

	   $feeObj->getFee(($this->user_id=="")?false:true,$this->register_date);

	   unset($fee->TableEvent);

	   unset($fee->TableUser);

	   return $feeObj;

   }

   function change($users,$paymentmethod=""){

		$data = $users['User'];

		 $paylater = &DtrModel::getInstance('paylater','dtregisterModel');

		 foreach($data as $key => $row){

             if(!is_array($key) && $key === 'process'){
				 continue;
			 }
			 $row['fee']['payment_method'] = $paymentmethod;

		     $this->save($row);

			 $this->changeemail();

			 $this->{$this->_tbl_key} = "";

		 }

   }

    function cancel($users,$paymentmethod=""){

	    $data = $users['User'];

		 foreach($data as $key=>$row){
              if($key === 'process'){
				 continue;
			 }
			 $row['fee']['payment_method'] = $paymentmethod ;
			 $row['status'] = -1;
		     $this->save($row);

			 $this->cancelemail();

			 $this->{$this->_tbl_key} = "";

		 }

   }

   function duepayment($users,$paymentmethod=""){

	    $data = $users['User'];

		 foreach($data as $key=>$row){
              if( $key === 'process'){
				 continue;
			 }
			 $row['fee']['payment_method'] = $paymentmethod;

		     $this->save($row);

			 $this->duepaymentemail();

			 $this->{$this->_tbl_key} = "";

		 }

   }

   function registerall($users,$paymentmethod=""){
	     
	     $data = $users['User'];
         
		 $paylater = &DtrModel::getInstance('paylater','dtregisterModel');
		 $paylaterkeys = $paylater->getMethodkeys() ;

		 

		 if (is_array($data)) 
		 foreach($data as $userIndex=>$row){
			
			 $row['fee']['payment_method'] = $paymentmethod;

		     if(in_array($paymentmethod,$paylaterkeys)){

			     $row['fee']['paid_amount'] = 0;

				 $row['fee']['paying_amount'] = 0;

				 $row['fee']['paid_fee'] = 0;

			 }
			 if(DT_Session::get('register.payment.transactionId') !== false){
			 	$row['transaction_id'] = DT_Session::get('register.payment.transactionId');
			 }
			
			 $this->register($row);

			// DT_Session::set('register.User.'.$userIndex.'.userId',0);
             DT_Session::set('register.User.'.$userIndex.'.userId',$this->userId);
			 $this->{$this->_tbl_key} = "";
			 $this->TableFee->{$this->TableFee->_tbl_key} = "";

		 }
		
         
   }

   function changeemail(){

	   $this->load($this->userId);

   }

   function cancelemail(){

	   $this->load($this->userId);

   }

   function duepaymentemail(){

	  $this->load($this->userId);

   }

   function registrantemail(){
	   

	  global $subthanksemail , $thanksemail ,$DT_mailfrom ,$DT_fromname;

	  $this->load($this->userId);

	  $Tagparser =  new Tagparser();

	  if($this->TableEvent->thksmsg_set){

		  $thkmsg = $this->TableEvent->thksmsg;   

	  }else{

		  $thkmsg = $thanksemail;

	  }

	 // $Tagparser->parsetags($thkmsg,$this);
      // prd($thkmsg);
	  
	  $groupmsg = $Tagparser->getTagcontent('GROUP_MEMBER',$thkmsg);
	  $usermsg = $Tagparser->replaceTagContent('GROUP_MEMBER',$thkmsg);
	  $messge = $Tagparser->parsetags($usermsg,$this);

	  $subject = $Tagparser->parsetags($subthanksemail,$this);

	  $email = $this->getFieldByName('email');

      $attachments = $this->getAttachments();	  
     
	  // prd($messge);
	 
	  JUTility::sendMail( $DT_mailfrom, $DT_fromname,$email,$subject,$messge,1,null,null,$attachments);

	  if($this->type == 'G'){

		  foreach($this->members as $member){

			   if(!isset($member->email) || $member->email == ""){

				   continue;

			   }

			    $messge =  $Tagparser->parsetags($groupmsg,$member);

				JUTility::sendMail( $DT_mailfrom, $DT_fromname,$member->email,$subject,$messge,1,null,null,$attachments);

		  }

	  }

   }

   function registrationemail(){
	   
	  

	  global $DT_mailfrom , $DT_fromname , $thanksmsg,$admin_registrationemail ,$subject_admin_registrationemail;

      if(isset($this->sendemail)){
		  
		  if($this->sendemail == false){
			 return;
		  }  
	  }
	 
	  $this->load($this->userId);

	  $this->registrantemail();

	  // prd($admin_registrationemail);

	  $Tagparser =  new Tagparser();
      $groupmsg = $Tagparser->getTagcontent('GROUP_MEMBER',$admin_registrationemail);
	  $usermsg = $Tagparser->replaceTagContent('GROUP_MEMBER',$admin_registrationemail);
	  
	  $adminmsg = $Tagparser->parsetags($usermsg,$this);
	  if($this->type == 'G')
	  foreach($this->members as $member){

		    $adminmsg .= $Tagparser->parsetags($groupmsg,$member);

	  }
		
	  // prd($adminmsg);
	  
	  /*require_once(JPATH_SITE."/components/com_dtregister/views/email/view.html.php");

	  $emailview = new DtregisterViewEmail(array());

	  $emailview->assign('user',$this);

	  $emailview->assign('userdata', $Tagparser->userdata($this->userId));

	  $emailview->assign('paymentmethods',$Tagparser->paymentmethods);

	  $emailview->setLayout('registrationadmin');

	   ob_start();

	  $emailview->display();

	  $adminmsg = ob_get_clean();*/
      $adminemails=$this->TableEvent->email;
      $adminemails = explode(";",$adminemails);
	  $subadmin = $Tagparser->parsetags($subject_admin_registrationemail,$this);
      $admin_attachments = $this->getAttachments();

	  foreach( $adminemails as $email){

		   JUTility::sendMail($DT_mailfrom, $DT_fromname,$email,$subadmin,$adminmsg,1,null,null,$admin_attachments);

	  }

   }

   function getAttachments(){

	  $attachments = array();

	  foreach($this->fields as $field_id => $field){

			$this->TableUserfield->Tablefield->load($field_id);

			if($this->TableUserfield->Tablefield->type==7 && $this->TableUserfield->Tablefield->upload){

			   $attachments[] =  addslashes(JPATH_SITE . DS . "images" . DS ."dtregister".DS."uploads".DS.$field);

			}

	  }

	  if(count($this->members))

	  foreach($this->members as $member){

		  foreach($member->fields as $field_id => $field){

			 $this->TableUserfield->Tablefield->load($field_id);

			 if($this->TableUserfield->Tablefield->type==7 && $this->TableUserfield->Tablefield->upload){

			   $attachments[] = addslashes(JPATH_SITE . DS . "images" . DS ."dtregister".DS."uploads".DS.$field);

			 }

	      } 

	  }

	  $attachments = array_unique($attachments);

	  return $attachments;

   }

   function saveAll($users){

	     $data = $users['User'];

		 foreach($data as $row){

			 $this->save($row);

			 $this->{$this->_tbl_key} = "";

		 }

     }

   function register($data){
        
		global $map_jomsocial_fields , $map_cb_fields ,$barcode_enable , $mainframe;
        
		$this->save($data); 
        // prd($this);
		
		if(!isset($data['user_id'])){
			$this->TableEvent->load($data['eventId']);
			
			if($this->TableEvent->usercreation){
			   if(isset($data['username']) && $data['username']!=""){
				   $created = $this->userRegistration($data['username'],$data['password']);
				   if($created ){
					  $data['user_id'] = $created;
				   }
			   }
			}
		   
		}

		JPluginHelper::importPlugin( 'dtregister' );

        $mainframe->triggerEvent( 'OnDtregisterRegistration',array($this));
		if($barcode_enable){
		   $confirmNum = $this->confirmNum;
		   $barcode = new DTbarcode($confirmNum,$confirmNum);
		   	
		}
		$this->registrationemail();

   }
   
   function userRegistration($username,$password){
	    
		  global $cb_integrated;
		  $user = &JFactory::getUser();
		  if($user->id  || $username=="" || $password ==""){
		     return;
		  }
		  $joomlaUser = false;
		  $joomlaUser = $this->createJoomlaUser($username,$password) ;
		  
		   if($cb_integrated ==2){
		      if($joomlaUser){
			     $this->createJomsocilaUser();
			  }
		   }elseif($cb_integrated == 1){
		      if($joomlaUser){
			     $this->createCbUser();
			  }

		  }
	   
	}
	
     function createJoomlaUser($username,$password){
	   global $mainframe,$now;
	   global $map_jomsocial_fields , $map_cb_fields;
	   include_once(JPATH_BASE."/libraries/joomla/database/table/user.php");
       
	   $user 		= clone(JFactory::getUser());
	   $pathway 	=& $mainframe->getPathway();
	   $config		=& JFactory::getConfig();
	   $authorize	=& JFactory::getACL();
	   $document   =& JFactory::getDocument();
	   $usersConfig = &JComponentHelper::getParams( 'com_users' );
	   if ($usersConfig->get('allowUserRegistration') == '0') {
			
		 	return false;
	   }
	   $newUsertype = $usersConfig->get( 'new_usertype' );
	   if (!$newUsertype) {
			$newUsertype = 'Registered';
	   }
	   jimport('joomla.user.helper');
	   $salt  = JUserHelper::genRandomPassword(32);
	   $crypt = JUserHelper::getCryptedPassword($password, $salt);
	   $password = $crypt.':'.$salt;
	   $user->set('id', 0);
	   $user->set('username', $username);
	   $user->set('password', $password);
	   $user->set('usertype', $newUsertype);
	   $user->set('email' , $this->getFieldByName('email'));
	   $user->set('name' , $this->getFieldByName('firstname')." ".$this->getFieldByName('lastname'));
	   $user->set('gid', $authorize->get_group_id( '', $newUsertype, 'ARO' ));

	   $date =& JFactory::getDate();
	   $user->set('registerDate', $now->toMySQL());
      
	   if ( !$user->save() ){
		 
			return false;
		}else{
		    $this->user_id = $user->id;
		    $this->save_field('user_id',$user->id);
			
		    return true;
		}
	   
	}
    
   function createCbUser(){
	    global $map_jomsocial_fields , $map_cb_fields;
		$obj = new stdClass(); 
		$obj->id = $this->user_id ; $obj->user_id = $this->user_id;
		// $profile = &DtrModel::getInstance('cbprofile','dtregisterModel');
		$profile = new DtregisterModelCbprofiler();
		// pr($profile);
		
		$fields = $profile->getFields();
		$temp = array();
		foreach($fields as $field){
		   $temp[$field->fieldid]  = $field->name;
		}
		$fields = $temp;
		
		$fieldTable = DtrTable::getInstance('field','Table');

	  $fieldType = DtrModel::getInstance('Fieldtype','DtregisterModel');

	  $fieldTypes = $fieldType->getTypes();
		
		foreach($map_cb_fields as $DTfield_id=>$cbfield_id){
		   	
			if(isset($this->fields[$DTfield_id])){
			    if($fields[$cbfield_id] == "email") continue;
				
				$fieldTable->load($DTfield_id);
				if(in_array($fieldTable->type,array(1,3,4))){
					 $class = "Field_".$fieldTypes[$fieldTable->type];
					 $exfieldTable =  new $class();
					 $exfieldTable->load($DTfield_id);
					 $this->fields[$DTfield_id] = $exfieldTable->viewHtml((array)$this,null);
					
					 
				}
				
				$obj->{$fields[$cbfield_id]} = $this->fields[$DTfield_id];
					
			}
			
		}
		$obj->approved = 0;
		$obj->confirmed = 0;
		
		$this->_db->insertObject( '#__comprofiler' , $obj );
		 
	}
	
	function createJomsocilaUser(){
	     global $map_jomsocial_fields , $map_cb_fields;
		 $obj = new stdClass();
		
           require_once( JPATH_BASE .  '/components/com_community/libraries/core.php');
						
            $config	=& CFactory::getConfig();
			$obj->userid	= $this->user_id;
    		// Load default params				

		   $obj->params = "notifyEmailSystem=" . $config->get('privacyemail') . "\n"

									 . "privacyProfileView=" . $config->get('privacyprofile') . "\n"

									 . "privacyPhotoView=" . $config->get('privacyphotos') . "\n"

									 . "privacyFriendsView=" . $config->get('privacyfriends') . "\n"

									 . "privacyVideoView=1\n"

									 . "notifyEmailMessage=" . $config->get('privacyemailpm') . "\n"

									 . "notifyEmailApps=" . $config->get('privacyapps') . "\n"

									 . "notifyWallComment=" . $config->get('privacywallcomment') . "\n";
	
            $obj->avatar = 'components/com_community/assets/default.jpg';
			$obj->thumb  = 'components/com_community/assets/default_thumb.jpg';
			$this->_db->insertObject( '#__community_users' , $obj );
			if(!$this->_db->getErrorNum()){

			   $this->saveJomsocialFields();

		    }

   }
   
   function saveJomsocialFields(){

		global $map_jomsocial_fields , $map_cb_fields , $cb_integrated;
		
		$fieldTable =  DtrTable::getInstance('field','Table');
	  $fieldType =  DtrModel::getInstance('Fieldtype','DtregisterModel');
	  $fieldTypes =  $fieldType->getTypes();

		foreach($map_jomsocial_fields  as $DTfield_id=>$jomfield_id){
		   $obj = new stdClass();
		   $obj->field_id = $jomfield_id;
		   $obj->user_id  = $this->user_id;
		   if(isset($this->fields[$DTfield_id])){
			   
			   $fieldTable->load($DTfield_id);
				if(in_array($fieldTable->type,array(1,3,4))){
					 $class = "Field_".$fieldTypes[$fieldTable->type];
					 $exfieldTable =  new $class();
					 $exfieldTable->load($DTfield_id);
					 $this->fields[$DTfield_id] = $exfieldTable->viewHtml((array)$this,null);
					
					 
				}
			   
		     $obj->value = $this->fields[$DTfield_id];
		   }
		   // pr($obj);
		   $this->db->insertObject( '#__community_fields_values' , $obj );
		}
		// prd($obj);
		
	}

   function save($data){
	   
	   // prd($data); exit;

	  global $now , $partial_default_status , $paylater_default_status , $paid_default_status;

	  $my = &JFactory::getUser();

	  if($this->userId == "" && !isset($data['userId'])){

         $this->register_date = $now->toMySQL(true); 
		 $data['register_date'] = $now->toMySQL(true); 
		 
		 if($data['fee']['fee'] > 0){ // not free
			 if($data['fee']['paid_amount'] < $data['fee']['fee'] && $data['fee']['paid_amount'] > 0){ // partial paid
			    $data['status'] = $partial_default_status;
				$data['fee']['status'] = 0 ;
			 }else{// paid
			 	$data['status'] = $paid_default_status;
				$data['fee']['status'] = 1;
			 }
			 if($data['fee']['paid_amount'] < $data['fee']['fee'] && $data['fee']['paid_amount'] == 0){ // paylater
			    $data['status'] = $paylater_default_status;
				$data['fee']['status'] = 0;
			 }
		 }else{ // free 
			$data['status'] = $paid_default_status;
			$data['fee']['status'] = 1;
		 }

	  }
      
	  $data['user_id'] = $my->id;
 	 //prd($data);
	 unset($this->discount_code);
      if(isset($this->sendemail)){
		  $sendemail = $this->sendemail ;
		  unset($this->sendemail);
	   }
	 
	 parent::save($data);
	  if(isset($sendemail)){
		  $this->sendemail = $sendemail  ;
		  
	  }
	  $this->TableUserfield->user_id = $this->userId;

	  $this->TableUserfield->removeByUserId($this->userId);

	  $this->TableUserfield->saveAll($data['fields']);
      $this->fields = $data['fields'];
	  

	  $this->TableMember->groupUserId = $this->userId;

	  if(isset($data['members'])){

	     $this->TableMember->saveAll($data['members']);

	  }

	  $this->TableFee->user_id = $this->userId;
      
	  if(isset($data['fee'])){
         $data['fee']['user_id'] = $this->userId;
	     $this->TableFee->save($data['fee']);
		 
		// pr($this->TableFee);

	  }

   }
  
  function compare($user=array()){
	  
	   $field = $this->TableUserfield->TableField;
	  // pr($field);
	   //pr($user->fields);
	   if($user->memtot != $this->memtot){ pr('member not equal');
		   return false;
	   }
	   if (isset($user->fields)) 
	   foreach($user->fields as $field_id => $value){
		    $field->load($field_id);
			if($field->applychangefee){
				
				if($value == "" && !isset($this->fields[$field_id])){
					$this->fields[$field_id] = "";
			    }
				
				if (isset($this->fields[$field_id])) {
					if($value != $this->fields[$field_id]){ pr($value." not match");
				   		return false;
					}
				}
			}
	   }
	   $Objmember = $this->TableMember;
	   foreach($this->members as $member_id => $member){ 
		   $Objmember->load($member_id);
		   if(!$Objmember->compare($member)){ pr($value." member data not match");
			   return false;  
		   }
		   
	   }
	   return true;
	   //prd($this->fields);
	  
  }
  
  function generateconfirmNum(){

	     global $confirm_number_type , $confirm_number_prefix , $confirm_number_start ;
	   
$x_invoice_num1 = "";
	   if($confirm_number_type=='random'){

	       $chars = "0123456789";

		   srand((double)microtime()*1000000);

			for($i=0; $i<7; $i++){

				$x_invoice_num1 .= $chars[rand()%strlen($chars)];

			}

	   }else{

	       $x_invoice_num1 = $confirm_number_start+1;
		   $config = &DtrModel::getInstance('config','dtregisterModel');
		   $config->setConfig('confirm_number_start',$x_invoice_num1);

	   }

	   return $confirm_number_prefix.$x_invoice_num1;

	}

  function create($data){

    
	  foreach($data as $key=>$value){

		  if($key !="")

		  $this->$key = $value;

	  }

	  if($this->type=="G"){

		  
          if(isset($this->members) && is_array($this->members))
		  foreach($this->members as &$member){

			  $member = (object)$member;

		  }

	  }

  }

}

class TableUsergroup extends DtrTable {

    var $groupId;

	var $useid;

     function __construct( &$db = null ) {

		$db = &JFactory::getDBO();

	    $this->displayField = 'title';

		$this->db =&$db;

		parent::__construct( '#__dtregister_group', 'groupId', $db );

  }

}

class TableUsergroupamount extends DtrTable {

    var $groupId;

	var $numberOfPerson;

	var $amount;

     function __construct( &$db = null ) {

		$db = &JFactory::getDBO();

	    $this->displayField = 'title';

		$this->db =&$db;

		parent::__construct( '#__dtregister_group_amount', 'groupId', $db );

  }

}

class TableUserfield extends DtrTable {

    var $id;

	var $field_id;

	var $user_id;

	var $value;

     function __construct( &$db = null ) {

		$db = &JFactory::getDBO();

		$this->db =&$db;

		$this->Tablefield  =& DtrTable::getInstance('Field','Table');

		$this->TableField  =& $this->Tablefield;

		parent::__construct( '#__dtregister_user_field_values', 'id', $db );

  }

  function removeByUserId($user_id = 0){

	   $query = "delete from ".$this->getTableName()." where user_id = ".$this->db->Quote($user_id)." ";

	   $this->db->setQuery($query);

	   $this->db->query();

  }

  function saveAll($data=array()){

	  $temp =  array();

	  foreach($data as $key => $value){

		if(is_array($value)){

		   $value = implode("|",$value);

	    }

		$temp[] =  array('user_id'=>$this->user_id,'field_id'=>$key,'value'=>$value);  

	  }

	  parent::saveAll($temp);

  }

   function saveAll_migration($data){
	  parent::saveAll($data);
    }

  function findByUserId($user_id=0){

	$data = $this->find(" user_id = $user_id  ");  

	$temp = array();

    if(is_array($data))

	foreach($data as $field){

		$temp[$field->field_id] = $field->value;

    } 

	return $temp;

  }

  function getRegEvent(){

  }

  function checkregEvent($event){

	   global $prerequisite_paid ,$prerequisite_attend;

	   $my = &JFactory::getUser();

	   if(1){    

	   }

  }

  function pivotFields($prefix="uf"){

	 return  $this->Tablefield->pivotFields($prefix);

  }

}

?>