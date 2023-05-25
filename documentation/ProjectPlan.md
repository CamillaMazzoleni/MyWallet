# Project Plan

## 1. Introduction
The purpose of the project is to create an algorithmic trading platform for the automated management of private investment wallets.

During the registration phase, the user creates a profile, specifying their investment risk level (low, medium, or high). When the user deposits money, the trading software comes into play: the algorithm constantly monitors the market and sends a notification to the user whenever it finds a profitable investment or sale. The user can authorize or deny the transaction with a simple click.

The user can monitor the performance of their wallet through a simple and intuitive graphical interface. They can also choose to change their risk profile, upgrade to a premium version for additional guarantees, or sell everything and withdraw funds.

The trading software has two main functionalities: prediction and risk analysis. For prediction, we will implement historical data analysis. By using regression models, moving averages (MA), and ARMA, we can determine the trend and decide when to buy and sell. Risk analysis is necessary to determine the risk level of the investment. For simplicity, the software categorizes investments into three risk categories (low, medium, high) to choose the most suitable investment based on the user's profile.

## 2. Process Model
The selected agile process model for developing the project is the SCRUM framework. Each sprint lasts 7 days, and the Scrum Master role is rotated among team members to allow everyone to learn the role. The Product Backlog, Sprint Backlog, and subsequent phases are managed using the Projects tool in GitHub.

## 3. Project Organization
The team consists of four people:
1. Matteo Colombo
2. Camilla Mazzoleni
3. Andrea Rota
4. Pier Francesco Sorgiovanni

The team is divided into frontend (Colombo, Mazzoleni) and backend (Rota, Sorgiovanni) roles. Each sub-team has a reviewer (Colombo, Rota) who reviews the code in their respective area. The team meets every Saturday morning at B-103 in the University of Bergamo, while each sub-team updates daily through video calls. Daily scrum meetings are held every day. GitHub is the chosen tool for code sharing, version control, change requests, and documentation management.

## 4. Standards, Guidelines, Procedures
The software will be implemented using a client-server architecture:
1. Client: developed with the [React](https://reactjs.org/) framework.
2. Server: developed with the [Apache](https://httpd.apache.org/) - [Laravel](https://laravel.com/) - [PostgreSQL](https://www.postgresql.org/) stack.

## 5. Management Activities
Management activities are necessary to manage and control all artifacts produced during the project development. For regular management activities:
- A daily Scrum meeting will be conducted to keep every team member informed about the progress.
- At the end of each sprint, a sprint review will take place for verification and validation. These continuous reports will allow continuous control of the project's development. For configuration management, every change request must be authorized by the project manager.

## 6. Risks
The major risks include:
- Failing to meet the final project deadline due to university and work commitments of team members.
- Failing to develop a sophisticated enough algorithm that cannot be used.
- Possible challenges in obtaining datasets for stock exchange performance.
- Possible challenges in obtaining authorization from banks for transactions.

## 7. Personnel
The team consists of four people:
1. Matteo Colombo (frontend, reviewer, tester)
2. Camilla Mazzoleni (product owner, frontend, statistical models developer)
3. Andrea Rota (backend, reviewer, database designer)
4. Pier Francesco Sorgiovanni (project manager, backend, statistical models developer)

The Scrum Master role will be rotated to involve and educate all team members.

## 8. Methods and Techniques
To model the program and have a broader view of the project's functionalities, we will use various types of diagrams using UML. To identify use cases, the project manager and the product owner need to meet to define the required specifications to be included in the product backlog. Once the use cases and actors are identified, we will create a USE CASE DIAGRAM. The modeling of classes and their communication will be implemented using the UML CLASS DIAGRAM, which helps identify attributes and methods to be included in the classes. Additionally, we can view each operation as a set of messages exchanged between classes. To do this, we will use the SEQUENCE DIAGRAM, which provides a sequential modeling to give an execution order to each operation. To model the data to be stored in our database, we will use an ER CLASS DIAGRAM to define the various tables to be stored and the relationships (with different cardinalities).

## 9. Quality Assurance
In the design of our application, we will follow the guidelines indicated in the ISO 9001 standard, with particular attention to Section 5 - Leadership and Section 6 - Planning. Regarding the coding aspect, we will also adopt the MCCall model and ensure the security of our software in critical phases such as login and transactions.

## 10. Work Packages
The project is divided into several macro components:
1. PostgreSQL relational database
2. Backend developed with the Laravel framework (PHP)
3. Frontend developed with the React framework (JS)
4. Statistical prediction models developed in the R language

Each team member actively participates in the development of various components.

## 11. Resources
For the realization of this project, we have utilized various resources:
- The team, consisting of 4 developers, including a project manager and a rotating Scrum Master.
- Devices: each developer will have access to PCs and tablets.
- Applications and websites of various kinds, such as communication apps, GitHub for project sharing and change management, IDEs for code writing, and UML tools for diagrams.
- Work environment: the team will meet in room B-103.

## 12. Budget
As a university project, the most important resource is time. We estimate that each team member will work for 50 hours, for a total of 200 hours. These hours will be roughly allocated as follows:
- 150 hours for design
- 50 hours for development
The compensation will not be monetary but a good grade, so the team allocates a budget of €100, which will be used for fuel and coffee.

## 13. Changes
Each change will be carefully discussed with every team member. As an agile team, we will have strong communication through messaging apps, and we will also utilize daily or weekly scrum meetings since we meet every week. The final decision rests with the project manager, who will accept issues on GitHub.

## 14. Delivery
The final delivery will take place by December 31, 2022, with possible maintenance until January 5, 2023.

