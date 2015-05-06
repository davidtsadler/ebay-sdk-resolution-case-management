<?php
require __DIR__ . '/artifacts/dts-resolution-case-management.phar';

$service = new \DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementService(array(
    'apiVersion' => '123'
));

echo 'Version=' . \DTS\eBaySDK\ResolutionCaseManagement\Services\ResolutionCaseManagementService::VERSION;
