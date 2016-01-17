# php-ip-filter
Small lib to check if a IP is in multiple range or not

Example: <br/>
$filter = new IpFilter('10.28.0.0 255.255.0.0', '192.168.0.0 255.255.0.0', '170.28.0.0 255.255.0.0'); <br/>
$result = $filter -> check('10.28.255.1');
