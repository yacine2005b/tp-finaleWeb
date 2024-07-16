 <div class="image-container">
     <img src="{{ $user->getImageURL() }}" alt="">
     <div class="text-overlay">
         <label for="file" class="labelFile"><span><svg xml:space="preserve" viewBox="0 0 184.69 184.69"
                     xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" id="Capa_1"
                     version="1.1" width="50px" height="50px">
                     <g>
                         <g>
                             <g>
                                 <path d="M149.968,50.186c-8.017-14.308-23.796-22.515-40.717-19.813
    C102.609,16.43,88.713,7.576,73.087,7.576c-22.117,0-40.112,17.994-40.112,40.115c0,0.913,0.036,1.854,0.118,2.834
    C14.004,54.875,0,72.11,0,91.959c0,23.456,19.082,42.535,42.538,42.535h33.623v-7.025H42.538
    c-19.583,0-35.509-15.929-35.509-35.509c0-17.526,13.084-32.621,30.442-35.105c0.931-0.132,1.768-0.633,2.326-1.392
    c0.555-0.755,0.795-1.704,0.644-2.63c-0.297-1.904-0.447-3.582-0.447-5.139c0-18.249,14.852-33.094,33.094-33.094
    c13.703,0,25.789,8.26,30.803,21.04c0.63,1.621,2.351,2.534,4.058,2.14c15.425-3.568,29.919,3.883,36.604,17.168
    c0.508,1.027,1.503,1.736,2.641,1.897c17.368,2.473,30.481,17.569,30.481,35.112c0,19.58-15.937,35.509-35.52,35.509H97.391
    v7.025h44.761c23.459,0,42.538-19.079,42.538-42.535C184.69,71.545,169.884,53.901,149.968,50.186z"
                                     style="fill:black;"></path>
                             </g>
                             <g>
                                 <path d="M108.586,90.201c1.406-1.403,1.406-3.672,0-5.075L88.541,65.078
    c-0.701-0.698-1.614-1.045-2.534-1.045l-0.064,0.011c-0.018,0-0.036-0.011-0.054-0.011c-0.931,0-1.85,0.361-2.534,1.045
    L63.31,85.127c-1.403,1.403-1.403,3.672,0,5.075c1.403,1.406,3.672,1.406,5.075,0L82.296,76.29v97.227
    c0,1.99,1.603,3.597,3.593,3.597c1.979,0,3.59-1.607,3.59-3.597V76.165l14.033,14.036
    C104.91,91.608,107.183,91.608,108.586,90.201z" style="fill:black;"></path>
                             </g>
                         </g>
                     </g>
                 </svg></span>
             <p>update picture</p>
         </label>
         <input class="input" name="image" id="file" type="file" />
     </div>
 </div>



 <style>
     .input {
         display: none;
     }

     .labelFile {
         /* display: flex;
         flex-direction: column; */
         /* justify-content: center; */
         /* width: 120px;

         border: 2px solid #ccc;
         border-radius: 50%; */
         /* align-items: center;
         text-align: center; */
         /* padding: 5px; */
         cursor: pointer;
         font-weight: 800;
         text-shadow: 2px 2px 4px white;
         /* margin: 10px; */
     }


     .image-container {
         position: relative;
         display: inline-block;
         margin-bottom: 2rem;
     }

     .image-container img {
         width: 110px;
         height: 110px;

     }

     .text-overlay {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         color: rgb(152, 150, 150) cursor: pointer;
         padding: 6px 18px;
         font-size: 18px;
         text-align: center;
         border-radius: 50%;
         backdrop-filter: blur(1px);
         cursor: pointer;
         /* Add cursor pointer for interaction */
     }
 </style>
