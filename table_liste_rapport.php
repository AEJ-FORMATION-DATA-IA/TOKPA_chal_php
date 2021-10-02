<div class="col-md-12 jnt-pad-top">
            <div class="content-panel">
              <h4></i> LISTE DES RAPPORTS</h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>rapport</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 1 ;
                        while ($row = $select_rapport->fetch()){
                            echo "<tr>" ;
                            echo "<td>$i</td>" ;
                            echo "<td>$row[pseudo]</td>" ;
                            echo "<td>$row[mail]</td>" ;
                            echo "<td>$row[rapp]</td>" ;
                            echo "<td>$row[date_rapport]</td>" ;
                            $i++ ;
                        }
                        
                        ?>
                </tbody>
              </table>
            </div>
          </div>