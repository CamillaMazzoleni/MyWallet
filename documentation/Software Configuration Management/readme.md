# Software Configuration Management

For configuration management, including code and documentation, we used a shared GitHub repository with the entire team.

## Repository Organization
Within the repository, directly in the root, you will find the essential files (license, readme, installation scripts) and 3 main directories:
- `frontend`: contains the client-side website code
- `backend`: contains the server-side program code invoked by the website
- `documentation`: all the produced documentation goes here

## Change Management
The project's baseline is located in the "main" branch. Changes can only be made in branches other than the main branch. Each team member has their own branch to work on, which they keep constantly updated from the main branch. However, additional branches can be created for specific issues, for example, starting from an issue.
Changes made in secondary branches can be transferred to the main branch only through the following procedure:
1. The person working on the branch creates a pull request, requesting a review.
2. The designated reviewer can approve the work done or request changes.
3. If the pull request is approved, the branch is merged into the main branch. Otherwise, the requested changes are made, and the process starts again from step 1.

## Task Assignment
Team members can find their assigned tasks in the "Projects" section of GitHub. At the start of the project, a list of features to be implemented was created, which can be updated later on. This list is located under the "Product Backlog" section. At the beginning of each sprint, the features to be implemented are selected and moved to the "Sprint Backlog" section. If these features are significant and assigned to more than one person, the assigned individuals can open issues to divide the sub-features among themselves. At the end of each sprint, the fully implemented features are moved to the "Done" section.

For bugs, other issues, and checklists, dedicated issues are opened and assigned to the designated member.

