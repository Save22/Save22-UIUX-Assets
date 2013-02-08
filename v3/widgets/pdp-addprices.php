<style type="text/css">
   #addprice { margin: 24px 0 0 0; }

   img.add-price { position: absolute; bottom: -40px; right: 400px; z-index: -1; }

   .add-price-bubble {
      position: relative;
      background: #f2f2f2;
      border: 1px solid #a6a6a6;
      padding: 8px 15px;
      max-width: 350px; 
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
      margin-bottom: 24px;
   }
   .add-price-bubble:after, .add-price-bubble:before {
      right: 100%;
      border: solid transparent;
      content: " ";
      height: 0;
      width: 0;
      position: absolute;
      pointer-events: none;
   }

   .add-price-bubble:after {
      border-color: rgba(242, 242, 242, 0);
      border-right-color: #f2f2f2;
      border-width: 18px;
      top: 50%;
      margin-top: -18px;
   }
   .add-price-bubble:before {
      border-color: rgba(117, 117, 117, 0);
      border-right-color: #a6a6a6;
      border-width: 19px;
      top: 50%;
      margin-top: -19px;
   }
</style>

<div id="addprice">
   <div class="row">
      <div class="twelve columns">
         <img src="img/pdp-addprice@2x.png" width="225" alt="Download the App to add Prices" class="add-price transition right" />

         <div class="right add-price-bubble">
            <h3>Want to add a price?</h3>
            <p>For now, adding prices can be done using our <a href="#">iPhone</a> or <a href="#">Android</a> app. </p>
            <p>You can get it from the: <br />
               <a href="#">App Store</a> <br />
               <a href="#">Google Play Store</a>
            </p>
            <p>Adding prices on the web will be available soon!</p>
         </div>
      </div>
   </div>
</div>