<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        :root {
        --primary-color: #7380ec;
        }
label {
  display: block;
  margin-bottom: 0.5rem;
}

input {
  display: block;
  width: 100%;
  padding: 0.75rem;
  border: 1px solid #ccc;
  border-radius: 0.25rem;
}

.width-50 {
  width: 50%;
  
}

.ml-auto {
  margin-left: auto;
}

.text-center {
  text-align: center;
}

/* Progressbar */
.progressbar {
  position: relative;
  display: flex;
  justify-content: space-between;
  counter-reset: step;
  margin: 2rem 0 4rem;
 
}

.progressbar::before,
.progress {
  content: "";
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  height: 4px;
  width: 100%;
  background-color: #dcdcdc;
  z-index: -1;
}

.progress {
  background-color: var(--primary-color);
  width: 0%;
  transition: 0.3s;
}

.progress-step {
  width: 2.1875rem;
  height: 2.1875rem;
  background-color: #dcdcdc;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
}

.progress-step::before {
  counter-increment: step;
  content: counter(step);
}

.progress-step::after {
  content: attr(data-title);
  position: absolute;
  top: calc(100% + 0.5rem);
  font-size: 0.85rem;
  color: #666;
}

.progress-step-active {
  background-color: var(--primary-color);
  color: #f3f3f3;
}

/* Form */
.form {
  width: 100%;
  /* margin: 0 auto; */
  border: 1px solid #ccc;
  border-radius: 0.35rem;
  padding: 1.5rem;
  margin-top:1rem;
}

.form-step {
  display: none;
  transform-origin: top;
  animation: animate 0.5s;
}

.form-step-active {
  display: block;
}

.input-group {
  margin: 2rem 0;
}

@keyframes animate {
  from {
    transform: scale(1, 0);
    opacity: 0;
  }
  to {
    transform: scale(1, 1);
    opacity: 1;
  }
}

/* Button */
.btns-group {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 1.5rem;
}

.btn {
  padding: 0.75rem;
  display: block;
  text-decoration: none;
  background-color: var(--primary-color);
  color: #f3f3f3;
  text-align: center;
  border-radius: 0.25rem;
  cursor: pointer;
  transition: 0.3s;
}
.btn:hover {
  box-shadow: 0 0 0 2px #fff, 0 0 0 3px var(--primary-color);
} 

/* code model is here----   */

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

      
    <title>Registraion Form</title>
  </head>
  <body>
    <form action="registerData.php" class="form" method="post">
      <h1 class="text-center">Registration Form</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active" data-title="Leader"></div>
        <div class="progress-step" data-title="Member 1"></div>
        <div class="progress-step" data-title="Member 2"></div>
        <div class="progress-step" data-title="Member 3"></div>
        <div class="progress-step" data-title="Member 4"></div>
        <div class="progress-step" data-title="Member 5"></div>

      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
        <div class="input-group">
          <label for="username">Team Name </label>
          <input type="text" name="teamname" id="username" />
        </div>
        
        <div class="input-group">
          <label for="position">Team Email Id</label>
          <input type="email" name="teamid" id="position" />
        </div>
        <div class="">
          <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
        </div>
      </div>
      
      <div class="form-step">
        <div class="input-group">
          <label for="dob">Team Member Name</label>
          <input type="text" name="mem1" id="dob" />
        </div>
        <div class="input-group">
          <label for="ID">Member ID</label>
          <input type="text" name="mem1id" id="ID" />
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="dob">Team Member Name</label>
          <input type="text" name="mem2" id="dob" />
        </div>
        <div class="input-group">
          <label for="ID">Member ID</label>
          <input type="text" name="mem2id" id="ID" />
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="dob">Team Member Name</label>
          <input type="text" name="mem3" id="dob" />
        </div>
        <div class="input-group">
          <label for="ID">Member ID</label>
          <input type="text" name="mem3id" id="ID" />
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="phone">Team Member Name</label>
          <input type="text" name="mem4" id="phone" />
        </div>
        <div class="input-group">
          <label for="email">Member ID</label>
          <input type="text" name="mem4id" id="email" />
        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>
      <div class="form-step">
        <div class="input-group">
          <label for="password">Team Member Name</label>
          <input type="text" name="mem5" id="password" />
        </div>
        <div class="input-group">
          <label for="ID">Member ID</label>
          <input type="text" name="mem5id" id="ID" />
        </div>
        <!-- //game id data is here -->
       <div class="input-group" >
        <input  id="first-Name" name="gameTask" type="text" value="" />
      </div>


        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <input type="submit" value="Submit" class="btn btn_done" id="finalSubmit" name="sendData" />
        </div>
      </div>
      
      
    </form>

    

    

    
    
    <script>
        const prevBtns = document.querySelectorAll(".btn-prev");
        const nextBtns = document.querySelectorAll(".btn-next");
        const progress = document.getElementById("progress");
        const formSteps = document.querySelectorAll(".form-step");
        const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active");
  });

  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}
  

//local storerdata come
const firstName = localStorage.getItem('first-Name');
document.getElementById('first-Name').textContent = firstName; //first data
const newVar = document.getElementById('first-Name');
newVar.setAttribute('value' , firstName);

 console.log(firstName);//console value



    </script>
  </body>
</html>