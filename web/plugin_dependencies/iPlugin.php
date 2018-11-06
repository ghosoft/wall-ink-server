<?php
interface iPlugin {
    public function getIndex();
    public function getName();
    public function isActive($config);
    public function getResources($config);
    public function getImage($config, $device);
    public function getDeviceType($device);
}
$plugins = array();
?>
