
<h1>User Registration Form</h1>
<h1>-------------------------</h1>
  {{$Email}}
<h1>--------------------------</h1>


<form action="{{route('userInformation.save')}}" method="post">
    @csrf 
    <table border="1px">
        <tr>
            <td>User Type</td> 
            <td>
                <select name="user_type">
                    <option>Super Admin</option>
                    <option>Site Admin</option>
                    <option>Regular User</option>
                    <option>Guest</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>User Name</td>
            <td><input type="text" name="user_name" ></td>
        </tr>
        <tr>
            <td>User Email</td>
            <td><input type="text" name="user_email" ></td>
        </tr>
        <tr>
            <td>User Contact</td>
            <td><input type="text" name="user_contact" ></td>
        </tr>
        <tr>
            <td>User School</td>
            <td><input type="text" name="user_school" ></td>
        </tr>
        <tr>
            <td>User College</td>
            <td><input type="text" name="user_college"></td>
        </tr>
        <tr>
            <td>User University</td>
            <td><input type="text" name="user_university"></td>
        </tr>
        <tr>
            <td>User Present Address</td>
            <td><input type="text" name="user_present_address"></td>
        </tr>
        <tr>
            <td>User Permanent Address</td>
            <td><input type="text" name="user_permanent_address"></td>
        </tr>
        <tr>
            <td>User Profession</td>
            <td><input type="text" name="user_profession"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Save User Information"></td>
        </tr>
    </table>
</form>
