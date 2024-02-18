<?php

return [
    'account-overview' => '帳號概觀',
    'twofactor-messagebox' => '你的帳號必須啟用雙重驗證才能繼續使用。',
    'apikey' => 'API 金鑰',
    'sshkey' => 'SSH 金鑰',

    'update-password' => [
        'current' => '目前密碼',
        'new' => '新密碼',
        'requirements' => '你的新密碼至少需要 8 個字元，並且應要是此網站獨特的。',
        'confirm' => '確認新密碼',
        'update' => '更新密碼',
    ],

    'update-email' => [
        'isUpdated' => '你的主要電子郵件已更新',
        'update' => '更新電子郵件',
        'email' => '電子郵件',
        'confirm' => '確認密碼',
    ],

    'appearance' => [
        'title' => '外觀',
        'lightDarkMode' => '淺色／深色模式',
        'light' => '淺色',
        'dark' => '深色',
        'language' => '控制面板語言',
        'panel-sounds' => '控制面板聲音',
        'on' => '開',
        'off' => '關',
    ],

    'twofactor' => [
        'title' => '雙重驗證',
        'isEnabled' => '你的帳號已啟用兩步驟驗證。',
        'isDisabled' => '你帳號尚未啟用兩步驟驗證。點擊下方按鈕來開始設定。',
        'disable' => '停用雙重驗證',
        'enable' => '啟用雙重驗證',
        
        'disable-dialog' => [
            'password' => '密碼',
            'cancel' => '取消',
            'must-enter-password' => '你必須輸入你的帳號密碼來繼續。',
            'disable' => '停用',
        ],

        'setup-dialog' => [
            'description' => '使用你所選的兩步驟驗證應用程式來掃描上方的 QR 碼。然後將產生的六位數代碼輸入到下方欄位中。',
            'account-password' => '帳號密碼',
            'qrcode-loading' => '等待 QR 碼載入...',
            'enter-6digit-password' => '你必須輸入六位數代碼和你的密碼來繼續。',
            'enable' => '啟用',
            'cancel' => '取消',
        ],
    ],

    'apiKey' => [
        'label' => '描述',
        'description' => '有關此 API 金鑰的描述。',
        'allowedIPs-label' => '已允許的 IP',
        'allowedIPs-description' => '留為空白來讓任何 IP 地址使用此 API 金鑰，不然在每一行提供一個 IP 地址。',
        'createButton' => '建立',

        'your-keys' => '你的 API 金鑰',
        'store-save' => '你所請求的 API 金鑰如下所示。請儲存在安全的位置，此金鑰將不再顯示。',
        'close' => '關閉',

        'delete-api-key' => '刪除 API 金鑰',
        'delete-key' => '刪除金鑰',
        'all-requests-invalidated-1' => '使用該金鑰所發出',
        'all-requests-invalidated-2' => '的請求將會無效。',
        'loading' => '載入中...',
        'no-key-found' => '此帳號上沒有任何 API 金鑰。',
        'last-used' => '最後使用',
    ],

    'sshKey' => [
        'loading' => '載入中...',
        'no-key-found' => '此帳號沒有存在任何 SSH 金鑰。',
        'added-on' => '新增於',

        'createForm' => [
            'key-name' => 'SSH 金鑰名稱',
            'public-key' => '公開金鑰',
            'public-key-desc' => '輸入你的公開 SSH 金鑰。',
            'save' => '儲存',
        ],

        'deleteForm' => [
            'delete-ssh-key' => '刪除 SSH 金鑰',
            'delete-key' => '刪除金鑰',
            'will-invalidate-1' => '移除',
            'will-invalidate-2' => 'SSH 金鑰將使其在控制面板中使用失效。',
        ],
    ],

    'recoveryTokensDialog' => [
        'title' => '雙重驗證已啟用',
        'description' => '在安全的地方儲存下方的代碼。如果你遺失你的電話，你可以用這些備援代碼來進行登入。',
        'alert' => '這些代碼將不會再次顯示。',
        'doneButton' => '完成',
    ],
];