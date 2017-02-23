<?php
    $to = "origination@armitagest.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "You have a message sent from your site";
    $fields = array();
    $fields{"name"} = "Name";
    $fields{"phone"} = "Phone";
    $fields{"email"} = "Email";
    $fields{"hear-about-us"} = "How did you hear about us?";
    $fields{"borrower-name"} = "Borrower Name";
    $fields{"entity-type"} = "Entity Type";
    $fields{"property-information"} = "Property Information";
    $fields{"address-one"} = "Address 1";
    $fields{"address-two"} = "Address 2";
    $fields{"city"} = "City";
    $fields{"state"} = "State";
    $fields{"zip-code"} = "Zip Code";
    $fields{"property-type"} = "Property Type";
    $fields{"purchase-price"} = "Purchase Price";
    $fields{"estimated-renovation-budget"} = "Estimated Renovation Budget";
    $fields{"target-exit-price"} = "Target Exit Price";
    $fields{"type-of-loan"} = "Type of Loan";
    $fields{"notes"} = "Notes";
    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
    $send = mail($to, $subject, $body, $headers);
?>
