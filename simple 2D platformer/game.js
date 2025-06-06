const canvas = document.getElementById('gameCanvas');
const ctx = canvas.getContext('2d');
let cameraX = 0;

const player = {
  x: 50,
  y: canvas.height - 100,
  width: 50,
  height: 50,
  speed: 5,
  velY: 0,
  jumping: false,
  grounded: false,
  collectedCoins: 0,
};

const platforms = [
  { x: 0, y: canvas.height - 20, width: canvas.width, height: 20 },
  { x: 150, y: canvas.height - 100, width: 200, height: 20 },
  { x: 400, y: canvas.height - 180, width: 200, height: 20 },
];

const coins = [
  { x: 200, y: canvas.height - 140, width: 20, height: 20, spinAngle: 0, floatOffset: 0, floatDirection: 1 },
  { x: 450, y: canvas.height - 220, width: 20, height: 20, spinAngle: 0, floatOffset: 0, floatDirection: 1 },
];

const keys = {
  left: false,
  right: false,
  space: false,
};

const gravity = 0.3;
const friction = 0.8;

document.addEventListener('keydown', (e) => {
  if (e.code === 'ArrowLeft') keys.left = true;
  if (e.code === 'ArrowRight') keys.right = true;
  if (e.code === 'Space') keys.space = true;
});

document.addEventListener('keyup', (e) => {
  if (e.code === 'ArrowLeft') keys.left = false;
  if (e.code === 'ArrowRight') keys.right = false ;
  if (e.code === 'Space') keys.space = false;
});

let nextPlatformHeight = 'low';

function generateNewPlatforms() {
  const lastPlatform = platforms[platforms.length - 1];
  if (lastPlatform.x - cameraX < canvas.width) {
    const minDistanceX = 250;
    const maxJumpHeight = player.speed * 2 * 2;
    const minY = canvas.height / 2;
    const maxY = canvas.height - 200;

    const newPlatformX = lastPlatform.x + Math.floor(Math.random() * 150) + minDistanceX;
    let newPlatformY;

    if (nextPlatformHeight === 'low') {
      newPlatformY = maxY;
      nextPlatformHeight = 'higher';
    } else if (nextPlatformHeight === 'higher') {
      newPlatformY = minY;
      nextPlatformHeight = 'highest';
    } else {
      newPlatformY = Math.floor(Math.random() * (maxY - minY)) + minY;
      nextPlatformHeight = 'low';
    }

    const newPlatformWidth = Math.floor(Math.random() * 100) + 100;
    const newPlatformHeight = 20;

    platforms.push({
      x: newPlatformX,
      y: newPlatformY,
      width: newPlatformWidth,
      height: newPlatformHeight,
    });

    const newCoinX = newPlatformX + newPlatformWidth / 2;
    const newCoinY = newPlatformY - 30;
    const newCoinWidth = 20;
    const newCoinHeight = 20;

    coins.push({
      x: newCoinX,
      y: newCoinY,
      width: newCoinWidth,
      height: newCoinHeight,
      lastUpdate: Date.now(),
      spinAngle: 0,
      floatOffset: 0,
      floatDirection: 1,
    });
  }
}

function renderCoinCounter() {
  ctx.fillStyle = 'black';
  ctx.font = '24px Arial';
  ctx.fillText(`Coins: ${player.collectedCoins}`, 10, 30);
}

// game over and restart functionality
let gameOverScreen = false;

function gameOver() {
  gameOverScreen = true;
  
  ctx.fillStyle = 'red';
  ctx.font = '48px Arial';
  ctx.fillText('Game Over', canvas.width / 2 - 100, canvas.height / 2 - 50);

  const button = document.createElement('button');
  button.innerHTML = 'Restart';
  button.style.position = 'absolute';
  button.style.left = `${canvas.offsetLeft + canvas.width / 2 - 50}px`;
  button.style.top = `${canvas.offsetTop + canvas.height / 2}px`;
  document.body.appendChild(button);

  button.addEventListener('click', () => {
    restartGame();
    document.body.removeChild(button);
  });
}

function restartGame() {
  location.reload();
}
// game over and restart functionality




function update() {

  if (gameOverScreen) {
    return;
  }

  if (player.y > canvas.height) {
    gameOver();
    return;
  }

  // update coins
  updateCoins();

  // Update player position
  if (keys.left) player.x -= player.speed;
  if (keys.right) player.x += player.speed;

  if (!player.jumping && keys.space) {
    player.jumping = true;
    player.velY = -player.speed * 2;
  }

  // Update player's y position and apply gravity
  player.y += player.velY;
  player.velY += gravity;

  // Set the camera position based on the player's position
  cameraX = Math.max(0, player.x - canvas.width / 2);

  // Check for collisions with platforms
  player.grounded = false;
  platforms.forEach((platform) => {
    if (
      player.x + player.width > platform.x &&
      player.x < platform.x + platform.width &&
      player.y + player.height > platform.y &&
      player.y + player.height < platform.y + platform.height
    ) {
      player.grounded = true;
      player.y = platform.y - player.height;
      player.velY = 0;
      player.jumping = false;
    }
  });

  // Check for collisions with coins
  for (let i = 0; i < coins.length; i++) {
    const coin = coins[i];
    if (
      player.x + player.width > coin.x &&
      player.x < coin.x + coin.width &&
      player.y + player.height > coin.y &&
      player.y < coin.y + coin.height
    ) {
      coins.splice(i, 1);
      i--;
      player.collectedCoins++;
    }
  }

  // Clear the canvas
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  // Render platforms relative to camera position
  ctx.fillStyle = 'blue';
  platforms.forEach((platform) => {
    ctx.fillRect(platform.x - cameraX, platform.y, platform.width, platform.height);
  });

  // Render coins relative to camera position
  renderCoins();

  // Render player as a white rectangle
  ctx.fillStyle = 'white';
  ctx.fillRect(player.x - cameraX, player.y, player.width, player.height);

  // Render the coin counter
  renderCoinCounter();

  // Generate new platforms and coins as the player moves
  generateNewPlatforms();

  requestAnimationFrame(update);
}

// adds animation to coins
function updateCoins() {
  coins.forEach((coin) => {
    const spinSpeed = 5; // adjust this value to change the spin speed
    coin.spinAngle += spinSpeed;
  });
}

function renderCoins() {
  ctx.fillStyle = 'yellow';
  coins.forEach((coin) => {
    // update floatOffset
    const floatSpeed = 0.5; // adjust this value to change the float speed
    const floatRange = 5; // adjust this value to change the float range
    coin.floatOffset += floatSpeed * coin.floatDirection;
    if (coin.floatOffset > floatRange) {
      coin.floatDirection = -1;
    } else if (coin.floatOffset < -floatRange) {
      coin.floatDirection = 1;
    }

    ctx.save();
    ctx.translate(coin.x - cameraX + coin.width / 2, coin.y + coin.floatOffset + coin.height / 2);
    ctx.rotate(coin.spinAngle * Math.PI / 180);
    ctx.beginPath();
    ctx.arc(0, 0, coin.width / 2, 0, 2 * Math.PI);
    ctx.fill();
    ctx.restore();
  });
}

update();