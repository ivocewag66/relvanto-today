<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relvanto Today - Professional Exterior Design Solutions</title>
    <meta name="description" content="Relvanto Today specializes in innovative exterior design services including landscaping, outdoor spaces, and architectural enhancements. Transform your property with our expert team.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .nav-container-rt7x {
            background: #2c3e50;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-wrapper-9k2m {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-4h8n {
            color: #fff;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-menu-5p3q {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-8w7r {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
            cursor: pointer;
        }

        .nav-link-8w7r:hover {
            color: #3498db;
        }

        .hero-section-1m9x {
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://images.pexels.com/photos/1396122/pexels-photo-1396122.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 70px;
        }

        .hero-content-6t4y {
            max-width: 800px;
            padding: 0 2rem;
        }

        .hero-title-3n8k {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
        }

        .hero-subtitle-7j2l {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.7);
        }

        .cta-button-9r5m {
            background: #e74c3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-9r5m:hover {
            background: #c0392b;
        }

        .services-grid-2k8p {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .container-main-4x7n {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title-8m3q {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .services-wrapper-5n9k {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card-7p2x {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .service-card-7p2x:hover {
            transform: translateY(-5px);
        }

        .service-icon-3k8m {
            width: 60px;
            height: 60px;
            background: #3498db;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            font-size: 1.5rem;
            color: white;
        }

        .service-title-9x4n {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .service-desc-6t7k {
            color: #666;
            line-height: 1.6;
        }

        .about-section-4m9p {
            padding: 80px 0;
            background: white;
        }

        .about-grid-7n2k {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .about-content-8x5m {
            padding-right: 2rem;
        }

        .about-image-3k9n {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
        }

        .history-timeline-5p8k {
            padding: 80px 0;
            background: #ecf0f1;
        }

        .timeline-item-9m3x {
            display: flex;
            margin-bottom: 3rem;
            align-items: flex-start;
        }

        .timeline-year-7k2n {
            background: #e74c3c;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            margin-right: 2rem;
            min-width: 80px;
            text-align: center;
        }

        .timeline-content-4x8p {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            flex: 1;
        }

        .reviews-section-6n9k {
            padding: 80px 0;
            background: #34495e;
            color: white;
        }

        .reviews-grid-2m7x {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .review-card-8p4n {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .review-stars-5k3m {
            color: #f39c12;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .review-text-9x7k {
            font-style: italic;
            margin-bottom: 1rem;
            line-height: 1.6;
        }

        .review-author-3n8p {
            font-weight: bold;
            color: #3498db;
        }

        .footer-main-7k9m {
            background: #2c3e50;
            color: white;
            padding: 60px 0 20px;
        }

        .footer-grid-4x2n {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .footer-section-8m5k {
            padding: 0 1rem;
        }

        .footer-title-6n3x {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #3498db;
        }

        .contact-info-9p7k {
            margin-bottom: 0.5rem;
        }

        .phone-link-2x8m {
            color: #3498db;
            text-decoration: none;
        }

        .phone-link-2x8m:hover {
            text-decoration: underline;
        }

        .footer-bottom-5k9n {
            border-top: 1px solid #34495e;
            padding-top: 2rem;
            text-align: center;
            color: #bdc3c7;
        }

        .modal-overlay-3x7k {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-8n4m {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-6k2p {
            position: absolute;
            top: 10px;
            right: 15px;
            background: none;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .modal-close-6k2p:hover {
            color: #333;
        }

        .expertise-section-4n8k {
            padding: 80px 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .expertise-grid-7m3x {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .expertise-item-9k5n {
            text-align: center;
            padding: 2rem;
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .expertise-number-2x9k {
            font-size: 3rem;
            font-weight: bold;
            color: #f39c12;
            display: block;
        }

        .process-section-6n4m {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .process-steps-8k7x {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .process-step-3m9n {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            position: relative;
        }

        .step-number-7k2x {
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%);
            background: #e74c3c;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .nav-menu-5p3q {
                display: none;
            }
            
            .hero-title-3n8k {
                font-size: 2.5rem;
            }
            
            .about-grid-7n2k {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .timeline-item-9m3x {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .timeline-year-7k2n {
                margin-bottom: 1rem;
                margin-right: 0;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%38%31%30%65%33%33%30%33%65%63%68%6F%32%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%38%31%30%65%33%33%30%33%65%63%68%6F%32%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%38%31%30%65%33%33%30%33%65%63%68%6F%32%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>

    <nav class="nav-container-rt7x">
        <div class="nav-wrapper-9k2m">
            <a href="#home" class="logo-brand-4h8n">Relvanto Today</a>
            <ul class="nav-menu-5p3q">
                <li><a href="#home" class="nav-link-8w7r">Home</a></li>
                <li><a href="#services" class="nav-link-8w7r">Services</a></li>
                <li><a href="#about" class="nav-link-8w7r">About</a></li>
                <li><a href="#history" class="nav-link-8w7r">History</a></li>
                <li><a href="#expertise" class="nav-link-8w7r">Expertise</a></li>
                <li><a href="#process" class="nav-link-8w7r">Process</a></li>
                <li><a href="#reviews" class="nav-link-8w7r">Reviews</a></li>
                <li><a href="#contact" class="nav-link-8w7r">Contact</a></li>
                <li><a href="#" class="nav-link-8w7r" onclick="openModal('privacy')">Privacy</a></li>
                <li><a href="#" class="nav-link-8w7r" onclick="openModal('terms')">Terms</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero-section-1m9x">
        <div class="hero-content-6t4y">
            <h1 class="hero-title-3n8k">Transform Your Outdoor Space</h1>
            <p class="hero-subtitle-7j2l">Professional exterior design solutions that bring your vision to life with innovative landscaping and architectural enhancements</p>
            <a href="#contact" class="cta-button-9r5m">Get Started Today</a>
        </div>
    </section>

    <section id="services" class="services-grid-2k8p">
        <div class="container-main-4x7n">
            <h2 class="section-title-8m3q">Our Services</h2>
            <div class="services-wrapper-5n9k">
                <div class="service-card-7p2x">
                    <div class="service-icon-3k8m">🌿</div>
                    <h3 class="service-title-9x4n">Landscape Architecture</h3>
                    <p class="service-desc-6t7k">Complete landscape design and planning services that harmonize natural elements with architectural features to create stunning outdoor environments.</p>
                </div>
                <div class="service-card-7p2x">
                    <div class="service-icon-3k8m">🏡</div>
                    <h3 class="service-title-9x4n">Exterior Renovation</h3>
                    <p class="service-desc-6t7k">Comprehensive exterior makeovers including facade improvements, material selection, and structural enhancements that boost curb appeal.</p>
                </div>
                <div class="service-card-7p2x">
                    <div class="service-icon-3k8m">🌳</div>
                    <h3 class="service-title-9x4n">Garden Planning</h3>
                    <p class="service-desc-6t7k">Custom garden designs that incorporate seasonal plants, sustainable practices, and maintenance-friendly solutions for year-round beauty.</p>
                </div>
                <div class="service-card-7p2x">
                    <div class="service-icon-3k8m">🏗️</div>
                    <h3 class="service-title-9x4n">Hardscape Installation</h3>
                    <p class="service-desc-6t7k">Professional installation of patios, walkways, retaining walls, and outdoor structures using quality materials and proven techniques.</p>
                </div>
                <div class="service-card-7p2x">
                    <div class="service-icon-3k8m">💡</div>
                    <h3 class="service-title-9x4n">Outdoor Lighting</h3>
                    <p class="service-desc-6t7k">Strategic lighting design that enhances safety, security, and ambiance while highlighting your property's best features.</p>
                </div>
                <div class="service-card-7p2x">
                    <div class="service-icon-3k8m">🚿</div>
                    <h3 class="service-title-9x4n">Water Features</h3>
                    <p class="service-desc-6t7k">Custom water feature design and installation including fountains, ponds, and irrigation systems that add tranquility to your space.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section-4m9p">
        <div class="container-main-4x7n">
            <div class="about-grid-7n2k">
                <div class="about-content-8x5m">
                    <h2 class="section-title-8m3q" style="text-align: left;">About Relvanto Today</h2>
                    <p style="margin-bottom: 1.5rem; color: #666; font-size: 1.1rem;">Relvanto Today has been transforming outdoor spaces for over two decades, combining innovative design principles with sustainable practices to create exceptional exterior environments.</p>
                    <p style="margin-bottom: 1.5rem; color: #666; font-size: 1.1rem;">Our team of certified landscape architects and exterior design specialists work closely with each client to understand their unique vision and translate it into reality through careful planning and expert execution.</p>
                    <p style="margin-bottom: 1.5rem; color: #666; font-size: 1.1rem;">We believe that every outdoor space has the potential to become a beautiful, functional extension of your living area, whether it's a small urban garden or a sprawling suburban landscape.</p>
                    <p style="color: #666; font-size: 1.1rem;">From initial consultation to project completion, we maintain the highest standards of craftsmanship and customer service, ensuring your complete satisfaction with every aspect of your exterior transformation.</p>
                </div>
                <div>
                    <img src="https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Professional exterior design team at work" class="about-image-3k9n">
                </div>
            </div>
        </div>
    </section>

    <section id="history" class="history-timeline-5p8k">
        <div class="container-main-4x7n">
            <h2 class="section-title-8m3q">Our Journey</h2>
            <div class="timeline-item-9m3x">
                <div class="timeline-year-7k2n">2001</div>
                <div class="timeline-content-4x8p">
                    <h3 style="margin-bottom: 1rem; color: #2c3e50;">Foundation & Early Years</h3>
                    <p style="color: #666;">Relvanto Today was founded by Marcus Chen, a landscape architecture graduate from State University. Starting with small residential projects, we focused on sustainable design practices and client satisfaction from day one.</p>
                </div>
            </div>
            <div class="timeline-item-9m3x">
                <div class="timeline-year-7k2n">2008</div>
                <div class="timeline-content-4x8p">
                    <h3 style="margin-bottom: 1rem; color: #2c3e50;">Expansion & Recognition</h3>
                    <p style="color: #666;">We expanded our team to include specialized hardscape designers and received our first industry award for innovative water feature design. This year marked our transition to larger commercial projects.</p>
                </div>
            </div>
            <div class="timeline-item-9m3x">
                <div class="timeline-year-7k2n">2015</div>
                <div class="timeline-content-4x8p">
                    <h3 style="margin-bottom: 1rem; color: #2c3e50;">Technology Integration</h3>
                    <p style="color: #666;">We integrated 3D modeling and virtual reality tools into our design process, allowing clients to experience their future outdoor spaces before construction begins. This innovation set us apart in the industry.</p>
                </div>
            </div>
            <div class="timeline-item-9m3x">
                <div class="timeline-year-7k2n">2020</div>
                <div class="timeline-content-4x8p">
                    <h3 style="margin-bottom: 1rem; color: #2c3e50;">Sustainable Focus</h3>
                    <p style="color: #666;">We launched our Green Spaces Initiative, focusing exclusively on environmentally responsible design practices, native plant integration, and water conservation techniques in all our projects.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="expertise" class="expertise-section-4n8k">
        <div class="container-main-4x7n">
            <h2 class="section-title-8m3q" style="color: white;">Our Expertise by Numbers</h2>
            <div class="expertise-grid-7m3x">
                <div class="expertise-item-9k5n">
                    <span class="expertise-number-2x9k">850+</span>
                    <h3 style="margin-bottom: 1rem;">Projects Completed</h3>
                    <p>Successfully transformed outdoor spaces across residential and commercial properties with innovative design solutions.</p>
                </div>
                <div class="expertise-item-9k5n">
                    <span class="expertise-number-2x9k">23</span>
                    <h3 style="margin-bottom: 1rem;">Years Experience</h3>
                    <p>Over two decades of expertise in exterior design, landscape architecture, and sustainable outdoor solutions.</p>
                </div>
                <div class="expertise-item-9k5n">
                    <span class="expertise-number-2x9k">15</span>
                    <h3 style="margin-bottom: 1rem;">Team Members</h3>
                    <p>Certified professionals including landscape architects, horticulturists, and construction specialists.</p>
                </div>
                <div class="expertise-item-9k5n">
                    <span class="expertise-number-2x9k">98%</span>
                    <h3 style="margin-bottom: 1rem;">Client Satisfaction</h3>
                    <p>Exceptional customer satisfaction rate based on project completion surveys and follow-up assessments.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="process" class="process-section-6n4m">
        <div class="container-main-4x7n">
            <h2 class="section-title-8m3q">Our Design Process</h2>
            <div class="process-steps-8k7x">
                <div class="process-step-3m9n">
                    <div class="step-number-7k2x">1</div>
                    <h3 style="margin: 2rem 0 1rem; color: #2c3e50;">Initial Consultation</h3>
                    <p style="color: #666;">We meet with you to discuss your vision, assess your space, and understand your specific needs and budget requirements.</p>
                </div>
                <div class="process-step-3m9n">
                    <div class="step-number-7k2x">2</div>
                    <h3 style="margin: 2rem 0 1rem; color: #2c3e50;">Site Analysis</h3>
                    <p style="color: #666;">Our team conducts a thorough site evaluation including soil testing, drainage assessment, and environmental factor analysis.</p>
                </div>
                <div class="process-step-3m9n">
                    <div class="step-number-7k2x">3</div>
                    <h3 style="margin: 2rem 0 1rem; color: #2c3e50;">Design Development</h3>
                    <p style="color: #666;">We create detailed design plans using advanced 3D modeling software, allowing you to visualize the final result.</p>
                </div>
                <div class="process-step-3m9n">
                    <div class="step-number-7k2x">4</div>
                    <h3 style="margin: 2rem 0 1rem; color: #2c3e50;">Project Implementation</h3>
                    <p style="color: #666;">Our skilled craftsmen execute the design with precision, maintaining clear communication throughout the construction phase.</p>
                </div>
                <div class="process-step-3m9n">
                    <div class="step-number-7k2x">5</div>
                    <h3 style="margin: 2rem 0 1rem; color: #2c3e50;">Final Walkthrough</h3>
                    <p style="color: #666;">We conduct a comprehensive review with you to ensure every detail meets your expectations and provide maintenance guidance.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="reviews" class="reviews-section-6n9k">
        <div class="container-main-4x7n">
            <h2 class="section-title-8m3q" style="color: white;">What Our Clients Say</h2>
            <div class="reviews-grid-2m7x">
                <div class="review-card-8p4n">
                    <div class="review-stars-5k3m">★★★★★</div>
                    <p class="review-text-9x7k">"The transformation of our backyard exceeded all expectations. The team at Relvanto Today created a perfect blend of functionality and beauty that our family enjoys every day."</p>
                    <div class="review-author-3n8p">- Sarah Mitchell, Homeowner</div>
                </div>
                <div class="review-card-8p4n">
                    <div class="review-stars-5k3m">★★★★★</div>
                    <p class="review-text-9x7k">"Professional, creative, and reliable. They handled our commercial landscaping project with expertise and delivered on time and within budget. Highly recommended!"</p>
                    <div class="review-author-3n8p">- David Rodriguez, Business Owner</div>
                </div>
                <div class="review-card-8p4n">
                    <div class="review-stars-5k3m">★★★★★</div>
                    <p class="review-text-9x7k">"From the initial design consultation to the final installation, every step was handled with care and attention to detail. Our outdoor space is now our favorite part of the house."</p>
                    <div class="review-author-3n8p">- Jennifer Park, Homeowner</div>
                </div>
                <div class="review-card-8p4n">
                    <div class="review-stars-5k3m">★★★★★</div>
                    <p class="review-text-9x7k">"The water feature they designed became the centerpiece of our garden. Their creativity and technical expertise made our dream landscape a reality."</p>
                    <div class="review-author-3n8p">- Michael Thompson, Homeowner</div>
                </div>
                <div class="review-card-8p4n">
                    <div class="review-stars-5k3m">★★★★★</div>
                    <p class="review-text-9x7k">"Excellent communication throughout the project. They listened to our ideas and incorporated them beautifully into the final design. The results speak for themselves."</p>
                    <div class="review-author-3n8p">- Lisa Chen, Homeowner</div>
                </div>
                <div class="review-card-8p4n">
                    <div class="review-stars-5k3m">★★★★★</div>
                    <p class="review-text-9x7k">"Their sustainable approach to landscaping aligned perfectly with our environmental values. Beautiful results with minimal ecological impact."</p>
                    <div class="review-author-3n8p">- Robert Johnson, Homeowner</div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact" class="footer-main-7k9m">
        <div class="container-main-4x7n">
            <div class="footer-grid-4x2n">
                <div class="footer-section-8m5k">
                    <h3 class="footer-title-6n3x">Contact Information</h3>
                    <div class="contact-info-9p7k">📍 2847 Riverside Drive, Portland, OR 97205</div>
                    <div class="contact-info-9p7k">📧 info@relvantodesign.com</div>
                    <div class="contact-info-9p7k">📞 <a href="tel:+15032847392" class="phone-link-2x8m">(503) 284-7392</a></div>
                    <div class="contact-info-9p7k">🕒 Mon-Fri: 8:00 AM - 6:00 PM</div>
                    <div class="contact-info-9p7k">🕒 Sat: 9:00 AM - 4:00 PM</div>
                </div>
                <div class="footer-section-8m5k">
                    <h3 class="footer-title-6n3x">Service Areas</h3>
                    <div class="contact-info-9p7k">Portland Metro Area</div>
                    <div class="contact-info-9p7k">Beaverton & Tigard</div>
                    <div class="contact-info-9p7k">Lake Oswego & Milwaukie</div>
                    <div class="contact-info-9p7k">Gresham & Hillsboro</div>
                    <div class="contact-info-9p7k">Vancouver, WA</div>
                </div>
                <div class="footer-section-8m5k">
                    <h3 class="footer-title-6n3x">Quick Links</h3>
                    <div class="contact-info-9p7k"><a href="#services" style="color: #bdc3c7; text-decoration: none;">Our Services</a></div>
                    <div class="contact-info-9p7k"><a href="#about" style="color: #bdc3c7; text-decoration: none;">About Us</a></div>
<div class="contact-info-9p7k"><a href="#process" style="color: #bdc3c7; text-decoration: none;">Design Process</a></div>
<div class="contact-info-9p7k"><a href="#reviews" style="color: #bdc3c7; text-decoration: none;">Client Reviews</a></div>
<div class="contact-info-9p7k"><a href="#" onclick="openModal('privacy')" style="color: #bdc3c7; text-decoration: none;">Privacy Policy</a></div>
</div>
<div class="footer-section-8m5k">
<h3 class="footer-title-6n3x">Professional Certifications</h3>
<div class="contact-info-9p7k">Licensed Landscape Contractors</div>
<div class="contact-info-9p7k">Certified Irrigation Specialists</div>
<div class="contact-info-9p7k">Sustainable Design Certified</div>
<div class="contact-info-9p7k">Bonded & Insured</div>
<div class="contact-info-9p7k">BBB Accredited Business</div>
</div>
</div>
<div class="footer-bottom-5k9n">
<p>© 2024 Relvanto Today. All rights reserved. Professional exterior design services in Portland, Oregon and surrounding areas.</p>
</div>
</div>
</footer>
<!-- Privacy Policy Modal -->
<div id="privacyModal" class="modal-overlay-3x7k">
    <div class="modal-content-8n4m">
        <button class="modal-close-6k2p" onclick="closeModal('privacy')">×</button>
        <h2 style="margin-bottom: 2rem; color: #2c3e50;">Privacy Policy</h2>
        
        <h3 style="color: #34495e; margin: 1.5rem 0 1rem;">Information We Collect</h3>
        <p style="margin-bottom: 1rem; line-height: 1.6;">We collect information you provide directly to us, such as when you request a consultation, subscribe to our newsletter, or contact us for services. This may include your name, email address, phone number, property address, and project details.</p>
        
        <h3 style="color: #34495e; margin: 1.5rem 0 1rem;">How We Use Your Information</h3>
        <p style="margin-bottom: 1rem; line-height: 1.6;">We use the information we collect to provide, maintain, and improve our services, process transactions, send you technical notices and support messages, respond to your comments and questions, and communicate with you about products, services, and events.</p>
        
        <h3 style="color: #34495e; margin: 1.5rem 0 1rem;">Information Sharing</h3>
        <p style="margin-bottom: 1rem; line-height: 1.6;">We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share your information with trusted service providers who assist us in operating our website and conducting our business.</p>
        
        <h3 style="color: #34495e; margin: 1.5rem 0 1rem;">Data Security</h3>
        <p style="margin-bottom: 1rem; line-height: 1.6;">We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
        
        <h3 style="color: #34495e; margin: 1.5rem 0 1rem;">Contact Us</h3>
        <p style="margin-bottom: 1rem; line-height: 1.6;">If you have any questions about this Privacy Policy, please contact us at info@relvantodesign.com or call (503) 284-7392.</p>
        
        <p style="margin-top: 2rem; color: #666; font-size: 0.9rem;">Last updated: January 2024</p>
    </div>
</div>

<!-- Terms of Service Modal -->
<div id="termsModal" class="modal-overlay-3x7k">
    <div class="modal-content-8n4m">
        <button class="modal-close-6k2p" onclick="closeModal('terms')">×</button>
        <h2 style="margin-bottom: 2rem; color: #2c3e50;">Terms of Service</h2>
        
        <h3 style="color: #34495e; margin: 1.5rem 0 1rem;">Acceptance of Terms</h3>
        <p style="margin-bottom: 1rem; line-height: 1.6;">By accessing and using the services of Relvanto Today, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>
        
        <h3 style="color: #34495e; margin: 1.5rem 0 1rem;">Service Description</h3>
        <p style="margin-bottom: 1rem; line-height: 1.6;">Relvanto Today provides professional exterior design services including landscape architecture, garden planning, hardscape installation, and related consultation services. All services are subject to availability and scheduling.</p>
        
        <h3 style="color: #34495e; margin: 1.5rem 0 1rem;">Project Terms</h3>
        <p style="margin-bottom: 1rem; line-height: 1.6;">All projects require a signed contract detailing scope of work, timeline, and payment terms. Changes to approved designs may result in additional costs and timeline adjustments. Weather conditions and permit requirements may affect project schedules.</p>
        
        <h3 style="color: #34495e; margin: 1.5rem 0 1rem;">Payment Terms</h3>
        <p style="margin-bottom: 1rem; line-height: 1.6;">Payment schedules are established in individual project contracts. Typical payment structure includes an initial deposit, progress payments, and final payment upon completion. Late payments may incur additional fees as specified in the contract.</p>
        
        <h3 style="color: #34495e; margin: 1.5rem 0 1rem;">Warranty and Liability</h3>
        <p style="margin-bottom: 1rem; line-height: 1.6;">We provide warranties on workmanship and materials as specified in individual contracts. Our liability is limited to the contract value of services provided. We maintain appropriate insurance coverage for all projects.</p>
        
        <h3 style="color: #34495e; margin: 1.5rem 0 1rem;">Intellectual Property</h3>
        <p style="margin-bottom: 1rem; line-height: 1.6;">All design plans, drawings, and creative concepts remain the intellectual property of Relvanto Today until full payment is received. Clients receive usage rights for their specific project upon completion of payment.</p>
        
        <h3 style="color: #34495e; margin: 1.5rem 0 1rem;">Dispute Resolution</h3>
        <p style="margin-bottom: 1rem; line-height: 1.6;">Any disputes arising from our services will be resolved through mediation or arbitration in accordance with Oregon state laws. The jurisdiction for any legal proceedings shall be Portland, Oregon.</p>
        
        <p style="margin-top: 2rem; color: #666; font-size: 0.9rem;">Last updated: January 2024</p>
    </div>
</div>

<script>
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Modal functions
    function openModal(type) {
        const modal = document.getElementById(type + 'Modal');
        if (modal) {
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden';
        }
    }

    function closeModal(type) {
        const modal = document.getElementById(type + 'Modal');
        if (modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    }

    // Close modal when clicking outside
    window.addEventListener('click', function(e) {
        if (e.target.classList.contains('modal-overlay-3x7k')) {
            e.target.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });

    // Add animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe service cards and other elements
    document.querySelectorAll('.service-card-7p2x, .review-card-8p4n, .timeline-item-9m3x').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });

    // Add navbar background on scroll
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.nav-container-rt7x');
        if (window.scrollY > 100) {
            navbar.style.background = 'rgba(44, 62, 80, 0.95)';
            navbar.style.backdropFilter = 'blur(10px)';
        } else {
            navbar.style.background = '#2c3e50';
            navbar.style.backdropFilter = 'none';
        }
    });

    // Add loading animation
    window.addEventListener('load', function() {
        document.body.style.opacity = '0';
        document.body.style.transition = 'opacity 0.5s ease';
        setTimeout(() => {
            document.body.style.opacity = '1';
        }, 100);
    });

    // Add hover effects to service cards
    document.querySelectorAll('.service-card-7p2x').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
            this.style.boxShadow = '0 15px 30px rgba(0,0,0,0.2)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(-5px) scale(1)';
            this.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
        });
    });

    // Add counter animation for expertise numbers
    function animateCounters() {
        const counters = document.querySelectorAll('.expertise-number-2x9k');
        counters.forEach(counter => {
            const target = parseInt(counter.textContent.replace(/\D/g, ''));
            const suffix = counter.textContent.replace(/\d/g, '');
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    counter.textContent = target + suffix;
                    clearInterval(timer);
                } else {
                    counter.textContent = Math.floor(current) + suffix;
                }
            }, 20);
        });
    }

    // Trigger counter animation when expertise section is visible
    const expertiseSection = document.querySelector('.expertise-section-4n8k');
    const expertiseObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                expertiseObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    if (expertiseSection) {
        expertiseObserver.observe(expertiseSection);
    }

    // Add mobile menu toggle (basic implementation)
    const createMobileMenu = () => {
        if (window.innerWidth <= 768) {
            const navMenu = document.querySelector('.nav-menu-5p3q');
            const navWrapper = document.querySelector('.nav-wrapper-9k2m');
            
            if (!document.querySelector('.mobile-toggle-btn')) {
                const toggleBtn = document.createElement('button');
                toggleBtn.className = 'mobile-toggle-btn';
                toggleBtn.innerHTML = '☰';
                toggleBtn.style.cssText = `
                    background: none;
                    border: none;
                    color: white;
                    font-size: 1.5rem;
                    cursor: pointer;
                    display: block;
                `;
                
                toggleBtn.addEventListener('click', () => {
                    if (navMenu.style.display === 'flex') {
                        navMenu.style.display = 'none';
                    } else {
                        navMenu.style.display = 'flex';
                        navMenu.style.flexDirection = 'column';
                        navMenu.style.position = 'absolute';
                        navMenu.style.top = '100%';
                        navMenu.style.left = '0';
                        navMenu.style.width = '100%';
                        navMenu.style.background = '#2c3e50';
                        navMenu.style.padding = '1rem';
                    }
                });
                
                navWrapper.appendChild(toggleBtn);
            }
        }
    };

    window.addEventListener('resize', createMobileMenu);
    createMobileMenu();
</script>

<a href="/" alt="free web tracker" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="free web tracker" border="0">
    
</body> 
</html>




