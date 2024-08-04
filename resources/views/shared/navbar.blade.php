<style>
  .button {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: rgb(20, 20, 20);
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    /* box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164); */
    cursor: pointer;
    transition-duration: .8s;
    overflow: hidden;
    position: relative;
  }

  .svgIcon {
    width: 12px;
    transition-duration: .8s;
  }

  .svgIcon path {
    fill: white;
  }

  .button:hover {
    width: 140px;
    border-radius: 50px;
    transition-duration: .8s;
    /* background-color: green; */
    align-items: center;
  }

  .button:hover .svgIcon {
    width: 50px;
    transition-duration: .8s;
    transform: translateY(60%);
  }

  .button::before {
    position: absolute;
    top: -30px;
    content: "Resume";
    color: white;
    transition-duration: .8s;
  }

  .button:hover::before {
    font-size: 13px;
    opacity: 1;
    transform: translateY(30px);
    transition-duration: .8s;
  }
</style>




<div class="flex text-white py-4 justify-between commonContainer">
  <div>Rafin Hossain</div>
  <div>
    <button class="button">


      <svg class="svgIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
        <path
          d="M1 14.5C1 12.1716 2.22429 10.1291 4.06426 8.9812C4.56469 5.044 7.92686 2 12 2C16.0731 2 19.4353 5.044 19.9357 8.9812C21.7757 10.1291 23 12.1716 23 14.5C23 17.9216 20.3562 20.7257 17 20.9811L7 21C3.64378 20.7257 1 17.9216 1 14.5ZM16.8483 18.9868C19.1817 18.8093 21 16.8561 21 14.5C21 12.927 20.1884 11.4962 18.8771 10.6781L18.0714 10.1754L17.9517 9.23338C17.5735 6.25803 15.0288 4 12 4C8.97116 4 6.42647 6.25803 6.0483 9.23338L5.92856 10.1754L5.12288 10.6781C3.81156 11.4962 3 12.927 3 14.5C3 16.8561 4.81833 18.8093 7.1517 18.9868L7.325 19H16.675L16.8483 18.9868ZM13 12H16L12 17L8 12H11V8H13V12Z">
        </path>
      </svg>

    </button>
  </div>
</div>