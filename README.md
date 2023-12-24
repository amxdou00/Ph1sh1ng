# Ph1sh1ng

## What is phishing ?

## About this project

This project will allow you to quickly set up a phishing campain.
You have the possibility to add your own html pages in the `pages` directory and stylesheets in the `css` directory.
The credentials of the user, along side their IP address and the current date and time will be logged in the `creds.log` file

## Adding your own phishing page

If you want to add your own phishing page, do the following

1. Create a new html file with the name of your choice `myfile.html` inside the `pages` folder

2. Create a new css file with the name of your choice (preferably the same as the html file) `myfile.css` inside the `css` folder

3. Link the css file to your html by adding between the html head tags:
``` html
<link rel="stylesheet" href="css/myfile.css">
```

4. Once this is done, you can write your own html and css
Your html file should:
- Contain a form with the attributes `action="phishing.php" method="POST"`
- Contain an input field with the attribute `name="username"`
- Contain an input field with the attribute `name="password"`
- Contain an input field with the attributes `type="hidden" name="account_name" value="<ACCOUNT>"`
- Contain an input field with the attributes `type=hidden name="redirect" value="<REDIRECT_LINK>"`
Replace <REDIRECT_LINK> with the link you want the victim to be redirected to after entering the credentials.
Replace <ACCOUNT> with the name of the account (eg. Google, Linkedin)

5. Once all this done, you need to replace the `index.html` by your own html file. You can do so by running the following command in the Ph1sh1ng directory:
``` bash
./select.sh pages/myfile.html
```
> Make sure that `select.sh` can be executed: `chmod +x select.sh`