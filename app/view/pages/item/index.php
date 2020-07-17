
<div class="row">
    <div class="container">
        <br>
        <h1>CUSTOMER PAGE</h1>
        <i>"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</i>
        <hr>
        <p>
            Cras molestie id dolor eu fringilla. Curabitur vestibulum purus faucibus molestie egestas. Curabitur bibendum, mi in interdum rutrum, purus magna pulvinar quam, a volutpat tellus nisl tempus odio. Aenean egestas purus eu mauris accumsan, sit amet gravida tellus efficitur. In hac habitasse platea dictumst. Nunc sagittis, justo id fringilla maximus, risus nisl auctor erat, at rhoncus nisl lacus posuere eros. Aenean diam nibh, eleifend blandit hendrerit quis, hendrerit vitae nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Location</th>
                    <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                <?php 
        foreach($this->view_data['items'] as $raw){
            $item = explode(',',$raw);
            echo 
            "<tr>
            <th scope='row'>".trim($item[0],"\"")."</th>
            <td>".trim($item[1],"\"")."</td>
            <td>".trim($item[2],"\"")."</td>
            <td>".trim($item[3],"\"")."</td>
            <td itemID=".trim($item[0],"\"")."><div class='btn-group btn-group-sm' role='group' aria-label='...'><button type='button' class='btn btn-success btn-sm'><small>EDIT</small></button> <button type='button' class='btn btn-danger btn-sm'><small>DELETE</small></button></div></td>
            </tr>";
        }
                ?>
            </tbody>
        </table>
    </div>
</div>