<style>
@keyframes heartBeat {
  0% {
    transform: scale(1);
  }
  14% {
    transform: scale(1.3);
  }
  28% {
    transform: scale(1);
  }
}

.heart {
  width: 40px;
  height: 40px;
  position: relative;
  animation: heartBeat 1s infinite;
}

.heart:before,
.heart:after {
  content: "";
  position: absolute;
  left: 20px;
  top: 0;
  width: 20px;
  height: 30px;
  background: red;
  border-radius: 30px 30px 0 0;
  transform: rotate(45deg);
  transform-origin: 0 100%;
}

.heart:after {
  left: 0;
  transform: rotate(-45deg);
  transform-origin: 100% 100%;
}
</style>

<div class="heart"></div>