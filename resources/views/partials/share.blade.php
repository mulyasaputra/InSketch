<style>
   /* Moladbox Share */
.modal-wrapper1 {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  background: rgba(0, 0, 0, 0.596);
  display: grid;
  align-content: center;
  justify-content: center;
  visibility: hidden;
  opacity: 0;
  transition: all 0.5s ease-in-out;
  color: var(--Clear);
  z-index: 2;
  -webkit-user-select: none; /* Safari */
  -ms-user-select: none; /* IE 10 and IE 11 */
  user-select: none; /* Standard syntax */
}
.modal-wrapper1.open {
  opacity: 1;
  visibility: visible;
}
.modal1 {
  padding: 0 24px;
  width: 600px;
  height: 400px;
  background-color: var(--Dark);
  display: block;
  transition: all 0.5s ease-in-out;
  border-radius: 5px;
  box-shadow: rgba(0, 0, 0, 0.14) 0px 16px 24px 2px, rgba(0, 0, 0, 0.12) 0px 6px 30px 5px, rgba(0, 0, 0, 0.4) 0px 8px 10px -5px;
  position: relative;
}
.modal1 i {
  position: absolute;
  right: 20px;
  top: 15px;
  cursor: pointer;
  width: 40px;
  height: 40px;
  border-radius: 100px;
  display: grid;
  place-items: center;
  transition: all 200ms ease-in-out;
}
.modal1 i:hover {
  background-color: rgba(255, 255, 255, 0.1);
}
.head {
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  margin-bottom: 16px;
  padding-bottom: 16px;
}
.head h3 {
  margin-top: 56px;
  letter-spacing: 1px;
  font-size: 16px;
  text-align: center;
}
.share h3 {
  letter-spacing: 1px;
  font-size: 16px;
  margin-top: 20px;
}
.btn-share {
  display: flex;
  justify-content: flex-start;
  gap: 30px;
  margin-top: 20px;
  overflow-y: scroll;
}
.btn-share::-webkit-scrollbar {
  width: 0;
  height: 0;
}
.target {
  line-height: 3;
  margin: 1px 0;
  border: none;
  border-radius: 3px;
  padding: 5px 1px 2px;
  outline: none;
  text-align: inherit;
  background-color: transparent;
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.target span {
  font-size: 13px;
  letter-spacing: 1px;
}
.btn-share .buttonClick {
  --prv: 67px;
  width: var(--prv);
  height: var(--prv);
  border-radius: 100px;
  padding: var(--pdg);
  background-color: var(--clr);
  display: flex;
  justify-content: center;
  align-items: center;
}
.buttonClick svg {
  fill: var(--Clear);
}
.share #bar {
  margin-top: 30px;
  background-color: #181818;
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 2px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0;
}
#bar input {
  margin-left: 16px;
  border: none;
  overflow: hidden;
  white-space: nowrap;
  background-color: rgba(0, 0, 0, 0);
  color: var(--Clear);
  font-size: 14px;
  padding: 3px 10px;
  letter-spacing: 1px;
}
#bar input:focus {
  outline: 1px solid;
}
#bar span {
  padding: 0 18px;
  cursor: pointer;
  letter-spacing: 1px;
  color: var(--Biru);
}
@media (max-width: 663px) {
  .modal {
    transform: scale(0.7);
  }
}
@media (max-width: 505px) {
  .modal {
    transform: scale(0.6);
  }
}
@media (max-width: 410px) {
  .modal {
    transform: scale(0.4);
  }
}
</style>
<div class="modal-wrapper1">
   <div class="modal1">
     <i class="fa fa-times" id="closeBtn1"></i>
     <div class="head">
       <h3>Bagian ke sosial media</h3>
     </div>
     <div class="content1">
       <div class="share">
         <h3>This Like</h3>
         <div class="btn-share">
           <div class="target" title="Facebook" style="--clr: #4267b2; --pdg: 23px">
             <div class="buttonClick Facebook">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                 <path
                   d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                 />
               </svg>
             </div>
             <span>Facebook</span>
           </div>
           <div class="target" title="Whatsapp" style="--clr: #25d366; --pdg: 16px">
             <div class="buttonClick Whatsapp">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                 <path
                   d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"
                 />
               </svg>
             </div>
             <span>Whatsapp</span>
           </div>
           <div class="target" title="Telegram" style="--clr: #0088cc; --pdg: 15px 19px 15px 15px">
             <div class="buttonClick Telegram">
               <svg
                 xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink"
                 version="1.1"
                 x="0px"
                 y="0px"
                 viewBox="0 0 1000 1000"
                 enable-background="new 0 0 1000 1000"
                 xml:space="preserve"
               >
                 <path
                   d="M798.9,938.3c-7.7,0-15.3-2.3-21.8-6.7L530.7,764.5l-132.2,95.1c-10.4,7.5-23.7,9.3-35.8,5c-12-4.3-21.1-14.3-24.4-26.6L272,586.5L34.9,495.8c-14.9-5.7-24.8-20-24.9-36c-0.1-16,9.6-30.4,24.4-36.3L936,64.8c4.1-1.7,8.4-2.7,12.8-3c1.6-0.1,3.1-0.1,4.7,0c9,0.5,17.9,4.2,24.9,11c0.7,0.7,1.4,1.4,2,2.2c5.7,6.6,8.9,14.6,9.5,22.7c0.1,2,0.1,4.1,0,6.2c-0.1,1.5-0.3,3-0.6,4.4L837,906.8c-2.4,12.8-11.2,23.6-23.2,28.6C809,937.3,804,938.3,798.9,938.3z M552.4,685.4l219.5,148.9L890.3,213L462.6,624.5l88.7,60.2C551.7,684.9,552,685.1,552.4,685.4z M369.7,652.3L399,763.6l63.3-45.6l-82.9-56.2C375.6,659.2,372.3,656,369.7,652.3z M155.5,458.9l162.8,62.2c11.7,4.5,20.5,14.3,23.7,26.3l20.6,78.3c0.9-9,5-17.5,11.7-23.9l407.5-392.1L155.5,458.9z"
                 />
               </svg>
             </div>
             <span>Telegram</span>
           </div>
           <div class="target" title="Pinterent" style="--clr: #e60023; --pdg: 17px">
             <div class="buttonClick Pinterent">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                 <path
                   d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"
                 />
               </svg>
             </div>
             <span>Pinterent</span>
           </div>
           <div class="target" title="Twitter" style="--clr: #1da1f2; --pdg: 17px">
             <div class="buttonClick Twitter">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                 <path
                   d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                 />
               </svg>
             </div>
             <span>Twitter</span>
           </div>
           <div class="target" title="Reddit" style="--clr: #ff4500; --pdg: 17px">
             <div class="buttonClick Reddit">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                 <path
                   d="M440.3 203.5c-15 0-28.2 6.2-37.9 15.9-35.7-24.7-83.8-40.6-137.1-42.3L293 52.3l88.2 19.8c0 21.6 17.6 39.2 39.2 39.2 22 0 39.7-18.1 39.7-39.7s-17.6-39.7-39.7-39.7c-15.4 0-28.7 9.3-35.3 22l-97.4-21.6c-4.9-1.3-9.7 2.2-11 7.1L246.3 177c-52.9 2.2-100.5 18.1-136.3 42.8-9.7-10.1-23.4-16.3-38.4-16.3-55.6 0-73.8 74.6-22.9 100.1-1.8 7.9-2.6 16.3-2.6 24.7 0 83.8 94.4 151.7 210.3 151.7 116.4 0 210.8-67.9 210.8-151.7 0-8.4-.9-17.2-3.1-25.1 49.9-25.6 31.5-99.7-23.8-99.7zM129.4 308.9c0-22 17.6-39.7 39.7-39.7 21.6 0 39.2 17.6 39.2 39.7 0 21.6-17.6 39.2-39.2 39.2-22 .1-39.7-17.6-39.7-39.2zm214.3 93.5c-36.4 36.4-139.1 36.4-175.5 0-4-3.5-4-9.7 0-13.7 3.5-3.5 9.7-3.5 13.2 0 27.8 28.5 120 29 149 0 3.5-3.5 9.7-3.5 13.2 0 4.1 4 4.1 10.2.1 13.7zm-.8-54.2c-21.6 0-39.2-17.6-39.2-39.2 0-22 17.6-39.7 39.2-39.7 22 0 39.7 17.6 39.7 39.7-.1 21.5-17.7 39.2-39.7 39.2z"
                 />
               </svg>
             </div>
             <span>Reddit</span>
           </div>
           <div class="target" title="Tumblr" style="--clr: #36465d; --pdg: 24px">
             <div class="buttonClick Tumblr">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                 <path
                   d="M309.8 480.3c-13.6 14.5-50 31.7-97.4 31.7-120.8 0-147-88.8-147-140.6v-144H17.9c-5.5 0-10-4.5-10-10v-68c0-7.2 4.5-13.6 11.3-16 62-21.8 81.5-76 84.3-117.1.8-11 6.5-16.3 16.1-16.3h70.9c5.5 0 10 4.5 10 10v115.2h83c5.5 0 10 4.4 10 9.9v81.7c0 5.5-4.5 10-10 10h-83.4V360c0 34.2 23.7 53.6 68 35.8 4.8-1.9 9-3.2 12.7-2.2 3.5.9 5.8 3.4 7.4 7.9l22 64.3c1.8 5 3.3 10.6-.4 14.5z"
                 />
               </svg>
             </div>
             <span>Tumblr</span>
           </div>
         </div>
         <div id="bar">
           <input
             dir="ltr"
             readonly=""
             size="100%"
             name="link"
             id="linkID"
             value="{{ url()->full(); }}"
           />
           <span id="copyText">SALIN</span>
         </div>
       </div>
     </div>
   </div>
</div>