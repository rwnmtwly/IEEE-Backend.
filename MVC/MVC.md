# MVC
## Content:
1. [Model-View-Controller Architecture](#model-view-controller-architecture).
1. [Model in MVC](#model-in-mvc).
1. [View in MVC](#view-in-mvc).
1. [Controller in MVC](#controller-in-mvc).
1. [Separation of Concerns in MVC](#separation-of-concerns-in-mvc).
---

## Model-View-Controller Architecture:
The Model-View-Controller (MVC) framework is an architectural/design pattern that separates an application into three main logical components **Model**, **View**, and **Controller**. Each architectural component is built to handle specific development aspects of an application. It isolates the business logic and presentation layer from each other. It was traditionally used for desktop graphical user interfaces (GUIs). 

---
## Model in MVC:
The Model component corresponds to all the data-related logic that the user works with. This can represent either the data that is being transferred between the View and Controller components or any other business logic-related data. It can add or retrieve data from the database. It responds to the controller’s request because the controller can’t interact with the database by itself. *The model interacts with the database and gives the required data back to the controller*.

---
## View in MVC:
The View component is used for all the UI logic of the application. It generates a user interface for the user. Views are created by the data which is collected by the model component but these data aren’t taken directly but through the controller. *It only interacts with the controller*.

---
## Controller in MVC:
The controller is the component that enables the interconnection between the views and the model so it acts as an intermediary. The controller doesn’t have to worry about handling data logic, it just tells the model what to do. It processes all the business logic and incoming requests, manipulates data using the Model component, and interact with the View to render the final output.

---
## Separation of Concerns in MVC:
This separation of concerns makes the application easier to maintain and extend, as changes to one component do not require changes to the other components. 

---
## References:
1. [GeeksforGeeks](https://www.geeksforgeeks.org/mvc-framework-introduction/).
1. [GeeksforGeeks](https://www.geeksforgeeks.org/mvc-design-pattern/).