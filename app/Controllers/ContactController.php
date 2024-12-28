<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ContactModel;

class ContactController extends BaseController
{
    protected $helpers = ["form","url"];
	
	public function __construct() {
        $this->session = \Config\Services::session();
        $this->session->start();
        $db = db_connect();
        }
    
    public function ViewContactDetails()
    {
        return view('Admin/ViewContactDetails');
    }
    
    public function ContactProcess()
    {
         $editId=(!empty($_POST['editId'])) ? $_POST['editId'] : "";
         $validation = \Config\Services::validation();
        
            // Insert Contact
            $validationRules = [
                'name'    => 'required|regex_match[/^[a-zA-Z ]+$/]',
                'email' => 'required|regex_match[/^[a-zA-Z0-9._%+-]+@gmail\.com$/]',
				'phone_no'=> 'required|regex_match[/^\d{10}$/]',
				'subject' => 'required',
                'enquiry' => 'required'
            ];
            $validationMessages = [
                'name' => [
                'required'    => 'Please Enter Name',
				'regex_match'   => 'Name should only contain letters and spaces',
                ],
                'email' => [
                'required'    => 'Please Enter Email',
				'regex_match'   => 'Email must be in valid format.',
                ],
				'phone_no' => [
                'required' => 'Please Enter Phone Number',
				'regex_match'   => 'Phone Number Must Be Exactly 10 Digits',
                ],
				'subject' => [
                'required'    => 'Please Enter Subject'
                ],
                'enquiry' => [
                'required'    => 'Please Enter Message'
                ]
            ];
            
            $validation->setRules($validationRules, $validationMessages);
        
            if ($this->request->getMethod() === 'post' && $validation->withRequest($this->request)->run()) 
            {
					$contactData = array(
                        'name'        => $_POST['name'],
                        'email'       => $_POST['email'],
						'phone_no'    => $_POST['phone_no'],
						'subject'     => $_POST['subject'],
                        'enquiry'     => $_POST['enquiry']
                    );
                    
                    $ContactModel = new ContactModel();
                    $ContactModel->insertContact($contactData);
                    
                    // $email = \Config\Services::email();
                    // $email->setTo('nikitananaware1010@gmail.com');
                    // $email->setFrom('swayambhoodev@gmail.com', 'Prasad Sir');
                    // //  krupalisitsolutuins@gmail.com
                    // $email->setSubject('Enquiry Submitted Successfully');
                    // $email->setMessage('Your enquiry has been submitted successfully.');
            
                    // if ($email->send()) {
                    //     echo "Email sent successfully!";
                    // } else {
                    //     echo "Email sending failed!<br>";
                    //     echo $email->printDebugger(['headers']);
                    // }
                    
                        // $to = "nikitananaware1010@gmail.com";
                        // $subject = "Test Email";
                        // $message = "This is a test email sent using PHP's mail() function.";
                        // $headers = "From: swayambhoodev@gmail.com\r\n" .
                        //           "Reply-To: swayambhoodev@gmail.com\r\n" .
                        //           "X-Mailer: PHP/" . phpversion();
                        
                        // if (mail($to, $subject, $message, $headers)) {
                        //     echo "Email sent successfully!";die;
                        // } else {
                        //     echo "Failed to send email!";die;
                        // }
                    
                    $enquiryMsg = "Your Enquiry Submitted Successfully.";
                    session()->set('enquiryMsg',$enquiryMsg);
                    return $this->response->redirect(base_url('ContactUs'));
                
            }else 
            {
                return view('ContactUs', ['validation' => $validation]);
            }
            
            return view('ContactUs');
    }
    
    public function ViewContact()
    {
        $ContactModel    = new ContactModel();
        $data['contactD'] = $ContactModel->getContactList();
        return view('Admin/ViewContactDetails',$data);
    }
    
}