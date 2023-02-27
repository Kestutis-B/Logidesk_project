# CRM Project Documentation

**Project Functionalities**

+ Log in Page
    - Enter Your e-mail, password fields, Log in button.
    - "Don't have an account? Sign up" field.
+ Sign up Page
    - Sign up Form - full name, company name, Customer or Carrier->dropdown, email, phone number, password.
    - Do you need help? Contacts bellow - email.
+ Open Orders List Page
    - All orders list (Table. Columns: ID, userId, Loading place->city, Unloading place->city, Loading date, Order Created, Price, Carrier, View Details button)
    - Search order by one of the fields.
+ Finished Orders List Page
    - All orders list (Table. Columns: ID, Order status Active=0, Loading place->city, Unloading place->city, Loading date, Order Created at, Price, Carrier, View Details button)
    - Search order by one of the fields.
+ Create Order Page
    - Create order form (Table. Columns: Loading place->full address, Unloading place->full address, Loading date, Price=empty field, Carrier=empty field)
+ Order Details Page
    - Order information (Table. Columns: Order status checkbox->to check, Loading place->full address, Unloading place->full address, Loading date, Price->edit field, Carrier->edit field)
+ User rights to edit orders
    - Customer has right to edit order,
    - Carrier can only view his orders
