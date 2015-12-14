<?php
$facebook = new Facebook(
    array(
        'appId' => 177711119247242,
        'secret' => b1f742e2fd2e0e69fa1e8de54abba111,
        'cookie' => true,
    )
);
$session = $facebook->getSession();
if (!$session) {
    $wanted_permissions = 'email';
    $url = $facebook->getLoginUrl(array('canvas' => 1, 'fbconnect' => 0, 'req_perms' => $wanted_permissions));
    echo "<script type='text/javascript'>top.location.href = '$url';</script>";
} else {
    try {
        $fbID = $facebook->getUser();
        $me = $facebook->api('/me');
        $email = $me['email'];
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>