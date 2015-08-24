# TDL
To Do List

# Version .5
- Create a folder, called "includes"
  - create the following backend functionality files:
    - login.php 
      - input:
        - username: (string) the username of the user logging in
        - password: (string) the password of the user loggin in
      - response:
        - success: (boolean) whether or not the user successfully logged in
        - errors: [optional] (array), array of strings of errors that occurred, if any
        - user_info: (object) data for the new user inluding:
          - first_name: (string) user's first name
          - last_name: (string) user's last name
          - display_name: (string) user's full display name
          - avatar: (string) url of the user's display avatar
          - user_id: (number) ID of the user within the system
          - user_html: (string) the replacement HTML for the anonymous user portion of the header
    - logout.php
      - input:
        - none
      - response:
        - success: (boolean) whether or not the user logged in
        - errors: [optional] (array), array of strings of errors that occurred, if any
        - user_html: (string) the replacement HTML for the logged in user portion of the header
- in your header.php file
  - on login, changes the user portion of the header with the appropriate response from the server from user_html
- in your index.php page:
  - include the PHP page based upon the clicked link above (view and create)


