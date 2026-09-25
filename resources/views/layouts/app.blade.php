<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Manager - Dark Aesthetic</title>
    <style>
        * { box-sizing: border-box; }
        
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background: #121216; /* Deep, eye-friendly dark background */
            margin: 0;
            padding: 0;
            color: #e2e1e8; /* Soft pale grey for easy reading */
            font-size: 16px;
            line-height: 1.5;
        }

        nav {
            background: #1a1a22; /* Slightly lighter dark tone for navbar */
            color: #ffffff;
            padding: 20px 40px;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: -0.3px;
            border-bottom: 1px solid #2a2935;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .container {
            max-width: 960px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .card {
            background: #1a1a22; /* Rich dark card background */
            border-radius: 16px;
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.3);
            padding: 32px;
            margin-bottom: 24px;
            border: 1px solid #2a2935;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        th, td {
            text-align: left;
            padding: 16px 18px;
        }

        th { 
            background: #23222d; 
            color: #a29fb8;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        th:first-child { border-top-left-radius: 8px; border-bottom-left-radius: 8px; }
        th:last-child { border-top-right-radius: 8px; border-bottom-right-radius: 8px; }

        td {
            border-bottom: 1px solid #262531;
            font-size: 15px;
            color: #d1cfdd;
        }

        /* --- Clear, Modern, High-Contrast Buttons --- */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }

        .btn:hover {
            transform: translateY(-1px);
            opacity: 0.9;
        }

        .btn-primary { 
            background: #7c6ee6; /* Vibrant modern soft purple */
            color: #ffffff; 
        }
        
        .btn-edit { 
            background: #f59e0b; /* Clear warm amber */
            color: #121216; 
        }
        
        .btn-delete { 
            background: #f43f5e; /* Clear coral red */
            color: #ffffff; 
        }
        
        .btn-status { 
            background: #10b981; /* Clear mint green */
            color: #ffffff; 
        }

        .status-pending { 
            color: #fbbf24; 
            font-weight: 700; 
            background: rgba(251, 191, 36, 0.15);
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 13px;
        }
        
        .status-completed { 
            color: #34d399; 
            font-weight: 700; 
            background: rgba(52, 211, 153, 0.15);
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 13px;
        }

        form.inline { display: inline; }

        input[type=text], textarea, input[type=date], select {
            width: 100%;
            padding: 12px 16px;
            margin-top: 6px;
            margin-bottom: 20px;
            border: 1.5px solid #353344;
            background: #121216;
            border-radius: 10px;
            color: #ffffff;
            font-size: 15px;
            transition: all 0.2s;
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #7c6ee6;
            background: #17161f;
            box-shadow: 0 0 0 4px rgba(124, 110, 230, 0.2);
        }

        label { 
            font-weight: 600; 
            font-size: 14px; 
            color: #a29fb8; 
        }

        .alert-success {
            background: rgba(16, 185, 129, 0.15);
            color: #34d399;
            padding: 16px 20px;
            border-radius: 12px;
            margin-bottom: 24px;
            border: 1px solid rgba(16, 185, 129, 0.3);
            font-weight: 500;
        }
    </style>
</head>
<body>
    <nav>
        <span>🌸 Task Manager</span>
    </nav>
    
    <div class="container">
        {{-- Flash message shown after add/edit/delete/status actions --}}
        @if (session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        {{-- Page-specific content goes here --}}
        @yield('content')
    </div>
</body>
</html>