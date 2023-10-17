<?php

class SortAndSearch {
    public function linearSearch($data, $target) {
        $found = false;

        foreach ($data as $item) {
            if ($item == $target) {
                $found = true;
                break;
            }
        }

        return $found;
    }

    public function selectionSort(&$data) {
        $n = count($data);
        for ($i = 0; $i < $n - 1; $i++) {
            $minIndex = $i;

            for ($j = $i + 1; $j < $n; $j++) {
                if ($data[$j] < $data[$minIndex]) {
                    $minIndex = $j;
                }
            }

            if ($minIndex != $i) {
                $temp = $data[$i];
                $data[$i] = $data[$minIndex];
                $data[$minIndex] = $temp;
            }
        }
    }

    public function insertionSort(&$data) {
        $n = count($data);
        for ($i = 1; $i < $n; $i++) {
            $key = $data[$i];
            $j = $i - 1;

            while ($j >= 0 && $data[$j] > $key) {
                $data[$j + 1] = $data[$j];
                $j = $j - 1;
            }
            $data[$j + 1] = $key;
        }
    }

    public function bubbleSort(&$data) {
        $n = count($data);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($data[$j] > $data[$j + 1]) {
                    $temp = $data[$j];
                    $data[$j] = $data[$j + 1];
                    $data[$j + 1] = $temp;
                }
            }
        }
    }
}

$numeros = [2, 5, 8, 6, 4, 3, 0, 9, 1, 100, 6, 3, 99];
$s = new SortAndSearch();

echo "LINEAR SEARCH: ";
$target = 10;
if ($s->linearSearch($numeros, $target)) {
    echo "Found";
} else {
    echo "Not Found";
}
echo "\n";

$s->selectionSort($numeros);
echo "SELECTION SORT: ";
echo implode(', ', $numeros);
echo "\n";

$numeros = [2, 5, 8, 6, 4, 3, 0, 9, 1, 100, 6, 3, 99]; // Reinicializamos el array
$s->insertionSort($numeros);
echo "INSERTION SORT: ";
echo implode(', ', $numeros);
echo "\n";

$numeros = [2, 5, 8, 6, 4, 3, 0, 9, 1, 100, 6, 3, 99]; // Reinicializamos el array
$s->bubbleSort($numeros);
echo "BUBBLE SORT: ";
echo implode(', ', $numeros);
echo "\n";

