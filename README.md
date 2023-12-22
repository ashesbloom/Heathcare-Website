# HealthVirtucare-Website
      CHECK OUT THE PDF FOR THE REFERENCE
1.Install xampp application in C drive(Primary Drive) which will act as a localhost server
                 >> https://www.apachefriends.org/
                  (it is too big(148 MB) for GitHub to be uploaded)

2. Copy the hackathon folder on    
                    C:\xampp\htdocs

3. Then open file xampp-control to open the control of the server

4. In the application start Apache and MySQL servers in the action menu

5. Then go to your browser and open >> localhost/Hackathon/index.html

6. To see the database go on the browser and type >> localhost/phpmyadmin

About the programming structure:
   We use HTML, CSS, and JS as a frontend and PHP as a backend.
for data management we used MySQL.

Running all that on a local server



Structure of HeatlthVirtuCare Portal
-->HOME PAGE:
        It gives a brief description of our website
        You can Register/Login yourself through this portal
        You can also read about us and Contact the organization.

LOGIN/SIGNUP PAGE:
          There you can enter your Email Address, Name, and Password.. and register or log in next you have to choose  If you are a Patient or a Doctor.
          According to the chosen field, you will be directed to the Doctor's Portal or Patient Portal

  DOCTOR'S PORTAL:
        Their doctor can Connect with their patients
        Also, there is the full schedule of every doctor is provided
        
  PATIENT'S PORTAL:
        Their Patient can connect with a doctor through live video calling
for video calling we used an API of  'video SDK' and listened through the authorized port and tokens via PHP 
        Also can book appointments
        There are some FAQs also
        

