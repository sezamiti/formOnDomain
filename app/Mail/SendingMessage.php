<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendingMessage extends Mailable
{
    use Queueable, SerializesModels;


    protected $nameOrganization;
    protected $legalAdress;
    protected $postcode;
    protected $number;
    protected $bankname;
    protected $email;
    protected $bin;
    protected $iik;
    protected $bik;
    protected $responsPerson;
    protected $responsnumber;
    protected $responsemail;
    protected $name;
    protected $domain;
    protected $file;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($legalAdress, $nameOrganization, $postcode, $number, $email, $bankname, $bin, $iik, $bik, $responsPerson, $responsnumber, $responsemail, $name, $domain, $file)
    {
        $this->nameOrganization = $nameOrganization;
        $this->legalAdress = $legalAdress;
        $this->postcode = $postcode;
        $this->number = $number;
        $this->email = $email;
        $this->bankname = $bankname;
        $this->bin = $bin;
        $this->iik = $iik;
        $this->bik = $bik;
        $this->responsPerson = $responsPerson;
        $this->responsnumber = $responsnumber;
        $this->responsemail = $responsemail;
        $this->name = $name;
        $this->domain = $domain;
        $this->file = $file;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {

        $filename = $this->file->store('pdf');
        $upload_folder = 'C:\OSPanel\domains\formOnDomain\storage\app\\' . $filename;
//        dd($upload_folder);


        return $this->from($this->responsemail)->subject('ФОРМА РЕГИТСРАЦИИ С EDU.KZ')->view('send')->with([
            'nameOrganization' => $this->nameOrganization,
            'legalAdress' => $this->legalAdress,
            'postcode' => $this->postcode,
            'number' => $this->number,
            'bankname' => $this->bankname,
            'email' => $this->email,
            'bin' => $this->bin,
            'bik' => $this->bin,
            'iik' => $this->iik,
            'responsPerson' => $this->responsPerson,
            'responsnumber' => $this->responsnumber,
            'responsemail' => $this->responsemail,
            'name' => $this->nameOrganization,
            'domain' => $this->domain,
        ])->attach($upload_folder);
    }
}
