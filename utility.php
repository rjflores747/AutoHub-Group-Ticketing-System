<?php
    class Utility{
        public static function curl($array_data)
        {
            if (empty($array_data['uri'])) {
                return "No uri";
            }
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $array_data['uri']);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, empty($array_data['parameters']) ? null : $array_data['parameters']);
            if (!empty($array_data['header']) > 0) {
                curl_setopt($ch, CURLOPT_HTTPHEADER, $array_data['headers']);
            }

            return curl_exec($ch);
        }
    }
?>