# WebProgramming Grocery Assignment
This system is intended to help the consumers to manage grocery shopping list 
before going to the shop to purchase the products. 
The system should provide the following functions: <br>

Shopper:
- Register new user account, user login to access the system
- Manage user profile (view, update user details, delete a user account) • Manage grocery shopping list (add, edit, delete a shopping list) & view all 
the shopping lists
- Manage items in a shopping list (add, edit, delete an item in the shopping 
list) & view list of items in the shopping list. 
- View the list of products, search a product and add the product into a 
shopping list
- Optional feature: Calculate the total cost of the shopping list
<br>

Shop administrator:
- Manage products to be added into shopping list (add, edit, delete a 
product) & view the list of products.

### Guideline
**Database setup:**<br>
Run the wp-boyz.sql in PHPMyAdmin.

**User account setup:** <br>
email: customer@gmail.com <br>
password: Customer1

**Admin account setup:**<br>
email: secret@gmail.com <br>
password: nonoYes4

***Login/Register:***
1. Start at the index.php, is the login page.
2. Can use login using the information above, customer or admin account.
3. For non existing user, can sign up to create a new account.

***User account perspective:***
- view the product according the product category
- search the product and filtered the search result according to the 
- view the user profile in the homepage
- add the products to the shopping list
- view the shopping list
- at the header, can navigate to editprofile.php to edit the user profile
- can logout and destroyed session

***Admin account perspective:***
- view all the products in the admin landing page
- can search the products like in homepage of user account
- can add new product
- can edit the information of a product
- can delete the product
- can logout and destroyed session
