<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm ">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./home">BLOG</a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    
                       
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                        <i class="menu-icon fa fa-laptop"></i>MANAGE BLOGS &nbsp; &nbsp;</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-circle"></i><a href="{{url('add_blog')}}">Add Blogs</a></li>
                            <li><i class="fa fa-list"></i><a href="{{url('view_blog')}}">view Blogs</a></li>   
                        </ul>
                    </li>

                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                        <i class="menu-icon fa fa-laptop"></i>BLOGKEYWORD &nbsp;</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-circle"></i><a href="{{url('add_blogkeyword')}}">Add Blog keywords</a></li>
                            <li><i class="fa fa-list"></i><a href="{{url('view_blogkeyword')}}">view Blog keywords</a></li>   
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                        <i class="menu-icon fa fa-laptop"></i>BLOG SEO &nbsp;</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-plus-circle"></i><a href="{{url('add_blogseo')}}">Add Blog Seo</a></li>
                            <li><i class="fa fa-list"></i><a href="{{url('view_blogseo')}}">view Blog Seo</a></li>   
                        </ul>
                    </li>
                    
                   

                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">