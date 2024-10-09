<table style="width:100%!important;">
    <tr>
        <td colspan="2">
            Dear {{$name}},<br>
            Thank you for Contacting with us. Our Team will get in touch with you shortly<br>
        </td>
    </tr>
    <tr>
        <td colspan="2">-------------------------------------------</td>
    </tr>
    <tr>
        <th style="text-align: left"> Your Name</th>
        <td>{{$name}}</td>
    </tr>
    <tr>
        <th style="text-align: left"> Your Email ID</th>
        <td>{{$email}}</td>
    </tr>
	<tr>
        <th style="text-align: left"> Your Mobile Number</th>
        <td> +{{$countryCode. '-' . $mobile_number}}</td>
    </tr>
	<tr>
        <th style="text-align: left"> Domain Name</th>
        <td>{{ !empty($domain)?$domain:""}}</td>
    </tr>
    <tr style="margin-top: 20px;"> 
        <td colspan="2">Wig-O-Mania Management</td>
    </tr>
</table>
