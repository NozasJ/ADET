<html>
    <head>
        <title>My Web Page</title>
            <style>
                body{
                    background-color: rgb(247, 247, 247);
                }
                .container{
                    background-color: white;
                    padding: 40px;
                    max-width: 35%;
                    margin: 50px auto;
                    border-radius: 4px;
                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                  
                }
                .header {
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    font-weight: bold;
                }
                .line{
                    width: 100%;
                    height: 0.1%;
                    background-color: rgb(3, 83, 16);
                    padding: 2px;
                }
                .frow{
                    display: flex;                   
                    justify-content: center;
                    gap: 20px;
                }
                .fcol{
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                }
                input {
                    width: 100%;         
                    padding: 10px;         
                    margin: 10px 0 25px 0;
                    border: 1px solid #ccc;
                    border-radius: 6px;    
                    font-size: 18px;       
                    box-sizing: border-box; 
                }
                select{
                    width: 100%;
                    padding: 10px;
                    margin: 10px 0 25px 0;
                    border: 1px solid #ccc;
                    border-radius: 6px;
                    font-size: 18px;
                    box-sizing: border-box;

                }
                .box{
                    display: flex;
                    flex-direction: column;
                    margin-top: 40px;
                    margin-bottom: 40px;
                }
                button{
                    padding: 12px 28px;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    font-family: 'Inter', system-ui, sans-serif;
                    font-size: 16px;
                    font-weight: 600;
                    color: #ffffff;
                    background-color: #2563eb; 
                    border: none;
                    border-radius: 8px;
                    cursor: pointer;
                    transition: all 0.2s ease;
                    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                }
                button:hover {
                    background-color: #1d4ed8;
                    transform: translateY(-1px);
                    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
                }
                form{
                    justify-content: center;
                    align-items: center;
                }
            </style>
    </head>
    <body>
        <div class = "container">
            <div class = "header">
                <h1> STUDENT REGISTRATION </h1>
                <p> Please fill in the form below to register </p>
            </div>
            <div class = "line"></div>
                <div class = "header">
                    <p style = "font-size: 20px; font-weight: bold;"> PERSONAL INFORMATION </p>
                </div>
            <div class = "line"></div>
                <form>
                    <div class = "box">
                        <div class = "frow">
                            <div class = "fcol">
                                <label for = "fname"> First Name: </label>
                                <input type = "text" id = "fname" name = "fname" placeholder="Enter your first name" required>
                                <label for = "email"> Email: </label>
                                <input type = "email" id = "email" name = "email" placeholder="Enter your email" required>
                            </div>
                            <div class = "fcol">
                                <label for = "lname"> Last Name: </label>
                                <input type = "text" id = "lname" name = "lname" placeholder="Enter your last name" required>
                                <label for = "phone"> Phone Number: </label>
                                <input type = "tel" id = "phone" name = "phone" placeholder="Enter your phone number" required>
                            </div>
                        </div>
                        <div class = "frow">
                            <div class = "fcol">
                                <label for = "lname"> Sex: </label>
                                <select id="options" name="options" placeholder="Select your sex" required>
                                    <option value="" disabled selected></option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <label for = "phone"> Phone Number: </label>
                                <input type = "tel" id = "phone" name = "phone" placeholder="Enter your phone number" required>
                            </div>
                            <div class = "fcol">
                                <label for = "nationality"> Nationality </label>
                                <select id="options" name="options" placeholder="Select your nationality" required>
                                    <option value="" disabled selected></option>
                                    <option value="filipino">Filipino</option>
                                    <option value="foreign">Foreign</option>
                                </select>
                                <label for = "dob"> Date of birth </label>
                                <input type = "tel" id = "dob" name = "dob" placeholder="YYYY-MM-DD" required>
                            </div>
                        </div> 
                    </div> 
                     <div class = "line"></div>
                     <div class = "header">
                        <p style = "font-size: 20px; font-weight: bold;"> PREVIOUS SCHOOL INFORMATION </p>
                    </div>
                    <div class = "line"></div>
                    <div class = "box">
                        <div class = "frow">
                            <div class = "fcol">
                                <label for = "year"> Year Graduated: </label>
                                <input type = "text" id = "year" name = "year" placeholder="Enter your year graduated" required>
                            </div>
                        </div>
                        <div class = "frow">
                            <div class = "fcol">
                                <label for = "year"> School Name: </label>
                                <input type = "text" id = "school" name = "school" placeholder="Enter your school name" required>
                            </div> 
                            <div class = "fcol">
                                <label for = "year"> School Address: </label>
                                <input type = "text" id = "address" name = "address" placeholder="Enter your school address" required>
                            </div>
                        </div>
                        <div class = "frow">
                            <div class = "fcol">
                                <label for = "year"> School Type: </label>
                                <input type = "text" id = "stype" name = "stype" placeholder="Enter your school type" required>
                            </div>
                            <div class = "fcol">
                                <label for = "year"> School Year: </label>
                                <input type = "text" id = "syear" name = "syear" placeholder="Enter your school year" required>
                            </div>
                        </div>
                    </div>
                    <button> Submit </button>
                </form>
        </div>
    </body> 
</html>