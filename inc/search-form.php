
<div class="container" id="search-form">
    <div class="row">
        <div class="col-md-12">

            <form class="input-group form-horizontal" method="post" id="adv-search" role="form" action="" name="form">
                <input type="text" class="form-control" placeholder="Search for movies and series" name="keywords"/>
                <div class="input-group-btn">
                    <div class="btn-group" role="group">
                        <div class="dropdown dropdown-lg" >
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                            <div class="dropdown-menu dropdown-menu-right" role="menu">

                                <div>
                                    <div class="form-group">
                                        <label for="filter">Filter by</label>
                                        <select class="form-control">
                                            <option value="films" name="films" selected>Films</option>
                                            <option value="Series" name="series">Series</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="contain" name="year">Year</label>
                                        <input class="form-control" type="text" />
                                    </div>
                                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
