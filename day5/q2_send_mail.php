<html>
<head><b>Feedback</b></head>
<body>
<p>Please fill the feedback form as your feedback matters to us.</p>
<form action = "q2_send_mail.php" method="POST">
    Name <input type="text"  name="name" style="margin-left:25px;" required><br><br>
    Mail Id<input type="email"  name="mail" style="margin-left:19px;" required><br><br>
    <label for="feedback">Feedback</label>
    <textarea id="feedback" name="feedback" rows="4" cols="50"></textarea><br><br>
    <input type="submit" name="submit">
 </form>
</body>
</html>

<?php

if(@$_POST["submit"])
{
 echo "Thanks for giving feedback.";   
 $name = @$_POST["name"];
 $mailto = @$_POST["mail"];
 $adminmail= "nikhilm2720@gmail.com";
 $feedback = @$_POST["feedback"];
 $subject = "Feedback";
 $msg = "Hey $name thanks for filling feedback. Here is what we got from you: \n";
 $message = $msg . $feedback;
 $message = wordwrap($message, 70);
 $headers = "From: nikhilm2720@gmail.com";
 $headers1 = "From: $mailto";

 $msg1 = "Here is what we got from $name ($mailto): \n";
 $message1 = $msg1 . $feedback;
 $message1 = wordwrap($message1,70); 
 $headers1 = "From: $mailto";
 
 mail($mailto,$subject,$message,$headers);
 mail($adminmail,$subject,$message1,$headers1);

}

?>