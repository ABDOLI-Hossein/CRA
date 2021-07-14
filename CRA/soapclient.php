<?php
        public function SendSMS()
        {
            // Check credit for the gateway
            if (!$this->GetCredit()) {
                return;
            }
            try {
                $client = new SoapClient($this->wsdl_link);
                $parameters['username'] = $this->username;
                $parameters['password'] = $this->password;
                $parameters['from'] = $this->from;
                $parameters['to'] = $this->to;
                $parameters['text'] = $this->msg;
                $parameters['isflash'] = $this->isflash;
                $parameters['udh'] = "";
                $parameters['recId'] = array(0);
                $parameters['status'] = 0x0;
                $return = '';
                $return .= $client->SendSms($parameters)->SendSmsResult;
                $return .= $status;
                $this->InsertToDB($this->from, $this->msg, $this->to);
                $this->Hook('wp_sms_send', $result);
                return $return;
            } catch (SoapFault $ex) {
                return $ex->faultstring;
            }
        };



$api = new SoapClient('http://www.tsms.ir/soapWSDL/?wsdl');
//sample send sms
$username='Shahabtousheh';
$password='88228822';
$mobile_array=array('09123456352');//حداکثر 100 شماره موبایل
$msg_array=array('test');
$sms_number_array=array('3000738');
$messagid=rand();
$mclass=array('');
$rezult=$api->sendSms($username,$password,$sms_number_array,$mobile_array,$msg_array,$mclass,$messagid);

