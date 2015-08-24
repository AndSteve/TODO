# TDL
To Do List

# TODO 0.2
- Create dummy data object template for todo items:
<pre>
``` 
todo_items[
    {
      id: 0,
      user_id: 1,
      timeStamp: '2015/06/15 12:00:00',
      title: 'my title',
      details: 'my details'
    }
]
```
</pre>
- Create a local file with json data stored in it, to emulate your ajax calls
  - get_todo_items.json
<pre>
``` 
todo_items[
    {
      id: 0,
      user_id: 1,
      timeStamp: '2015/06/15 12:00:00',
      title: 'get eggs',
      details: 'get jumbo eggs from the supermarket'
    },
    {
      id: 1,
      user_id: 1,
      timeStamp: '2015/06/16 04:00:32',
      title: 'win at life',
      details: 'by winning the lottery'
    },
        {
      id: 2,
      user_id: 1,
      timeStamp: '2015/11/17 11:22:00',
      title: 'proposition parris',
      details: 'to go to the zoo'
    },
```
</pre>
- Make a header.php file
  - put a menu at the top of index.php
    - Provide the following links:
    - If Logged out:
      - Login - log the user in
    - If logged in:
      - View : view todo list
      - Create: create new todo item
      - Logout - log the user out
- Add basic functionality to your todo-list project to
    - read whole list and show summary data for available items
    - read individual todo-list item and show it specifically
    - create new data.
        - This will eventually send data to the server
        - For now it will simply append the data to the existing list


