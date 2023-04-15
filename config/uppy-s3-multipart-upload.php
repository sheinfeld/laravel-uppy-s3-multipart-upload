<?php

return [
    's3_disk' => 's3',
    's3' => [
        'bucket' => [
            /*
             * Folder on bucket to save the file
             */
            'folder' => '',
        ],
        'presigned_url' => [
            /*
             * Expiration time of the presigned URLs
             */
            'expiry_time' => '+1 hour',
        ],
    ],
];
