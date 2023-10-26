# HealthVirtucare-Website
      SEE THE PDF FOR REFERENCE
1.Install xampp application in C drive(Primary Drive) which will act as a localhost server
                  https://www.apachefriends.org/
                  (it is too big(148 MB) for github to be uploaded)

2.Copy hackathon folder on 
                    C:\xampp\htdocs\Hackathon

3.Then open file xampp-control to open the control of the server

4.In the application start aparche and mysql server in the action menu

5.Then go to your browser and open (localhost/Hackathon/index.html)

6.To see the database go on browser and type localhost/phpmyadmin

About programming structure:
   We use HTML,CSS and JS as a frontend and PHP as a backend.
for data management we used MySQL.

Running all that on a local server



Structure of HeatlthVirtuCare Portal
-->HOME PAGE:
        It gives a breif description about our website
        You can Register/Login yourself through this portal
        You can also read about us and Contact the organization.

LOGIN/SIGNUP PAGE:
          There you can put your Email Address,Name and Password.. and register or login Next you have to choose  a If you are a Patient or Doctor.
          According to choosen field you will be directed to Doctor's Portal or Patients Portal

  DOCTOR'S PORTAL:
        There doctor can Connect with their patients
        Also there is the full schedule of every doctor is provided
        
  PATIENT'S PORTAL:
        There Patient can connect with doctor through live video calling
for video calling we used an API of  'videoSDK' and listen through the authorised port and tokens via PHP 
        Also can book the appointments
        There are some FAQs aslo
        

