# Refactoring 
Refactoring is the process by which code is reviewed without adding or modifying functionality, but rather improving its internal quality by eliminating "bad smells," such as:

- Removing duplicated code by abstracting it into a function.
- Avoiding the use of global variables.
- Avoiding excessively long methods.
This process is necessary because, as stated in the Extreme Programming manifesto, the more changes are made to the code, the more it tends, if not explicitly addressed, to become messy and therefore difficult to modify.

During the maintenance phase, among other things, code refactoring has been performed to improve the comprehensibility and future maintainability of the system (preventive maintenance).

In the frontend part, the main focus has been on converting functions into classes, especially those responsible for the graphical interface (not all of them were initially implemented this way). All other functions have been transformed into methods and placed within the most appropriate class. Other modifications include general abstraction, improving indentation - especially in lengthy JSX expressions - and creating .module.css files for specific sections of the website rather than a monolithic .css file.
