<?php

return[
    'backups' => '備份',
    'manage-backups' => '管理備份',
    'create-backup' => '建立備份',
    'have-been-allocated' => '此伺服器已建立 {{current}}／{{max}} 個備份。',

    'name' => '名稱',
    'size' => '大小',
    'creation-date' => 'Creation date',
    'checksum' => 'Checksum',

    'failed' => 'Failed',
    'continue' => 'Continue',

    'download' => 'Download',
    'restore' => 'Restore',
    'lock' => 'Lock',
    'unlock' => 'Unlock',
    'delete' => 'Delete',

    'limit-is-0' => 'Backups cannot be created for this server because the backup limit is set to 0.',
    'try-going-back' => 'Looks like we\'ve run out of backups to show you, try going back a page.',
    'no-backups' => 'It looks like there are no backups currently stored for this server.',
    'no-longer-protected' => 'This backup will no longer be protected from automated or accidental deletions.',
    'your-server-will-be-stopped' => 'Your server will be stopped. You will not be able to control the power state, access the file manager, or create additional backups until completed.',
    'delete-all-files' => 'Delete all files before restoring backup.',
    'permanent-operation' => 'This is a permanent operation. The backup cannot be recovered once deleted.',

    'create' => [
        'title' => 'Create server backup',
        'backup-name' => 'Backup name',
        'backup-name-description' => 'If provided, the name that should be used to reference this backup.',
        'ignored-files-directories' => 'Ignored Files & Directories',
        'ignored-files-directories-description' => ' Enter the files or folders to ignore while generating this backup. Leave blank to use the contents of the .pteroignore file in the root of the server directory if present. Wildcard matching of files and folders is supported in addition to negating a rule by prefixing the path with an exclamation point.',
        'locked' => 'Locked',
        'locked-description' => 'Prevents this backup from being deleted until explicitly unlocked.',
        'start' => 'Start backup',
    ]
];