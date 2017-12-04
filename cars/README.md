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




