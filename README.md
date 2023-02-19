# Test-Chemcker-Bot
A Telegram cc checker bot with some extra added features and working gates. 

So, This basically is [Hecker-CHK.](https://github.com/Junaid433/hecker-chk) With a few extra added features.

SETUP : 
```
 Set Webhook to bot.php

 Change Bot token in core/core.php 

 Change bot token on core/functions.php line 27

 You will find editmessagetext function laying down in many files. When one command isn't working properly, usually it is causing the issue. Change that !

 You do not need to setup any gates ( for now ) as the gates are live since 6 months. (i stopped maintaining the gates , soon you will need  your own gates )

 And other basic things. Read [This](https://github.com/Junaid433/hecker-chk#:~:text=README.md-,Hecker%2DCHK,-Simple%20CC%20Checker) for more help
 ```
 
 Features : 
 
 ```
 Mass cc check with all gates.
 Mass sk check.
 Horrorscope lookup.
 Bin lookup.
 Iban lookup.
 Ban someone by userid.
 Authorize chat with chatid or by typing /authorize.
 Reply to check cc
 ```
 
 Known Bugs: 
 
 ```
 Processes the same cc multiple times if you input more than 4 cards
 Theres a lot more for sure, which are unknown.
 ```
Some Faqs:

```
Q : Can I host it on replit or own server?
> A : Yes, You can anywhere. But might have some issues with heroku, vercel sadly.

Q : Bot Isn't Capturing any message
> A :  Lets Take, Gates/chk.php for a example. Look at the $msg variable. It will capture anything between `<br>Result: and </span><br>`. Didn't get it? OK! Lets think your cc checker api outputs a result : CC : 12345 <br>Result: Insufficient Funds</span><br> Bot output would be Insufficient Funds. You can configure $msg variable to capture any other formats too

Q : Bot isn't replying
> A : Most Probably webhook not set. You messed with codes ( already a mess fml )

Q: Bot not editing message
> A : editmessagetext function related issues as stated above.
```
Some comments :

> I know i didn't did the work great.

> I personally don't like databases. But they are really important tbh.

> I do not publish updates of my codes. Once its outdated, you either leave it or fix it yourself.

NEED HELP ?  

You can contact me any time.

    Telegram : @fakehecker (https://t.me/fakehecker)

    Facebook : Junaid Rahman (https://www.facebook.com/jnaid.rahman.im/)


