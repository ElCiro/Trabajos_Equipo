<?php
class TowerOfHanoi {
    private $totalDisks;

    public function __construct($totalDisks) {
        $this->totalDisks = $totalDisks;
    }

    public function solve() {
        $this->moveTower($this->totalDisks, 1, 3, 2);
    }

    private function moveTower($numDisks, $start, $end, $temp) {
        if ($numDisks == 1) {
            $this->moveOneDisk($start, $end);
        } else {
            $this->moveTower($numDisks - 1, $start, $temp, $end);
            $this->moveOneDisk($start, $end);
            $this->moveTower($numDisks - 1, $temp, $end, $start);
        }
    }

    private function moveOneDisk($start, $end) {
        echo "Mover un disco desde la torre $start a la torre $end\n";
    }
}

$numDisks = 3;
$towerOfHanoi = new TowerOfHanoi($numDisks);
$towerOfHanoi->solve();
?>
