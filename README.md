PS C:\wamp64\www\modul4> git init
Initialized empty Git repository in C:/wamp64/www/modul4/.git/
PS C:\wamp64\www\modul4> echo "*.sass" >> .gitignore
PS C:\wamp64\www\modul4> echo "/bin" >> .gitignore
PS C:\wamp64\www\modul4> echo "/admin" >> .gitignore
PS C:\wamp64\www\modul4> echo "/config" >> .gitignore
PS C:\wamp64\www\modul4> git add .
PS C:\wamp64\www\modul4> git status
On branch master

No commits yet

Changes to be committed:
  (use "git rm --cached <file>..." to unstage)
        new file:   .gitignore
        new file:   .htaccess
        new file:   add-article.php
        new file:   ajax/add_article.php
        new file:   ajax/chat.php
        new file:   ajax/comment_add.php
        new file:   ajax/deleteUser.php
        new file:   ajax/exit.php
        new file:   ajax/load_messages.php
        new file:   ajax/login.php
        new file:   ajax/mail.php
        new file:   ajax/reg.php
        new file:   blocks/aside.php
        new file:   blocks/chat.php
        new file:   blocks/footer.php
        new file:   blocks/head.php
        new file:   blocks/header.php
        new file:   contacts.php
        new file:   css/main.css
        new file:   error.php
        new file:   img/favicon.ico
        new file:   index.php
        new file:   lib/mysql.php
        new file:   login.php
        new file:   post.php
        new file:   register.php
        new file:   users.php

PS C:\wamp64\www\modul4> git commit -m "загрузка проекта" 
[master (root-commit) 7e5545b] загрузка проекта
 27 files changed, 934 insertions(+)
 create mode 100644 .gitignore
 create mode 100644 .htaccess
 create mode 100644 add-article.php
 create mode 100644 ajax/add_article.php
 create mode 100644 ajax/chat.php
 create mode 100644 ajax/comment_add.php
 create mode 100644 ajax/deleteUser.php
 create mode 100644 ajax/exit.php
 create mode 100644 ajax/load_messages.php
 create mode 100644 ajax/login.php
 create mode 100644 ajax/mail.php
 create mode 100644 ajax/reg.php
 create mode 100644 blocks/aside.php
 create mode 100644 blocks/chat.php
 create mode 100644 blocks/footer.php
 create mode 100644 blocks/head.php
 create mode 100644 blocks/header.php
 create mode 100644 contacts.php
 create mode 100644 css/main.css
 create mode 100644 error.php
 create mode 100644 img/favicon.ico
 create mode 100644 index.php
 create mode 100644 lib/mysql.php
 create mode 100644 login.php
 create mode 100644 post.php
 create mode 100644 register.php
 create mode 100644 users.php
PS C:\wamp64\www\modul4> git checkout -b feature/blog
Switched to a new branch 'feature/blog'
PS C:\wamp64\www\modul4> mkdir blog


    Каталог: C:\wamp64\www\modul4


Mode                 LastWriteTime         Length Name
----                 -------------         ------ ----
d-----          4/4/2024   9:12 PM                blog


PS C:\wamp64\www\modul4> echo nul > blog\index.js
PS C:\wamp64\www\modul4> echo nul > blog/index.html
PS C:\wamp64\www\modul4> git add .
PS C:\wamp64\www\modul4> git commit -m "Add blog files"
[feature/blog 528f21b] Add blog files
 2 files changed, 0 insertions(+), 0 deletions(-)
 create mode 100644 blog/index.html
 create mode 100644 blog/index.js
PS C:\wamp64\www\modul4> git remote add origin https://github.com/SergeyMorin/phpbcnd.git
PS C:\wamp64\www\modul4> git push -u origin master
Enumerating objects: 34, done.
Counting objects: 100% (34/34), done.
Delta compression using up to 8 threads
Compressing objects: 100% (31/31), done.
Writing objects: 100% (34/34), 14.15 KiB | 1.01 MiB/s, done.
Total 34 (delta 7), reused 0 (delta 0), pack-reused 0
remote: Resolving deltas: 100% (7/7), done.
remote:
remote: Create a pull request for 'master' on GitHub by visiting:
remote:      https://github.com/SergeyMorin/phpbcnd/pull/new/master
remote:
To https://github.com/SergeyMorin/phpbcnd.git
 * [new branch]      master -> master
branch 'master' set up to track 'origin/master'.
PS C:\wamp64\www\modul4> 
