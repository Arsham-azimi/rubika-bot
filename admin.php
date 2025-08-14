<?php
define('DATA_DIR', __DIR__ . '/storage/');
define('TOKEN', '<token robot rubika >');
define('DEFAULT_ADMIN_USERNAME', 'admin');
define('DEFAULT_ADMIN_PASSWORD', 'admin');
define('SESSION_TIMEOUT', 1800);

session_start([
    'cookie_httponly' => true,
    'cookie_secure' => isset($_SERVER['HTTPS']),
    'use_strict_mode' => true
]);

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username']) && isset($_POST['password'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        
        if ($username === DEFAULT_ADMIN_USERNAME && $password === DEFAULT_ADMIN_PASSWORD) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_last_activity'] = time();
            $_SESSION['ip_address'] = $_SERVER['REMOTE_ADDR'];
            $_SESSION['user_agent'] = $_SERVER['HTTP_USER_AGENT'];
            header('Location: admin.php');
            exit;
        } else {
            $login_error = "نام کاربری یا رمز عبور اشتباه است!";
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="fa" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ورود به پنل مدیریت روبیکا چت</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
        <style>
            :root {
                --primary-color: #6c5ce7;
                --secondary-color: #a29bfe;
                --success-color: #00b894;
                --danger-color: #d63031;
                --warning-color: #fdcb6e;
                --info-color: #0984e3;
                --dark-color: #2d3436;
                --light-color: #f5f6fa;
            }
            
            body {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                font-family: 'Vazir', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                height: 100vh;
                display: flex;
                align-items: center;
            }
            
            .login-container {
                max-width: 450px;
                margin: 0 auto;
                padding: 30px;
                background-color: rgba(255, 255, 255, 0.95);
                border-radius: 15px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
                animation: fadeIn 0.5s ease-in-out;
            }
            
            .login-header {
                text-align: center;
                margin-bottom: 30px;
            }
            
            .login-header h2 {
                color: var(--dark-color);
                font-weight: 700;
            }
            
            .form-control {
                padding: 12px 15px;
                border-radius: 8px;
                border: 1px solid #ddd;
                transition: all 0.3s;
            }
            
            .form-control:focus {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 3px rgba(108, 92, 231, 0.2);
            }
            
            .btn-login {
                background-color: var(--primary-color);
                border: none;
                padding: 12px;
                font-weight: 600;
                letter-spacing: 1px;
                transition: all 0.3s;
            }
            
            .btn-login:hover {
                background-color: #5649c0;
                transform: translateY(-2px);
            }
            
            .login-footer {
                text-align: center;
                margin-top: 20px;
                color: #777;
                font-size: 14px;
            }
            
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
            
            @media (max-width: 576px) {
                .login-container {
                    padding: 20px;
                    margin: 20px;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="login-container">
                <div class="login-header">
                    <h2>ورود به پنل مدیریت</h2>
                </div>
                
                <?php if (isset($login_error)): ?>
                    <div class="alert alert-danger alert-dismissible fade show">
                        <?= htmlspecialchars($login_error) ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                
                <form method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">نام کاربری</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">رمز عبور</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-login">
                            <i class="bi bi-box-arrow-in-right"></i> ورود به سیستم
                        </button>
                    </div>
                </form>
                
                <div class="login-footer">
                    <p>سیستم مدیریت روبیکا چت - نسخه 2.0</p>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    <?php
    exit;
}

if ($_SESSION['ip_address'] !== $_SERVER['REMOTE_ADDR'] || $_SESSION['user_agent'] !== $_SERVER['HTTP_USER_AGENT']) {
    session_destroy();
    header('Location: admin.php');
    exit;
}

if (isset($_SESSION['admin_last_activity']) && (time() - $_SESSION['admin_last_activity'] > SESSION_TIMEOUT)) {
    session_destroy();
    header('Location: admin.php');
    exit;
}
$_SESSION['admin_last_activity'] = time();

function get_user_profile($user_id) {
    $user_id = preg_replace('/[^a-zA-Z0-9]/', '', $user_id);
    $file = DATA_DIR . "users/$user_id.json";
    if (file_exists($file)) {
        $profile = json_decode(file_get_contents($file), true);
        return [
            'id' => $user_id,
            'name' => htmlspecialchars($profile['name'] ?? 'ناشناس'),
            'age' => htmlspecialchars($profile['age'] ?? 'نامشخص'),
            'gender' => htmlspecialchars($profile['gender'] ?? 'نامشخص'),
            'province' => htmlspecialchars($profile['province'] ?? 'نامشخص'),
            'city' => htmlspecialchars($profile['city'] ?? 'نامشخص'),
            'bio' => htmlspecialchars($profile['bio'] ?? 'بدون توضیحات'),
            'interests' => array_map('htmlspecialchars', $profile['interests'] ?? []),
            'banned' => $profile['banned'] ?? false,
            'created_at' => $profile['created_at'] ?? time(),
            'last_active' => $profile['last_active'] ?? time()
        ];
    }
    return null;
}

function get_user_status($user_id) {
    $user_id = preg_replace('/[^a-zA-Z0-9]/', '', $user_id);
    $file = DATA_DIR . "users/$user_id.status";
    if (file_exists($file)) {
        return json_decode(file_get_contents($file), true);
    }
    return [
        'in_chat' => false,
        'searching' => false,
        'last_seen' => time()
    ];
}

function get_all_users() {
    $users = [];
    $files = glob(DATA_DIR . 'users/*.json');
    
    foreach ($files as $file) {
        $user_id = basename($file, '.json');
        $profile = get_user_profile($user_id);
        $status = get_user_status($user_id);
        
        if ($profile) {
            $users[] = array_merge($profile, [
                'in_chat' => $status['in_chat'],
                'searching' => $status['searching'],
                'last_seen' => $status['last_seen']
            ]);
        }
    }
    
    usort($users, function($a, $b) {
        return $b['last_seen'] - $a['last_seen'];
    });
    
    return $users;
}

function get_active_chats() {
    $chats = [];
    $files = glob(DATA_DIR . 'active/*.json');
    
    foreach ($files as $file) {
        $chat_data = json_decode(file_get_contents($file), true);
        $chat_id = basename($file, '.json');
        
        $user1 = get_user_profile($chat_data['user1']);
        $user2 = get_user_profile($chat_data['user2']);
        
        $chat_log_file = DATA_DIR . "chat_logs/$chat_id.json";
        $messages = file_exists($chat_log_file) ? json_decode(file_get_contents($chat_log_file), true) : [];
        
        $chats[] = [
            'chat_id' => $chat_id,
            'user1' => [
                'id' => $chat_data['user1'],
                'name' => $user1['name']
            ],
            'user2' => [
                'id' => $chat_data['user2'],
                'name' => $user2['name']
            ],
            'start_time' => $chat_data['start_time'],
            'messages' => $messages,
            'messages_count' => count($messages),
            'last_message_time' => !empty($messages) ? end($messages)['timestamp'] : $chat_data['start_time']
        ];
    }
    
    usort($chats, function($a, $b) {
        return $b['last_message_time'] - $a['last_message_time'];
    });
    
    return $chats;
}

function get_searching_users() {
    $users = [];
    $files = glob(DATA_DIR . 'searching/*.json');
    
    foreach ($files as $file) {
        $user_id = basename($file, '.json');
        $search_data = json_decode(file_get_contents($file), true);
        $profile = get_user_profile($user_id);
        
        if ($profile) {
            $users[] = [
                'id' => $user_id,
                'name' => $profile['name'],
                'age' => $profile['age'],
                'gender' => $profile['gender'],
                'province' => $profile['province'],
                'city' => $profile['city'],
                'start_time' => $search_data['time'],
                'search_duration' => time() - $search_data['time'],
                'preferences' => $search_data['preferences'] ?? []
            ];
        }
    }
    
    usort($users, function($a, $b) {
        return $b['search_duration'] - $a['search_duration'];
    });
    
    return $users;
}

function get_reports() {
    $reports = [];
    $files = glob(DATA_DIR . 'reports/*.json');
    
    foreach ($files as $file) {
        $report_data = json_decode(file_get_contents($file), true);
        $reporter = get_user_profile($report_data['reporter_id']);
        $reported = get_user_profile($report_data['reported_id']);
        
        $reports[] = [
            'id' => basename($file, '.json'),
            'reporter' => [
                'id' => $report_data['reporter_id'],
                'name' => $reporter['name']
            ],
            'reported' => [
                'id' => $report_data['reported_id'],
                'name' => $reported['name']
            ],
            'reason' => htmlspecialchars($report_data['reason'] ?? 'بدون دلیل'),
            'timestamp' => $report_data['timestamp'],
            'status' => $report_data['status'] ?? 'pending',
            'chat_log' => $report_data['chat_log'] ?? [],
            'admin_note' => isset($report_data['admin_note']) ? htmlspecialchars($report_data['admin_note']) : null
        ];
    }
    
    usort($reports, function($a, $b) {
        return $b['timestamp'] - $a['timestamp'];
    });
    
    return $reports;
}

function get_all_chat_logs() {
    $logs = [];
    $files = glob(DATA_DIR . 'chat_logs/*.json');
    
    foreach ($files as $file) {
        $chat_id = basename($file, '.json');
        $messages = json_decode(file_get_contents($file), true);
        
        if (!empty($messages)) {
            $user1 = get_user_profile($messages[0]['sender']);
            $user2 = isset($messages[1]) ? get_user_profile($messages[1]['sender']) : null;
            
            $logs[] = [
                'chat_id' => $chat_id,
                'user1' => $user1 ? $user1['name'] : 'ناشناس',
                'user2' => $user2 ? $user2['name'] : 'ناشناس',
                'messages_count' => count($messages),
                'last_message' => end($messages)['text'],
                'last_message_time' => end($messages)['timestamp']
            ];
        }
    }
    
    usort($logs, function($a, $b) {
        return $b['last_message_time'] - $a['last_message_time'];
    });
    
    return $logs;
}

function get_chat_requests() {
    $requests = [];
    $files = glob(DATA_DIR . 'chat_requests/*.json');
    
    foreach ($files as $file) {
        $request_data = json_decode(file_get_contents($file), true);
        $requester = get_user_profile($request_data['requester']);
        $target = get_user_profile($request_data['target']);
        
        if ($requester && $target) {
            $requests[] = [
                'id' => basename($file, '.json'),
                'requester' => [
                    'id' => $request_data['requester'],
                    'name' => $requester['name']
                ],
                'target' => [
                    'id' => $request_data['target'],
                    'name' => $target['name']
                ],
                'timestamp' => $request_data['timestamp']
            ];
        }
    }
    
    usort($requests, function($a, $b) {
        return $b['timestamp'] - $a['timestamp'];
    });
    
    return $requests;
}

function get_messages() {
    $messages = [];
    $files = glob(DATA_DIR . 'messages/*.json');
    
    foreach ($files as $file) {
        $message_data = json_decode(file_get_contents($file), true);
        $sender = get_user_profile($message_data['sender']);
        $receiver = get_user_profile($message_data['receiver']);
        
        if ($sender && $receiver) {
            $messages[] = [
                'id' => basename($file, '.json'),
                'sender' => [
                    'id' => $message_data['sender'],
                    'name' => $sender['name']
                ],
                'receiver' => [
                    'id' => $message_data['receiver'],
                    'name' => $receiver['name']
                ],
                'text' => htmlspecialchars($message_data['text']),
                'timestamp' => $message_data['timestamp']
            ];
        }
    }
    
    usort($messages, function($a, $b) {
        return $b['timestamp'] - $a['timestamp'];
    });
    
    return $messages;
}

function get_statistics() {
    $users = get_all_users();
    $active_chats = get_active_chats();
    $searching_users = get_searching_users();
    $reports = get_reports();
    
    $new_users_last_7_days = array_filter($users, function($user) {
        return $user['created_at'] > (time() - 7 * 24 * 60 * 60);
    });
    
    $active_users_last_24h = array_filter($users, function($user) {
        return $user['last_seen'] > (time() - 24 * 60 * 60);
    });
    
    $gender_distribution = [
        'male' => 0,
        'female' => 0,
        'other' => 0
    ];
    
    foreach ($users as $user) {
        $gender = strtolower($user['gender']);
        if (isset($gender_distribution[$gender])) {
            $gender_distribution[$gender]++;
        } else {
            $gender_distribution['other']++;
        }
    }
    
    $age_distribution = [
        '13-17' => 0,
        '18-24' => 0,
        '25-30' => 0,
        '31-40' => 0,
        '41+' => 0
    ];
    
    foreach ($users as $user) {
        $age = intval($user['age']);
        if ($age >= 13 && $age <= 17) $age_distribution['13-17']++;
        elseif ($age >= 18 && $age <= 24) $age_distribution['18-24']++;
        elseif ($age >= 25 && $age <= 30) $age_distribution['25-30']++;
        elseif ($age >= 31 && $age <= 40) $age_distribution['31-40']++;
        else $age_distribution['41+']++;
    }
    
    $location_distribution = [];
    foreach ($users as $user) {
        $province = $user['province'] ?? 'نامشخص';
        if (!isset($location_distribution[$province])) {
            $location_distribution[$province] = 0;
        }
        $location_distribution[$province]++;
    }
    arsort($location_distribution);
    $top_locations = array_slice($location_distribution, 0, 5);
    
    return [
        'total_users' => count($users),
        'active_users' => count($active_users_last_24h),
        'new_users_7_days' => count($new_users_last_7_days),
        'active_chats' => count($active_chats),
        'searching_users' => count($searching_users),
        'pending_reports' => count(array_filter($reports, function($r) { return $r['status'] === 'pending'; })),
        'gender_distribution' => $gender_distribution,
        'age_distribution' => $age_distribution,
        'location_distribution' => $top_locations,
        'average_chat_duration' => calculate_average_chat_duration($active_chats)
    ];
}

function calculate_average_chat_duration($chats) {
    if (empty($chats)) return 0;
    
    $total_duration = 0;
    foreach ($chats as $chat) {
        $total_duration += (time() - $chat['start_time']);
    }
    
    return floor($total_duration / count($chats));
}

function ban_user($user_id, $ban = true) {
    $user_id = preg_replace('/[^a-zA-Z0-9]/', '', $user_id);
    $file = DATA_DIR . "users/$user_id.json";
    if (file_exists($file)) {
        $profile = json_decode(file_get_contents($file), true);
        $profile['banned'] = $ban;
        file_put_contents($file, json_encode($profile, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        
        if ($ban) {
            $search_file = DATA_DIR . "searching/$user_id.json";
            if (file_exists($search_file)) {
                unlink($search_file);
            }
        }
        
        return true;
    }
    return false;
}

function update_user_profile($user_id, $data) {
    $user_id = preg_replace('/[^a-zA-Z0-9]/', '', $user_id);
    $file = DATA_DIR . "users/$user_id.json";
    if (file_exists($file)) {
        $profile = json_decode(file_get_contents($file), true);
        
        $sanitized_data = [
            'name' => htmlspecialchars($data['name'] ?? $profile['name']),
            'age' => intval($data['age'] ?? $profile['age']),
            'gender' => in_array($data['gender'], ['مرد', 'زن']) ? $data['gender'] : $profile['gender'],
            'province' => htmlspecialchars($data['province'] ?? $profile['province']),
            'city' => htmlspecialchars($data['city'] ?? $profile['city']),
            'bio' => htmlspecialchars($data['bio'] ?? $profile['bio']),
            'interests' => array_map('htmlspecialchars', $data['interests'] ?? $profile['interests']),
            'banned' => $profile['banned'] ?? false,
            'created_at' => $profile['created_at'] ?? time(),
            'last_active' => $profile['last_active'] ?? time()
        ];
        
        file_put_contents($file, json_encode($sanitized_data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        return true;
    }
    return false;
}

function format_date($timestamp) {
    return date('Y-m-d H:i:s', $timestamp);
}

function format_duration($seconds) {
    $hours = floor($seconds / 3600);
    $minutes = floor(($seconds % 3600) / 60);
    $seconds = $seconds % 60;
    
    return sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
}

function format_relative_time($timestamp) {
    $diff = time() - $timestamp;
    
    if ($diff < 60) {
        return 'همین حالا';
    } elseif ($diff < 3600) {
        $mins = floor($diff / 60);
        return "$mins دقیقه پیش";
    } elseif ($diff < 86400) {
        $hours = floor($diff / 3600);
        return "$hours ساعت پیش";
    } elseif ($diff < 604800) {
        $days = floor($diff / 86400);
        return "$days روز پیش";
    } else {
        return format_date($timestamp);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'ban_user':
                if (isset($_POST['user_id'])) {
                    ban_user($_POST['user_id'], true);
                    $_SESSION['flash_message'] = ['type' => 'success', 'message' => 'کاربر با موفقیت مسدود شد.'];
                }
                break;
                
            case 'unban_user':
                if (isset($_POST['user_id'])) {
                    ban_user($_POST['user_id'], false);
                    $_SESSION['flash_message'] = ['type' => 'success', 'message' => 'کاربر با موفقیت آزاد شد.'];
                }
                break;
                
            case 'end_chat':
                if (isset($_POST['chat_id'])) {
                    $chat_id = preg_replace('/[^a-zA-Z0-9]/', '', $_POST['chat_id']);
                    $chat_file = DATA_DIR . "active/$chat_id.json";
                    if (file_exists($chat_file)) {
                        unlink($chat_file);
                        $_SESSION['flash_message'] = ['type' => 'success', 'message' => 'چت با موفقیت پایان یافت.'];
                    }
                }
                break;
                
            case 'delete_chat_log':
                if (isset($_POST['chat_id'])) {
                    $chat_id = preg_replace('/[^a-zA-Z0-9]/', '', $_POST['chat_id']);
                    $chat_file = DATA_DIR . "chat_logs/$chat_id.json";
                    if (file_exists($chat_file)) {
                        unlink($chat_file);
                        $_SESSION['flash_message'] = ['type' => 'success', 'message' => 'لاگ چت با موفقیت حذف شد.'];
                    }
                }
                break;
                
            case 'delete_request':
                if (isset($_POST['request_id'])) {
                    $request_id = preg_replace('/[^a-zA-Z0-9]/', '', $_POST['request_id']);
                    $request_file = DATA_DIR . "chat_requests/$request_id.json";
                    if (file_exists($request_file)) {
                        unlink($request_file);
                        $_SESSION['flash_message'] = ['type' => 'success', 'message' => 'درخواست چت با موفقیت حذف شد.'];
                    }
                }
                break;
                
            case 'delete_message':
                if (isset($_POST['message_id'])) {
                    $message_id = preg_replace('/[^a-zA-Z0-9]/', '', $_POST['message_id']);
                    $message_file = DATA_DIR . "messages/$message_id.json";
                    if (file_exists($message_file)) {
                        unlink($message_file);
                        $_SESSION['flash_message'] = ['type' => 'success', 'message' => 'پیام با موفقیت حذف شد.'];
                    }
                }
                break;
                
            case 'resolve_report':
                if (isset($_POST['report_id'])) {
                    $report_id = preg_replace('/[^a-zA-Z0-9]/', '', $_POST['report_id']);
                    $report_file = DATA_DIR . "reports/$report_id.json";
                    if (file_exists($report_file)) {
                        $report = json_decode(file_get_contents($report_file), true);
                        $report['status'] = 'resolved';
                        if (isset($_POST['admin_note'])) {
                            $report['admin_note'] = htmlspecialchars($_POST['admin_note']);
                        }
                        file_put_contents($report_file, json_encode($report, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
                        $_SESSION['flash_message'] = ['type' => 'success', 'message' => 'گزارش با موفقیت رسیدگی شد.'];
                    }
                }
                break;
                
            case 'update_user':
                if (isset($_POST['user_id'])) {
                    $update_data = [
                        'name' => $_POST['name'] ?? '',
                        'age' => $_POST['age'] ?? '',
                        'gender' => $_POST['gender'] ?? '',
                        'province' => $_POST['province'] ?? '',
                        'city' => $_POST['city'] ?? '',
                        'bio' => $_POST['bio'] ?? '',
                        'interests' => isset($_POST['interests']) ? explode(',', $_POST['interests']) : []
                    ];
                    
                    if (update_user_profile($_POST['user_id'], $update_data)) {
                        $_SESSION['flash_message'] = ['type' => 'success', 'message' => 'پروفایل کاربر با موفقیت به‌روزرسانی شد.'];
                    } else {
                        $_SESSION['flash_message'] = ['type' => 'danger', 'message' => 'خطا در به‌روزرسانی پروفایل کاربر.'];
                    }
                }
                break;
        }
        
        header('Location: admin.php?' . $_SERVER['QUERY_STRING']);
        exit;
    }
}

$current_page = isset($_GET['page']) ? preg_replace('/[^a-z_]/', '', $_GET['page']) : 'dashboard';
$statistics = get_statistics();
?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل مدیریت روبیکا چت</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.css">
    <style>
        :root {
            --primary-color: #6c5ce7;
            --primary-light: #a29bfe;
            --secondary-color: #00b894;
            --danger-color: #d63031;
            --warning-color: #fdcb6e;
            --info-color: #0984e3;
            --dark-color: #2d3436;
            --light-color: #f5f6fa;
            --sidebar-width: 260px;
        }
        
        @font-face {
            font-family: 'Vazir';
            src: url('https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/Vazir.woff2') format('woff2');
            font-weight: normal;
            font-style: normal;
        }
        
        body {
            font-family: 'Vazir', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: var(--dark-color);
        }
        
        .sidebar {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            width: var(--sidebar-width);
            background: linear-gradient(180deg, var(--primary-color) 0%, #5649c0 100%);
            color: white;
            box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            transition: all 0.3s;
        }
        
        .sidebar-brand {
            padding: 1.5rem 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .sidebar-brand h4 {
            font-weight: 700;
            margin-bottom: 0;
        }
        
        .sidebar-nav {
            padding: 1rem 0;
        }
        
        .sidebar-item {
            margin-bottom: 5px;
        }
        
        .sidebar-link {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s;
            border-right: 3px solid transparent;
        }
        
        .sidebar-link:hover, .sidebar-link.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
            border-right-color: white;
        }
        
        .sidebar-link i {
            margin-left: 10px;
            font-size: 1.1rem;
        }
        
        .sidebar-footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .main-content {
            margin-right: var(--sidebar-width);
            padding: 20px;
            min-height: 100vh;
        }
        
        .navbar-top {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            padding: 15px 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .page-title {
            font-weight: 700;
            color: var(--dark-color);
            margin-bottom: 0;
        }
        
        .last-update {
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
            margin-bottom: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }
        
        .card-header {
            background-color: white;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            padding: 15px 20px;
            border-radius: 10px 10px 0 0 !important;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .card-header h5 {
            font-weight: 600;
            margin-bottom: 0;
        }
        
        .card-body {
            padding: 20px;
        }
        
        .stat-card {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: -20px;
            right: -20px;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        .stat-card i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            opacity: 0.8;
        }
        
        .stat-card .stat-value {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .stat-card .stat-label {
            font-size: 1rem;
            opacity: 0.9;
        }
        
        .stat-card-primary {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 100%);
        }
        
        .stat-card-success {
            background: linear-gradient(135deg, var(--secondary-color) 0%, #55efc4 100%);
        }
        
        .stat-card-warning {
            background: linear-gradient(135deg, var(--warning-color) 0%, #ffeaa7 100%);
            color: var(--dark-color);
        }
        
        .stat-card-danger {
            background: linear-gradient(135deg, var(--danger-color) 0%, #ff7675 100%);
        }
        
        .table-responsive {
            margin-top: 20px;
        }
        
        .table {
            border-radius: 10px;
            overflow: hidden;
        }
        
        .table thead th {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 15px;
            font-weight: 600;
        }
        
        .table tbody tr {
            transition: all 0.2s;
        }
        
        .table tbody tr:hover {
            background-color: rgba(108, 92, 231, 0.05);
        }
        
        .table tbody td {
            padding: 12px 15px;
            vertical-align: middle;
            border-top: 1px solid rgba(0, 0, 0, 0.03);
        }
        
        .badge {
            padding: 6px 10px;
            font-weight: 500;
            font-size: 0.8rem;
            border-radius: 6px;
        }
        
        .badge-online {
            background-color: var(--secondary-color);
            color: white;
        }
        
        .badge-offline {
            background-color: #6c757d;
            color: white;
        }
        
        .badge-chatting {
            background-color: var(--info-color);
            color: white;
        }
        
        .badge-searching {
            background-color: var(--warning-color);
            color: var(--dark-color);
        }
        
        .badge-banned {
            background-color: var(--danger-color);
            color: white;
        }
        
        .badge-pending {
            background-color: var(--warning-color);
            color: var(--dark-color);
        }
        
        .badge-resolved {
            background-color: var(--secondary-color);
            color: white;
        }
        
        .btn {
            padding: 8px 16px;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .btn-sm {
            padding: 5px 10px;
            font-size: 0.85rem;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: #5649c0;
            border-color: #5649c0;
        }
        
        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .user-avatar-lg {
            width: 80px;
            height: 80px;
        }
        
        .chat-container {
            height: 500px;
            overflow-y: auto;
            padding: 20px;
            background-color: #f5f6fa;
            border-radius: 10px;
        }
        
        .message {
            margin-bottom: 15px;
            max-width: 80%;
        }
        
        .message-sender {
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
        }
        
        .message-content {
            padding: 10px 15px;
            border-radius: 15px;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
            position: relative;
        }
        
        .message-time {
            font-size: 0.75rem;
            color: #6c757d;
            margin-top: 5px;
            text-align: left;
        }
        
        .form-control, .form-select {
            padding: 10px 15px;
            border-radius: 8px;
            border: 1px solid #e0e0e0;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(108, 92, 231, 0.2);
        }
        
        .navbar-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--dark-color);
            font-size: 1.5rem;
        }
        
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(var(--sidebar-width));
            }
            
            .sidebar.active {
                transform: translateX(0);
            }
            
            .main-content {
                margin-right: 0;
            }
            
            .navbar-toggle {
                display: block;
            }
        }
        
        @media (max-width: 768px) {
            .stat-card .stat-value {
                font-size: 1.5rem;
            }
            
            .card-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .card-header h5 {
                margin-bottom: 10px;
            }
            
            .table-responsive {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }
        }
        
        @media (max-width: 576px) {
            .main-content {
                padding: 15px;
            }
            
            .stat-card {
                padding: 15px;
            }
            
            .stat-card i {
                font-size: 2rem;
            }
            
            .card-body {
                padding: 15px;
            }
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in {
            animation: fadeIn 0.3s ease-out;
        }
        
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--primary-light);
            border-radius: 10px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-color);
        }
        
        .nav-tabs .nav-link {
            border: none;
            color: #6c757d;
            font-weight: 500;
            padding: 10px 20px;
        }
        
        .nav-tabs .nav-link.active {
            color: var(--primary-color);
            border-bottom: 3px solid var(--primary-color);
            background-color: transparent;
        }
        
        .accordion-button:not(.collapsed) {
            background-color: rgba(108, 92, 231, 0.05);
            color: var(--primary-color);
        }
        
        .accordion-button:focus {
            box-shadow: none;
            border-color: rgba(0, 0, 0, 0.05);
        }
        
        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .profile-info {
            margin-right: 20px;
        }
        
        .profile-name {
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 5px;
        }
        
        .profile-meta {
            color: #6c757d;
            margin-bottom: 10px;
        }
        
        .profile-bio {
            margin-top: 15px;
            line-height: 1.6;
        }
        
        .tag {
            display: inline-block;
            background-color: rgba(108, 92, 231, 0.1);
            color: var(--primary-color);
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin: 2px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h4>رویکا چت</h4>
        </div>
        
        <div class="sidebar-nav">
            <div class="sidebar-item">
                <a href="admin.php?page=dashboard" class="sidebar-link <?= $current_page === 'dashboard' ? 'active' : '' ?>">
                    <i class="bi bi-speedometer2"></i>
                    <span>داشبورد</span>
                </a>
            </div>
            
            <div class="sidebar-item">
                <a href="admin.php?page=users" class="sidebar-link <?= $current_page === 'users' ? 'active' : '' ?>">
                    <i class="bi bi-people"></i>
                    <span>مدیریت کاربران</span>
                </a>
            </div>
            
            <div class="sidebar-item">
                <a href="admin.php?page=active_chats" class="sidebar-link <?= $current_page === 'active_chats' ? 'active' : '' ?>">
                    <i class="bi bi-chat-dots"></i>
                    <span>چت‌های فعال</span>
                </a>
            </div>
            
            <div class="sidebar-item">
                <a href="admin.php?page=searching" class="sidebar-link <?= $current_page === 'searching' ? 'active' : '' ?>">
                    <i class="bi bi-search"></i>
                    <span>جستجوهای فعال</span>
                </a>
            </div>
            
            <div class="sidebar-item">
                <a href="admin.php?page=reports" class="sidebar-link <?= $current_page === 'reports' ? 'active' : '' ?>">
                    <i class="bi bi-flag"></i>
                    <span>گزارشات کاربران</span>
                </a>
            </div>
            
            <div class="sidebar-item">
                <a href="admin.php?page=chat_logs" class="sidebar-link <?= $current_page === 'chat_logs' ? 'active' : '' ?>">
                    <i class="bi bi-journal-text"></i>
                    <span>لاگ چت‌ها</span>
                </a>
            </div>
            
            <div class="sidebar-item">
                <a href="admin.php?page=chat_requests" class="sidebar-link <?= $current_page === 'chat_requests' ? 'active' : '' ?>">
                    <i class="bi bi-send"></i>
                    <span>درخواست‌های چت</span>
                </a>
            </div>
            
            <div class="sidebar-item">
                <a href="admin.php?page=messages" class="sidebar-link <?= $current_page === 'messages' ? 'active' : '' ?>">
                    <i class="bi bi-envelope"></i>
                    <span>پیام‌های ارسالی</span>
                </a>
            </div>
            
            <div class="sidebar-item">
                <a href="admin.php?page=statistics" class="sidebar-link <?= $current_page === 'statistics' ? 'active' : '' ?>">
                    <i class="bi bi-graph-up"></i>
                    <span>آمار و تحلیل</span>
                </a>
            </div>
            
            <div class="sidebar-item">
                <a href="admin.php?page=settings" class="sidebar-link <?= $current_page === 'settings' ? 'active' : '' ?>">
                    <i class="bi bi-gear"></i>
                    <span>تنظیمات سیستم</span>
                </a>
            </div>
        </div>
        
        <div class="sidebar-footer">
            <a href="admin.php?logout=1" class="btn btn-outline-light w-100">
                <i class="bi bi-box-arrow-left"></i> خروج از سیستم
            </a>
        </div>
    </div>
    
    <div class="main-content">
        <div class="navbar-top">
            <button class="navbar-toggle" id="sidebarToggle">
                <i class="bi bi-list"></i>
            </button>
            <div>
                <h3 class="page-title">
                    <?php 
                    switch($current_page) {
                        case 'dashboard': echo 'داشبورد مدیریت'; break;
                        case 'users': echo 'مدیریت کاربران'; break;
                        case 'active_chats': echo 'چت‌های فعال'; break;
                        case 'searching': echo 'جستجوهای فعال'; break;
                        case 'reports': echo 'گزارشات کاربران'; break;
                        case 'chat_logs': echo 'لاگ چت‌ها'; break;
                        case 'chat_requests': echo 'درخواست‌های چت'; break;
                        case 'messages': echo 'پیام‌های ارسالی'; break;
                        case 'statistics': echo 'آمار و تحلیل'; break;
                        case 'settings': echo 'تنظیمات سیستم'; break;
                        default: echo 'داشبورد مدیریت';
                    }
                    ?>
                </h3>
            </div>
            <div class="last-update">
                <i class="bi bi-clock"></i> آخرین بروزرسانی: <?= date('Y-m-d H:i:s') ?>
            </div>
        </div>
        
        <?php if (isset($_SESSION['flash_message'])): ?>
            <div class="alert alert-<?= $_SESSION['flash_message']['type'] ?> alert-dismissible fade show">
                <?= htmlspecialchars($_SESSION['flash_message']['message']) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['flash_message']); ?>
        <?php endif; ?>
        
        <div class="fade-in">
            <?php if ($current_page === 'dashboard'): ?>
                <div class="row">
                    <div class="col-md-3">
                        <div class="stat-card stat-card-primary">
                            <i class="bi bi-people"></i>
                            <div class="stat-value"><?= $statistics['total_users'] ?></div>
                            <div class="stat-label">کاربران ثبت‌نامی</div>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="stat-card stat-card-success">
                            <i class="bi bi-person-check"></i>
                            <div class="stat-value"><?= $statistics['active_users'] ?></div>
                            <div class="stat-label">کاربران فعال</div>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="stat-card stat-card-warning">
                            <i class="bi bi-chat-left-text"></i>
                            <div class="stat-value"><?= $statistics['active_chats'] ?></div>
                            <div class="stat-label">چت‌های فعال</div>
                        </div>
                    </div>
                    
                    <div class="col-md-3">
                        <div class="stat-card stat-card-danger">
                            <i class="bi bi-flag"></i>
                            <div class="stat-value"><?= $statistics['pending_reports'] ?></div>
                            <div class="stat-label">گزارشات جدید</div>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5>آمار کاربران</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="userStatsChart" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>توزیع جنسیت</h5>
                            </div>
                            <div class="card-body">
                                <canvas id="genderChart" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>آخرین چت‌های فعال</h5>
                                <a href="admin.php?page=active_chats" class="btn btn-sm btn-outline-primary">مشاهده همه</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>کاربران</th>
                                                <th>شروع</th>
                                                <th>مدت</th>
                                                <th>پیام‌ها</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $chats = array_slice(get_active_chats(), 0, 5);
                                            foreach ($chats as $chat): 
                                            ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span><?= $chat['user1']['name'] ?></span>
                                                    </div>
                                                    <div class="d-flex align-items-center mt-2">
                                                        <span><?= $chat['user2']['name'] ?></span>
                                                    </div>
                                                </td>
                                                <td><?= format_relative_time($chat['start_time']) ?></td>
                                                <td><?= format_duration(time() - $chat['start_time']) ?></td>
                                                <td><?= $chat['messages_count'] ?></td>
                                                <td>
                                                    <a href="admin.php?page=active_chats&chat_id=<?= $chat['chat_id'] ?>" class="btn btn-sm btn-info">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <form method="POST" style="display:inline;">
                                                        <input type="hidden" name="action" value="end_chat">
                                                        <input type="hidden" name="chat_id" value="<?= $chat['chat_id'] ?>">
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            <i class="bi bi-x-circle"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>آخرین گزارشات</h5>
                                <a href="admin.php?page=reports" class="btn btn-sm btn-outline-primary">مشاهده همه</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>گزارش دهنده</th>
                                                <th>گزارش شده</th>
                                                <th>زمان</th>
                                                <th>وضعیت</th>
                                                <th>عملیات</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $reports = array_slice(
                                                array_filter(get_reports(), function($r) { return $r['status'] === 'pending'; }), 
                                                0, 5
                                            );
                                            foreach ($reports as $report): 
                                            ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span><?= $report['reporter']['name'] ?></span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <span><?= $report['reported']['name'] ?></span>
                                                    </div>
                                                </td>
                                                <td><?= format_relative_time($report['timestamp']) ?></td>
                                                <td>
                                                    <span class="badge badge-pending">در انتظار</span>
                                                </td>
                                                <td>
                                                    <a href="admin.php?page=reports&report_id=<?= $report['id'] ?>" class="btn btn-sm btn-info">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <?php elseif ($current_page === 'users'): ?>
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>مدیریت کاربران</h5>
                        <div class="col-md-4">
                            <form method="GET" class="input-group">
                                <input type="hidden" name="page" value="users">
                                <input type="text" name="search" class="form-control" placeholder="جستجوی کاربر..." value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
                                <button class="btn btn-outline-secondary" type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_GET['user_id'])): 
                            $user_id = preg_replace('/[^a-zA-Z0-9]/', '', $_GET['user_id']);
                            $user = get_user_profile($user_id);
                            $status = get_user_status($user_id);
                            
                            if ($user):
                        ?>
                            <div class="mb-4">
                                <a href="admin.php?page=users" class="btn btn-secondary mb-3">
                                    <i class="bi bi-arrow-right"></i> بازگشت به لیست کاربران
                                </a>
                                
                                <div class="profile-header">
                                    <div class="profile-info">
                                        <h3 class="profile-name"><?= $user['name'] ?></h3>
                                        <div class="profile-meta">
                                            <span class="me-3"><i class="bi bi-person"></i> <?= $user['age'] ?> سال</span>
                                            <span class="me-3"><i class="bi bi-gender-<?= $user['gender'] === 'مرد' ? 'male' : 'female' ?>"></i> <?= $user['gender'] ?></span>
                                            <span><i class="bi bi-geo-alt"></i> <?= $user['province'] ?> - <?= $user['city'] ?></span>
                                        </div>
                                        
                                        <div>
                                            <?php if ($user['banned']): ?>
                                                <span class="badge badge-banned me-2">مسدود شده</span>
                                            <?php elseif ($status['in_chat']): ?>
                                                <span class="badge badge-chatting me-2">در حال چت</span>
                                            <?php elseif ($status['searching']): ?>
                                                <span class="badge badge-searching me-2">در حال جستجو</span>
                                            <?php elseif (time() - $status['last_seen'] < 300): ?>
                                                <span class="badge badge-online me-2">آنلاین</span>
                                            <?php else: ?>
                                                <span class="badge badge-offline me-2">آفلاین</span>
                                            <?php endif; ?>
                                            
                                            <span class="text-muted"><i class="bi bi-clock"></i> آخرین فعالیت: <?= format_relative_time($status['last_seen']) ?></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="profile-bio">
                                    <h5><i class="bi bi-person-lines-fill"></i> درباره کاربر</h5>
                                    <p><?= $user['bio'] ?></p>
                                </div>
                                
                                <?php if (!empty($user['interests'])): ?>
                                <div class="mt-3">
                                    <h5><i class="bi bi-tags"></i> علاقه‌مندی‌ها</h5>
                                    <?php foreach ($user['interests'] as $interest): ?>
                                        <span class="tag"><?= $interest ?></span>
                                    <?php endforeach; ?>
                                </div>
                                <?php endif; ?>
                                
                                <div class="mt-4">
                                    <h5><i class="bi bi-gear"></i> عملیات مدیریتی</h5>
                                    <div class="d-flex mt-3">
                                        <?php if ($user['banned']): ?>
                                            <form method="POST" class="me-2">
                                                <input type="hidden" name="action" value="unban_user">
                                                <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                                <button type="submit" class="btn btn-success">
                                                    <i class="bi bi-unlock"></i> آزادسازی کاربر
                                                </button>
                                            </form>
                                        <?php else: ?>
                                            <form method="POST" class="me-2">
                                                <input type="hidden" name="action" value="ban_user">
                                                <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="bi bi-lock"></i> مسدودسازی کاربر
                                                </button>
                                            </form>
                                        <?php endif; ?>
                                        
                                        <a href="admin.php?page=chat_logs&user_id=<?= $user['id'] ?>" class="btn btn-info me-2">
                                            <i class="bi bi-chat-text"></i> مشاهده لاگ چت
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="mt-5">
                                    <h5><i class="bi bi-pencil-square"></i> ویرایش پروفایل</h5>
                                    <form method="POST" class="mt-3">
                                        <input type="hidden" name="action" value="update_user">
                                        <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">نام کامل</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="age" class="form-label">سن</label>
                                                    <input type="number" class="form-control" id="age" name="age" value="<?= $user['age'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label for="gender" class="form-label">جنسیت</label>
                                                    <select class="form-select" id="gender" name="gender">
                                                        <option value="مرد" <?= $user['gender'] === 'مرد' ? 'selected' : '' ?>>مرد</option>
                                                        <option value="زن" <?= $user['gender'] === 'زن' ? 'selected' : '' ?>>زن</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="province" class="form-label">استان</label>
                                                    <input type="text" class="form-control" id="province" name="province" value="<?= $user['province'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="city" class="form-label">شهر</label>
                                                    <input type="text" class="form-control" id="city" name="city" value="<?= $user['city'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="bio" class="form-label">بیوگرافی</label>
                                            <textarea class="form-control" id="bio" name="bio" rows="3"><?= $user['bio'] ?></textarea>
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="interests" class="form-label">علاقه‌مندی‌ها (با کاما جدا کنید)</label>
                                            <input type="text" class="form-control" id="interests" name="interests" value="<?= implode(',', $user['interests']) ?>">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">
                                            <i class="bi bi-save"></i> ذخیره تغییرات
                                        </button>
                                    </form>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-warning">کاربر مورد نظر یافت نشد</div>
                        <?php endif; ?>
                        <?php else: ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>کاربر</th>
                                            <th>اطلاعات</th>
                                            <th>وضعیت</th>
                                            <th>آخرین فعالیت</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $users = get_all_users();
                                        if (isset($_GET['search'])) {
                                            $search = strtolower($_GET['search']);
                                            $users = array_filter($users, function($u) use ($search) {
                                                return strpos(strtolower($u['id']), $search) !== false || 
                                                       strpos(strtolower($u['name']), $search) !== false ||
                                                       strpos(strtolower($u['city']), $search) !== false ||
                                                       strpos(strtolower($u['province']), $search) !== false;
                                            });
                                        }
                                        
                                        foreach ($users as $i => $user): 
                                            $status_badge = '';
                                            if ($user['banned']) {
                                                $status_badge = '<span class="badge badge-banned">مسدود</span>';
                                            } elseif ($user['in_chat']) {
                                                $status_badge = '<span class="badge badge-chatting">در حال چت</span>';
                                            } elseif ($user['searching']) {
                                                $status_badge = '<span class="badge badge-searching">در حال جستجو</span>';
                                            } elseif (time() - $user['last_seen'] < 300) {
                                                $status_badge = '<span class="badge badge-online">آنلاین</span>';
                                            } else {
                                                $status_badge = '<span class="badge badge-offline">آفلاین</span>';
                                            }
                                        ?>
                                        <tr>
                                            <td><?= $i + 1 ?></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div><?= $user['name'] ?></div>
                                                        <small class="text-muted">ID: <?= $user['id'] ?></small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <small>
                                                    <div><i class="bi bi-person"></i> <?= $user['age'] ?> سال</div>
                                                    <div><i class="bi bi-geo-alt"></i> <?= $user['province'] ?> - <?= $user['city'] ?></div>
                                                </small>
                                            </td>
                                            <td><?= $status_badge ?></td>
                                            <td><?= format_relative_time($user['last_seen']) ?></td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="admin.php?page=users&user_id=<?= $user['id'] ?>" class="btn btn-sm btn-info me-2">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                    <?php if ($user['banned']): ?>
                                                        <form method="POST">
                                                            <input type="hidden" name="action" value="unban_user">
                                                            <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                                            <button type="submit" class="btn btn-sm btn-success">
                                                                <i class="bi bi-unlock"></i>
                                                            </button>
                                                        </form>
                                                    <?php else: ?>
                                                        <form method="POST">
                                                            <input type="hidden" name="action" value="ban_user">
                                                            <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                                                            <button type="submit" class="btn btn-sm btn-danger">
                                                                <i class="bi bi-lock"></i>
                                                            </button>
                                                        </form>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                
            <?php elseif ($current_page === 'active_chats'): ?>
                <div class="card">
                    <div class="card-header">
                        <h5>چت‌های فعال</h5>
                        <div class="text-muted"><?= count(get_active_chats()) ?> چت فعال در سیستم</div>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_GET['chat_id'])): 
                            $chat_id = preg_replace('/[^a-zA-Z0-9]/', '', $_GET['chat_id']);
                            $chats = get_active_chats();
                            $chat = null;
                            foreach ($chats as $c) {
                                if ($c['chat_id'] === $chat_id) {
                                    $chat = $c;
                                    break;
                                }
                            }
                            
                            if ($chat):
                        ?>
                            <div class="mb-4">
                                <a href="admin.php?page=active_chats" class="btn btn-secondary mb-3">
                                    <i class="bi bi-arrow-right"></i> بازگشت به لیست چت‌ها
                                </a>
                                
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div>
                                        <h4>چت بین <?= $chat['user1']['name'] ?> و <?= $chat['user2']['name'] ?></h4>
                                        <p class="text-muted">
                                            شروع: <?= format_date($chat['start_time']) ?> | 
                                            مدت: <?= format_duration(time() - $chat['start_time']) ?> | 
                                            تعداد پیام: <?= count($chat['messages']) ?>
                                        </p>
                                    </div>
                                    
                                    <form method="POST">
                                        <input type="hidden" name="action" value="end_chat">
                                        <input type="hidden" name="chat_id" value="<?= $chat['chat_id'] ?>">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-x-circle"></i> پایان چت
                                        </button>
                                    </form>
                                </div>
                                
                                <div class="chat-container">
                                    <?php foreach ($chat['messages'] as $message): 
                                        $sender = get_user_profile($message['sender']);
                                    ?>
                                        <div class="message">
                                            <div class="message-sender">
                                                <span><?= $sender['name'] ?></span>
                                            </div>
                                            <div class="message-content">
                                                <?= htmlspecialchars($message['text']) ?>
                                            </div>
                                            <div class="message-time">
                                                <?= format_date($message['timestamp']) ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-warning">چت مورد نظر یافت نشد</div>
                        <?php endif; ?>
                        <?php else: ?>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>کاربران</th>
                                            <th>شروع</th>
                                            <th>مدت</th>
                                            <th>پیام‌ها</th>
                                            <th>عملیات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach (get_active_chats() as $chat): ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span><?= $chat['user1']['name'] ?></span>
                                                </div>
                                                <div class="d-flex align-items-center mt-2">
                                                    <span><?= $chat['user2']['name'] ?></span>
                                                </div>
                                            </td>
                                            <td><?= format_relative_time($chat['start_time']) ?></td>
                                            <td><?= format_duration(time() - $chat['start_time']) ?></td>
                                            <td><?= $chat['messages_count'] ?></td>
                                            <td>
                                                <a href="admin.php?page=active_chats&chat_id=<?= $chat['chat_id'] ?>" class="btn btn-sm btn-info me-2">
                                                    <i class="bi bi-eye"></i> مشاهده
                                                </a>
                                                <form method="POST" style="display:inline;">
                                                    <input type="hidden" name="action" value="end_chat">
                                                    <input type="hidden" name="chat_id" value="<?= $chat['chat_id'] ?>">
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="bi bi-x-circle"></i> پایان
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                
            <?php elseif ($current_page === 'searching'): ?>
                <div class="card">
                    <div class="card-header">
                        <h5>کاربران در حال جستجو</h5>
                        <div class="text-muted"><?= count(get_searching_users()) ?> کاربر در حال جستجو</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>کاربر</th>
                                        <th>اطلاعات</th>
                                        <th>شروع جستجو</th>
                                        <th>مدت</th>
                                        <th>ترجیحات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (get_searching_users() as $user): ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <div><?= $user['name'] ?></div>
                                                    <small class="text-muted">ID: <?= $user['id'] ?></small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <small>
                                                <div><i class="bi bi-person"></i> <?= $user['age'] ?> سال</div>
                                                <div><i class="bi bi-gender-<?= $user['gender'] === 'مرد' ? 'male' : 'female' ?>"></i> <?= $user['gender'] ?></div>
                                                <div><i class="bi bi-geo-alt"></i> <?= $user['province'] ?> - <?= $user['city'] ?></div>
                                            </small>
                                        </td>
                                        <td><?= format_relative_time($user['start_time']) ?></td>
                                        <td><?= format_duration($user['search_duration']) ?></td>
                                        <td>
                                            <?php if (!empty($user['preferences'])): ?>
                                                <?php foreach ($user['preferences'] as $key => $value): ?>
                                                    <span class="badge bg-light text-dark"><?= htmlspecialchars($key) ?>: <?= htmlspecialchars($value) ?></span>
                                                <?php endforeach; ?>
                                            <?php else: ?>
                                                <span class="text-muted">بدون ترجیحات خاص</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            <?php elseif ($current_page === 'reports'): ?>
                <div class="card">
                    <div class="card-header">
                        <h5>گزارشات کاربران</h5>
                        <div class="text-muted">
                            <?= count(array_filter(get_reports(), function($r) { return $r['status'] === 'pending'; })) ?> گزارش جدید
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_GET['report_id'])): 
                            $report_id = preg_replace('/[^a-zA-Z0-9]/', '', $_GET['report_id']);
                            $reports = get_reports();
                            $report = null;
                            foreach ($reports as $r) {
                                if ($r['id'] === $report_id) {
                                    $report = $r;
                                    break;
                                }
                            }
                            
                            if ($report):
                        ?>
                            <div class="mb-4">
                                <a href="admin.php?page=reports" class="btn btn-secondary mb-3">
                                    <i class="bi bi-arrow-right"></i> بازگشت به لیست گزارشات
                                </a>
                                
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <div>
                                        <h4>گزارش از <?= $report['reported']['name'] ?></h4>
                                        <p class="text-muted">
                                            گزارش دهنده: <?= $report['reporter']['name'] ?> | 
                                            زمان: <?= format_date($report['timestamp']) ?> | 
                                            وضعیت: 
                                            <span class="badge <?= $report['status'] === 'pending' ? 'badge-pending' : 'badge-resolved' ?>">
                                                <?= $report['status'] === 'pending' ? 'در انتظار' : 'رسیدگی شده' ?>
                                            </span>
                                        </p>
                                    </div>
                                    
                                    <?php if ($report['status'] === 'pending'): ?>
                                        <form method="POST">
                                            <input type="hidden" name="action" value="resolve_report">
                                            <input type="hidden" name="report_id" value="<?= $report['id'] ?>">
                                            <button type="submit" class="btn btn-success">
                                                <i class="bi bi-check-circle"></i> رسیدگی شد
                                            </button>
                                        </form>
                                    <?php endif; ?>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card mb-4">
                                            <div class="card-header">
                                                <h5>اطلاعات گزارش</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label class="form-label">دلیل گزارش:</label>
                                                    <div class="p-3 bg-light rounded"><?= $report['reason'] ?></div>
                                                </div>
                                                
                                                <?php if ($report['status'] === 'resolved' && !empty($report['admin_note'])): ?>
                                                    <div class="mb-3">
                                                        <label class="form-label">یادداشت ادمین:</label>
                                                        <div class="p-3 bg-light rounded"><?= $report['admin_note'] ?></div>
                                                    </div>
                                                <?php endif; ?>
                                                
                                                <?php if ($report['status'] === 'pending'): ?>
                                                    <form method="POST">
                                                        <input type="hidden" name="action" value="resolve_report">
                                                        <input type="hidden" name="report_id" value="<?= $report['id'] ?>">
                                                        
                                                        <div class="mb-3">
                                                            <label for="adminNote" class="form-label">یادداشت ادمین (اختیاری)</label>
                                                            <textarea class="form-control" id="adminNote" name="admin_note" rows="3"></textarea>
                                                        </div>
                                                        
                                                        <button type="submit" class="btn btn-success w-100">
                                                            <i class="bi bi-check-circle"></i> تایید رسیدگی
                                                        </button>
                                                    </form>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>اطلاعات کاربران</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="mb-4">
                                                    <h6>گزارش دهنده</h6>
                                                    <div class="d-flex align-items-center mt-3">
                                                        <div>
                                                            <div><?= $report['reporter']['name'] ?></div>
                                                            <small class="text-muted">ID: <?= $report['reporter']['id'] ?></small>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <a href="admin.php?page=users&user_id=<?= $report['reporter']['id'] ?>" class="btn btn-sm btn-outline-primary me-2">
                                                            <i class="bi bi-person"></i> مشاهده پروفایل
                                                        </a>
                                                        <a href="admin.php?page=chat_logs&user_id=<?= $report['reporter']['id'] ?>" class="btn btn-sm btn-outline-info">
                                                            <i class="bi bi-chat-text"></i> مشاهده چت‌ها
                                                        </a>
                                                    </div>
                                                </div>
                                                
                                                <div>
                                                    <h6>گزارش شده</h6>
                                                    <div class="d-flex align-items-center mt-3">
                                                        <div>
                                                            <div><?= $report['reported']['name'] ?></div>
                                                            <small class="text-muted">ID: <?= $report['reported']['id'] ?></small>
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <a href="admin.php?page=users&user_id=<?= $report['reported']['id'] ?>" class="btn btn-sm btn-outline-primary me-2">
                                                            <i class="bi bi-person"></i> مشاهده پروفایل
                                                        </a>
                                                        <a href="admin.php?page=chat_logs&user_id=<?= $report['reported']['id'] ?>" class="btn btn-sm btn-outline-info me-2">
                                                            <i class="bi bi-chat-text"></i> مشاهده چت‌ها
                                                        </a>
                                                        <form method="POST" style="display:inline;">
                                                            <input type="hidden" name="action" value="ban_user">
                                                            <input type="hidden" name="user_id" value="<?= $report['reported']['id'] ?>">
                                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                                <i class="bi bi-lock"></i> مسدودسازی
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card mt-4">
                                    <div class="card-header">
                                        <h5>لاگ چت مربوطه</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="chat-container">
                                            <?php foreach ($report['chat_log'] as $message): 
                                                $sender = get_user_profile($message['sender']);
                                            ?>
                                                <div class="message">
                                                    <div class="message-sender">
                                                        <span><?= $sender['name'] ?></span>
                                                    </div>
                                                    <div class="message-content">
                                                        <?= htmlspecialchars($message['text']) ?>
                                                    </div>
                                                    <div class="message-time">
                                                        <?= format_date($message['timestamp']) ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-warning">گزارش مورد نظر یافت نشد</div>
                        <?php endif; ?>
                        <?php else: ?>
                            <ul class="nav nav-tabs mb-4" id="reportsTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pending-tab" data-bs-toggle="tab" data-bs-target="#pending" type="button" role="tab">
                                        گزارشات جدید <span class="badge bg-danger ms-1"><?= count(array_filter(get_reports(), function($r) { return $r['status'] === 'pending'; })) ?></span>
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="resolved-tab" data-bs-toggle="tab" data-bs-target="#resolved" type="button" role="tab">
                                        گزارشات رسیدگی شده
                                    </button>
                                </li>
                            </ul>
                            
                            <div class="tab-content" id="reportsTabContent">
                                <div class="tab-pane fade show active" id="pending" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>گزارش دهنده</th>
                                                    <th>گزارش شده</th>
                                                    <th>دلیل</th>
                                                    <th>زمان</th>
                                                    <th>عملیات</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach (array_filter(get_reports(), function($r) { return $r['status'] === 'pending'; }) as $report): ?>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span><?= $report['reporter']['name'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span><?= $report['reported']['name'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td><?= strlen($report['reason']) > 30 ? substr($report['reason'], 0, 30) . '...' : $report['reason'] ?></td>
                                                    <td><?= format_relative_time($report['timestamp']) ?></td>
                                                    <td>
                                                        <a href="admin.php?page=reports&report_id=<?= $report['id'] ?>" class="btn btn-sm btn-info">
                                                            <i class="bi bi-eye"></i> مشاهده
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                                <div class="tab-pane fade" id="resolved" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>گزارش دهنده</th>
                                                    <th>گزارش شده</th>
                                                    <th>دلیل</th>
                                                    <th>زمان</th>
                                                    <th>عملیات</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach (array_filter(get_reports(), function($r) { return $r['status'] === 'resolved'; }) as $report): ?>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span><?= $report['reporter']['name'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <span><?= $report['reported']['name'] ?></span>
                                                        </div>
                                                    </td>
                                                    <td><?= strlen($report['reason']) > 30 ? substr($report['reason'], 0, 30) . '...' : $report['reason'] ?></td>
                                                    <td><?= format_relative_time($report['timestamp']) ?></td>
                                                    <td>
                                                        <a href="admin.php?page=reports&report_id=<?= $report['id'] ?>" class="btn btn-sm btn-info">
                                                            <i class="bi bi-eye"></i> مشاهده
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                
            <?php elseif ($current_page === 'chat_logs'): ?>
                <div class="card">
                    <div class="card-header">
                        <h5>لاگ چت‌ها</h5>
                        <div class="text-muted"><?= count(get_all_chat_logs()) ?> چت ثبت شده در سیستم</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>کاربران</th>
                                        <th>تعداد پیام</th>
                                        <th>آخرین پیام</th>
                                        <th>زمان</th>
                                        <th>عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (get_all_chat_logs() as $i => $log): ?>
                                    <tr>
                                        <td><?= $i + 1 ?></td>
                                        <td>
                                            <div><?= $log['user1'] ?></div>
                                            <div><?= $log['user2'] ?></div>
                                        </td>
                                        <td><?= $log['messages_count'] ?></td>
                                        <td><?= strlen($log['last_message']) > 30 ? substr($log['last_message'], 0, 30) . '...' : $log['last_message'] ?></td>
                                        <td><?= format_relative_time($log['last_message_time']) ?></td>
                                        <td>
                                            <a href="admin.php?page=chat_logs&chat_id=<?= $log['chat_id'] ?>" class="btn btn-sm btn-info me-2">
                                                <i class="bi bi-eye"></i> مشاهده
                                            </a>
                                            <form method="POST" style="display:inline;">
                                                <input type="hidden" name="action" value="delete_chat_log">
                                                <input type="hidden" name="chat_id" value="<?= $log['chat_id'] ?>">
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="bi bi-trash"></i> حذف
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            <?php elseif ($current_page === 'chat_requests'): ?>
                <div class="card">
                    <div class="card-header">
                        <h5>درخواست‌های چت</h5>
                        <div class="text-muted"><?= count(get_chat_requests()) ?> درخواست چت ثبت شده</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>فرستنده</th>
                                        <th>گیرنده</th>
                                        <th>زمان</th>
                                        <th>عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (get_chat_requests() as $i => $request): ?>
                                    <tr>
                                        <td><?= $i + 1 ?></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span><?= $request['requester']['name'] ?></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span><?= $request['target']['name'] ?></span>
                                            </div>
                                        </td>
                                        <td><?= format_relative_time($request['timestamp']) ?></td>
                                        <td>
                                            <form method="POST" style="display:inline;">
                                                <input type="hidden" name="action" value="delete_request">
                                                <input type="hidden" name="request_id" value="<?= $request['id'] ?>">
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="bi bi-trash"></i> حذف
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            <?php elseif ($current_page === 'messages'): ?>
                <div class="card">
                    <div class="card-header">
                        <h5>پیام‌های ارسالی</h5>
                        <div class="text-muted"><?= count(get_messages()) ?> پیام ارسال شده</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>فرستنده</th>
                                        <th>گیرنده</th>
                                        <th>متن پیام</th>
                                        <th>زمان</th>
                                        <th>عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (get_messages() as $i => $message): ?>
                                    <tr>
                                        <td><?= $i + 1 ?></td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span><?= $message['sender']['name'] ?></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <span><?= $message['receiver']['name'] ?></span>
                                            </div>
                                        </td>
                                        <td><?= strlen($message['text']) > 30 ? substr($message['text'], 0, 30) . '...' : $message['text'] ?></td>
                                        <td><?= format_relative_time($message['timestamp']) ?></td>
                                        <td>
                                            <form method="POST" style="display:inline;">
                                                <input type="hidden" name="action" value="delete_message">
                                                <input type="hidden" name="message_id" value="<?= $message['id'] ?>">
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="bi bi-trash"></i> حذف
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            <?php elseif ($current_page === 'statistics'): ?>
                <div class="card">
                    <div class="card-header">
                        <h5>آمار و تحلیل سیستم</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5>رشد کاربران در ۷ روز گذشته</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="userGrowthChart" height="250"></canvas>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <h5>وضعیت کاربران</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="userStatusChart" height="250"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>توزیع سنی کاربران</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="ageDistributionChart" height="250"></canvas>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>موقعیت جغرافیایی</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="locationChart" height="250"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <?php elseif ($current_page === 'settings'): ?>
                <div class="card">
                    <div class="card-header">
                        <h5>تنظیمات سیستم</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <input type="hidden" name="action" value="update_settings">
                            
                            <div class="mb-4">
                                <h5 class="mb-3"><i class="bi bi-shield-lock"></i> تنظیمات امنیتی</h5>
                                
                                <div class="mb-3">
                                    <label for="adminUsername" class="form-label">نام کاربری ادمین</label>
                                    <input type="text" class="form-control" id="adminUsername" name="admin_username" value="<?= DEFAULT_ADMIN_USERNAME ?>">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="adminPassword" class="form-label">رمز عبور ادمین</label>
                                    <input type="password" class="form-control" id="adminPassword" name="admin_password" value="<?= DEFAULT_ADMIN_PASSWORD ?>">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="sessionTimeout" class="form-label">مدت زمان انقضای session (دقیقه)</label>
                                    <input type="number" class="form-control" id="sessionTimeout" name="session_timeout" value="<?= floor(SESSION_TIMEOUT / 60) ?>">
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-secondary me-3">بازنشانی</button>
                                <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
                            </div>
                        </form>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('sidebarToggle').addEventListener('click', function() {
                document.querySelector('.sidebar').classList.toggle('active');
            });
            
            <?php if ($current_page === 'dashboard'): ?>
                const userStatsCtx = document.getElementById('userStatsChart').getContext('2d');
                const userStatsChart = new Chart(userStatsCtx, {
                    type: 'line',
                    data: {
                        labels: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور'],
                        datasets: [
                            {
                                label: 'کاربران جدید',
                                data: [<?= floor($statistics['new_users_7_days'] * 0.4) ?>, <?= floor($statistics['new_users_7_days'] * 0.6) ?>, <?= floor($statistics['new_users_7_days'] * 0.7) ?>, <?= floor($statistics['new_users_7_days'] * 0.8) ?>, <?= floor($statistics['new_users_7_days'] * 0.9) ?>, <?= $statistics['new_users_7_days'] ?>],
                                borderColor: 'rgba(108, 92, 231, 1)',
                                backgroundColor: 'rgba(108, 92, 231, 0.1)',
                                tension: 0.3,
                                fill: true
                            },
                            {
                                label: 'کاربران فعال',
                                data: [<?= floor($statistics['active_users'] * 0.3) ?>, <?= floor($statistics['active_users'] * 0.5) ?>, <?= floor($statistics['active_users'] * 0.6) ?>, <?= floor($statistics['active_users'] * 0.7) ?>, <?= floor($statistics['active_users'] * 0.8) ?>, <?= $statistics['active_users'] ?>],
                                borderColor: 'rgba(0, 184, 148, 1)',
                                backgroundColor: 'rgba(0, 184, 148, 0.1)',
                                tension: 0.3,
                                fill: true
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                                rtl: true
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
                
                const genderCtx = document.getElementById('genderChart').getContext('2d');
                const genderChart = new Chart(genderCtx, {
                    type: 'doughnut',
                    data: {
                        labels: ['مرد', 'زن', 'سایر'],
                        datasets: [{
                            data: [<?= $statistics['gender_distribution']['male'] ?>, <?= $statistics['gender_distribution']['female'] ?>, <?= $statistics['gender_distribution']['other'] ?>],
                            backgroundColor: [
                                'rgba(54, 162, 235, 0.7)',
                                'rgba(255, 99, 132, 0.7)',
                                'rgba(201, 203, 207, 0.7)'
                            ],
                            borderColor: [
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 99, 132, 1)',
                                'rgba(201, 203, 207, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'bottom',
                                rtl: true
                            }
                        }
                    }
                });
            <?php elseif ($current_page === 'statistics'): ?>
                const userGrowthCtx = document.getElementById('userGrowthChart').getContext('2d');
                const userGrowthChart = new Chart(userGrowthCtx, {
                    type: 'bar',
                    data: {
                        labels: ['۶ روز پیش', '۵ روز پیش', '۴ روز پیش', '۳ روز پیش', 'دیروز', 'امروز'],
                        datasets: [{
                            label: 'کاربران جدید',
                            data: [<?= floor($statistics['new_users_7_days'] / 6) ?>, <?= floor($statistics['new_users_7_days'] / 5) ?>, <?= floor($statistics['new_users_7_days'] / 4) ?>, <?= floor($statistics['new_users_7_days'] / 3) ?>, <?= floor($statistics['new_users_7_days'] / 2) ?>, <?= $statistics['new_users_7_days'] ?>],
                            backgroundColor: 'rgba(108, 92, 231, 0.7)',
                            borderColor: 'rgba(108, 92, 231, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                display: false
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
                
                const userStatusCtx = document.getElementById('userStatusChart').getContext('2d');
                const userStatusChart = new Chart(userStatusCtx, {
                    type: 'pie',
                    data: {
                        labels: ['آنلاین', 'آفلاین', 'در حال چت', 'در حال جستجو', 'مسدود شده'],
                        datasets: [{
                            data: [
                                <?= $statistics['active_users'] ?>,
                                <?= $statistics['total_users'] - $statistics['active_users'] ?>,
                                <?= $statistics['active_chats'] * 2 ?>,
                                <?= $statistics['searching_users'] ?>,
                                <?= count(array_filter(get_all_users(), function($u) { return $u['banned']; })) ?>
                            ],
                            backgroundColor: [
                                'rgba(0, 184, 148, 0.7)',
                                'rgba(108, 117, 125, 0.7)',
                                'rgba(9, 132, 227, 0.7)',
                                'rgba(253, 203, 110, 0.7)',
                                'rgba(214, 48, 49, 0.7)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'bottom',
                                rtl: true
                            }
                        }
                    }
                });
                
                const ageDistributionCtx = document.getElementById('ageDistributionChart').getContext('2d');
                const ageDistributionChart = new Chart(ageDistributionCtx, {
                    type: 'bar',
                    data: {
                        labels: ['۱۳-۱۷', '۱۸-۲۴', '۲۵-۳۰', '۳۱-۴۰', '۴۱+'],
                        datasets: [{
                            label: 'تعداد کاربران',
                            data: [
                                <?= $statistics['age_distribution']['13-17'] ?>,
                                <?= $statistics['age_distribution']['18-24'] ?>,
                                <?= $statistics['age_distribution']['25-30'] ?>,
                                <?= $statistics['age_distribution']['31-40'] ?>,
                                <?= $statistics['age_distribution']['41+'] ?>
                            ],
                            backgroundColor: 'rgba(108, 92, 231, 0.7)',
                            borderColor: 'rgba(108, 92, 231, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                display: false
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
                
                const locationCtx = document.getElementById('locationChart').getContext('2d');
                const locationChart = new Chart(locationCtx, {
                    type: 'doughnut',
                    data: {
                        labels: <?= json_encode(array_keys($statistics['location_distribution'])) ?>,
                        datasets: [{
                            data: <?= json_encode(array_values($statistics['location_distribution'])) ?>,
                            backgroundColor: [
                                'rgba(108, 92, 231, 0.7)',
                                'rgba(0, 184, 148, 0.7)',
                                'rgba(9, 132, 227, 0.7)',
                                'rgba(253, 203, 110, 0.7)',
                                'rgba(214, 48, 49, 0.7)',
                                'rgba(108, 117, 125, 0.7)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'bottom',
                                rtl: true
                            }
                        }
                    }
                });
            <?php endif; ?>
        });
    </script>
</body>
</html>
<?php
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: admin.php');
    exit;
}
?>