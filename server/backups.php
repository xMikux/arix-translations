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
    'try-going-back' => '看起來我們已經用完這頁的 Looks like we\'ve run out of backups to show you, try going back a page.',
    'no-backups' => '看起來這邊目前沒有儲存任何備份。',
    'no-longer-protected' => 'This backup will no longer be protected from automated or accidental deletions.',
    'your-server-will-be-stopped' => 'Your server will be stopped. You will not be able to control the power state, access the file manager, or create additional backups until completed.',
    'delete-all-files' => 'Delete all files before restoring backup.',
    'permanent-operation' => 'This is a permanent operation. The backup cannot be recovered once deleted.',

    'create' => [
        'title' => '建立伺服器備份',
        'backup-name' => '備份名稱',
        'backup-name-description' => 'If provided, the name that should be used to reference this backup.',
        'ignored-files-directories' => 'Ignored Files & Directories',
        'ignored-files-directories-description' => ' Enter the files or folders to ignore while generating this backup. Leave blank to use the contents of the .pteroignore file in the root of the server directory if present. Wildcard matching of files and folders is supported in addition to negating a rule by prefixing the path with an exclamation point.',
        'locked' => '已鎖定',
        'locked-description' => 'Prevents this backup from being deleted until explicitly unlocked.',
        'start' => '開始備份',
    ]
];