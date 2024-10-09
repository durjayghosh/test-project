<table>
    <tr>
        <td>
            <h1>Reach Us</h1>
        </td>
    </tr>
    <tr>
        <td colspan="2">-------------------------------------------</td>
    </tr>
    <tr>
        <th style="text-align: left"> Page Title</th>
        <td>Reach Us</td>
    </tr>
    <tr>
        <th style="text-align: left"> Domain Name</th>
        <td>{{ !empty($domain)?$domain:""}}</td>
    </tr>
    <tr>
        <th style="text-align: left"> Your Name</th>
        <td>{{$name}}</td>
    </tr>
    <tr>
        <th style="text-align: left"> Your Mobile Number</th>
        <td> +{{$countryCode. '-' . $mobile_number}}</td>
    </tr>
    <tr>
        <th style="text-align: left"> Your Email ID</th>
        <td>{{$email}}</td>
    </tr>
    <tr>
        <th style="text-align: left">Country Name</th>
        <td>{{@$country_name}}</td>
    </tr>
    <tr>
        <th style="text-align: left"> How Can We Help ?</th>
        <td>{{@$help}}</td>
    </tr>
    <tr>
        <td colspan="2">Wig-O-Mania Management</td>
    </tr>
</table>
