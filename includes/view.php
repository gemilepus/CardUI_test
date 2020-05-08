<?php
function b4_card() {
    ?>
    <div class="grid-item" style="width: 20%">
        <div class="card">
            <!--                    <img src="..." class="card-img-top" alt="...">-->
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <?php
}
?>

<?php
function b4_toast() {
    ?>
    <div class="grid-item" style="width: 20rem;">
        <div class="toast" data-autohide="false">
            <div class="toast-header">
                <strong class="mr-auto text-primary">Toast Header</strong>
                <small class="text-muted">5 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
                Some text inside the toast body
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.toast').toast('show');
        });
    </script>
    <?php
}
?>

<?php
function b4_table() {
    ?>
    <div class="grid-item" style="width: 50%;">
        <table class="table" style="background: white;width: 100%;">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Handle</th>
                <th scope="col">Handle</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>

            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>

            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td>

            </tr>
            </tbody>
        </table>
    </div>
    <?php
}
?>

<?php
function b4_carousel() {
    ?>
    <div class="grid-item" style="width: 40%;">

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!--                    <img src="..." class="d-block w-100" alt="...">-->
                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--                    <img src="..." class="d-block w-100" alt="...">-->
                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--                    <img src="..." class="d-block w-100" alt="...">-->
                        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: First slide"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

    </div>
    <?php
}
?>

<?php
function b4_list() {
    ?>
    <div class="grid-item" style="width: 20%;">
        <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </div>
    <?php
}
?>

<?php
function b4_test() {
    ?>
    <div class="box">

        <div class="card" style="background-color: rgba(0, 0, 0, 0.0);height: 100%;">
<!--            <img src="s.png" style="max-height: 50%" class="card-img-top">-->
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"></p>

            </div>

            <div class="card-footer" style="background-color: rgba(0, 0, 0, 0.2);">
                <small class="text-muted"></small>
            </div>
        </div>


    </div>
    <?php
}
?>


<?php
function b4_box($img_path) {
    ?>
    <div class="box">
        <div class="card" style="background-color: rgba(0, 0, 0, 0.0);height: 100%;">
            <img src="<?php echo $img_path;?>" style="max-height: 50%" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"></p>

            </div>
            <p class="tut-title"># <?php echo $img_path;?></p>
<!--            <div class="card-footer" style="background-color: rgba(0, 0, 0, 0.2);">-->
<!--                <small class="text-muted"></small>-->
<!--            </div>-->
        </div>
    </div>
    <?php
}
?>