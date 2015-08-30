To Do list Featuresets

# TODO 1.3 (Group Project)
- Add Delete functionality, with the ability to:
    - allow a delete a single todo item
    - confirm the todo item will be deleted
    - confirm with the server that the todo item is delete
    - reflect the deletion on the client's page
- Tie in create todo item functionality
    - request URL: http://s-apis.learningfuze.com/todo/delete
        - input (POST):
            - postId: int - the ID of the post to be deleted
        - output:
            - success: true/false - whether or not the operation was successful
            - msgs: string - the message from the server about the delete
            - errors: string: error that occurred during the operation




