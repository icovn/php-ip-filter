# php-ip-filter
Small lib to check if a IP is in multiple range or not

Example: <br/>
$filter = new IpFilter(array('10.22.0.0 255.255.0.0','10.24.0.0 255.255.0.0','10.26.0.0 255.255.0.0','10.28.0.0 255.255.0.0')); <br/>
$result = $filter -> check('10.28.255.1');
