<?php
include "dbConnect.php";

$query = $conn->query("SELECT  horaire FROM horaires");
$result = $query->fetch_ALL();

echo '
<form action="php/setHoraires.php" method="post" class="my-5 d-flex justify-content-center">
    <div class="container d-flex flex-column align-items-center w-auto">
        <div class="jour">
            <div class="d-flex">
                <p class="mx-2" style="font-size: 20px;">Lundi:</p>
            </div>
            <div class="d-flex">
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[0][0] . '" name="lHour1">
                    <p style="font-size: 20px;" class="mx-2">-</p>
                </div>
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[1][0] . '" name="lHour2">
                    <p style="font-size: 20px;" class="mx-3 coma">,</p>
                </div>
            </div>
            <div class="d-flex">
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[2][0] . '" name="lHour3">
                    <p style="font-size: 20px;" class="mx-2">-</p>
                </div>
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[3][0] . '" name="lHour4">
                </div>
            </div>
        </div>
        <div class="jour">
            <div class="d-flex">
                <p class="mx-2" style="font-size: 20px;">Mardi:</p>
            </div>
            <div class="d-flex">
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[4][0] . '" name="maHour1">
                    <p style="font-size: 20px;" class="mx-2">-</p>
                </div>
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[5][0] . '" name="maHour2">
                    <p style="font-size: 20px;" class="mx-3 coma">,</p>
                </div>
            </div>
            <div class="d-flex">
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[6][0] . '" name="maHour3">
                    <p style="font-size: 20px;" class="mx-2">-</p>
                </div>
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[7][0] . '" name="maHour4">
                </div>
            </div>
        </div>
        <div class="jour">
            <div class="d-flex">
                <p class="mx-2" style="font-size: 20px;">Mercredi:</p>
            </div>
            <div class="d-flex">
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[8][0] . '" name="meHour1">
                    <p style="font-size: 20px;" class="mx-2">-</p>
                </div>
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[9][0] . '" name="meHour2">
                    <p style="font-size: 20px;" class="mx-3 coma">,</p>
                </div>
            </div>
            <div class="d-flex">
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[10][0] . '" name="meHour3">
                    <p style="font-size: 20px;" class="mx-2">-</p>
                </div>
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[11][0] . '" name="meHour4">
                </div>
            </div>
        </div>
        <div class="jour">
            <div class="d-flex">
                <p class="mx-2" style="font-size: 20px;">Jeudi:</p>
            </div>
            <div class="d-flex">
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[12][0] . '" name="jHour1">
                    <p style="font-size: 20px;" class="mx-2">-</p>
                </div>
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[13][0] . '" name="jHour2">
                    <p style="font-size: 20px;" class="mx-3 coma">,</p>
                </div>
            </div>
            <div class="d-flex">
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[14][0] . '" name="jHour3">
                    <p style="font-size: 20px;" class="mx-2">-</p>
                </div>
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[15][0] . '" name="jHour4">
                </div>
            </div>
        </div>
        <div class="jour">
            <div class="d-flex">
                <p class="mx-2" style="font-size: 20px;">Vendredi:</p>
            </div>
            <div class="d-flex">
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[16][0] . '" name="vHour1">
                    <p style="font-size: 20px;" class="mx-2">-</p>
                </div>
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[17][0] . '" name="vHour2">
                    <p style="font-size: 20px;" class="mx-3 coma">,</p>
                </div>
            </div>
            <div class="d-flex">
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[18][0] . '" name="vHour3">
                    <p style="font-size: 20px;" class="mx-2">-</p>
                </div>
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[19][0] . '" name="vHour4">
                </div>
            </div>
        </div>
        <div class="jour">
            <div class="d-flex">
                <p class="mx-2" style="font-size: 20px;">Samedi:</p>
            </div>
            <div class="d-flex">
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[20][0] . '" name="sHour1">
                    <p style="font-size: 20px;" class="mx-2">-</p>
                </div>
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[21][0] . '" name="sHour2">
                    <p style="font-size: 20px;" class="mx-3 coma">,</p>
                </div>
            </div>
            <div class="d-flex">
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[22][0] . '" name="sHour3">
                    <p style="font-size: 20px;" class="mx-2">-</p>
                </div>
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[23][0] . '" name="sHour4">
                </div>
            </div>
        </div>
        <div class="jour">
            <div class="d-flex">
                <p class="mx-2" style="font-size: 20px;">Dimanche:</p>
            </div>
            <div class="d-flex">
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[24][0] . '" name="dHour1">
                    <p style="font-size: 20px;" class="mx-2">-</p>
                </div>
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[25][0] . '" name="dHour2">
                    <p style="font-size: 20px;" class="mx-3 coma">,</p>
                </div>
            </div>
            <div class="d-flex">
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[26][0] . '" name="dHour3">
                    <p style="font-size: 20px;" class="mx-2">-</p>
                </div>
                <div class="d-flex" style="max-height: 2rem;">
                    <input type="time" required value="' . $result[27][0] . '" name="dHour4">
                </div>
            </div>
        </div>
        <input type="submit" class="mt-5 btn btn-primary btn-lg" value="Confirmer">
    </div>
</form>
';

$conn->close();


?>