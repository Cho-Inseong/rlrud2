    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #8e44ad, #3498db);
        }

        .login-container {
            background: linear-gradient(to bottom, #8e44ad, #3498db);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            color: #fff;
        }

        .login-container h2 {
            color: #fff;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .login-container label {
            color: #fff;
            margin-bottom: 8px;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #fff;
            border-radius: 4px;
            box-sizing: border-box;
            color: #333; /* 폰트 색상 추가 */
        }

        .login-container button {
            background: #fff;
            color: #8e44ad;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .login-container button:hover {
            background: #eee;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        // JavaScript로 그라데이션 색상 변경
        document.addEventListener('DOMContentLoaded', function () {
            var container = document.querySelector('.login-container');
            container.style.background = 'linear-gradient(to bottom, #8e44ad, #3498db)';
        });
    </script>
</body>
</html>
