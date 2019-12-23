<!DOCTYPE html>
<html>
    <head>
        <title>Inquiry Notification - BnB Casons</title>
        <style type="text/css">
            *{
                font-size: 14px;
                color: #5d5d5d;
                font-family: verdana;
            }
            body{
                background-color: #ffffff;
                margin: 0;
            }
            a{
                color: #2145bc;
            }
            .content{
                background-color: #f5f5f5;
                max-width: 600px;
                min-height: 400px;
                margin: 0 auto;
                margin-top: 30px;
                border-radius: 5px;
                margin-bottom: 30px;
            }
            .header{
                
/*              max-width: 600px; */
                height: 100px;
                margin: 0 auto;
            }
            .inner{
                padding: 15px 30px;
            }
            .header .inner{
                text-align: center;
            }
            td{
                padding: 5px;
            }
        </style>
    </head>
    <body>

        <div class="content">
            
            <h1 style="background: #e4a018; padding: 15px 15px; border-radius: 5px 5px 0 0; color: #ffffff; text-align: center; font-weight: normal;">NEW INQUIRY</h1>
            
            <div class="inner">
            
            <div class="message" style="border: 1px dotted #b9b9b9; padding: 5px 10px; min-height: 200px; border-radius: 10px; background-color: #ffffff;">
                <table style="padding: 30px 0;">
                    <tr>
                        <td><b> Senders Name :</b> </td>
                        <td><?php echo $co_data['co_name']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Senders Email :</b></td>
                        <td><a href="mailto:<?php echo $co_data['co_email'];?>"><?php echo $co_data['co_email']; ?></a></td>
                    </tr>
                    <tr>
                        <td><b>Telephone : </b></td>
                        <td><?php echo $co_data['co_phone_number']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Subject : </b></td>
                        <td><?php echo $co_data['co_subject']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Message :</b></td>
                        <td><?php echo $co_data['co_message']; ?></td>
                    </tr>
                </table>           
            </div>
            
            <br>

            <p style="font-style: italic;">Automated Notification Email through <a href=""> sanmlo.com</a></p>
            
            </div>
            
        </div>
        

        </div>
    </body>
</html>