# PHP Website Security & hacking protection

## Main topics:
* Principle of least privilege.
* Passwords and encryption.
* Data hiding.
* Security through obscurity.
* Account lock attacks.
* Brute force attacks.
* Modified requests.
* Error reporting.
* Forced browsing.
* Path traversal.
* Data parameter delimeters.
* SQL/PHP injection attacks.
* XSS attacks (cross-site scripting attacks).
* Session highjack / fixation.
* Phishing.
* General security principles.

---

**What is web security?**  
Web security refers to the measures and practices implemented to protect websites, web applications, and web services from various online threats and vulnerabilities.

**Why web security?** 
1. Websites are public.
1. Users add personal information.
1. Knowledge and action.
1. Takes years to master.
1. Ongoing process.

**What is a hacker?**  
A hacker is someone who uses their technical knowledge and skills to gain unauthorized access to computer systems, networks, or data.

**Types of hackers:**

1. **White Hat Hacker**: Also known as ethical hackers, these individuals use their skills to identify security vulnerabilities in systems and networks, often employed by organizations to conduct penetration testing and security assessments to improve cybersecurity defenses.

2. **Black Hat Hacker**: These hackers engage in malicious activities, such as unauthorized access, data theft, or sabotage, for personal gain, financial profit, or simply to cause harm. They often exploit security weaknesses for illegal activities and may be involved in cybercrime.

3. **Grey Hat Hacker**: Grey hat hackers operate between the ethical and unethical spectrum. They may hack into systems without permission but not necessarily with malicious intent. Their actions may range from exposing security flaws to gaining unauthorized access for personal curiosity.

4. **Script Kiddies**: These individuals lack deep technical expertise but use pre-existing tools and scripts developed by others to launch simple cyber attacks. They often engage in hacking for fun or to prove their skills, without fully understanding the implications of their actions.

5. **Hacktivists**: Hacktivists are hackers who engage in hacking for political or social causes. They may target government agencies, corporations, or other organizations to promote their ideological agendas or to protest against perceived injustices.

6. **State-Sponsored Hackers**: These hackers operate on behalf of governments or state entities, conducting cyber espionage, sabotage, or cyber warfare to gain strategic advantages, gather intelligence, or disrupt the operations of rival nations or organizations.

**What is social engineering?**   
it is the act of persuading someone to reveal their personal information in order to hack them instead of using brute force hacking

**How to prevent social engineeing:**
1. keep confidetial information hidden.
1. trash (make sure not keep any confidential information in the bin)
1. key logger. (you have to be carefull who you give access to your computer and opening emails and links)
1. publicly available information e.g. social meadia. ==> to avoid that you could use *2 step verifications*.
1. password reset security questions.
1. phishing. (a fake form that you fill with your information or a fake link that takes you to a login page)

**Keeping functional code private:** 
1. Avoid directory listing.(to do this, every single folder in the system should have a default **index.php** file) 
1. Private and public folders.
1. Always use PHP extensions.

**PHP code injection:**
This could happen by using the include function or by uploading a file as an image but actually contains PHP code you may end up running that code, and if you run your php code on a server you can take control of it such as check the database and see what it has, how many tables, etc...

**Keep it simple:**  
1. less points of entry: it is better to include all files in an index page instead of having separate pages that would make it easier to infilterate the website and also difficult to trace any errors or attacks,including everything in an index file makes it have only one point of entry.
1. Segmented code.
1. OOP. (it is better to have a class for each table that extends the database class).All these points make the code more organized and easier to deal with.

**Principle of least privilege:**  
1. admin access.
1. editor access.
1. user access.
1. everyone else.

---
##  Notes:
1. It's important to always update your software to the latest version, because the previous ones usually have flows that might have been fixed in the new version. (video #01)

1. There is no such thing as an absolute security, that is why it is important to find balance between security and inconviencing the users. (video #01)

1. Types of black hat hackers: (video #02)
    * curious users.
    * script kiddies. (who we should look out for)
    * thrill seekers. (are not usually a threat to small websites).
    * hacktivists.
    * trophy hunters. (similar to thrill seekers)
    * proffesionals. (who we should look out for)

1. It is very important to check your URL to ckeck that this is the website you are logging in to. (video #03)

1. Whenever you are creating a website keep the functional code in a separate file(functions and classes). (video #04)

1. You should not keep functions in the index file.

1. You should make a private folder and a public folder. (video #04)

1. To access a code file in a different folder we use `include` for example: `include "../private/functions.php";` in this code : .. means you go to a directory above the one you are currently in. After you excute this you can call functions in that file from you current index file. (video #04)

1. You shouldn't keep you sensitive data in a json file because it can be opened from browser. Instead, you should keep them in a PHP file (make a string with the same conent as the json file) (video #04)
1. Include or require can be dangerouse if you do not take care of the inforamtion that you are recieving. (video #05)
1. To prohibit such a thing:
    1. do not leave the file extention to the URL
    1. when loading jpegs or images make sure to crop them.
    1. check for files; to make sure that we are only reading from files that are contained in our current folder.
    example: 
    ``` php
    $page = isset($_GET['page']) ? $_GET['page'] : "home"; 
    $folder = "./"; #current folder
    $files = glob($folder."*.php");
    if(in_array($page . ".php", $files)){
        require ($page . ".php");
    }else{
        echo "could not find the file";
    }
    #this is to make sure that the file you are openning exists inside this folder.
    #this is called white listing; selecting what you want to see as opposed to banning certain things. So this is more secure. 
    ```
1. You should reduce the amount of code you have to edit when fixing your web application.(video #06)
1. Segmenting code means if you have a code in a file and the code becomes too big it is better to cut an amount of the code and put it in a different file and include the other file this makes it easier to read and trace the code and any errors that occure (makes the code more organised).(video #06)
1. `session_start()` is required beacause we need the session in order to login a user.(video #10)
1. The login error messege should not specify wether the email or the password is wrong, instead the message should be more vague such as: *wrong email or password*.This provides more protection against possible information stealing attempts.(video #10)
1. It is better to not use global variabls because it puts the system at risk.(video #10) 
1. access should be limited to certain people so that when any problems occue it is easier to guess who might be responsible. (video #11)
1. access of each user is defined based on the rank of the user. These ranks are created by the developer.(video #11)
1. SQL injections can be done usually in a form or sometimes in the URL.(video #12)
