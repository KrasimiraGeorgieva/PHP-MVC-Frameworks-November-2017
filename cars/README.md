## Exercises: Doctrine – Part I
Problems for exercises and homework for the “PHP MVC Frameworks - Symfony” course @ SoftUni.

### 1.Car Dealer
You are provided with a database model as follows.
A car dealer needs information about cars, their parts, parts suppliers, customers and sales. 
* **Cars** have **make**, **model**, travelled distance in kilometers
* **Parts** have **name**, **price** and **quantity**
* Part **supplier** have **name** and info whether he **uses imported parts**
* **Customer** has **name**, **date of birth** and info whether he **is young driver** (Young driver is a driver that has **less than 2 years of experience**. Those customers get **additional 5% off** for the sale.)
* **Sale** has **car**, **customer** and **discount percentage**
A **price of a car** is formed by **total price of its parts**.

Relations between models:
* A **car** has **many parts** and **one part** can be placed **in many cars**
* **One supplier** can supply **many parts** and each **part** can be delivered by **only one supplier**
* In **one sale**, only **one car** can be sold
* **Each sale** has **one customer** and **a customer** can buy **many cars**

### 2.Car Dealer Import Data
Use the provided SQL script to **populate the database** with sample data.

### 3.Queries
Create an application that can show results from different queries described below to the user. The results from the queries should be visualized **in a table**.


## Exercises: Doctrine – Part II
Problems for exercises and homework for the “PHP MVC Frameworks - Symfony” course @ SoftUni.

### 1.	Add Customers
Add functionality to **add customers** to the database. A customer should be added by providing a **name** and **birthdate**. Use appropriate **controls** for the form for each field and display well formatted labels for the input fields. Note that the field whether he is young driver or not should be filled automatically depending on the provided birthdate.

### 2.	Edit Customers
Add option to **edit a customer** from the database. The **name** and the **birthdate** to each customer can be changed.

### 3.	Add Parts
Add functionality to **add car parts**. A car park should be added successfully by only providing **name, price** and **supplier**. The **default quantity** if not specified explicitly is **1**. Use appropriate controls for the form and well formatted labels for the input fields.

### 4.	Delete Parts
Add functionality to see a **list of all parts** with option to delete any of them. When trying to **delete** some part the user should be **prompted** for confirmation and if the user confirms then the part should be deleted from the database.

### 5.	Edit Parts
Once part is added to the database its **price** and **quantity** can be modified. All other fields are not allowed to be changed after that.

### 6.	Add Cars
Add functionality to **add cars** to the database. A car should be added if has valid **make, model** and **travelled distance**. Choose appropriate controls for the form and well formatted labels for the input fields.
 
### 7.	Add Cars with Parts
Modify the form from the previous exercise and add another control that allows adding parts for the car. This might be:
* **Text field** where the IDs of the parts can be placed separated with a space
* Group of **checkboxes**
* **Multiple **dropdown** fields




