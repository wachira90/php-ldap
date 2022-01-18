<?php
$adServer = "ldap://172.16.1.50/";
//$adServerSSL = "ldaps://172.16.1.50/";
$ldapport = 389;
//$ldapportSSL = 636;

$username = "admininno";
$password = "1234";
$domain = "EXAMPLE";
$dc = "COM";

$ldap = ldap_connect($adServer, $ldapport)  or die("Could not connect to $ldaphost");

$ldaprdn = $domain . "\\" . $username;
ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);
$bind = @ldap_bind($ldap, $ldaprdn, $password);

if ($bind) {
    $filter = "(sAMAccountName=$username)";
    $result = ldap_search($ldap, "dc={$domain},dc={$dc}", $filter);
    // ldap_sort($ldap, $result, "sn");
    $info = ldap_get_entries($ldap, $result);

    echo "<pre>";
    // print_r($info);
    print_r($info[0]);
    // print_r($info[0]['memberof'][2]);
    // print_r($info[0]['flags'][0]);

    @ldap_close($ldap);
} else {
    $msg = "Invalid email address / password";
    echo $msg;
}
