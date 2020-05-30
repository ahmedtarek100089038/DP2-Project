# DP2-Project
This is a Craft Pop House E-commerce Website created by:

Lee Jia Jun (101210855)
Jason Goh Wei Ting(101210787)
Ahmed Tarek Abdelraouf (100089038)

Sprint 1 Date: 20 April 2020 - 6 May 2020
Allocated time for sprint 1: 48 hours in total

Sprint 2 Date: 18 May 2020 - 29 May 2020
Allocated time for sprint 2: 60 hours in total

************************************************************
There are few steps before this website can be used properly.

First: Import Database.
1. Move the file into xampp/htdocs/ and paste it in that folder.
2. Start Apache and MySQL in XAMPP Control Panel.
3. Go browser and type localhost/phpmyadmin.
4. Create new database named craftpophouse_db.
5. Click the created database and click import and choose the craftpophouse_db.sql in the Database folder.
6. Click Go!
7. Type localhost/DP2-Project and enter.
8. Enjoy.

Second: Configuration of the Mailing function in XAMPP(php.ini & sendmail.ini)
1. Navigate to xampp file.
2. Click php folder and search for php.ini. (It should be 74KB file)
3. Open the file and use ctrl + f to find 'mail function'.
4. Find sendmail_path below it and replace it with the following sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
5. Save the file.
6. Now, navigate to the xampp again and find sendmail folder and search for sendmail.ini  (It should be 3KB file)
7. Open the file and and make some changes inside. Follow the commands below.
8. smtp_server=smtp.gmail.com
9. smtp_port=587
10. auth_username= craftpophousekuching@gmail.com
11. auth_password= craftpophouseadmin
12. Save the file.
13. Now you can send email in some of the webpages such as Subscription, Contact Us, Feedback Form, Customer Service Form.

Third: Log in to the live chat API.
1. Go to https://dashboard.tawk.to/login
2. Log in using the following account.
3. Email Address: craftpophousekuching@gmail.com
4. Password: craftpophouseadmin
5. Join the live chat with customer in that site.

Forth: Log in to the Gmail account of the website.
1. Go to https://mail.google.com/mail/u/0/#inbox
2. Log in using the following account.
3. Email Address: craftpophousekuching@gmail.com
4. Password: craftpophouseadmin
5. Check emails in this gmail account.






