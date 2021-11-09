
# Automated Attendance and ID Card Generating Portal (AAIG Portal)

AAIG portal is a website useful for university or college management for neat and proper 
organization of information and details of professors, faculty members and students. 

AAIG is an automated attendance system that consists of a web system for entire 
organization to record attendance,  generate respective excel reports, generate ID card for student and faculty members and 
students can register to different courses offered by the faculty. The web application 
is to be used by students, faculty, and admin personnel.

![image](https://user-images.githubusercontent.com/76431379/140862129-e69bc7f3-5fab-4a66-a95c-575b213ae94a.png)

## Features

We have alloted many roles for faculty,admin and students
#### Role of a faculty:
• Each Faculty has his/her own login. On login, the class faculty can see a list of students
or members registered under it.


• The faculty may take the attendance and mark the present students using checkbox
provided in front of every student name. This attendance sheet is stored and sent to the
central administrator of the organization and stored there.


• They can edit their personel details and get generate their ID card

#### Role of an Admin:
• The role of the admin is to add new student and faculty by entering his personal details
and provides the faculty/student with userID and password so that he/she can access
the application.


• Admin can check the attendance of the particular student by entering the roll number
and generate attendance reports.

• The admin may check all attendance data, press a button to see defaulter list, search
for particular student attendance by name, search class attendance and generate excel
reports.

#### Role of a Student:
• The student logs in and checks his/her attendance statistics for different
courses/faculties.

• The student also has the option to register for course available and once he registers for
the course, his name will appear for attendance whenever a faculty logs in to record the
attendance.


## Steps to get the project up and running

#From Zip Folder : 
1. In the project directory, create two folders namely, *images_student* and *images_faculty*, if not present already.
2. In any web broswer, type this URL : http://localhost/index.php
3. This will direct you to the landing/home page of the portal.
4. In order to create a new student and faculty for running the application and understanding its functionalities, go to admin tab.
5. Admin credentials are set to username - IITDH, password : pass#123

#From this repo :
1. Make sure you have the respective server configured in your machine for running LAMP Technologies (ex: XAMPP for windows, Apache for Linux, etc).
2. Create a new folder on your PC/Laptop in the directory (ex: htdocs for Windows) and open it in any code editor.
3. Run the following command in the terminal :  git clone https://github.com/harrithha/AAIG-Portal.git
4. In the project directory, create two folders namely, *images_student* and *images_faculty*.
5. In any web broswer, type this URL : http://localhost/index.php
6. This will direct you to the landing/home page of the portal.
7. In order to create a new student and faculty for running the application and understanding its functionalities, go to admin tab.
8. Admin credentials are set to username - IITDH, password : pass#123


## Common Issues faced 

There were many issues faced by us in the course of making this Portal , here we are attaching 
some issues with their possible reasons and some ways to overcome them.

#### Unable to see the uploaded images on the ID card or in the respective images folder:

If you are facing this issue on a Linux System one
of the major causes for this would be **not giving write 
permission to the files**

To check the file permissions for the
existing files you can use following command

``` bash
ls -la
```
To give write permission for a specific group use
```bash
chmod -R g+w <directory>
```
Or u can use one of the following commands
to give general permissions to root user and group
``` bash
chmod -R 776 <directory>
```
In case after using above command if you are not able to access the directory 
due to lack of permission use of the folling command
```bash
sudo chmod -R 776 <directory>
```

## Authors

- [@harrithha](https://github.com/harrithha)
- [@chidaksh](https://github.com/chidaksh)
- [@arvind](https://github.com/Arvind-kumar-M-08)


## Demo

To have a brief overview how this portal works 
[check out this video](https://www.youtube.com/watch?v=AvWTs3dQLSQ)


