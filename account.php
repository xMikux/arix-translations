<?php

return [
    'account-overview' => 'Account Overview',
    'twofactor-messagebox' => 'Your account must have two-factor authentication enabled in order to continue.',
    'apikey' => 'API Key',
    'sshkey' => 'SSH Key',

    'update-password' => [
        'current' => '目前密碼',
        'new' => '新密碼',
        'requirements' => 'Your new password should be at least 8 characters in length and unique to this website.',
        'confirm' => 'Confirm New Password',
        'update' => 'Update Password',
    ],

    'update-email' => [
        'isUpdated' => 'Your primary email has been updated',
        'update' => 'Update Email',
        'email' => 'Email',
        'confirm' => 'Confirm Password',
    ],

    'appearance' => [
        'title' => 'Appearance',
        'lightDarkMode' => 'Light/Dark Mode',
        'light' => 'Light',
        'dark' => 'Dark',
        'language' => 'Panel Language',
        'panel-sounds' => 'Panel Sounds',
        'on' => 'On',
        'off' => 'Off',
    ],

    'twofactor' => [
        'title' => 'Two Factor Authentication',
        'isEnabled' => 'Two-step verification is currently enabled on your account.',
        'isDisabled' => 'You do not currently have two-step verification enabled on your account. Click the button below to begin configuring it.',
        'disable' => 'Disable Two-Step',
        'enable' => 'Enable Two-Step',
        
        'disable-dialog' => [
            'password' => '密碼',
            'cancel' => '取消',
            'must-enter-password' => 'You must enter your account password to continue.',
            'disable' => '停用',
        ],

        'setup-dialog' => [
            'description' => 'Scan the QR code above using the two-step authentication app of your choice. Then, enter the 6-digit code generated into the field below.',
            'account-password' => 'Account Password',
            'qrcode-loading' => 'Waiting for QR code to load...',
            'enter-6digit-password' => 'You must enter the 6-digit code and your password to continue.',
            'enable' => '啟用',
            'cancel' => '取消',
        ],
    ],

    'apiKey' => [
        'label' => 'Description',
        'description' => 'A description of this API key.',
        'allowedIPs-label' => 'Allowed IPs',
        'allowedIPs-description' => 'Leave blank to allow any IP address to use this API key, otherwise provide each IP address on a new line.',
        'createButton' => 'Create',

        'your-keys' => 'Your API Key',
        'store-save' => 'The API key you have requested is shown below. Please store this in a safe location, it will not be shown again.',
        'close' => '關閉',

        'delete-api-key' => 'Delete API Key',
        'delete-key' => 'Delete Key',
        'all-requests-invalidated-1' => 'All requests using the',
        'all-requests-invalidated-2' => 'key will be invalidated.',
        'loading' => '載入中...',
        'no-key-found' => 'No API keys exist for this account.',
        'last-used' => 'Last used',
    ],

    'sshKey' => [
        'loading' => '載入中...',
        'no-key-found' => 'No SSH Keys exist for this account.',
        'added-on' => 'Added on',

        'createForm' => [
            'key-name' => 'SSH Key Name',
            'public-key' => 'Public Key',
            'public-key-desc' => 'Enter your public SSH key.',
            'save' => 'save',
        ],

        'deleteForm' => [
            'delete-ssh-key' => 'Delete SSH Key',
            'delete-key' => 'Delete Key',
            'will-invalidate-1' => 'Removing the',
            'will-invalidate-2' => 'SSH key will invalidate its usage across the Panel.',
        ],
    ],

    'recoveryTokensDialog' => [
        'title' => 'Two-Step Authentication Enabled',
        'description' => 'Store the codes below somewhere safe. If you lose access to your phone you can use these backup codes to sign in.',
        'alert' => 'These codes will not be shown again.',
        'doneButton' => 'Done',
    ],
];