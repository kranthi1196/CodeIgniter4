<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{page_title|lower}</title> <!-- lower is to Convert into LoweCase-->
</head>
<body>
    <!-- You can Check out all the Filters in the Following Webpage: http://codeigniter.com/user_guide/outgoing/view_parser.html#filters -->
    <h2>{page_heading | upper | limit_chars(20)}</h2><!-- limit_chars(2) = "It limits the text to the given No. of Characters only."--> 
    <p>Date: {date|date(Y-M-dS) | upper}</p> <!--Y = "Full Year's Form", M = "Month", d = "date like 15", S = "th", Upper = "UpperCase"-->
    <p>Date: {date|date(y-m-d)}</p><!-- y = Year's Short form, m = "Month Number", d = "day Number"  -->
    <p>Date: {date|date(y-M-d)}</p><!-- -->
    <p>Date: {date|date(Y-m-D)}</p><!-- D = "Day Short Form" -->
    <p>Date: {date|date(Y-m-d)}</p> 
    <p>Date: {date|date(l dS F Y)}</p> <!-- l = "Full Day Name", F = " Month Full Name" -->
    <p>Date: {date|date_modify(+15days) | date(l dS F Y)}</p> <!-- modify is to change the Date to the required Days either to change earlier Days or to change to Older Days. -->
    <p>Price: {price | local_currency(USD) | highlight_code}</p><!--INR = Rupee,USD = US Dollar,CAD = Canada Dollor,EUR = Euro, JPY = Japan Yen -->
    <p>Mobile Number: {mobile|}</p> <!-- Custom Filter -->
</body>
</html>