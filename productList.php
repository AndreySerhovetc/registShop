<div class="col">
        <div class="row">
            <?php
            try {
                
                foreach($db->query('SELECT * from product') as $row) {

                    echo '
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="card">
                            <img class="card-img-top" src="'.$row['src_img'].'" alt="'.$row['alt_img'].'">
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="product.html" title="View Product">
                                        '.$row['name'].'
                                        </a>
                                    </h4>
                                    <p class="card-text">
                                    
                                    </p>
                                    <div class="row">
                                        <div class="col">
                                            <p class="btn btn-danger btn-block">
                                            '.$row['price'].' zł
                                            </p>
                                        </div>
                                        <div class="col">
                                            <a href="#" class="btn btn-success btn-block">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    
                    
                    ';
                    //print_r($row);
                }
                //$dbh = null;
            } catch (PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }

            ?>
         <div class="col-12">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>