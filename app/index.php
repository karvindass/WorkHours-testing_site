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
                        <span>Search and Find</span>
                    </a>
                    
                    <a data-route="stats" > <!-- href="/contact" -->
                        <iron-icon icon="trending-up"></iron-icon>
                        <span>Statistics</span>
                    </a>

                    
                </paper-menu>
            </div>
            <paper-header-panel main mode="waterfall-tall">
                <paper-toolbar id="mainToolbar">

                    <!-- Main toolbar -->
                    <paper-icon-button id="paperToggle" icon="menu" paper-drawer-toggle></paper-icon-button>
                    <span class="flex"></span>

                    <!-- Toolbar icons -->
                    <paper-icon-button icon="refresh"></paper-icon-button>
                    <paper-icon-button icon="search"></paper-icon-button>

                    <!-- Name of application -->
                    <div class="middle paper-font-display1 app-name">WorkHours</div>

                </paper-toolbar>
                <!-- Main content -->
                <div class="content">
                    <iron-pages attr-for-selected="data-route" selected="{{route}}">

                        <section data-route="home">
                            <paper-material elevation="1">
                                <?php
                                echo "<h1>Practice Text</h1>";
                                include '/scripts/connectdb.php';
                                ?>
                            </paper-material>
                            <paper-material elevation="1">
                                <?php
                                $query = 'SELECT * FROM projects';
                                $result = mysqli_query($link, $query);
                                if (!$result)
                                {
                                    $error = 'Error fetching jokes:' . mysqli_error($link);
                                    echo $error;
                                }
                                
                                ?>
                            </paper-material>
                        </section>

                        <section data-route="addproj">
                            <paper-material elevation="1">
                                <h2 class="paper-font-display2">Practice Test-Page 2</h2>
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