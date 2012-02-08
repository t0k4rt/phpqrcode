<?php
/*
 * PHP QR Code encoder
 *
 * Image output of code using GD2
 *
 * PHP QR Code is distributed under LGPL 3
 * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */
 
    define('QR_VECT', true);

    class QRvect {
    
        //----------------------------------------------------------------------
        public static function eps($frame, $filename = false, $pixelPerPoint = 4, $outerFrame = 4,$saveandprint=FALSE) 
        {
            $vect = self::vectEPS($frame, $pixelPerPoint, $outerFrame);
            
            if ($filename === false) {
                header("Content-Type: application/postscript");
                header('Content-Disposition: filename="qrcode.eps"');
                return $vect;
            } else {
                if($saveandprint===TRUE){
                    header("Content-Type: application/postscript");
                    header('Content-Disposition: filename="'.$filename.'"');
                    return $vect;
                }else{
                    header("Content-Type: application/postscript");
                    header('Content-Disposition: filename="'.$filename.'"');
                    return $vect;
                }
            }
            
            ImageDestroy($image);
        }
        
    
        //----------------------------------------------------------------------
        private static function vectEPS($frame, $pixelPerPoint = 4, $outerFrame = 4) 
        {
            $h = count($frame);
            $w = strlen($frame[0]);
            
            $imgW = $w + 2*$outerFrame;
            $imgH = $h + 2*$outerFrame;
            

            // Set colors/transparency
            $fore_color = 0x000000;
            $back_color = 0xFFFFFF;
            
            // convert a hexadecimal color code into decimal eps format (green = 0 1 0, blue = 0 0 1, ...)
            $r = round((($fore_color & 0xFF0000) >> 16) / 255, 5);
            $b = round((($fore_color & 0x00FF00) >> 8) / 255, 5);
            $g = round(($fore_color & 0x0000FF) / 255, 5);
            $fore_color = $r.' '.$g.' '.$b;
            
            $output = 
            '%!PS-Adobe EPSF-3.0'."\n".
            '%%Creator: Zend_Matrixcode_Qrcode'."\n".
            '%%Title: QRcode'."\n".
            '%%CreationDate: '.date('Y-m-d')."\n".
            '%%DocumentData: Clean7Bit'."\n".
            '%%LanguageLevel: 2'."\n".
            '%%Pages: 1'."\n".
            '%%BoundingBox: 0 0 '.$imgW * $pixelPerPoint.' '.$imgH * $pixelPerPoint."\n";
            
            // set the scale
            $output .= $pixelPerPoint.' '.$pixelPerPoint.' scale'."\n";
            // position the center of the coordinate system
            
            $output .= $outerFrame.' '.$outerFrame.' translate'."\n";
            
            // redefine the 'rectfill' operator to shorten the syntax
            $output .= '/F { rectfill } def'."\n";
            // set the symbol color
            $output .= $fore_color.' setrgbcolor'."\n";
            


            // Convert the matrix into pixels

            for($i=0; $i<$h; $i++) {
                for($j=0; $j<$w; $j++) {
                    if( $frame[$i][$j] ) {
                        $x = $i;
                        $y = $h - 1 - $j;
                        $output .= $x.' '.$y.' 1 1 F'."\n";
                    }
                }
            }
            
            $output .='%%EOF';
            
            return $output;
        }
    }