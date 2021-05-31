<?php date_default_timezone_set ('Europe/Moscow') ?>

<table>
  <tr>
    <td>Name</td>
    <td>Moseev Evgeny</td>
  </tr>
  <tr>
    <td>Date</td>
    <td><?= date('H:i:s d F Y l e') ?></td>
  </tr>
</table>

<style>
  table {
    border-collapse: collapse;
    font-size: 18px;
    font-family: sans-serif;
  }
  td {
    padding: 5px;
    border: 3px solid black;
  }
  td:first-child {
    background-color: #95bcf2;
  }
</style>
