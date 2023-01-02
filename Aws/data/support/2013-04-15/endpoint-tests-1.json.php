<?php
// This file was auto-generated from sdk-root/src/data/support/2013-04-15/endpoint-tests-1.json
return [ 'testCases' => [ [ 'documentation' => 'For region aws-cn-global with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'signingRegion' => 'cn-north-1', 'signingName' => 'support', 'name' => 'sigv4', ], ], ], 'url' => 'https://support.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'aws-cn-global', 'UseDualStack' => false, ], ], [ 'documentation' => 'For region aws-global with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'signingRegion' => 'us-east-1', 'signingName' => 'support', 'name' => 'sigv4', ], ], ], 'url' => 'https://support.us-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'aws-global', 'UseDualStack' => false, ], ], [ 'documentation' => 'For region aws-iso-global with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'signingRegion' => 'us-iso-east-1', 'signingName' => 'support', 'name' => 'sigv4', ], ], ], 'url' => 'https://support.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'aws-iso-global', 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://support-fips.us-gov-west-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'Region' => 'us-gov-west-1', 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://support.us-gov-west-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'Region' => 'us-gov-west-1', 'UseDualStack' => false, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://support.us-gov-west-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'us-gov-west-1', 'UseDualStack' => true, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://support.us-gov-west-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'us-gov-west-1', 'UseDualStack' => false, ], ], [ 'documentation' => 'For region aws-iso-b-global with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'signingRegion' => 'us-isob-east-1', 'signingName' => 'support', 'name' => 'sigv4', ], ], ], 'url' => 'https://support.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'aws-iso-b-global', 'UseDualStack' => false, ], ], [ 'documentation' => 'For region aws-us-gov-global with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'properties' => [ 'authSchemes' => [ [ 'signingRegion' => 'us-gov-west-1', 'signingName' => 'support', 'name' => 'sigv4', ], ], ], 'url' => 'https://support.us-gov-west-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'aws-us-gov-global', 'UseDualStack' => false, ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'UseFIPS' => false, 'Region' => 'us-east-1', 'UseDualStack' => false, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => [ 'error' => 'Invalid Configuration: FIPS and custom endpoint are not supported', ], 'params' => [ 'UseFIPS' => true, 'Region' => 'us-east-1', 'UseDualStack' => false, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => [ 'error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported', ], 'params' => [ 'UseFIPS' => false, 'Region' => 'us-east-1', 'UseDualStack' => true, 'Endpoint' => 'https://example.com', ], ], ], 'version' => '1.0',];
