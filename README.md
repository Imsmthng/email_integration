# Email Integration using Laravel

## Mail Integration using mailtrap smtp

First you need to create [Mailtrap account](https://mailtrap.io/) you can use your github account to create account. It restrains the spam and makes you test mails smoothly sending from laravel app.

After creating your account go to mailtrap dashboard, click on the small gear icon. Copy the username and password from SMTP Settings tab.

After creating the account, open .env file and incorporate the mailtrap configuration.

```
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME= your mailtrap username
MAIL_PASSWORD= your mailtrap password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS= // your email address
```

___

## Mail Integration using gmail.com smtp

Before using your [Gmail account](gmail.com) for email integration. First you need to change the security settings of gmail account that you are using for your application.

Go to Manage your google account then navigate to Security and Turn on less secure app access

After doing this steps, open .env file and incorporate the smtp.gmail configuration 

```
# MAIL_MAILER=smtp
# MAIL_HOST=smtp.gmail.com
# MAIL_PORT=465
# MAIL_USERNAME= your gmail account  
# MAIL_PASSWORD= your password
# MAIL_ENCRYPTION=ssl
# MAIL_FROM_ADDRESS= your email address
```



