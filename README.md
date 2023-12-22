# HealthVirtucare-Website Installation Guide

Hello, I'm going to guide you through the installation process for the HealthVirtuCare website on your local machine.

<h5><i>Please refer to the provided PDF 'reference' for additional details and visual instructions.</i></h5>

1. First, I need you to install the XAMPP application in your primary drive (usually C drive). This will serve as the localhost server for our website. You can download XAMPP [from here](https://www.apachefriends.org/).

2. After installing XAMPP, copy the entire 'hackathon' folder to `C:\xampp\htdocs`.

3. Open the `xampp-control` file to access the server control panel.

4. In the control panel, start both the Apache and MySQL servers from the action menu.

5. Now, open your web browser and go to `localhost/Hackathon/index.html`.

6. To access the database, type `localhost/phpmyadmin` in your browser.

## About the programming structure:
We have used HTML, CSS, and JS for the frontend, while PHP serves as the backend. For data management, MySQL has been employed. All of this is running on a local server.

<h2>Structure of a webpage</h2>

## HOME PAGE:
- This page provides a brief description of our website.
- Users can register or log in through this portal.
- Additional information about our organization is available.

## LOGIN/SIGNUP PAGE:
- Enter your Email Address, Name, and Password to register or log in.
- Choose whether you are a Patient or a Doctor.
- Based on your selection, you will be directed to the respective portal.

## DOCTOR'S PORTAL:
- Doctors can connect with their patients.
- A full schedule of each doctor is provided.

## PATIENT'S PORTAL:
- Patients can connect with doctors through live video calling.
  (We use the 'video SDK' API and handle authorization through PHP, using ports and tokens.)
- Patients can also book appointments.
- Frequently Asked Questions (FAQs) are available for reference.
<hr>
<h5><i>I hope this guide helps you set up and explore the HealthVirtuCare website on your local machine. If you have any questions or issues, feel free to reach out.</i></h5>
