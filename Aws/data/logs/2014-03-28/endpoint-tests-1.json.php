<?php
// This file was auto-generated from sdk-root/src/data/logs/2014-03-28/endpoint-tests-1.json
return [ 'testCases' => [ [ 'documentation' => 'For region ap-south-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-south-2.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'ap-south-2', ], ], [ 'documentation' => 'For region ap-south-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-south-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'ap-south-2', ], ], [ 'documentation' => 'For region ap-south-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-south-2.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'ap-south-2', ], ], [ 'documentation' => 'For region ap-south-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-south-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'ap-south-2', ], ], [ 'documentation' => 'For region ap-south-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-south-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'ap-south-1', ], ], [ 'documentation' => 'For region ap-south-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-south-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'ap-south-1', ], ], [ 'documentation' => 'For region ap-south-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-south-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'ap-south-1', ], ], [ 'documentation' => 'For region ap-south-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-south-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'ap-south-1', ], ], [ 'documentation' => 'For region eu-south-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.eu-south-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'eu-south-1', ], ], [ 'documentation' => 'For region eu-south-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.eu-south-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'eu-south-1', ], ], [ 'documentation' => 'For region eu-south-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.eu-south-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'eu-south-1', ], ], [ 'documentation' => 'For region eu-south-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.eu-south-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'eu-south-1', ], ], [ 'documentation' => 'For region eu-south-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.eu-south-2.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'eu-south-2', ], ], [ 'documentation' => 'For region eu-south-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.eu-south-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'eu-south-2', ], ], [ 'documentation' => 'For region eu-south-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.eu-south-2.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'eu-south-2', ], ], [ 'documentation' => 'For region eu-south-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.eu-south-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'eu-south-2', ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.us-gov-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'us-gov-east-1', ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.us-gov-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-gov-east-1', ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.us-gov-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-gov-east-1', ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.us-gov-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-gov-east-1', ], ], [ 'documentation' => 'For region me-central-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.me-central-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'me-central-1', ], ], [ 'documentation' => 'For region me-central-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.me-central-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'me-central-1', ], ], [ 'documentation' => 'For region me-central-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.me-central-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'me-central-1', ], ], [ 'documentation' => 'For region me-central-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.me-central-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'me-central-1', ], ], [ 'documentation' => 'For region ca-central-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ca-central-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'ca-central-1', ], ], [ 'documentation' => 'For region ca-central-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ca-central-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'ca-central-1', ], ], [ 'documentation' => 'For region ca-central-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ca-central-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'ca-central-1', ], ], [ 'documentation' => 'For region ca-central-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ca-central-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'ca-central-1', ], ], [ 'documentation' => 'For region eu-central-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.eu-central-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'eu-central-1', ], ], [ 'documentation' => 'For region eu-central-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.eu-central-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'eu-central-1', ], ], [ 'documentation' => 'For region eu-central-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.eu-central-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'eu-central-1', ], ], [ 'documentation' => 'For region eu-central-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.eu-central-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'eu-central-1', ], ], [ 'documentation' => 'For region us-iso-west-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'us-iso-west-1', ], ], [ 'documentation' => 'For region us-iso-west-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.us-iso-west-1.c2s.ic.gov', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-iso-west-1', ], ], [ 'documentation' => 'For region us-iso-west-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'error' => 'DualStack is enabled but this partition does not support DualStack', ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-iso-west-1', ], ], [ 'documentation' => 'For region us-iso-west-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.us-iso-west-1.c2s.ic.gov', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-iso-west-1', ], ], [ 'documentation' => 'For region eu-central-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.eu-central-2.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'eu-central-2', ], ], [ 'documentation' => 'For region eu-central-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.eu-central-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'eu-central-2', ], ], [ 'documentation' => 'For region eu-central-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.eu-central-2.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'eu-central-2', ], ], [ 'documentation' => 'For region eu-central-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.eu-central-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'eu-central-2', ], ], [ 'documentation' => 'For region us-west-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.us-west-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'us-west-1', ], ], [ 'documentation' => 'For region us-west-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.us-west-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-west-1', ], ], [ 'documentation' => 'For region us-west-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.us-west-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-west-1', ], ], [ 'documentation' => 'For region us-west-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.us-west-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-west-1', ], ], [ 'documentation' => 'For region us-west-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.us-west-2.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'us-west-2', ], ], [ 'documentation' => 'For region us-west-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.us-west-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-west-2', ], ], [ 'documentation' => 'For region us-west-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.us-west-2.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-west-2', ], ], [ 'documentation' => 'For region us-west-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.us-west-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-west-2', ], ], [ 'documentation' => 'For region af-south-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.af-south-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'af-south-1', ], ], [ 'documentation' => 'For region af-south-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.af-south-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'af-south-1', ], ], [ 'documentation' => 'For region af-south-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.af-south-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'af-south-1', ], ], [ 'documentation' => 'For region af-south-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.af-south-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'af-south-1', ], ], [ 'documentation' => 'For region eu-north-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.eu-north-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'eu-north-1', ], ], [ 'documentation' => 'For region eu-north-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.eu-north-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'eu-north-1', ], ], [ 'documentation' => 'For region eu-north-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.eu-north-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'eu-north-1', ], ], [ 'documentation' => 'For region eu-north-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.eu-north-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'eu-north-1', ], ], [ 'documentation' => 'For region eu-west-3 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.eu-west-3.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'eu-west-3', ], ], [ 'documentation' => 'For region eu-west-3 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.eu-west-3.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'eu-west-3', ], ], [ 'documentation' => 'For region eu-west-3 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.eu-west-3.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'eu-west-3', ], ], [ 'documentation' => 'For region eu-west-3 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.eu-west-3.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'eu-west-3', ], ], [ 'documentation' => 'For region eu-west-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.eu-west-2.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'eu-west-2', ], ], [ 'documentation' => 'For region eu-west-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.eu-west-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'eu-west-2', ], ], [ 'documentation' => 'For region eu-west-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.eu-west-2.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'eu-west-2', ], ], [ 'documentation' => 'For region eu-west-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.eu-west-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'eu-west-2', ], ], [ 'documentation' => 'For region eu-west-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.eu-west-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'eu-west-1', ], ], [ 'documentation' => 'For region eu-west-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.eu-west-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'eu-west-1', ], ], [ 'documentation' => 'For region eu-west-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.eu-west-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'eu-west-1', ], ], [ 'documentation' => 'For region eu-west-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.eu-west-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'eu-west-1', ], ], [ 'documentation' => 'For region ap-northeast-3 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-northeast-3.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'ap-northeast-3', ], ], [ 'documentation' => 'For region ap-northeast-3 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-northeast-3.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'ap-northeast-3', ], ], [ 'documentation' => 'For region ap-northeast-3 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-northeast-3.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'ap-northeast-3', ], ], [ 'documentation' => 'For region ap-northeast-3 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-northeast-3.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'ap-northeast-3', ], ], [ 'documentation' => 'For region ap-northeast-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-northeast-2.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'ap-northeast-2', ], ], [ 'documentation' => 'For region ap-northeast-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-northeast-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'ap-northeast-2', ], ], [ 'documentation' => 'For region ap-northeast-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-northeast-2.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'ap-northeast-2', ], ], [ 'documentation' => 'For region ap-northeast-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-northeast-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'ap-northeast-2', ], ], [ 'documentation' => 'For region ap-northeast-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-northeast-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'ap-northeast-1', ], ], [ 'documentation' => 'For region ap-northeast-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-northeast-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'ap-northeast-1', ], ], [ 'documentation' => 'For region ap-northeast-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-northeast-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'ap-northeast-1', ], ], [ 'documentation' => 'For region ap-northeast-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-northeast-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'ap-northeast-1', ], ], [ 'documentation' => 'For region me-south-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.me-south-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'me-south-1', ], ], [ 'documentation' => 'For region me-south-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.me-south-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'me-south-1', ], ], [ 'documentation' => 'For region me-south-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.me-south-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'me-south-1', ], ], [ 'documentation' => 'For region me-south-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.me-south-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'me-south-1', ], ], [ 'documentation' => 'For region sa-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.sa-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'sa-east-1', ], ], [ 'documentation' => 'For region sa-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.sa-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'sa-east-1', ], ], [ 'documentation' => 'For region sa-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.sa-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'sa-east-1', ], ], [ 'documentation' => 'For region sa-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.sa-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'sa-east-1', ], ], [ 'documentation' => 'For region ap-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'ap-east-1', ], ], [ 'documentation' => 'For region ap-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'ap-east-1', ], ], [ 'documentation' => 'For region ap-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'ap-east-1', ], ], [ 'documentation' => 'For region ap-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'ap-east-1', ], ], [ 'documentation' => 'For region cn-north-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.cn-north-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'cn-north-1', ], ], [ 'documentation' => 'For region cn-north-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'cn-north-1', ], ], [ 'documentation' => 'For region cn-north-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.cn-north-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'cn-north-1', ], ], [ 'documentation' => 'For region cn-north-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'cn-north-1', ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.us-gov-west-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'us-gov-west-1', ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.us-gov-west-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-gov-west-1', ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.us-gov-west-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-gov-west-1', ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.us-gov-west-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-gov-west-1', ], ], [ 'documentation' => 'For region ap-southeast-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-southeast-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'ap-southeast-1', ], ], [ 'documentation' => 'For region ap-southeast-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-southeast-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'ap-southeast-1', ], ], [ 'documentation' => 'For region ap-southeast-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-southeast-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'ap-southeast-1', ], ], [ 'documentation' => 'For region ap-southeast-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-southeast-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'ap-southeast-1', ], ], [ 'documentation' => 'For region ap-southeast-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-southeast-2.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'ap-southeast-2', ], ], [ 'documentation' => 'For region ap-southeast-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-southeast-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'ap-southeast-2', ], ], [ 'documentation' => 'For region ap-southeast-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-southeast-2.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'ap-southeast-2', ], ], [ 'documentation' => 'For region ap-southeast-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-southeast-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'ap-southeast-2', ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'us-iso-east-1', ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-iso-east-1', ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'error' => 'DualStack is enabled but this partition does not support DualStack', ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-iso-east-1', ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-iso-east-1', ], ], [ 'documentation' => 'For region ap-southeast-3 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-southeast-3.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'ap-southeast-3', ], ], [ 'documentation' => 'For region ap-southeast-3 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-southeast-3.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'ap-southeast-3', ], ], [ 'documentation' => 'For region ap-southeast-3 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-southeast-3.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'ap-southeast-3', ], ], [ 'documentation' => 'For region ap-southeast-3 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-southeast-3.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'ap-southeast-3', ], ], [ 'documentation' => 'For region ap-southeast-4 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-southeast-4.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'ap-southeast-4', ], ], [ 'documentation' => 'For region ap-southeast-4 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.ap-southeast-4.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'ap-southeast-4', ], ], [ 'documentation' => 'For region ap-southeast-4 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-southeast-4.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'ap-southeast-4', ], ], [ 'documentation' => 'For region ap-southeast-4 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.ap-southeast-4.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'ap-southeast-4', ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.us-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'us-east-1', ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.us-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-east-1', ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.us-east-1.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-east-1', ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.us-east-1.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-east-1', ], ], [ 'documentation' => 'For region us-east-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.us-east-2.api.aws', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'us-east-2', ], ], [ 'documentation' => 'For region us-east-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.us-east-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-east-2', ], ], [ 'documentation' => 'For region us-east-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.us-east-2.api.aws', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-east-2', ], ], [ 'documentation' => 'For region us-east-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.us-east-2.amazonaws.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-east-2', ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.cn-northwest-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'cn-northwest-1', ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.cn-northwest-1.amazonaws.com.cn', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'cn-northwest-1', ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.cn-northwest-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'cn-northwest-1', ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.cn-northwest-1.amazonaws.com.cn', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'cn-northwest-1', ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => true, 'Region' => 'us-isob-east-1', ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs-fips.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-isob-east-1', ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'error' => 'DualStack is enabled but this partition does not support DualStack', ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-isob-east-1', ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://logs.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-isob-east-1', ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => false, 'Region' => 'us-east-1', 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => [ 'error' => 'Invalid Configuration: FIPS and custom endpoint are not supported', ], 'params' => [ 'UseFIPS' => true, 'UseDualStack' => false, 'Region' => 'us-east-1', 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => [ 'error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported', ], 'params' => [ 'UseFIPS' => false, 'UseDualStack' => true, 'Region' => 'us-east-1', 'Endpoint' => 'https://example.com', ], ], ], 'version' => '1.0',];
