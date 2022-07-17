<?php
namespace App\Traits;

trait OrderEmails{
    /** 
     * Description: Sorts them by: 1st Domain name, 2nd name part of the email 
     * Author: David Bores
     * **/
    public function order($emails)
    {
        usort($emails , function($a, $b) {
            //gets the actual & previous Mailbox
            $aMailbox = strstr($a,'@', true);
            $bMailbox = strstr($b,'@', true);
            //gets the actual & previous Domain
            $aDomain = strstr($a,'@');
            $bDomain = strstr($b,'@');
            //Checks if the Domain is different & sets it in the correct order
            if($aDomain < $bDomain)
                return -1;
            else
                //Orders accordingly the mailbox
                return ($aMailbox < $bMailbox) ? -1:1;
          });
        
        //returns the ordered emails
        return $emails;
    }
}