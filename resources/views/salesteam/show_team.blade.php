<!DOCTPE html>
<html>
    <head>
        <title>Team Members</title>
    </head>
    <body>
        <table border = "1">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Telephone</td>
                <td>Current Route</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @foreach ($salesTeam as $teamMember)
            <tr>
            <td>{{ $teamMember->id }}</td>
            <td>{{ $teamMember->full_name }}</td>
            <td>{{ $teamMember->email }}</td>
            <td>{{ $teamMember->telephone }}</td>
            <td>{{ $teamMember->current_route   }}</td>
            </tr>
        @endforeach
        </table>
    </body>
</html>