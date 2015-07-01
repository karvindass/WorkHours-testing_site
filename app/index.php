<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Dashboard for WorkHours, where you can 
              see your projects at a glance">
        <title>Dashboard</title>
        <link rel="manifest" href="manifest.json">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS and styling linkages -->
        <link rel="stylesheet" href="styles/main.css">
        <script src="bower_components/webcomponentsjs/webcomponents-lite.js"></script>
        <link rel="import" href="elements/elements.html">


    </head>
    <body> <!--unresolved class="fullbleed vertical layout" -->
    <template is="dom-bind" id="app">
        <paper-drawer-panel id="paperDrawerPanel">
            <div drawer>

                <!-- Drawer Content -->
                <paper-toolbar id="drawerToolbar">
                    <span class="paper-font-title">Menu</span>
                </paper-toolbar>

                <!-- Drawer Content -->
                <paper-menu class="list" attr-for-selected="data-route" selected="{{route}}" on-iron-select="onMenuSelect">
                    <a data-route="home" > <!-- href="/" -->
                        <iron-icon icon="home"></iron-icon>
                        <span>Dashboard</span>
                    </a>

                    <a data-route="addproj" > <!-- href="/users" -->
                        <iron-icon icon="add-circle-outline"></iron-icon> 
                        <!-- think about whether full or outline for icon -->
                        <span>Add Project</span>
                    </a>
                    
                    <a data-route="search" > <!-- href="/contact" -->
                        <iron-icon icon="search"></iron-icon>
                        <span>Search</span>
                    </a>
                    
                    <a data-route="stats" > <!-- href="/contact" -->
                        <iron-icon icon="trending-up"></iron-icon>
                        <span>Statistics</span>
                    </a>

                    
                </paper-menu>
            </div>
            <paper-header-panel main mode="seam">
                <paper-toolbar id="mainToolbar">

                    <!-- Main toolbar -->
                    <paper-icon-button id="paperToggle" icon="menu" paper-drawer-toggle></paper-icon-button>
                    <span class="flex"></span>

                    <!-- Toolbar icons -->
                    <paper-icon-button onClick="history.go(0)" icon="refresh"></paper-icon-button>
                    <paper-icon-button icon="search"></paper-icon-button>

                    <!-- Name of application -->
                    <div class="middle paper-font-display1 app-name">WorkHours</div>

                </paper-toolbar>
                <!-- Main content -->
                <div class="content">
                    <iron-pages attr-for-selected="data-route" selected="{{route}}">
                        <section data-route="home">
                            <div class="col-6 center">
                            <paper-material elevation="1">
                                <?php
                                echo "<blockquote><h1>Practice Text</h1></blockquote>";
                                include '/scripts/connectdb.php';
                                ?>
                            </paper-material>
                            <paper-material elevation="1">
                                <?php
                                $query = 'SELECT * FROM projects';
                                $result = mysqli_query($link, $query);
                                if (!$result)
                                {
                                    $error = 'Error fetching projects:' . mysqli_error($link);
                                    echo $error;
                                }
                                
                                while ($row = mysqli_fetch_array($result))
                                {
                                    $projects[] = array('title' => $row['title'], 'startdate' => $row['startdate'], 'id' => $row['id'],
                                            'client' => $row['clientid']);
                                }
                                
                                include 'scripts/printprojects.html.php';
                                
                                ?>
                            </paper-material>
                                <paper-material>
                                <?php 
                                $query = 'SELECT * FROM projects LIMIT 5';
                                $result2 = mysqli_query($link,$query);
                                
                                if (!$result2)
                                {
                                    $error = 'Error fetching projects:' . mysqli_error($link);
                                    echo $error;
                                }
                                
                                while ($row = mysqli_fetch_array($result2))
                                {
                                    $projectstab[] = array('title' => $row['title'], 'enddate' => $row['enddate'], 'id' => $row['id'],
                                            'client' => $row['clientid']);
                                }
                                
                                include 'scripts/projectTableOut.html.php';
                                ?>    
                                </paper-material>
                            </div>
                        </section>

                        <section data-route="addproj" class="col-6 center">
                            <paper-material elevation="1">
                                <blockquote>
                                <h2 class="paper-font-display2">Practice Test-Page 2</h2>
                                </blockquote>
                            </paper-material>
                            <paper-material>
                                <blockquote>
                                    <?php
                                    include 'scripts/connectdb.php';
                                    ?>
                                    <div class="paper-font-title">Enter the information and submit below</div>
                                    <paper-input label="Project Title" id="title">
                                        <?php htmlout($title); ?>
                                    </paper-input>
                                    <paper-input label="Client ID" id="clientid"></paper-input>
                                    <paper-input label="Starting Date" id="startdate"></paper-input>
                                    <paper-input label="Projected Working Hours" id="workhours"></paper-input>
                                    <br>
                                    <paper-button raised>
                                        Add New Project
                                        <paper-icon icon="arrow-forward"></paper-icon>
                                    </paper-button>
                                </blockquote>
                            </paper-material>
                        </section>

                        <section data-route="search">
                            <paper-material elevation="1">
                                <h2 class="paper-font-display2">Practice Test-Page 3</h2>
                                <p>A little bit for testing</p>
                            </paper-material>
                        </section>
                        
                        <section data-route="stats">
                            <paper-material elevation="1">
                                <h2 class="paper-font-display2">Practice Test-Page 4</h2>
                                <p>A little bit for testing</p>
                            </paper-material>
                        </section>

                    </iron-pages>
                </div>
            </paper-header-panel>
        </paper-drawer-panel>
    </template>
    <!-- build:js scripts/app.js -->
    <script src="scripts/app.js"></script>
    <!-- endbuild-->

</body>
</html>