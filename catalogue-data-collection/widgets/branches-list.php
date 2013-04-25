
        <table style="width: 100%;">
          <thead>
            <tr>
              <th width="30">ID</th>
              <th>Branch Name</th>
              <th width="300">Address</th>
              <th width="120">Edit</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td><a href="admin-view-retailer.php">SM Hypermart</a></td>
              <td>
                <p class="address">234234 hello street, Ortigas, Pasig City</p>

                <p><strong>Longtitude:</strong> 234234<br>
                  <strong>Latitude:</strong> 242343</p>
              </td>
              <td>
                <a href="#" class="tiny button inline" data-reveal-id="editBranch">edit</a>
                <a href="#" class="tiny button inline secondary" data-reveal-id="deleteModal">delete</a>
              </td>
            </tr>
          </tbody>
        </table>


        <?php include('modal-edit-branch.php'); ?>