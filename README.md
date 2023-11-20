# LaravelProjTestTwo
This project consists of basics of PHP programming using Laravel 10 framework
This project shows base methods and classes such as:
1. Model classes for interacting with the database
2. Controller classes for manipulating data from user's request by used routes
3. One method controller classes for using only one method (index, store, show, update, delete(softdelete), create)
4. Factories for manipulating with data located in database
5. Requests for using as a validator for input types
6. Service to provide interactions between methods of constructors and model classes
7. Policies for regulating the use of the data that can be used by user
8. Components for integrating with foreign websites and accessing data by hardcode
9. Imports for importing data from excel tables
10. Resources for taking the data of the tables from database that used by model to the controllers
11. Filter for filtering information using url
12. Seeders for generating information for database
In this project also used jwt_token for accessing data only by users that have this token after authentication
    Database is constructed with tables posts that have foreign key as categories, which shows relationships one to many and tags table with post_tag table which shows many to many interaction with table posts.
