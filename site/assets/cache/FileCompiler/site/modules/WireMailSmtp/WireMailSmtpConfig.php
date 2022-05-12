<?php
/*******************************************************************************
  *  WireMailSmtp
  *
  * ---------------------------------------------------------------------------
  *  @version     -   '0.1.8'
  *  @date        -   $Date: 2014/03/14 20:09:23 $
  *  @author      -   Horst Nogajski
  *  @licence     -   GNU GPL v2 - http://www.gnu.org/licenses/gpl-2.0.html
  * ---------------------------------------------------------------------------
  *  $Source: /WEB/pw4/htdocs/site/modules/WireMailSmtp/WireMailSmtpConfig.php,v $
  *  $Id: WireMailSmtpConfig.php,v 1.7 2014/03/14 20:09:23 horst Exp $
  ******************************************************************************
  *
  *  LAST CHANGES:
  *
**/



class WireMailSmtpConfig extends \ProcessWire\Wire {

	public function getConfig(array $data) {

		// check that they have the required PW version
		if(version_compare(\ProcessWire\wire('config')->version, '2.4.1', '<')) {
			$this->error(" requires ProcessWire 2.4.1 or newer. Please update.");
		}

		$modules = \ProcessWire\wire('modules');
		$form = new \ProcessWire\InputfieldWrapper();

//	    // special handling for SMTP password
//	    // seen by @teppo's SwiftMailer
//	    if(isset($data['smtp_password2'])) {
//	        $data['smtp_password'] = $data['smtp_password2'];
//	        unset($data['smtp_password2'], $data['clear_smtp_password']);
//	        \ProcessWire\wire('modules')->saveModuleConfigData('WireMailSmtp', $data);
//	    }
//	    elseif(isset($data['clear_smtp_password']) && $data['clear_smtp_password']) {
//	        unset($data['smtp_password'], $data['smtp_password2'], $data['clear_smtp_password']);
//	        \ProcessWire\wire('modules')->saveModuleConfigData('WireMailSmtp', $data);
//	    }
//	    else {
//			unset($data['smtp_password2'], $data['clear_smtp_password']);
//			\ProcessWire\wire('modules')->saveModuleConfigData('WireMailSmtp', $data);
//	    }

		$field = $modules->get("InputfieldText");
		$field->attr('name', 'localhost');
		$field->attr('value', $data['localhost']);
		$field->label = \ProcessWire\__('local Hostname');
		$field->description = \ProcessWire\__('this computer address (server_name or http_host)');
		$field->required = true;
		$form->add($field);


		$fieldset = $modules->get('InputfieldFieldset');
		$fieldset->label = \ProcessWire\__('SMTP Server');
		$fieldset->attr('name', '_smtp');
		$fieldset->collapsed = \ProcessWire\Inputfield::collapsedNo;

			$field = $modules->get("InputfieldText");
			$field->attr('name', 'smtp_host');
			$field->attr('value', $data['smtp_host']);
			$field->label = \ProcessWire\__('SMTP Hostname');
			$field->description = \ProcessWire\__('Set to the host name of the SMTP server to which you want to relay the messages');
			$field->columnWidth = 40;
			$field->required = true;
			$fieldset->add($field);

			$field = $modules->get("InputfieldInteger");
			$field->attr('name', 'smtp_port');
			$field->attr('value', $data['smtp_port']);
			$field->label = \ProcessWire\__('SMTP Port');
			$field->description = \ProcessWire\__('Set to the TCP port of the SMTP server host to connect');
			$field->notes = \ProcessWire\__("default: 25\ndefault for TLS / SSL: 587 or 465");
			$field->columnWidth = 20;
			$field->required = true;
			$fieldset->add($field);

			$field = $modules->get('InputfieldCheckbox');
			$field->attr('name', 'smtp_start_tls');
			$field->attr('value', 1);
			$field->attr('checked', $data['smtp_start_tls'] ? 'checked' : '');
			$field->columnWidth = 20;
			$field->label = \ProcessWire\__('use START_TLS');
			$field->description = \ProcessWire\__('Check if the connection to the SMTP server should use encryption after the connection is established using TLS protocol');
			$fieldset->add($field);

			$field = $modules->get('InputfieldCheckbox');
			$field->attr('name', 'smtp_ssl');
			$field->attr('value', 1);
			$field->attr('checked', $data['smtp_ssl'] ? 'checked' : '');
			$field->columnWidth = 20;
			$field->label = \ProcessWire\__('use SSL');
			$field->description = \ProcessWire\__('Check if the SMTP server requires secure connections using SSL protocol');
			$fieldset->add($field);

			$field = $modules->get("InputfieldText");
			$field->attr('name', 'smtp_user');
			$field->attr('value', $data['smtp_user']);
			$field->label = \ProcessWire\__('SMTP user');
			$field->description = \ProcessWire\__('Set this variable to the user name when the SMTP server requires authentication');
			$field->columnWidth = 50;
			$fieldset->add($field);

			$field = $modules->get("InputfieldText");
			$field->attr('name', 'smtp_password');
			$field->attr('value', $data['smtp_password']);
			$field->attr('type', 'password');
			$field->label = \ProcessWire\__('SMTP password');
			$field->description = \ProcessWire\__('Set this variable to the user password when the SMTP server requires authentication');
			$field->notes = \ProcessWire\__("Note: password is stored as plain text in database.");
			$field->columnWidth = 50;
			$fieldset->add($field);

			// @flydev: https://processwire.com/talk/topic/5704-wiremailsmtp/page-5#entry113290
			if(version_compare(phpversion(), '5.6.0', '>=')) {
				$field = $modules->get('InputfieldCheckbox');
				$field->attr('name', 'smtp_certificate');
				$field->label = \ProcessWire\__('PHP >= 5.6 - Allow self signed certificate');
				$field->attr('value', $data['smtp_certificate']);
				$field->attr('checked', $data['smtp_certificate'] ? 'checked' : '');
				$fieldset->add($field);
			}

//	        $field = $modules->get("InputfieldCheckbox");
//	        $field->name = "clear_smtp_password";
//	        $field->label = \ProcessWire\__("Clear password?");
//	        $field->notes = \ProcessWire\__("Check and save form to clear stored password.");
//	        $field->columnWidth = 20;
//	        $fieldset->add($field);

			$fieldset2 = $modules->get('InputfieldFieldset');
			$fieldset2->label = \ProcessWire\__('advanced_SMTP');
			$fieldset2->attr('name', '_advanced_SMTP');
			$fieldset2->collapsed = \ProcessWire\Inputfield::collapsedYes;

				$field = $modules->get("InputfieldText");
				$field->attr('name', 'authentication_mechanism');
				$field->attr('value', $data['authentication_mechanism']);
				$field->label = \ProcessWire\__('authentication_mechanism');
				$field->description = \ProcessWire\__("Force the use of a specific authentication mechanism \ndefault: empty");
				#$field->notes = \ProcessWire\__('description');
				$field->columnWidth = 33;
				$fieldset2->add($field);

				$field = $modules->get("InputfieldText");
				$field->attr('name', 'realm');
				$field->attr('value', $data['realm']);
				$field->label = \ProcessWire\__('realm');
				$field->description = \ProcessWire\__("Set this variable when the SMTP server requires authentication and if more than one authentication realm is supported");
				#$field->description = \ProcessWire\__('description');
				$field->columnWidth = 34;
				$fieldset2->add($field);

				$field = $modules->get("InputfieldText");
				$field->attr('name', 'workstation');
				$field->attr('value', $data['workstation']);
				$field->label = \ProcessWire\__('workstation');
				$field->description = \ProcessWire\__("Set this variable to the client workstation when the SMTP server requires authentication identifiying the origin workstation name");
				#$field->description = \ProcessWire\__('description');
				$field->columnWidth = 33;
				$fieldset2->add($field);

			$fieldset->add($fieldset2);

		$form->add($fieldset);



		$fieldset = $modules->get('InputfieldFieldset');
		$fieldset->label = \ProcessWire\__('Sender');
		$fieldset->attr('name', '_sender');
		$fieldset->collapsed = \ProcessWire\Inputfield::collapsedNo;

			$field = $modules->get("InputfieldText");
			$field->attr('name', 'sender_email');
			$field->attr('value', $data['sender_email']);
			$field->label = \ProcessWire\__('Sender Emailaddress');
			$field->description = \ProcessWire\__('');
			$field->columnWidth = 50;
			#$field->required = true;
			$fieldset->add($field);

			$field = $modules->get("InputfieldText");
			$field->attr('name', 'sender_name');
			$field->attr('value', $data['sender_name']);
			$field->label = \ProcessWire\__('Sender Name');
			$field->description = \ProcessWire\__("");
			$field->columnWidth = 50;
			$fieldset->add($field);

			$field = $modules->get("InputfieldText");
			$field->attr('name', 'sender_reply');
			$field->attr('value', $data['sender_reply']);
			$field->label = \ProcessWire\__('Reply Emailaddress');
			$field->description = \ProcessWire\__('if is empty, Sender Emailaddress is used');
			$field->columnWidth = 50;
			$field->collapsed = \ProcessWire\Inputfield::collapsedYes;
			$fieldset->add($field);

			$field = $modules->get("InputfieldText");
			$field->attr('name', 'sender_errors_to');
			$field->attr('value', $data['sender_errors_to']);
			$field->label = \ProcessWire\__('Errors Emailaddress');
			$field->description = \ProcessWire\__("");
			$field->notes = \ProcessWire\__('default: empty');
			$field->columnWidth = 50;
			$field->collapsed = \ProcessWire\Inputfield::collapsedYes;
			$fieldset->add($field);

			$field = $modules->get("InputfieldTextarea");
			$field->attr('name', 'sender_signature');
			$field->attr('value', $data['sender_signature']);
			$field->label = \ProcessWire\__('Sender Signature');
			$field->description = \ProcessWire\__('like Contact Data and / or Confidentiality Notices');
			$field->columnWidth = 36;
			$fieldset->add($field);

			$field = $modules->get("InputfieldTextarea");
			$field->attr('name', 'sender_signature_html');
			$field->attr('value', $data['sender_signature_html']);
			$field->label = \ProcessWire\__('Sender HTML-Signature');
			$field->description = \ProcessWire\__('like Contact Data and / or Confidentiality Notices');
			$field->columnWidth = 36;
			$fieldset->add($field);

			$field = $modules->get("InputfieldSelect");
			$field->attr('name', 'send_sender_signature');
			$field->attr('value', $data['send_sender_signature']);
			$field->label = \ProcessWire\__('Send SenderSignature');
	        	$field->addOptions(array(
	            		'1' => 'only when explicitly called via API',
	            		'2' => 'automaticaly when FROM = Sender Emailaddress',
	            		'3' => 'automaticaly with _every_ Message'
	        	));
			$field->description = \ProcessWire\__('when the Signature should be send by default, - (could be overriden by the API)');
			$field->columnWidth = 28;
			$fieldset->add($field);

		$form->add($fieldset);


		$fieldset = $modules->get('InputfieldFieldset');
		$fieldset->label = \ProcessWire\__('Advanced');
		$fieldset->attr('name', '_advanced');
		$fieldset->collapsed = \ProcessWire\Inputfield::collapsedYes;

			$field = $modules->get("InputfieldTextarea");
			$field->attr('name', 'valid_recipients');
			$field->attr('value', $data['valid_recipients']);
			$field->label = \ProcessWire\__('Valid Recipients');
			$field->description = \ProcessWire\__('Enter a list of email addresses (1 per line) that can receive messages');
			$field->columnWidth = 50;
			$fieldset->add($field);

			$field = $modules->get("InputfieldTextarea");
			$field->attr('name', 'extra_headers');
			$field->attr('value', $data['extra_headers']);
			$field->label = \ProcessWire\__('Extra Headers');
			$field->description = \ProcessWire\__('optionally define Custom-Meta-Headers here (1 per line)');
			$field->columnWidth = 50;
			$fieldset->add($field);

//			$field = $modules->get("InputfieldText");
//			$field->attr('name', 'user_agent');
//			$field->attr('value', $data['user_agent']);
//			$field->label = \ProcessWire\__('User-Agent');
//			$field->notes = \ProcessWire\__("Set the user agent used when connecting via an HTTP proxy");
//			#$field->columnWidth = 50;
//			$fieldset->add($field);

		$form->add($fieldset);


		$field = $modules->get('InputfieldCheckbox');
		$field->attr('name', '_test_settings');
		$field->label = \ProcessWire\__('Test settings now');
		$field->attr('value', 1);
		$field->attr('checked', '');
		$form->add($field);

		if(\ProcessWire\wire('session')->test_settings) {
			\ProcessWire\wire('session')->remove('test_settings');
			$field->notes = $this->testSettings();

		} else if(\ProcessWire\wire('input')->post->_test_settings) {
			\ProcessWire\wire('session')->set('test_settings', 1);
		}

		return $form;
	}


	public function testSettings() {

		$errors = array();
		$success = false;
		$module = \ProcessWire\wire('modules')->get('WireMailSmtp');

		try {
			$a = $module->getAdaptor();
			$success = $a->testConnection();

		} catch(Exception $e) {
			$errors[] = $e->getMessage();
		}

		if($success) {
			$note = $this->_('SUCCESS! SMTP settings appear to work correctly.');
			$this->message($note);
		} else {
			$note = $this->_('ERROR: SMTP settings did not work.');
			$this->error($note);
			foreach($a->getErrors() as $error) $this->error($error);
		}

		return $note;
	}

}
