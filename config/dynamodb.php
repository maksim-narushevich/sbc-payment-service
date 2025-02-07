<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default DynamoDb Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the DynamoDb connections below you wish
    | to use as your default connection for all DynamoDb work.
    */

    'default' => env('DYNAMODB_CONNECTION', 'local'),

    /*
    |--------------------------------------------------------------------------
    | DynamoDb Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the DynamoDb connections setup for your application.
    |
    | Most of the connection's config will be fed directly to AwsClient
    | constructor http://docs.aws.amazon.com/aws-sdk-php/v3/api/class-Aws.AwsClient.html#___construct
    */

    'connections' => [
        'aws' => [
            'credentials' => [
                'key' => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY'),
                // If using as an assumed IAM role, you can also use the `token` parameter
                'token' => env('AWS_SESSION_TOKEN'),
            ],
            'region' => env('AWS_DEFAULT_REGION'),
            // if true, it will use Laravel Log.
            // For advanced options, see http://docs.aws.amazon.com/aws-sdk-php/v3/guide/guide/configuration.html
            'debug' => env('DYNAMODB_DEBUG'),
        ],
        'aws_iam_role' => [
            'region' => env('AWS_DEFAULT_REGION'),
            'debug' => env('DYNAMODB_DEBUG'),
        ],
        'local' => [
            'credentials' => [
                'key' => env('AWS_ACCESS_KEY_ID'),
                'secret' => env('AWS_SECRET_ACCESS_KEY'),
            ],
            'region' => env('AWS_DEFAULT_REGION'),
            // see http://docs.aws.amazon.com/amazondynamodb/latest/developerguide/Tools.DynamoDBLocal.html
            'endpoint' => env('AWS_DYNAMODB_ENDPOINT'),
            'debug' => true,
        ],
        'test' => [
            'credentials' => [
                'key' => 'dynamodblocal',
                'secret' => 'secret',
            ],
            'region' => 'test',
            'endpoint' => env('AWS_DYNAMODB_ENDPOINT'),
            'debug' => true,
        ],
    ],
];
