<?php

// This file was auto-generated from sdk-root/src/data/kendra/2019-02-03/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2019-02-03', 'endpointPrefix' => 'kendra', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'kendra', 'serviceFullName' => 'AWSKendraFrontendService', 'serviceId' => 'kendra', 'signatureVersion' => 'v4', 'signingName' => 'kendra', 'targetPrefix' => 'AWSKendraFrontendService', 'uid' => 'kendra-2019-02-03'], 'operations' => ['BatchDeleteDocument' => ['name' => 'BatchDeleteDocument', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'BatchDeleteDocumentRequest'], 'output' => ['shape' => 'BatchDeleteDocumentResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'BatchPutDocument' => ['name' => 'BatchPutDocument', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'BatchPutDocumentRequest'], 'output' => ['shape' => 'BatchPutDocumentResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ServiceQuotaExceededException'], ['shape' => 'InternalServerException']]], 'CreateDataSource' => ['name' => 'CreateDataSource', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateDataSourceRequest'], 'output' => ['shape' => 'CreateDataSourceResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourceAlreadyExistException'], ['shape' => 'ServiceQuotaExceededException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'CreateFaq' => ['name' => 'CreateFaq', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateFaqRequest'], 'output' => ['shape' => 'CreateFaqResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'ServiceQuotaExceededException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'CreateIndex' => ['name' => 'CreateIndex', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateIndexRequest'], 'output' => ['shape' => 'CreateIndexResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ResourceAlreadyExistException'], ['shape' => 'ServiceQuotaExceededException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'DeleteFaq' => ['name' => 'DeleteFaq', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteFaqRequest'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'DeleteIndex' => ['name' => 'DeleteIndex', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteIndexRequest'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'DescribeDataSource' => ['name' => 'DescribeDataSource', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeDataSourceRequest'], 'output' => ['shape' => 'DescribeDataSourceResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'DescribeFaq' => ['name' => 'DescribeFaq', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeFaqRequest'], 'output' => ['shape' => 'DescribeFaqResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'DescribeIndex' => ['name' => 'DescribeIndex', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeIndexRequest'], 'output' => ['shape' => 'DescribeIndexResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'ListDataSourceSyncJobs' => ['name' => 'ListDataSourceSyncJobs', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListDataSourceSyncJobsRequest'], 'output' => ['shape' => 'ListDataSourceSyncJobsResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ConflictException'], ['shape' => 'InternalServerException']]], 'ListDataSources' => ['name' => 'ListDataSources', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListDataSourcesRequest'], 'output' => ['shape' => 'ListDataSourcesResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ThrottlingException'], ['shape' => 'InternalServerException']]], 'ListFaqs' => ['name' => 'ListFaqs', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListFaqsRequest'], 'output' => ['shape' => 'ListFaqsResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'ListIndices' => ['name' => 'ListIndices', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListIndicesRequest'], 'output' => ['shape' => 'ListIndicesResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'Query' => ['name' => 'Query', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'QueryRequest'], 'output' => ['shape' => 'QueryResult'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'StartDataSourceSyncJob' => ['name' => 'StartDataSourceSyncJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StartDataSourceSyncJobRequest'], 'output' => ['shape' => 'StartDataSourceSyncJobResponse'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ResourceInUseException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'ConflictException'], ['shape' => 'InternalServerException']]], 'StopDataSourceSyncJob' => ['name' => 'StopDataSourceSyncJob', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'StopDataSourceSyncJobRequest'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'SubmitFeedback' => ['name' => 'SubmitFeedback', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'SubmitFeedbackRequest'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ResourceUnavailableException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'UpdateDataSource' => ['name' => 'UpdateDataSource', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UpdateDataSourceRequest'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]], 'UpdateIndex' => ['name' => 'UpdateIndex', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UpdateIndexRequest'], 'errors' => [['shape' => 'ValidationException'], ['shape' => 'ConflictException'], ['shape' => 'ResourceNotFoundException'], ['shape' => 'ThrottlingException'], ['shape' => 'AccessDeniedException'], ['shape' => 'InternalServerException']]]], 'shapes' => ['AccessControlListConfiguration' => ['type' => 'structure', 'members' => ['KeyPath' => ['shape' => 'S3ObjectKey']]], 'AccessDeniedException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'AclConfiguration' => ['type' => 'structure', 'required' => ['AllowedGroupsColumnName'], 'members' => ['AllowedGroupsColumnName' => ['shape' => 'ColumnName']]], 'AdditionalResultAttribute' => ['type' => 'structure', 'required' => ['Key', 'ValueType', 'Value'], 'members' => ['Key' => ['shape' => 'String'], 'ValueType' => ['shape' => 'AdditionalResultAttributeValueType'], 'Value' => ['shape' => 'AdditionalResultAttributeValue']]], 'AdditionalResultAttributeList' => ['type' => 'list', 'member' => ['shape' => 'AdditionalResultAttribute']], 'AdditionalResultAttributeValue' => ['type' => 'structure', 'members' => ['TextWithHighlightsValue' => ['shape' => 'TextWithHighlights']]], 'AdditionalResultAttributeValueType' => ['type' => 'string', 'enum' => ['TEXT_WITH_HIGHLIGHTS_VALUE']], 'AttributeFilter' => ['type' => 'structure', 'members' => ['AndAllFilters' => ['shape' => 'AttributeFilterList'], 'OrAllFilters' => ['shape' => 'AttributeFilterList'], 'NotFilter' => ['shape' => 'AttributeFilter'], 'EqualsTo' => ['shape' => 'DocumentAttribute'], 'ContainsAll' => ['shape' => 'DocumentAttribute'], 'ContainsAny' => ['shape' => 'DocumentAttribute'], 'GreaterThan' => ['shape' => 'DocumentAttribute'], 'GreaterThanOrEquals' => ['shape' => 'DocumentAttribute'], 'LessThan' => ['shape' => 'DocumentAttribute'], 'LessThanOrEquals' => ['shape' => 'DocumentAttribute']]], 'AttributeFilterList' => ['type' => 'list', 'member' => ['shape' => 'AttributeFilter'], 'max' => 5, 'min' => 1], 'BatchDeleteDocumentRequest' => ['type' => 'structure', 'required' => ['IndexId', 'DocumentIdList'], 'members' => ['IndexId' => ['shape' => 'IndexId'], 'DocumentIdList' => ['shape' => 'DocumentIdList']]], 'BatchDeleteDocumentResponse' => ['type' => 'structure', 'members' => ['FailedDocuments' => ['shape' => 'BatchDeleteDocumentResponseFailedDocuments']]], 'BatchDeleteDocumentResponseFailedDocument' => ['type' => 'structure', 'members' => ['Id' => ['shape' => 'DocumentId'], 'ErrorCode' => ['shape' => 'ErrorCode'], 'ErrorMessage' => ['shape' => 'ErrorMessage']]], 'BatchDeleteDocumentResponseFailedDocuments' => ['type' => 'list', 'member' => ['shape' => 'BatchDeleteDocumentResponseFailedDocument']], 'BatchPutDocumentRequest' => ['type' => 'structure', 'required' => ['IndexId', 'Documents'], 'members' => ['IndexId' => ['shape' => 'IndexId'], 'RoleArn' => ['shape' => 'RoleArn'], 'Documents' => ['shape' => 'DocumentList']]], 'BatchPutDocumentResponse' => ['type' => 'structure', 'members' => ['FailedDocuments' => ['shape' => 'BatchPutDocumentResponseFailedDocuments']]], 'BatchPutDocumentResponseFailedDocument' => ['type' => 'structure', 'members' => ['Id' => ['shape' => 'DocumentId'], 'ErrorCode' => ['shape' => 'ErrorCode'], 'ErrorMessage' => ['shape' => 'ErrorMessage']]], 'BatchPutDocumentResponseFailedDocuments' => ['type' => 'list', 'member' => ['shape' => 'BatchPutDocumentResponseFailedDocument']], 'Blob' => ['type' => 'blob', 'max' => 153600, 'min' => 1], 'Boolean' => ['type' => 'boolean'], 'ChangeDetectingColumns' => ['type' => 'list', 'member' => ['shape' => 'ColumnName'], 'max' => 5, 'min' => 1], 'ClickFeedback' => ['type' => 'structure', 'required' => ['ResultId', 'ClickTime'], 'members' => ['ResultId' => ['shape' => 'ResultId'], 'ClickTime' => ['shape' => 'Timestamp']]], 'ClickFeedbackList' => ['type' => 'list', 'member' => ['shape' => 'ClickFeedback']], 'ColumnConfiguration' => ['type' => 'structure', 'required' => ['DocumentIdColumnName', 'DocumentDataColumnName', 'ChangeDetectingColumns'], 'members' => ['DocumentIdColumnName' => ['shape' => 'ColumnName'], 'DocumentDataColumnName' => ['shape' => 'ColumnName'], 'DocumentTitleColumnName' => ['shape' => 'ColumnName'], 'FieldMappings' => ['shape' => 'DataSourceToIndexFieldMappingList'], 'ChangeDetectingColumns' => ['shape' => 'ChangeDetectingColumns']]], 'ColumnName' => ['type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '^[a-zA-Z][a-zA-Z0-9_]*$'], 'ConflictException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'ConnectionConfiguration' => ['type' => 'structure', 'required' => ['DatabaseHost', 'DatabasePort', 'DatabaseName', 'TableName', 'SecretArn'], 'members' => ['DatabaseHost' => ['shape' => 'DatabaseHost'], 'DatabasePort' => ['shape' => 'DatabasePort'], 'DatabaseName' => ['shape' => 'DatabaseName'], 'TableName' => ['shape' => 'TableName'], 'SecretArn' => ['shape' => 'SecretArn']]], 'ContentType' => ['type' => 'string', 'enum' => ['PDF', 'HTML', 'MS_WORD', 'PLAIN_TEXT', 'PPT']], 'CreateDataSourceRequest' => ['type' => 'structure', 'required' => ['Name', 'IndexId', 'Type', 'Configuration', 'RoleArn'], 'members' => ['Name' => ['shape' => 'DataSourceName'], 'IndexId' => ['shape' => 'IndexId'], 'Type' => ['shape' => 'DataSourceType'], 'Configuration' => ['shape' => 'DataSourceConfiguration'], 'Description' => ['shape' => 'Description'], 'Schedule' => ['shape' => 'ScanSchedule'], 'RoleArn' => ['shape' => 'RoleArn']]], 'CreateDataSourceResponse' => ['type' => 'structure', 'required' => ['Id'], 'members' => ['Id' => ['shape' => 'DataSourceId']]], 'CreateFaqRequest' => ['type' => 'structure', 'required' => ['IndexId', 'Name', 'S3Path', 'RoleArn'], 'members' => ['IndexId' => ['shape' => 'IndexId'], 'Name' => ['shape' => 'FaqName'], 'Description' => ['shape' => 'Description'], 'S3Path' => ['shape' => 'S3Path'], 'RoleArn' => ['shape' => 'RoleArn']]], 'CreateFaqResponse' => ['type' => 'structure', 'members' => ['Id' => ['shape' => 'FaqId']]], 'CreateIndexRequest' => ['type' => 'structure', 'required' => ['Name', 'RoleArn'], 'members' => ['Name' => ['shape' => 'IndexName'], 'RoleArn' => ['shape' => 'RoleArn'], 'ServerSideEncryptionConfiguration' => ['shape' => 'ServerSideEncryptionConfiguration'], 'Description' => ['shape' => 'Description']]], 'CreateIndexResponse' => ['type' => 'structure', 'members' => ['Id' => ['shape' => 'IndexId']]], 'DataSourceConfiguration' => ['type' => 'structure', 'members' => ['S3Configuration' => ['shape' => 'S3DataSourceConfiguration'], 'SharePointConfiguration' => ['shape' => 'SharePointConfiguration'], 'DatabaseConfiguration' => ['shape' => 'DatabaseConfiguration']]], 'DataSourceDateFieldFormat' => ['type' => 'string', 'max' => 40, 'min' => 4], 'DataSourceFieldName' => ['type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '^[a-zA-Z][a-zA-Z0-9_]*$'], 'DataSourceId' => ['type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '[a-zA-Z0-9][a-zA-Z0-9_-]*'], 'DataSourceInclusionsExclusionsStrings' => ['type' => 'list', 'member' => ['shape' => 'DataSourceInclusionsExclusionsStringsMember'], 'max' => 100, 'min' => 0], 'DataSourceInclusionsExclusionsStringsMember' => ['type' => 'string', 'max' => 50, 'min' => 1, 'pattern' => '^\\P{C}*$'], 'DataSourceName' => ['type' => 'string', 'max' => 1000, 'min' => 1, 'pattern' => '[a-zA-Z0-9][a-zA-Z0-9_-]*'], 'DataSourceStatus' => ['type' => 'string', 'enum' => ['CREATING', 'DELETING', 'FAILED', 'UPDATING', 'ACTIVE']], 'DataSourceSummary' => ['type' => 'structure', 'members' => ['Name' => ['shape' => 'DataSourceName'], 'Id' => ['shape' => 'DataSourceId'], 'Type' => ['shape' => 'DataSourceType'], 'CreatedAt' => ['shape' => 'Timestamp'], 'UpdatedAt' => ['shape' => 'Timestamp'], 'Status' => ['shape' => 'DataSourceStatus']]], 'DataSourceSummaryList' => ['type' => 'list', 'member' => ['shape' => 'DataSourceSummary']], 'DataSourceSyncJob' => ['type' => 'structure', 'members' => ['ExecutionId' => ['shape' => 'String'], 'StartTime' => ['shape' => 'Timestamp'], 'EndTime' => ['shape' => 'Timestamp'], 'Status' => ['shape' => 'DataSourceSyncJobStatus'], 'ErrorMessage' => ['shape' => 'ErrorMessage'], 'ErrorCode' => ['shape' => 'ErrorCode'], 'DataSourceErrorCode' => ['shape' => 'String']]], 'DataSourceSyncJobHistoryList' => ['type' => 'list', 'member' => ['shape' => 'DataSourceSyncJob']], 'DataSourceSyncJobStatus' => ['type' => 'string', 'enum' => ['FAILED', 'SUCCEEDED', 'SYNCING', 'INCOMPLETE', 'STOPPING', 'ABORTED']], 'DataSourceToIndexFieldMapping' => ['type' => 'structure', 'required' => ['DataSourceFieldName', 'IndexFieldName'], 'members' => ['DataSourceFieldName' => ['shape' => 'DataSourceFieldName'], 'DateFieldFormat' => ['shape' => 'DataSourceDateFieldFormat'], 'IndexFieldName' => ['shape' => 'IndexFieldName']]], 'DataSourceToIndexFieldMappingList' => ['type' => 'list', 'member' => ['shape' => 'DataSourceToIndexFieldMapping'], 'max' => 100, 'min' => 1], 'DataSourceType' => ['type' => 'string', 'enum' => ['S3', 'SHAREPOINT', 'DATABASE']], 'DataSourceVpcConfiguration' => ['type' => 'structure', 'required' => ['SubnetIds', 'SecurityGroupIds'], 'members' => ['SubnetIds' => ['shape' => 'SubnetIdList'], 'SecurityGroupIds' => ['shape' => 'SecurityGroupIdList']]], 'DatabaseConfiguration' => ['type' => 'structure', 'required' => ['DatabaseEngineType', 'ConnectionConfiguration', 'ColumnConfiguration'], 'members' => ['DatabaseEngineType' => ['shape' => 'DatabaseEngineType'], 'ConnectionConfiguration' => ['shape' => 'ConnectionConfiguration'], 'VpcConfiguration' => ['shape' => 'DataSourceVpcConfiguration'], 'ColumnConfiguration' => ['shape' => 'ColumnConfiguration'], 'AclConfiguration' => ['shape' => 'AclConfiguration']]], 'DatabaseEngineType' => ['type' => 'string', 'enum' => ['RDS_AURORA_MYSQL', 'RDS_AURORA_POSTGRESQL', 'RDS_MYSQL', 'RDS_POSTGRESQL']], 'DatabaseHost' => ['type' => 'string', 'max' => 253, 'min' => 1], 'DatabaseName' => ['type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '^[a-zA-Z][a-zA-Z0-9_]*$'], 'DatabasePort' => ['type' => 'integer', 'max' => 65535, 'min' => 1], 'DeleteFaqRequest' => ['type' => 'structure', 'required' => ['Id', 'IndexId'], 'members' => ['Id' => ['shape' => 'FaqId'], 'IndexId' => ['shape' => 'IndexId']]], 'DeleteIndexRequest' => ['type' => 'structure', 'required' => ['Id'], 'members' => ['Id' => ['shape' => 'IndexId']]], 'DescribeDataSourceRequest' => ['type' => 'structure', 'required' => ['Id', 'IndexId'], 'members' => ['Id' => ['shape' => 'DataSourceId'], 'IndexId' => ['shape' => 'IndexId']]], 'DescribeDataSourceResponse' => ['type' => 'structure', 'members' => ['Id' => ['shape' => 'DataSourceId'], 'IndexId' => ['shape' => 'IndexId'], 'Name' => ['shape' => 'DataSourceName'], 'Type' => ['shape' => 'DataSourceType'], 'Configuration' => ['shape' => 'DataSourceConfiguration'], 'CreatedAt' => ['shape' => 'Timestamp'], 'UpdatedAt' => ['shape' => 'Timestamp'], 'Description' => ['shape' => 'Description'], 'Status' => ['shape' => 'DataSourceStatus'], 'Schedule' => ['shape' => 'ScanSchedule'], 'RoleArn' => ['shape' => 'RoleArn'], 'ErrorMessage' => ['shape' => 'ErrorMessage']]], 'DescribeFaqRequest' => ['type' => 'structure', 'required' => ['Id', 'IndexId'], 'members' => ['Id' => ['shape' => 'FaqId'], 'IndexId' => ['shape' => 'IndexId']]], 'DescribeFaqResponse' => ['type' => 'structure', 'members' => ['Id' => ['shape' => 'FaqId'], 'IndexId' => ['shape' => 'IndexId'], 'Name' => ['shape' => 'FaqName'], 'Description' => ['shape' => 'Description'], 'CreatedAt' => ['shape' => 'Timestamp'], 'UpdatedAt' => ['shape' => 'Timestamp'], 'S3Path' => ['shape' => 'S3Path'], 'Status' => ['shape' => 'FaqStatus'], 'RoleArn' => ['shape' => 'RoleArn'], 'ErrorMessage' => ['shape' => 'ErrorMessage']]], 'DescribeIndexRequest' => ['type' => 'structure', 'required' => ['Id'], 'members' => ['Id' => ['shape' => 'IndexId']]], 'DescribeIndexResponse' => ['type' => 'structure', 'members' => ['Name' => ['shape' => 'IndexName'], 'Id' => ['shape' => 'IndexId'], 'RoleArn' => ['shape' => 'RoleArn'], 'ServerSideEncryptionConfiguration' => ['shape' => 'ServerSideEncryptionConfiguration'], 'Status' => ['shape' => 'IndexStatus'], 'Description' => ['shape' => 'Description'], 'CreatedAt' => ['shape' => 'Timestamp'], 'UpdatedAt' => ['shape' => 'Timestamp'], 'DocumentMetadataConfigurations' => ['shape' => 'DocumentMetadataConfigurationList'], 'IndexStatistics' => ['shape' => 'IndexStatistics'], 'ErrorMessage' => ['shape' => 'ErrorMessage']]], 'Description' => ['type' => 'string', 'max' => 1000, 'min' => 1, 'pattern' => '^\\P{C}*$'], 'Document' => ['type' => 'structure', 'required' => ['Id'], 'members' => ['Id' => ['shape' => 'DocumentId'], 'Title' => ['shape' => 'Title'], 'Blob' => ['shape' => 'Blob'], 'S3Path' => ['shape' => 'S3Path'], 'Attributes' => ['shape' => 'DocumentAttributeList'], 'AccessControlList' => ['shape' => 'PrincipalList'], 'ContentType' => ['shape' => 'ContentType']]], 'DocumentAttribute' => ['type' => 'structure', 'required' => ['Key', 'Value'], 'members' => ['Key' => ['shape' => 'DocumentAttributeKey'], 'Value' => ['shape' => 'DocumentAttributeValue']]], 'DocumentAttributeKey' => ['type' => 'string', 'max' => 200, 'min' => 1, 'pattern' => '[a-zA-Z0-9_][a-zA-Z0-9_-]*'], 'DocumentAttributeKeyList' => ['type' => 'list', 'member' => ['shape' => 'DocumentAttributeKey'], 'max' => 100, 'min' => 1], 'DocumentAttributeList' => ['type' => 'list', 'member' => ['shape' => 'DocumentAttribute'], 'max' => 100, 'min' => 1], 'DocumentAttributeStringListValue' => ['type' => 'list', 'member' => ['shape' => 'String'], 'max' => 5, 'min' => 1], 'DocumentAttributeStringValue' => ['type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '^\\P{C}*$'], 'DocumentAttributeValue' => ['type' => 'structure', 'members' => ['StringValue' => ['shape' => 'DocumentAttributeStringValue'], 'StringListValue' => ['shape' => 'DocumentAttributeStringListValue'], 'LongValue' => ['shape' => 'Long'], 'DateValue' => ['shape' => 'Timestamp']]], 'DocumentAttributeValueCountPair' => ['type' => 'structure', 'members' => ['DocumentAttributeValue' => ['shape' => 'DocumentAttributeValue'], 'Count' => ['shape' => 'Integer']]], 'DocumentAttributeValueCountPairList' => ['type' => 'list', 'member' => ['shape' => 'DocumentAttributeValueCountPair']], 'DocumentAttributeValueType' => ['type' => 'string', 'enum' => ['STRING_VALUE', 'STRING_LIST_VALUE', 'LONG_VALUE', 'DATE_VALUE']], 'DocumentId' => ['type' => 'string', 'max' => 2048, 'min' => 1], 'DocumentIdList' => ['type' => 'list', 'member' => ['shape' => 'DocumentId'], 'max' => 10, 'min' => 1], 'DocumentList' => ['type' => 'list', 'member' => ['shape' => 'Document'], 'max' => 10, 'min' => 1], 'DocumentMetadataBoolean' => ['type' => 'boolean'], 'DocumentMetadataConfiguration' => ['type' => 'structure', 'required' => ['Name', 'Type'], 'members' => ['Name' => ['shape' => 'DocumentMetadataConfigurationName'], 'Type' => ['shape' => 'DocumentAttributeValueType'], 'Relevance' => ['shape' => 'Relevance'], 'Search' => ['shape' => 'Search']]], 'DocumentMetadataConfigurationList' => ['type' => 'list', 'member' => ['shape' => 'DocumentMetadataConfiguration'], 'max' => 500, 'min' => 0], 'DocumentMetadataConfigurationName' => ['type' => 'string', 'max' => 30, 'min' => 1], 'DocumentsMetadataConfiguration' => ['type' => 'structure', 'members' => ['S3Prefix' => ['shape' => 'S3ObjectKey']]], 'Duration' => ['type' => 'string', 'max' => 10, 'min' => 1, 'pattern' => '[0-9]+[s]'], 'ErrorCode' => ['type' => 'string', 'enum' => ['InternalError', 'InvalidRequest']], 'ErrorMessage' => ['type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '^\\P{C}*$'], 'Facet' => ['type' => 'structure', 'members' => ['DocumentAttributeKey' => ['shape' => 'DocumentAttributeKey']]], 'FacetList' => ['type' => 'list', 'member' => ['shape' => 'Facet']], 'FacetResult' => ['type' => 'structure', 'members' => ['DocumentAttributeKey' => ['shape' => 'DocumentAttributeKey'], 'DocumentAttributeValueCountPairs' => ['shape' => 'DocumentAttributeValueCountPairList']]], 'FacetResultList' => ['type' => 'list', 'member' => ['shape' => 'FacetResult']], 'FaqId' => ['type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '[a-zA-Z0-9][a-zA-Z0-9_-]*'], 'FaqName' => ['type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '[a-zA-Z0-9][a-zA-Z0-9_-]*'], 'FaqStatistics' => ['type' => 'structure', 'required' => ['IndexedQuestionAnswersCount'], 'members' => ['IndexedQuestionAnswersCount' => ['shape' => 'IndexedQuestionAnswersCount']]], 'FaqStatus' => ['type' => 'string', 'enum' => ['CREATING', 'UPDATING', 'ACTIVE', 'DELETING', 'FAILED']], 'FaqSummary' => ['type' => 'structure', 'members' => ['Id' => ['shape' => 'FaqId'], 'Name' => ['shape' => 'FaqName'], 'Status' => ['shape' => 'FaqStatus'], 'CreatedAt' => ['shape' => 'Timestamp'], 'UpdatedAt' => ['shape' => 'Timestamp']]], 'FaqSummaryItems' => ['type' => 'list', 'member' => ['shape' => 'FaqSummary']], 'Highlight' => ['type' => 'structure', 'required' => ['BeginOffset', 'EndOffset'], 'members' => ['BeginOffset' => ['shape' => 'Integer'], 'EndOffset' => ['shape' => 'Integer'], 'TopAnswer' => ['shape' => 'Boolean']]], 'HighlightList' => ['type' => 'list', 'member' => ['shape' => 'Highlight']], 'Importance' => ['type' => 'integer', 'max' => 10, 'min' => 1], 'IndexConfigurationSummary' => ['type' => 'structure', 'required' => ['CreatedAt', 'UpdatedAt', 'Status'], 'members' => ['Name' => ['shape' => 'IndexName'], 'Id' => ['shape' => 'IndexId'], 'CreatedAt' => ['shape' => 'Timestamp'], 'UpdatedAt' => ['shape' => 'Timestamp'], 'Status' => ['shape' => 'IndexStatus']]], 'IndexConfigurationSummaryList' => ['type' => 'list', 'member' => ['shape' => 'IndexConfigurationSummary']], 'IndexFieldName' => ['type' => 'string', 'max' => 30, 'min' => 1, 'pattern' => '^\\P{C}*$'], 'IndexId' => ['type' => 'string', 'max' => 36, 'min' => 36, 'pattern' => '[a-zA-Z0-9][a-zA-Z0-9-]*'], 'IndexName' => ['type' => 'string', 'max' => 1000, 'min' => 1, 'pattern' => '[a-zA-Z0-9][a-zA-Z0-9_-]*'], 'IndexStatistics' => ['type' => 'structure', 'required' => ['FaqStatistics', 'TextDocumentStatistics'], 'members' => ['FaqStatistics' => ['shape' => 'FaqStatistics'], 'TextDocumentStatistics' => ['shape' => 'TextDocumentStatistics']]], 'IndexStatus' => ['type' => 'string', 'enum' => ['CREATING', 'ACTIVE', 'DELETING', 'FAILED', 'SYSTEM_UPDATING']], 'IndexedQuestionAnswersCount' => ['type' => 'integer', 'min' => 0], 'IndexedTextDocumentsCount' => ['type' => 'integer', 'min' => 0], 'Integer' => ['type' => 'integer'], 'InternalServerException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true, 'fault' => \true], 'KmsKeyId' => ['type' => 'string', 'max' => 2048, 'min' => 1, 'sensitive' => \true], 'ListDataSourceSyncJobsRequest' => ['type' => 'structure', 'required' => ['Id', 'IndexId'], 'members' => ['Id' => ['shape' => 'DataSourceId'], 'IndexId' => ['shape' => 'IndexId'], 'NextToken' => ['shape' => 'NextToken'], 'MaxResults' => ['shape' => 'MaxResultsIntegerForListDataSourceSyncJobsRequest'], 'StartTimeFilter' => ['shape' => 'TimeRange'], 'StatusFilter' => ['shape' => 'DataSourceSyncJobStatus']]], 'ListDataSourceSyncJobsResponse' => ['type' => 'structure', 'members' => ['History' => ['shape' => 'DataSourceSyncJobHistoryList'], 'NextToken' => ['shape' => 'NextToken']]], 'ListDataSourcesRequest' => ['type' => 'structure', 'required' => ['IndexId'], 'members' => ['IndexId' => ['shape' => 'IndexId'], 'NextToken' => ['shape' => 'NextToken'], 'MaxResults' => ['shape' => 'MaxResultsIntegerForListDataSourcesRequest']]], 'ListDataSourcesResponse' => ['type' => 'structure', 'members' => ['SummaryItems' => ['shape' => 'DataSourceSummaryList'], 'NextToken' => ['shape' => 'NextToken']]], 'ListFaqsRequest' => ['type' => 'structure', 'required' => ['IndexId'], 'members' => ['IndexId' => ['shape' => 'IndexId'], 'NextToken' => ['shape' => 'NextToken'], 'MaxResults' => ['shape' => 'MaxResultsIntegerForListFaqsRequest']]], 'ListFaqsResponse' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'NextToken'], 'FaqSummaryItems' => ['shape' => 'FaqSummaryItems']]], 'ListIndicesRequest' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'NextToken'], 'MaxResults' => ['shape' => 'MaxResultsIntegerForListIndicesRequest']]], 'ListIndicesResponse' => ['type' => 'structure', 'members' => ['IndexConfigurationSummaryItems' => ['shape' => 'IndexConfigurationSummaryList'], 'NextToken' => ['shape' => 'NextToken']]], 'Long' => ['type' => 'long'], 'MaxResultsIntegerForListDataSourceSyncJobsRequest' => ['type' => 'integer', 'max' => 10, 'min' => 1], 'MaxResultsIntegerForListDataSourcesRequest' => ['type' => 'integer', 'max' => 100, 'min' => 1], 'MaxResultsIntegerForListFaqsRequest' => ['type' => 'integer', 'max' => 100, 'min' => 1], 'MaxResultsIntegerForListIndicesRequest' => ['type' => 'integer', 'max' => 100, 'min' => 1], 'NextToken' => ['type' => 'string', 'max' => 800, 'min' => 1], 'Order' => ['type' => 'string', 'enum' => ['ASCENDING', 'DESCENDING']], 'Principal' => ['type' => 'structure', 'required' => ['Name', 'Type', 'Access'], 'members' => ['Name' => ['shape' => 'PrincipalName'], 'Type' => ['shape' => 'PrincipalType'], 'Access' => ['shape' => 'ReadAccessType']]], 'PrincipalList' => ['type' => 'list', 'member' => ['shape' => 'Principal'], 'max' => 200, 'min' => 1], 'PrincipalName' => ['type' => 'string', 'max' => 200, 'min' => 1, 'pattern' => '^\\P{C}*$'], 'PrincipalType' => ['type' => 'string', 'enum' => ['USER', 'GROUP']], 'QueryId' => ['type' => 'string', 'max' => 36, 'min' => 1], 'QueryRequest' => ['type' => 'structure', 'required' => ['IndexId', 'QueryText'], 'members' => ['IndexId' => ['shape' => 'IndexId'], 'QueryText' => ['shape' => 'QueryText'], 'AttributeFilter' => ['shape' => 'AttributeFilter'], 'Facets' => ['shape' => 'FacetList'], 'RequestedDocumentAttributes' => ['shape' => 'DocumentAttributeKeyList'], 'QueryResultTypeFilter' => ['shape' => 'QueryResultType'], 'PageNumber' => ['shape' => 'Integer'], 'PageSize' => ['shape' => 'Integer']]], 'QueryResult' => ['type' => 'structure', 'members' => ['QueryId' => ['shape' => 'QueryId'], 'ResultItems' => ['shape' => 'QueryResultItemList'], 'FacetResults' => ['shape' => 'FacetResultList'], 'TotalNumberOfResults' => ['shape' => 'Integer']]], 'QueryResultItem' => ['type' => 'structure', 'members' => ['Id' => ['shape' => 'ResultId'], 'Type' => ['shape' => 'QueryResultType'], 'AdditionalAttributes' => ['shape' => 'AdditionalResultAttributeList'], 'DocumentId' => ['shape' => 'DocumentId'], 'DocumentTitle' => ['shape' => 'TextWithHighlights'], 'DocumentExcerpt' => ['shape' => 'TextWithHighlights'], 'DocumentURI' => ['shape' => 'Url'], 'DocumentAttributes' => ['shape' => 'DocumentAttributeList']]], 'QueryResultItemList' => ['type' => 'list', 'member' => ['shape' => 'QueryResultItem']], 'QueryResultType' => ['type' => 'string', 'enum' => ['DOCUMENT', 'QUESTION_ANSWER', 'ANSWER']], 'QueryText' => ['type' => 'string', 'max' => 1000, 'min' => 1, 'pattern' => '^\\P{C}*$'], 'ReadAccessType' => ['type' => 'string', 'enum' => ['ALLOW', 'DENY']], 'Relevance' => ['type' => 'structure', 'members' => ['Freshness' => ['shape' => 'DocumentMetadataBoolean'], 'Importance' => ['shape' => 'Importance'], 'Duration' => ['shape' => 'Duration'], 'RankOrder' => ['shape' => 'Order'], 'ValueImportanceMap' => ['shape' => 'ValueImportanceMap']]], 'RelevanceFeedback' => ['type' => 'structure', 'required' => ['ResultId', 'RelevanceValue'], 'members' => ['ResultId' => ['shape' => 'ResultId'], 'RelevanceValue' => ['shape' => 'RelevanceType']]], 'RelevanceFeedbackList' => ['type' => 'list', 'member' => ['shape' => 'RelevanceFeedback']], 'RelevanceType' => ['type' => 'string', 'enum' => ['RELEVANT', 'NOT_RELEVANT']], 'ResourceAlreadyExistException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'ResourceInUseException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'ResourceNotFoundException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'ResourceUnavailableException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'ResultId' => ['type' => 'string', 'max' => 73, 'min' => 1], 'RoleArn' => ['type' => 'string', 'max' => 1284, 'min' => 1, 'pattern' => 'arn:[a-z0-9-\\.]{1,63}:[a-z0-9-\\.]{0,63}:[a-z0-9-\\.]{0,63}:[a-z0-9-\\.]{0,63}:[^/].{0,1023}'], 'S3BucketName' => ['type' => 'string', 'max' => 63, 'min' => 3, 'pattern' => '[a-z0-9][\\.\\-a-z0-9]{1,61}[a-z0-9]'], 'S3DataSourceConfiguration' => ['type' => 'structure', 'required' => ['BucketName'], 'members' => ['BucketName' => ['shape' => 'S3BucketName'], 'InclusionPrefixes' => ['shape' => 'DataSourceInclusionsExclusionsStrings'], 'ExclusionPatterns' => ['shape' => 'DataSourceInclusionsExclusionsStrings'], 'DocumentsMetadataConfiguration' => ['shape' => 'DocumentsMetadataConfiguration'], 'AccessControlListConfiguration' => ['shape' => 'AccessControlListConfiguration']]], 'S3ObjectKey' => ['type' => 'string', 'max' => 1024, 'min' => 1, 'pattern' => '.*'], 'S3Path' => ['type' => 'structure', 'required' => ['Bucket', 'Key'], 'members' => ['Bucket' => ['shape' => 'S3BucketName'], 'Key' => ['shape' => 'S3ObjectKey']]], 'ScanSchedule' => ['type' => 'string'], 'Search' => ['type' => 'structure', 'members' => ['Facetable' => ['shape' => 'Boolean'], 'Searchable' => ['shape' => 'Boolean'], 'Displayable' => ['shape' => 'Boolean']]], 'SecretArn' => ['type' => 'string', 'max' => 1284, 'min' => 1, 'pattern' => 'arn:[a-z0-9-\\.]{1,63}:[a-z0-9-\\.]{0,63}:[a-z0-9-\\.]{0,63}:[a-z0-9-\\.]{0,63}:[^/].{0,1023}'], 'SecurityGroupIdList' => ['type' => 'list', 'member' => ['shape' => 'VpcSecurityGroupId'], 'max' => 10, 'min' => 1], 'ServerSideEncryptionConfiguration' => ['type' => 'structure', 'members' => ['KmsKeyId' => ['shape' => 'KmsKeyId']]], 'ServiceQuotaExceededException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'SharePointConfiguration' => ['type' => 'structure', 'required' => ['SharePointVersion', 'Urls', 'SecretArn'], 'members' => ['SharePointVersion' => ['shape' => 'SharePointVersion'], 'Urls' => ['shape' => 'SharePointUrlList'], 'SecretArn' => ['shape' => 'SecretArn'], 'CrawlAttachments' => ['shape' => 'Boolean'], 'VpcConfiguration' => ['shape' => 'DataSourceVpcConfiguration'], 'FieldMappings' => ['shape' => 'DataSourceToIndexFieldMappingList'], 'DocumentTitleFieldName' => ['shape' => 'DataSourceFieldName']]], 'SharePointUrlList' => ['type' => 'list', 'member' => ['shape' => 'Url'], 'max' => 100, 'min' => 1], 'SharePointVersion' => ['type' => 'string', 'enum' => ['SHAREPOINT_ONLINE']], 'StartDataSourceSyncJobRequest' => ['type' => 'structure', 'required' => ['Id', 'IndexId'], 'members' => ['Id' => ['shape' => 'DataSourceId'], 'IndexId' => ['shape' => 'IndexId']]], 'StartDataSourceSyncJobResponse' => ['type' => 'structure', 'members' => ['ExecutionId' => ['shape' => 'String']]], 'StopDataSourceSyncJobRequest' => ['type' => 'structure', 'required' => ['Id', 'IndexId'], 'members' => ['Id' => ['shape' => 'DataSourceId'], 'IndexId' => ['shape' => 'IndexId']]], 'String' => ['type' => 'string', 'max' => 2048, 'min' => 1], 'SubmitFeedbackRequest' => ['type' => 'structure', 'required' => ['IndexId', 'QueryId'], 'members' => ['IndexId' => ['shape' => 'IndexId'], 'QueryId' => ['shape' => 'QueryId'], 'ClickFeedbackItems' => ['shape' => 'ClickFeedbackList'], 'RelevanceFeedbackItems' => ['shape' => 'RelevanceFeedbackList']]], 'SubnetId' => ['type' => 'string', 'max' => 200, 'min' => 1, 'pattern' => '[\\-0-9a-zA-Z]+'], 'SubnetIdList' => ['type' => 'list', 'member' => ['shape' => 'SubnetId'], 'max' => 6, 'min' => 1], 'TableName' => ['type' => 'string', 'max' => 100, 'min' => 1, 'pattern' => '^[a-zA-Z][a-zA-Z0-9_]*$'], 'TextDocumentStatistics' => ['type' => 'structure', 'required' => ['IndexedTextDocumentsCount'], 'members' => ['IndexedTextDocumentsCount' => ['shape' => 'IndexedTextDocumentsCount']]], 'TextWithHighlights' => ['type' => 'structure', 'members' => ['Text' => ['shape' => 'String'], 'Highlights' => ['shape' => 'HighlightList']]], 'ThrottlingException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'TimeRange' => ['type' => 'structure', 'members' => ['StartTime' => ['shape' => 'Timestamp'], 'EndTime' => ['shape' => 'Timestamp']]], 'Timestamp' => ['type' => 'timestamp'], 'Title' => ['type' => 'string', 'max' => 1024, 'min' => 1], 'UpdateDataSourceRequest' => ['type' => 'structure', 'required' => ['Id', 'IndexId'], 'members' => ['Id' => ['shape' => 'DataSourceId'], 'Name' => ['shape' => 'DataSourceName'], 'IndexId' => ['shape' => 'IndexId'], 'Configuration' => ['shape' => 'DataSourceConfiguration'], 'Description' => ['shape' => 'Description'], 'Schedule' => ['shape' => 'ScanSchedule'], 'RoleArn' => ['shape' => 'RoleArn']]], 'UpdateIndexRequest' => ['type' => 'structure', 'required' => ['Id'], 'members' => ['Id' => ['shape' => 'IndexId'], 'Name' => ['shape' => 'IndexName'], 'RoleArn' => ['shape' => 'RoleArn'], 'Description' => ['shape' => 'Description'], 'DocumentMetadataConfigurationUpdates' => ['shape' => 'DocumentMetadataConfigurationList']]], 'Url' => ['type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '^(https?|ftp|file):\\/\\/(.*)'], 'ValidationException' => ['type' => 'structure', 'members' => ['Message' => ['shape' => 'ErrorMessage']], 'exception' => \true], 'ValueImportanceMap' => ['type' => 'map', 'key' => ['shape' => 'ValueImportanceMapKey'], 'value' => ['shape' => 'Importance']], 'ValueImportanceMapKey' => ['type' => 'string', 'max' => 50, 'min' => 1], 'VpcSecurityGroupId' => ['type' => 'string', 'max' => 200, 'min' => 1, 'pattern' => '[-0-9a-zA-Z]+']]];