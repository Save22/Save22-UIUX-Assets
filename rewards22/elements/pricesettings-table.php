        <header class="doc-header">
          <h2 class="">Pricesheet Work Division</h2>
          <div class="pricesheet date-box">
            <form class="group">
              <label class="left">Price source document was released: &nbsp; &nbsp; </label>
              <input type="text" class="input-date left" id="datepicker"> 
            </form>
          </div>
        </header>

        <div class="option-buttons group">
          <input type="submit" class="save-button radius button right hide" value="Save">
          <a href="#" class="button radius right add-row">Add Chunk</a>
        </div>
​
         <table id="price-settings" class="twelve data">
           <thead>
             <tr>
               <th class="th-sort">Sort</th>
               <th class="th-desc">Info</th>
               <th class="th-type">Type</th>
               <th class="th-type">Start Date</th>
               <th class="th-type">End Date</th>
               <th class="th-assignee">VA Assigned</th>
             </tr>
           </thead>
           <tbody>
             <tr class="insert-row hide">
               <td class="index"> </td>
               <td>
                  <input type="text" placeholder="add description">
               </td>
               <td>
                  <a href="#" class="button radius upload-price-file" data-reveal-id="uploadfile">upload file</a> 
               </td>
               <td>
                  <a href="#" class="button radius add-instructions" data-reveal-id="instructions">add instructions</a>
               </td>
               <td>
                  <input type="text" placeholder="1" class="work-size">
               </td>
               <td>
                  <input type="text" placeholder="assign" class="va-assign">
               </td>
             </tr>
             <tr>
               <td class="index">1</td>
               <td class="td-desc">
                  <p>Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
                  <p>Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
                  <p>Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu.</p>
               </td>
               <td>
                  default 
               </td>
               <td>
                  March 12, 2013
               </td>
               <td>
                  March 14, 2013
               </td>
               <td>
                  Riza 
                  <a href="#" class="hide-text icon-assignee right pointer has-tip" data-width="65" title="change assignee(s)">edit</a>
               </td>
             </tr>

             <tr>
               <td class="index">2</td>
               <td class="td-desc">
                  <p>Mauris iaculis porttitor posuere. Praesent id metus massa, ut.</p>
               </td>
               <td>
                  <a href="#" data-reveal-id="uploadfile">upload file</a> 
               </td>
               <td>
                  unassigned 
                  <a href="#" class="hide-text icon-assignee right pointer has-tip" data-width="65" title="add assignee(s)">edit</a>
               </td>
             </tr>
           </tbody>
         </table>

        <div class="option-buttons group">
          <input type="submit" class="save-button radius button right hide" value="Save">
          <a href="#" class="button radius right add-row">Add Chunk</a>
        </div>

        <div class="group">
          <ul class="pagination">
            <li class="arrow unavailable"><a href="">&laquo;</a></li>
            <li class="current"><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li class="unavailable"><a href="">&hellip;</a></li>
            <li><a href="">12</a></li>
            <li><a href="">13</a></li>
            <li class="arrow"><a href="">&raquo;</a></li>
          </ul>
        </div>
        