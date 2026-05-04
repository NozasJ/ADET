<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
        $fname = "John Benedict I. Sazon";
        $Occupation = "Undergraduate Student";
        $Course = "BS Information Technology - Cybersecurity";
        $desc ="An undergraduate student majoring in Bachelor of Science and Information Technology with Specialization in Cybersecity, equipped with a wide range of skill set in technologies including C++, HTML, CSS, Adobe. With a strong adaptability and seeks opportunities to expand technical expertise.";
        $univ = "Far Eastern University - Institute of Technology";    
        $gmail = "Gmail: johnbenedictsazonedu@gmail.com";
        $femail = "FEU Email: 202412140@fit.edu.ph";
        $cnum = "Contact Number: 09931239007";
        $tskills = "Adobe Photoshop, C++, HTML, CSS, JavaScript, Python, SQL, PLSQL, Java, Microsoft Office";
        $sskills = "Critical Thinking, Problem Solving, Communication, Teamwork, Time Management";
        ?>
    <div class="container">
        <div class="header">
            <h1><?= $fname; ?></h1>
            <p><?= $Occupation; ?></p>
        </div>
       <div class="content">
            <div class = "line"></div>
                <p style = "font-size: 20pt; font-family: 'Times New Roman', Times, serif; color: rgb(5, 5, 5); font-weight: Bold;padding: 10px;margin: 0;">Profile</p>
            <div class = "line"></div>
            <div class = description>
                <p><?= $desc; ?></p>
            </div>
            <div class = "skills">
            <div class = "line"></div>
                <p style = "font-size: 20pt; font-family: 'Times New Roman', Times, serif; color: rgb(5, 5, 5); font-weight: Bold;padding: 10px;margin: 0;">Technical Skills</p>
            <div class = "line"></div>
                <span class = "skill">Adobe Photoshop</span>
                <span class = "skill">C++</span>
                <span class = "skill">HTML</span>
                <span class = "skill">CSS</span>
                <span class = "skill">JavaScript</span>
                <span class = "skill">Python</span>
                <span class = "skill">SQL</span>
                <span class = "skill">PLSQL</span>
                <span class = "skill">Java</span>
                <span class = "skill">Microsoft Office</span>
            <div class = "line"></div>
                <p style = "font-size: 20pt; font-family: 'Times New Roman', Times, serif; color: rgb(5, 5, 5); font-weight: Bold;padding: 10px;margin: 0;">Soft Skills</p>
            <div class = "line"></div>
                <span class = "skill">Critical Thinking</span>
                <span class = "skill">Problem Solving</span>
                <span class = "skill">Communication</span>
                <span class = "skill">Teamwork</span>
                <span class = "skill">Time Management</span>
            <div class = "line"></div>
                <p style = "font-size: 20pt; font-family: 'Times New Roman', Times, serif; color: rgb(5, 5, 5); font-weight: Bold;padding: 10px;margin: 0;">Education</p>
            <div class = "line"></div>
                <H1>High School</H1>
                <p>St. Matthew College (2019-2022)</p>
                <H1>Senior High School</H1>
                <p>FEU High School (2022-2024)</p>
                <H1>College</H1>
                <p><?= $univ; ?> (2024-Present)</p>
            <div class = "line"></div>
                <p style = "font-size: 20pt; font-family: 'Times New Roman', Times, serif; color: rgb(5, 5, 5); font-weight: Bold;padding: 10px;margin: 0;">Contact Information</p>
            <div class = "line"></div>
                <p><?= $gmail; ?></p>
                <p><?= $femail; ?></p>
                <p><?= $cnum; ?></p>
            </div>
        </div>
    </div>
</body>
</html>