<?php
    $to = "jagawebdev@gmail.com"; 
    $from = $_REQUEST['email']; 
    $name = $_REQUEST['name']; 
    $headers = "From: $from"; 
    $subject = "You have a message sent from your site"; 
    $fields = array(); 
    $fields{"name"} = "name"; 
    $fields{"phone"} = "phone";
    $fields{"email"} = "email"; 
    $fields{"hear-about-us"} = "hear-about-us";
    $fields{"borrower-name"} = "borrower-name";
    $fields{"entity-type"} = "entity-type";
    $fields{"property-information"} = "property-information";
    $fields{"address-one"} = "address-one";
    $fields{"address-two"} = "address-two";
    $fields{"city"} = "city";
    $fields{"state"} = "state";
    $fields{"zip-code"} = "zip-code";
    $fields{"property-type"} = "property-type";
    $fields{"purchase-price"} = "purchase-price";
    $fields{"estimated-renovation-budget"} = "estimated-renovation-budget";
    $fields{"target-exit-price"} = "target-exit-price";
    $fields{"type-of-loan"} = "type-of-loan";
    $fields{"notes"} = "notes";
      $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }
    $send = mail($to, $subject, $body, $headers);
?>