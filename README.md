# php-ldap
php ldap connect and authen active directory

## Connect Active Directory

### connect Active Directory read attribute `memberOf` for authen authorize role

## Quick test 

````
php -S 0.0.0.0:7000
````
## URL 
````
http://localhost:7000/get-member.php
````

## Results
````
Array
(
    [count] => 4
    [0] => CN=Domain Admins,CN=Users,DC=example,DC=com
    [1] => CN=Network Configuration Operators,CN=Builtin,DC=example,DC=com
    [2] => CN=Remote Desktop Users,CN=Builtin,DC=example,DC=com
    [3] => CN=Administrators,CN=Builtin,DC=example,DC=com
)
````

## Test on php 7.3.28

````
Microsoft Windows [Version 10.0.19044.1466]
(c) Microsoft Corporation. All rights reserved.

C:\Users\admin>php -v
PHP 7.3.28 (cli) (built: Apr 27 2021 17:19:33) ( ZTS MSVC15 (Visual C++ 2017) x64 )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.3.28, Copyright (c) 1998-2018 Zend Technologies

C:\Users\admin>
````
