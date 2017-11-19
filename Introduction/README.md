# MVC Introduction - Exercises

### This document defines a set of tasks to be done as a part of the MVC Introduction lecture’s exercises  for "PHP MVC Frameworks" Course @ Software University. 

### 1. **URL Redirect**

Executable applications have **one entry point**, which is the standard event loop executed. An application container manages the lifecycle of the application and **sends user input to the application event loop**. 
This is **not the case when using standard web servers** which execute files instead of managing applications. We need to **simulate** it. One way to do it is to **redirect** all requests to one file, which will **take the role of an entry point**. 

### 2. **Extracting Significant URI Parts**

In the standard we will set, there will be two general parts in the URI:
*	Controller and Action
*	Parameters
This means that http://localhost/Scripting/users/hello/john/smith means that:
*	**Users** is a **Controller**
*	**Hello** is an **Action**
*	**John** and **Smith** are **Parameters**
The Controller most probably is a class e.g. **UsersController**, the Action is a **method** in that class. The Parameters are arguments of the **class method** e.g. two string arguments **$firstName** and **$lastName**.

### 3. **Dispatching**

We can map to **classes, method calls** and **argument passing**.

### 4. **Error Page**

For a usual website if the route in the URL is not right you need to display a **HTTP 404 code error page**. For SEO purposes it is bad to reload to the home page.

