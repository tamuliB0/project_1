# Prerequisites 
- PHP 7.4 or higher
- Web server
- DDEV 
- MySQl 

# DDEV installation : 
Follow the installation instruction as mentioned, [https://docs.ddev.com/en/stable/]
- After installation, follow these steps(in the terminal): 
    * Run `mkdir _project-name_ && cd _project-name_` 
    ## create new DDEV project inside the newly-created folder
    (The URL is automatically set to 'https://folder_name.ddev.site')
    * Run `ddev config`. This will ask for a project name, after entering a name. Follow along the prompts. Select the project type as "PHP"
    * Run `ddev start`, it will start the web, database and php containers. 
    * Run `ddev launch` to start your app in the browser. 

 