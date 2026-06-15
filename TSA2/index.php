<html>
    <head>
        <title>Employees</title>
    </head>
<style>
    table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 12px;
        }
        th {
            background-color: #004a1f;
            color: white;
        }
</style>
<body>
    <?php
    $people = array(
                    [
                        "image"    => "john.jpg",
                        "name"     => "John",
                        "desc"      => "Senior Software Engineer specializing in backend architecture and cloud infrastructure.",
                        "fact" => "Built the company's entire cloud migration strategy over a single weekend.",
                    ],
                    [
                        "image"    => "alice.jpg",
                        "name"     => "Alice",
                       "desc"      => "Creative Art Director passionate about UI/UX design and brand storytelling.",
                        "fact" => "Designed the company logo on a napkin during her very first interview.",
                    ],
                    [
                        "image"    => "bob.jpg",
                        "name"     => "Bob",
                        "desc"      => "Data Analyst focused on turning complex metrics into actionable business growth strategies.",
                        "fact" => "Discovered a tracking bug that saved the marketing team $15,000 in monthly ad spend.",
                    ],
                    [
                        "image"    => "eve.jpg",
                        "name"     => "Eve",
                        "desc"      => "HR Manager dedicated to fostering inclusive workplace cultures and talent acquisition.",
                        "fact" => "Successfully onboarded over 100 remote employees across 5 different time zones last year.",
                    ],
                    [
                        "image"    => "charlie.jpg",
                        "name"     => "Charlie",
                        "desc"      => "Product Manager bridging the gap between technical teams and customer needs.",
                        "fact" => "Spearheaded the mobile app launch that gained 50k users in its first week.",
                    ],
                    [
                        "image"    => "david.jpg",
                        "name"     => "Charlie",
                        "desc"      => "Digital Marketing Specialist expert in SEO, PPC campaigns, and social media growth.",
                        "fact" => "Grew the company's organic LinkedIn impressions by 400% in under six months.",
                    ],
                    [ 
                        "image"    => "grace.jpg",
                        "name"     => "Grace",
                        "desc"      => "Customer Success Lead ensuring client satisfaction and smooth onboarding experiences.",
                        "fact" => "Maintained a 98% customer satisfaction (CSAT) rating for four consecutive quarters.",
                    ],
                    [
                        "image"    => "frank.jpg",
                        "name"     => "Frank",
                        "desc"      => "QA Automation Engineer focused on software reliability and rigorous testing pipelines.",
                        "fact" => "Wrote an automation script that cut the engineering team's deployment testing time in half.",
                    ],
                    [
                        "image"    => "hannah.jpg",
                        "name"     => "Hannah",
                        "desc"      => "DevOps Specialist bridging deployment gaps and managing automated CI/CD workflows.",
                        "fact" => "Maintained a 99.99% server uptime record during the company's highest traffic product launch.",
                    ],
                    [  
                        "image"    => "victor.jpg",
                        "name"     => "Victor",
                        "desc"      => "Financial Controller managing budget compliance, payroll, and quarterly forecasting.",
                        "fact" => "Streamlined the corporate expense process, cutting down reimbursement wait times to 24 hours.",
                    ]);
    ?>

    <table>
        <thead>
            <tr>
                <th colspan = 4>
                    My Employees
                </th>
            </tr>
        </thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Facts</th>
        </tr>

        <?php $count = 1;
        foreach($people as $person): ?>
            <tr>
                <td><img src ="<?php echo $person['image']; ?>" style="width: 50px; height: 50px; object-fit: cover;"></td>
                <td><?php echo $person['name']; ?></td>
                <td><?php echo $person['desc']; ?></td>
                <td><?php echo $person['fact']; ?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>