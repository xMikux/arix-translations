<?php

return[
    'backups' => '備份',
    'manage-backups' => '管理備份',
    'create-backup' => '建立備份',
    'have-been-allocated' => '此伺服器已建立 {{current}}／{{max}} 個備份。',

    'name' => '名稱',
    'size' => '大小',
    'creation-date' => '建立日期',
    'checksum' => '校驗碼',

    'failed' => '已失敗',
    'continue' => '繼續',

    'download' => '下載',
    'restore' => '還原',
    'lock' => '鎖定',
    'unlock' => '解鎖',
    'delete' => '刪除',

    'limit-is-0' => '無法在此伺服器上建立備份，因為備份數量限制為 0。',
    'try-going-back' => '看起來我們沒有更多的備份可供顯示給你，請嘗試返回上一頁。',
    'no-backups' => '看起來這邊目前沒有儲存任何備份。',
    'no-longer-protected' => '此備份將不再受到自動化或意外刪除的保護。',
    'your-server-will-be-stopped' => '你的伺服器將會被停止。在完成之前，你無法控制啟動狀態、訪問檔案管理或是建立額外的備份。',
    'delete-all-files' => '在還原備份前刪除所有檔案。',
    'permanent-operation' => '這是個永久性操作。一旦刪除備份，將無法再度恢復。',

    'create' => [
        'title' => '建立伺服器備份',
        'backup-name' => '備份名稱',
        'backup-name-description' => '如果有提供，將會應用於顯示該備份的名稱。',
        'ignored-files-directories' => '忽略檔案和資料夾',
        'ignored-files-directories-description' => ' 如有定義，將在產生此備份時忽略所指定的檔案及資料夾。留白將使用目錄中 .pteroignore 的檔案內容（若檔案存在）。支援萬用字元所比對的檔案與資料夾，以及使用驚嘆號在路徑前綴來忽略規則。',
        'locked' => '已鎖定',
        'locked-description' => '在明確解鎖前，防止此備份被刪除。',
        'start' => '開始備份',
    ]
];