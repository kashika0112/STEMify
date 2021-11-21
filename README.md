# STEMify
Are you bored of reading or learning science from TextBooks? Here's STEMify for you that presents science in the most fun way possible!

# Objective
**STEMify is a website that promotes STEM education through fun science experiments for high school students and other professionals. It displays a list of experiments in Physics, Chemistry, Biology and Mathematics whose database was created using Webscraping in Python. It also offers the feature for students to add experiments to wishlist, and write a proposal for their own experiments.**<br/></br>
**NOTE** - This project is still under development and many features will be added with time.

# Content
- [Tech Stack](#tech-stack)
- [Features](#features)
- [Application Overview](#application-overview)
- [Webscraping](#webscraping)
- [Challenges Faced](#challenges-faced)
- [Future Scope](#future-scope)
- [Contributors](#contributors)

# Tech Stack
![](https://img.shields.io/badge/Python-3776AB?style=for-the-badge&logo=python&logoColor=white)
![](https://img.shields.io/badge/HTML-239120?style=for-the-badge&logo=html5&logoColor=white)
![](https://img.shields.io/badge/CSS-239120?&style=for-the-badge&logo=css3&logoColor=white)
![](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![](https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)
![](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white)
![](https://img.shields.io/badge/Visual%20Studio%20Code-0078d7.svg?style=for-the-badge&logo=visual-studio-code&logoColor=white)
<br/>
- **Frontend:** HTML, CSS, Bootstrap, JavaScript
- **Backend:** PHP
- **DBMS:** MySQL
- **Webscraping:** Python, BeautifulSoup

# Features
- It displays a list of fun science experiments based on 4 categories namely - Physics, Maths, Biology and Mathematics.
- The database for these experiments has been using Webscraping through BeautifulSoup Module of Python.
- The website offers features like adding certain experiments to wishlist and to add a proposal for your own experiment.(still under development).

# Application Overview
- *Home Page* <br/><br/>
<img src = "https://github.com/kashika0112/STEMify/blob/main/img/Screenshot%20(241).png" width = 900, height = "500">

-*Subjects* <br/><br/>
<img src = "https://github.com/kashika0112/STEMify/blob/main/img/Screenshot%20(242).png"  width = 900, height = "500">

-*Login-In and Register Pages* <br/><br/>
<img src = "https://github.com/kashika0112/STEMify/blob/main/img/Screenshot%20(244).png" width = 450, height = "250">
<img src = "https://github.com/kashika0112/STEMify/blob/main/img/Screenshot%20(245).png" width = 450, height = "250">

-*Add Proposal for Your Own Experiment* <br/><br/>
<img src="https://github.com/kashika0112/STEMify/blob/main/img/Screenshot%20(243).png" width = 900, height = "500">

# Webscraping
Web scraping is an automatic method to obtain large amounts of data from websites. Most of this data is unstructured data in an HTML format which is then converted into structured data in a spreadsheet or a database so that it can be used in various applications. 

**Module Used: BeautifulSoup** <br/>
Beautiful Soup is a Python package for parsing HTML and XML documents. It creates a parse tree for parsed pages that can be used to extract data from HTML, which is useful for web scraping.<br/>
` import requests ` <br/>
` from bs4 import BeautifulSoup` <br/>
` import pandas as pd ` <br/>
` r = requests.get("url") ` <br/>
` c = r.content ` <br/>
` soup = BeautifulSoup(c, "html.parser") ` <br/>

# Challenges Faced
- While creating a database through webscraping, a lot of tags were not used in the most efficient way that caused difficulty in extracting data
- Developing backend in PHP is difficult as it is my first PHP project.

# Future Scope
- The website could be developed completely and be further deployed.
- A few more features can be added like - a Science Week where students can upload videos performing science experiments.
- We can create a community of mentors and students for mentorships.

# Contributors 
This repository has been made and maintained by [Kashika Akhouri](https://github.com/kashika0112)
