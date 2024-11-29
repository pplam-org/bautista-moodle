# Bautista Moodle

This project aims to develop a comprehensive virtual platform for the Bautista High School in León, Nicaragua, with the goal of streamlining academic management. This platform will focus on automating and centralizing processes such as enrollment, scheduling, student assessment, and communication between teachers, students, and parents. We are using [CMS Moodle](https://docs.moodle.org/405/en/Main_page) to develop this software.

# Instalation and configuration

We have created documentation for the correct instalation pertaining to this project. You can follow the instructions and make sure to ask about if you have any questions: 
- [Install moodle in MacOS by PPLAME](https://docs.google.com/document/d/18Fy0mYQIVuNXthlYB4cYHdFnjxfgKo4PZgjT2xmpo9A/edit?tab=t.0#heading=h.e2gj8tppv0nu)
- [Install moodle in WindowsOS by PPLAM](https://docs.google.com/document/d/1ua0w5ImdO7Anb1rnjQ3tRvT-JPQ9TpSaDVrOiVqZgDU/edit?tab=t.0#heading=h.5v2ti6euy73n)

Note: You need to have the sample instalation before clone this repository. Make sure you did it this way before.

# Clone this repository
Remember you can clone `bautista-moodle` folder whatever you want but don't forget to add `moodledata` folder path to your `config.php` file. This is for your server can find this folder and its configurations inside. 

Inside this file you only need to change the path for the vairable `$CFG->dataroot` carefully.

For example 
`$CFG->dataroot = /Users/username/documents/bautista-moodle/moodledata`

Whether you have this repository in previous path in your development device.
