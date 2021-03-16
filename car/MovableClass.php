<?php 

require_once('./MovableInterface.php');

class Ride implements MovableInterface {
	private $maximum = null;
	private $engine = false;
	private $start_speed = 0;
	private $msg = 'In garage';
	
	public function __construct($max = 5) {
		$this->maximum = $max;
	}
	
    public function start() {
		$this->engine = true;
		$this->msg = 'Ready to accelerate, bro!';
		echo $this->msg . PHP_EOL;
	}

    public function stop() {
		if ($this->engine) {
			if ($this->start_speed) {
				$i = $this->start_speed;
				for ($i; $i >= 0; $i--) {
					if ($i == 0) {
						$this->engine = false;
						$this->start_speed = 0;
						$this->msg = 'Car is parked, bro!';
					} else {
						$this->start_speed --;
						echo 'Speed is down: ' . $this->start_speed . ', before stopped!' . PHP_EOL;
					}
				}
			} else {
				$this->msg = 'Is this parked place, bro ?';
			}
		} else {
			$this->msg = 'Turn ON engine, bro !';
		}
		echo $this->msg . PHP_EOL;
	}

    public function up() {
		if ($this->engine) {
			if ($this->start_speed) {
				if ($this->start_speed < $this->maximum) {
					$this->start_speed ++;
					$this->msg = 'Speed is upper now: ' . $this->start_speed;
				} elseif ($this->start_speed == $this->maximum) {
					$this->start_speed == $this->maximum;
					$this->msg = 'Speed is maximum: ' . $this->start_speed . ', be careful!';
				}
			} else {
				$this->start_speed = 1;
				$this->msg = 'Nice travel, you speed is: ' . $this->start_speed;
			}			
		} else {
			$this->msg = 'You forgot turn on engine!';
		}
		echo $this->msg . PHP_EOL;
	}

    public function down() {
		if ($this->engine) {
			if ($this->start_speed) {
				if ($this->start_speed == $this->maximum) {
					$this->start_speed --;
					$this->msg = 'Thank\'s GOD, speed is slowely: ' . $this->start_speed;
				} elseif (($this->start_speed > 1 )&& ($this->start_speed < $this->maximum)) {
					$this->start_speed --;
					$this->msg = 'Speed is slowely: ' . $this->start_speed . ', nice ride!';
				} elseif ($this->start_speed == 1) {
					$this->start_speed = 0;
					$this->msg = 'You are stopped! the speed is: ' . $this->start_speed . '';
				}
			}			
		} else {
			$this->msg = 'You forgot turn on engine, bro!';
		}
		echo $this->msg . PHP_EOL;
	}
}