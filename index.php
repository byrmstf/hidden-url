<?php
/**
 * Hidden URL - Demo Page
 * 
 * @author Mustafa Bayram
 * @version 2.0
 */

$hash = "05edd57091ad570303df856c652a7a174554a148";
$demo_url = "/img.php?h=" . $hash;
?>
<!DOCTYPE html>
<html lang="tr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hidden URL - Secure File Access Demo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        .header {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .header h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
            font-weight: 300;
        }
        
        .header p {
            font-size: 1.2em;
            opacity: 0.9;
        }
        
        .demo-section {
            padding: 30px;
        }
        
        .pdf-container {
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            overflow: hidden;
            margin: 20px 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .pdf-viewer {
            width: 100%;
            height: 600px;
            border: none;
        }
        
        .info-box {
            background: #f8f9fa;
            border-left: 4px solid #007bff;
            padding: 20px;
            margin: 20px 0;
            border-radius: 0 10px 10px 0;
        }
        
        .info-box h3 {
            color: #007bff;
            margin-bottom: 10px;
        }
        
        .url-display {
            background: #2c3e50;
            color: #ecf0f1;
            padding: 15px;
            border-radius: 5px;
            font-family: 'Courier New', monospace;
            word-break: break-all;
            margin: 10px 0;
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }
        
        .feature {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            border: 1px solid #e9ecef;
        }
        
        .feature-icon {
            font-size: 2em;
            margin-bottom: 10px;
        }
        
        .footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 20px;
        }
        
        .footer a {
            color: #3498db;
            text-decoration: none;
        }
        
        .footer a:hover {
            text-decoration: underline;
        }
        
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2em;
            }
            
            .pdf-viewer {
                height: 400px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🔒 Hidden URL</h1>
            <p>Secure File Access System Demo</p>
        </div>
        
        <div class="demo-section">
            <div class="info-box">
                <h3>📋 Demo Description</h3>
                <p>This page demonstrates how the Hidden URL system works. The PDF file below is served through a hash-based URL instead of direct access.</p>
                
                <div class="url-display">
                    <strong>Hidden URL:</strong><br>
                    <?= htmlspecialchars($demo_url) ?>
                </div>
            </div>
            
            <div class="pdf-container">
                <object data="<?= htmlspecialchars($demo_url) ?>" 
                        type="application/pdf" 
                        class="pdf-viewer">
                    <embed width="100%" 
                           height="600px" 
                           src="<?= htmlspecialchars($demo_url) ?>"/>
                    <p>If you don't have a PDF viewer, 
                       <a href="<?= htmlspecialchars($demo_url) ?>" target="_blank">click here to download the file</a>.
                    </p>
                </object>
            </div>
            
            <div class="features">
                <div class="feature">
                    <div class="feature-icon">🔐</div>
                    <h3>Secure Access</h3>
                    <p>Your files are protected with hash-based URLs</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">🌐</div>
                    <h3>Referer Control</h3>
                    <p>Allow access only from specific domains</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">⚡</div>
                    <h3>Fast Performance</h3>
                    <p>Maximum performance with minimal code</p>
                </div>
                
                <div class="feature">
                    <div class="feature-icon">📁</div>
                    <h3>Multi-Format</h3>
                    <p>PDF, images, videos and other file types</p>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p>
                <strong>Hidden URL v2.0</strong> - 
                <a href="https://github.com/byrmstf/hidden-url" target="_blank">GitHub</a> | 
                <a href="https://mustafabayram.com.tr" target="_blank">Mustafa Bayram</a>
            </p>
            <p>⭐ If you like this project, please give it a star on GitHub!</p>
        </div>
    </div>
</body>
</html>