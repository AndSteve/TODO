# TDL
To Do List

# TODO 0.1 
#### Dummy static pages
- Make a landing page for your todo items, index.php
  - index.php will be the landing page for all operations, all other pages will be included within it
- Make a directory for all of your template pieces, called "template"
  - Create dummy static php pages for your template pieces
    - templates/header.php - main navigation and logo for the site
    - template/footer.php
- Make a directory for all of your sub-pages called "pages"
  - Create dummy static php pages of the following:
    - pages/display_item.php - displays all of the data from 1 todo item
      - minimum requirements:
        - list 1 item at a time
        - item has, at least, these data fields:
          - title - short title of the todo item
          - details - details of the todo item
          - due_date - when the item becomes due
          - timestamp - when the item was created
          - completed - is the item completed or not
    - pages/list_all_items.php - Shows all todo items in a list structure
      - minimum requirements:
        - user has 1 todo list
        - display title and due date of each todo item
        - display difference for current, past due, and complete todo items
    - pages/create_todo_item.php - create a single todo item
      - minimum requirements:
        - create 1 item at a time
        - item has, at least, these data fields:
          - title - short title of the todo item
          - details - details of the todo item
          - due_date - when the item becomes due
          - completed - is the item completed or not
    - pages/login_template.php - page to log the user in
      - minimum requirements:
        - username
        - password
- In index.php, load the appropriate page based on the $_GET superglobal key 'current_page'

#### DO NOT spend a lot of time styling them.  You may put in basic bootstrap.  The purpose of this is to get the basic skeleton

