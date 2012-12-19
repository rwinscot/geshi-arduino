<?php
/*************************************************************************************
 * arduino.php (based on c.php)
 * -----
 * Author: Nigel McNie (nigel@geshi.org)
 * Contributors:
 *  - Jack Lloyd (lloyd@randombit.net)
 *  - Michael Mol (mikemol@gmail.com)
 *  - Trimbitas Sorin-Iulian (trimbitassorin@hotmail.com)
 *  - Rick Winscot (rick.winscot@gmail.com)
 *
 * Copyright: (c) 2004 Nigel McNie (http://qbnz.com/highlighter/)
 * Release Version: 1.0.1
 * Date Started: 2009/08/09
 *
 * Arduino language file for GeSHi.
 *
 * CHANGES
 * -------
 *  2012/17/12 (1.0.1)
 *   -  Implemented REDIRECT for handling complex URLs (see: redirect.php )
 *   -  Added Arduino primary function reference links
 *  2009/08/09 (1.0.0)
 *   -  Forked / first release c.php 1.0.8.3 => arduino.php 1.0.0
 *
 * TODO (updated 2012/12/17)
 * -------------------------
 *  -  first, second, and fourth level reference links
 *  -  add drop-in support for libraries 
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Arduino',
    'COMMENT_SINGLE' => array(1 => '//', 2 => '#'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'COMMENT_REGEXP' => array(
        //Multiline-continued single-line comments
        1 => '/\/\/(?:\\\\\\\\|\\\\\\n|.)*$/m',
        //Multiline-continued preprocessor define
        2 => '/#(?:\\\\\\\\|\\\\\\n|.)*$/m'
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array("'", '"'),
    'ESCAPE_CHAR' => '',
    'ESCAPE_REGEXP' => array(
        //Simple Single Char Escapes
        1 => "#\\\\[\\\\abfnrtv\'\"?\n]#i",
        //Hexadecimal Char Specs
        2 => "#\\\\x[\da-fA-F]{2}#",
        //Hexadecimal Char Specs
        3 => "#\\\\u[\da-fA-F]{4}#",
        //Hexadecimal Char Specs
        4 => "#\\\\U[\da-fA-F]{8}#",
        //Octal Char Specs
        5 => "#\\\\[0-7]{1,3}#"
        ),
    'NUMBERS' =>
        GESHI_NUMBER_INT_BASIC | GESHI_NUMBER_INT_CSTYLE | GESHI_NUMBER_BIN_PREFIX_0B |
        GESHI_NUMBER_OCT_PREFIX | GESHI_NUMBER_HEX_PREFIX | GESHI_NUMBER_FLT_NONSCI |
        GESHI_NUMBER_FLT_NONSCI_F | GESHI_NUMBER_FLT_SCI_SHORT | GESHI_NUMBER_FLT_SCI_ZERO,
    'KEYWORDS' => array(
        1 => array(
            'if', 'return', 'while', 'case', 'continue',
			'default', 'do', 'else', 'for', 'switch', 'goto'
            ),
        2 => array(
            'null', 'false', 'break', 'true', 'function', 'enum', 'extern', 'inline', 'HIGH', 'LOW', 'INPUT', 'OUTPUT'
            ),
        3 => array(
            'pinMode', 'digitalWrite', 'digitalRead', 'analogRead', 'analogWrite', 'shiftOut', 'pulseIn',
			'millis', 'micros', 'delay', 'delayMicroseconds', 'min', 'max', 'abs', 'constrain', 'map', 'pow',
			'sq', 'sqrt', 'sin', 'cos', 'tan', 'randomSeed', 'random', 'Serial', 'sizeof', 'lowByte', 'highByte',
			'bitRead', 'bitWrite', 'bitSet', 'bitClear', 'bit', 'attachInterrupt', 'detachInterrupt', 'interrupts', 'noInterrupts', 'Serial', 'Stream', 'sizeof', 'Mouse', 'Keyboard'  
            ),
        4 => array(
            'void', 'boolean', 'char', 'const', 'unsigned', 'float', 'int', 'long', 'volatile',
            'short', 'signed', 'static', 'string', 'double', 'byte', '', 'array', 'word',
            ),
        ),
    'SYMBOLS' => array(
        '(', ')', '{', '}', '[', ']',
        '+', '-', '*', '/', '%',
        '=', '<', '>',
        '!', '^', '&', '|',
        '?', ':',
        ';', ','
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #b1b100;',
            2 => 'color: #000000; font-weight: bold;',
            3 => 'color: #000066;',
            4 => 'color: #993333;'
            ),
        'COMMENTS' => array(
            1 => 'color: #666666; font-style: italic;',
            2 => 'color: #339933;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;',
            1 => 'color: #000099; font-weight: bold;',
            2 => 'color: #660099; font-weight: bold;',
            3 => 'color: #660099; font-weight: bold;',
            4 => 'color: #660099; font-weight: bold;',
            5 => 'color: #006699; font-weight: bold;',
            'HARD' => '',
            ),
        'BRACKETS' => array(
            0 => 'color: #009900;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #0000dd;',
            GESHI_NUMBER_BIN_PREFIX_0B => 'color: #208080;',
            GESHI_NUMBER_OCT_PREFIX => 'color: #208080;',
            GESHI_NUMBER_HEX_PREFIX => 'color: #208080;',
            GESHI_NUMBER_FLT_SCI_SHORT => 'color:#800080;',
            GESHI_NUMBER_FLT_SCI_ZERO => 'color:#800080;',
            GESHI_NUMBER_FLT_NONSCI_F => 'color:#800080;',
            GESHI_NUMBER_FLT_NONSCI => 'color:#800080;'
            ),
        'METHODS' => array(
            1 => 'color: #202020;',
            2 => 'color: #202020;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #339933;'
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            )
        ),
    'URLS' => array(
        1 => '',
        2 => '',
        3 => 'geshi/redirect.php?language=arduino&search={FNAME}',
        4 => ''
        ),
    'REDIRECT' => array(
    	'setup' => 'http://arduino.cc/en/Reference/Setup',
    	'loop' => 'http://arduino.cc/en/Reference/Loop',
    	'pinMode' => 'http://arduino.cc/en/Reference/PinMode',
    	'digitalWrite' => 'http://arduino.cc/en/Reference/DigitalWrite',
    	'digitalRead' => 'http://arduino.cc/en/Reference/DigitalRead',
    	'analogReference' => 'http://arduino.cc/en/Reference/AnalogReference',
    	'analogRead' => 'http://arduino.cc/en/Reference/AnalogRead',
    	'analogWrite' => 'http://arduino.cc/en/Reference/AnalogWrite',
    	'analogReadResolution' => 'http://arduino.cc/en/Reference/AnalogReadResolution',
    	'analogWriteResolution' => 'http://arduino.cc/en/Reference/AnalogWriteResolution',
    	'tone' => 'http://arduino.cc/en/Reference/Tone',
    	'noTone' => 'http://arduino.cc/en/Reference/NoTone',
    	'shiftOut' => 'http://arduino.cc/en/Reference/ShiftOut',
    	'shiftIn' => 'http://arduino.cc/en/Reference/ShiftIn',
    	'pulseIn' => 'http://arduino.cc/en/Reference/PulseIn',
    	'millis' => 'http://arduino.cc/en/Reference/Millis',
    	'micros' => 'http://arduino.cc/en/Reference/Micros',
    	'delay' => 'http://arduino.cc/en/Reference/Delay',
    	'delayMicroseconds' => 'http://arduino.cc/en/Reference/DelayMicroseconds',
    	'min' => 'http://arduino.cc/en/Reference/Min',
    	'max' => 'http://arduino.cc/en/Reference/Max',
    	'abs' => 'http://arduino.cc/en/Reference/Abs',
    	'constrain' => 'http://arduino.cc/en/Reference/Constrain',
    	'map' => 'http://arduino.cc/en/Reference/Map',
    	'pow' => 'http://arduino.cc/en/Reference/Pow',
    	'sqrt' => 'http://arduino.cc/en/Reference/Sqrt',
    	'sin' => 'http://arduino.cc/en/Reference/Sin',
    	'cos' => 'http://arduino.cc/en/Reference/Cos',
    	'tan' => 'http://arduino.cc/en/Reference/Tan',
    	'randomSeed' => 'http://arduino.cc/en/Reference/RandomSeed',
    	'random' => 'http://arduino.cc/en/Reference/Random',
    	'lowByte' => 'http://arduino.cc/en/Reference/LowByte',
    	'highByte' => 'http://arduino.cc/en/Reference/HighByte',
    	'bitRead' => 'http://arduino.cc/en/Reference/BitRead',
    	'bitWrite' => 'http://arduino.cc/en/Reference/BitWrite',
    	'bitSet' => 'http://arduino.cc/en/Reference/BitSet',
    	'bitClear' => 'http://arduino.cc/en/Reference/BitClear',
    	'bit' => 'http://arduino.cc/en/Reference/Bit',
    	'attachInterrupt' => 'http://arduino.cc/en/Reference/AttachInterrupt',
    	'detachInterrupt' => 'http://arduino.cc/en/Reference/DetachInterrupt',
    	'interrupts' => 'http://arduino.cc/en/Reference/Interrupts',
    	'noInterrupts' => 'http://arduino.cc/en/Reference/NoInterrupts',
    	'Serial' => 'http://arduino.cc/en/Reference/Serial',
    	'Stream' => 'http://arduino.cc/en/Reference/Stream',
    	'sizeof' => 'http://arduino.cc/en/Reference/Sizeof',
    	'Keyboard' => 'http://arduino.cc/en/Reference/Keyboard',
    	'Mouse' => 'http://arduino.cc/en/Reference/Mouse'
    	),
    'OOLANG' => true,
    'OBJECT_SPLITTERS' => array(
        1 => '.',
        2 => '::'
        ),
    'REGEXPS' => array(
        ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array(
        ),
    'HIGHLIGHT_STRICT_BLOCK' => array(
        ),
    'TAB_WIDTH' => 4
);

?>