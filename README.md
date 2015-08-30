To Do list Featuresets

# TODO 1.0 (Group Project)
- Combine code together to form a group project
    - Your team master branch will be T&lt;YOUR TEAM NUMBER&gt;_Master
    - Fork TDL to your github account / clone to your system
- LOGIN:
    - add login page
        - 'username' input: holds the name of the user
        - 'password' input: holds hte password of the user
        - 'login' button: triggers the ajax call to the server to log in
    - AJAX request to server to log in:
        - request URL: http://s-apis.learningfuze.com/todo/login
        - input (POST):
            - username
            - password
        - output:
            - success: true/false - whether or not the login was successful
            - status:  number - the status of the account (1 is normal user)
            - email: string - the user's email
            - lastName: string - the user's last name
            - firstName: string - the user's first name
            - id: number - the user's ID number
            - errors: array - an array of strings, each holding an error that occurred during the login
- LOGOUT:
    - add logout button
    - AJAX request to server to log out:
        - request URL: http://s-apis.learningfuze.com/todo/logout
        - input (POST):
            - NONE
        - output:
            - success: true/false - whether or not the login was successful
            - msgs: string - logout message, if successful
            - errors: string: error that occurred during the logout


