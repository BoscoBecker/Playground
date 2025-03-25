
let currentlyPlaying = null;
    
    // Function to control audio playback
    function toggleAudio(button) {
    const audioPlayer = document.getElementById('audioPlayer');
    const url = button.dataset.url;
    const buttons = document.querySelectorAll('.play-button');
    const dots = document.querySelectorAll('.status-dot');

    const isSameButton = currentlyPlaying === button;

    buttons.forEach(btn => btn.classList.remove('active'));
    dots.forEach(dot => dot.classList.remove('active'));

    audioPlayer.pause();
    audioPlayer.src = '';

    if (isSameButton) {
        currentlyPlaying = null;
        return;
    }

    audioPlayer.src = url;
    audioPlayer.play().catch(error => {
        console.error('Autoplay was prevented:', error);
        alert('Please press the button again to play the audio.');
    });
    button.classList.add('active');
    button.innerHTML = '<i class="fas fa-stop"></i>';
    button.closest('.list-group-item').querySelector('.status-dot').classList.add('active');
    currentlyPlaying = button;

    audioPlayer.onended = () => resetAudioState(button);
}

// Function to reset audio state
function resetAudioState(button) {
    button.classList.remove('active');
    button.innerHTML = '<i class="fas fa-play"></i>';
    button.closest('.list-group-item').querySelector('.status-dot').classList.remove('active');
    currentlyPlaying = null;
}

// Function to generate CPF
function generateCPF() {
    let numbers = Array.from({ length: 9 }, () => Math.floor(Math.random() * 10)).join('');
    numbers += calculateDigit(numbers, 10);
    numbers += calculateDigit(numbers, 11);
    document.getElementById('cpf-output').value = formatCPF(numbers);
}

// Function to generate CNPJ
function generateCNPJ() {
    let numbers = Array.from({ length: 12 }, () => Math.floor(Math.random() * 10)).join('');
    numbers += calculateDigit(numbers, 5);
    numbers += calculateDigit(numbers, 6);
    document.getElementById('cnpj-output').value = formatCNPJ(numbers);
}

// Function to calculate check digits
function calculateDigit(numbers, startWeight) {
    let sum = numbers.split('').reduce((acc, num, index) => acc + num * (startWeight - index), 0);
    let digit = 11 - (sum % 11);
    return digit > 9 ? 0 : digit;
}

// Function to format CPF
function formatCPF(cpf) {
    return cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
}

// Function to format CNPJ
function formatCNPJ(cnpj) {
    return cnpj.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, '$1.$2.$3/$4-$5');
}

// Function to generate password
function generatePassword() {
    const length = 16;
    const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
    const password = Array.from({ length }, () => 
        charset.charAt(Math.floor(Math.random() * charset.length))
    ).join('');
    document.getElementById('password-output').value = password;
}

// Function to copy text to clipboard
async function copyToClipboard(elementId) {
    const element = document.getElementById(elementId);
    const text = element.value;
    try {
        if (navigator.clipboard) {
            await navigator.clipboard.writeText(text);
            showTemporaryMessage(element, 'Copied!');
        } else {
            // Fallback for devices that do not support the clipboard API
            const tempInput = document.createElement('input');
            tempInput.value = text;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);
            showTemporaryMessage(element, 'Copied!');
        }
    } catch (err) {
        console.error('Failed to copy text:', err);
    }
}

// Function to show a temporary message
function showTemporaryMessage(element, message, duration = 1000) {
    const originalValue = element.value;
    element.value = message;
    setTimeout(() => (element.value = originalValue), duration);
}

// Function to generate phone number
function generatePhone() {
    const ddd = document.getElementById('phone-state').value;
    const isMobile = Math.random() < 0.8;
    const firstDigit = isMobile ? '9' : Math.floor(Math.random() * 5) + 2;
    const number = firstDigit + Array.from({ length: 7 }, () => Math.floor(Math.random() * 10)).join('');
    const formattedPhone = `(${ddd}) ${number.slice(0, isMobile ? 5 : 4)}-${number.slice(isMobile ? 5 : 4)}`;
    document.getElementById('phone-output').value = formattedPhone;
}

// Function to open WhatsApp
// Function to open external links safely
function openExternalLink(url) {
    window.open(url, '_blank');
}

// Example usage in your existing functions
function openWhatsApp() {
    const number = document.getElementById('whatsapp-number').value.replace(/\D/g, '');
    if (number) {
        openExternalLink(`https://wa.me/${encodeURIComponent(number)}`);
    } else {
        alert('Please enter a valid WhatsApp number.');
    }
}

function openYouTube(event) {
    if (!validateInput('youtube-search')) {
        event.preventDefault();
        return;
    }
    event.preventDefault();
    const searchQuery = document.getElementById('youtube-search').value.trim();
    const url = searchQuery ? `https://youtube.com/results?search_query=${encodeURIComponent(searchQuery)}` : 'https://youtube.com';
    openExternalLink(url);
}

// Function to generate QR Code
function generateQR() {
    const type = document.getElementById('qrType').value;
    const qrResult = document.getElementById('qrResult');
    let data = '';

    switch(type) {
        case 'wifi':
            const ssid = document.getElementById('ssid').value;
            const password = document.getElementById('wifiPassword').value;
            if (!ssid || !password) {
                qrResult.innerHTML = '<p class="text-danger">Please fill out all fields</p>';
                return;
            }
            data = `WIFI:S:${ssid};T:WPA;P:${password};;`;
            break;
        case 'tel':
            const tel = document.getElementById('tel').value;
            if (!tel) {
                qrResult.innerHTML = '<p class="text-danger">Please enter a phone number</p>';
                return;
            }
            data = `tel:${tel}`;
            break;
        default:
            data = document.getElementById('text').value;
            if (!data) {
                qrResult.innerHTML = '<p class="text-danger">Please enter text or URL</p>';
                return;
            }
    }

    qrResult.innerHTML = '<div class="spinner-border text-primary" role="status"></div>';

    const qrUrl = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${encodeURIComponent(data)}&cors=true`;
    const img = new Image();
    img.crossOrigin = 'anonymous';

    img.onerror = () => {
        qrResult.innerHTML = `
            <div class="alert alert-warning">
                <i class="fas fa-exclamation-triangle"></i> Unable to generate QR code
                <button class="btn btn-sm btn-primary mt-2" onclick="generateQR()">Try again</button>
            </div>`;
    };

    img.onload = () => {
        qrResult.innerHTML = `
            <div class="qr-container">
                <img src="${qrUrl}" alt="QR Code" class="img-fluid">
                <div class="progress" style="width: 200px; height: 4px;">
                    <div id="countdown-progress" class="progress-bar" style="width: 100%"></div>
                </div>
            </div>`;

        const progressBar = document.getElementById('countdown-progress');
        let width = 100;

        const timer = setInterval(() => {
            width -= 1;
            if (progressBar) {
                progressBar.style.width = width + '%';
            }
            if (width <= 0) {
                clearInterval(timer);
                const qrImage = qrResult.querySelector('.qr-container');
                if (qrImage) {
                    qrImage.classList.add('fade-out');
                    setTimeout(() => {
                        qrResult.innerHTML = '';
                    }, 1000);
                }
            }
        }, 100);
    };

    img.src = qrUrl;
}

// Function to update QR Code input fields
function updateQRInputs() {
    const container = document.getElementById('qrInputs');
    const type = document.getElementById('qrType').value;
    let html = '';

    switch(type) {
        case 'wifi':
            html = `
                <input type="text" class="form-control mb-2" id="ssid" placeholder="SSID (Network Name)">
                <input type="password" class="form-control mb-2" id="wifiPassword" placeholder="Password">
            `;
            break;
        case 'tel':
            html = `<input type="tel" class="form-control mb-2" id="tel" placeholder="Phone Number">`;
            break;
        default:
            html = `<input type="text" class="form-control mb-2" id="text" placeholder="Text or URL">`;
    }

    container.innerHTML = html;
}

// Function to search jobs on LinkedIn
function searchLinkedInJobs() {
    if (!validateInput('jobSearch')) return;    
    const query = document.getElementById('jobSearch').value;
    window.open(`https://www.linkedin.com/jobs/search/?keywords=${encodeURIComponent(query)}`, '_blank');
}

// Function to search products in marketplaces
function searchProduct() {
    if (!validateInput('productSearch')) return;
    const marketplace = document.getElementById('marketplace').value;
    const query = encodeURIComponent(document.getElementById('productSearch').value);
    let url;

    switch(marketplace) {
        case 'mercadolivre':
            url = `https://lista.mercadolivre.com.br/${query}`;
            break;
        case 'magalu':
            url = `https://www.magazineluiza.com.br/busca/${query}`;
            break;
        case 'aliexpress':
            url = `https://www.aliexpress.com/wholesale?SearchText=${query}`;
            break;
        case 'shopee':
            url = `https://shopee.com.br/search?keyword=${query}`;
            break;
        case 'shein':
            url = `https://www.shein.com/pdsearch/${query}`;
            break;
    }

    window.open(url, '_blank');
}


// Initialization on page load
window.onload = function() {
    // Initialize generators
    const themeToggle = document.getElementById('theme-toggle');
    const body = document.body;

    // Check localStorage for theme preference on page load
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        body.classList.add(savedTheme);
        themeToggle.innerHTML = `<i class="fas fa-${savedTheme === 'dark-theme' ? 'sun' : 'moon'}"></i>`;
    }

    generateCPF();
    generateCNPJ();
    generatePassword();
    generatePhone();

    if (typeof(Storage) !== "undefined" && !localStorage.getItem('cookieConsent')) {
        document.getElementById('cookie-consent').style.display = 'block';
    }

    // Add support for touch events
    document.querySelectorAll('.btn').forEach(button => {
        button.addEventListener('touchstart', function(e) {
            e.preventDefault();
            this.click();
        }, { passive: false });
    });

    // Initialize QR Code input fields
    const qrType = document.getElementById('qrType');
    if (qrType) {
        qrType.addEventListener('change', updateQRInputs);
        updateQRInputs();
    }

    const acceptBtn = document.querySelector('[onclick="acceptCookies()"]');
    const declineBtn = document.querySelector('[onclick="declineCookies()"]');
    
    if (acceptBtn) {
        acceptBtn.addEventListener('touchend', acceptCookies, { passive: false });
        acceptBtn.addEventListener('click', acceptCookies);
    }
    
    if (declineBtn) {
        declineBtn.addEventListener('touchend', declineCookies, { passive: false });
        declineBtn.addEventListener('click', declineCookies);
    }

    
};

// Function to handle cookie consent
function handleCookies(consent) {
    if (typeof(Storage) !== "undefined") {
        localStorage.setItem('cookieConsent', consent ? 'accepted' : 'declined');
    }
    document.getElementById('cookie-consent').style.display = 'none';
}

function acceptCookies() {
    handleCookies(true); // Accept cookies
}

function declineCookies() {
    handleCookies(false); // Decline cookies
}

// Function to check public IP
function checkPublicIP() {
    const ipDiv = document.getElementById('publicIP');
    ipDiv.innerHTML = '<div class="spinner-border text-primary" role="status"></div>';
    
    // Array of IP API endpoints for fallback
    const ipApis = [
        'https://api.ipify.org?format=json',
        'https://api.myip.com',
        'https://api.ip.sb/jsonip'
    ];

    // Try each API until one works
    const fetchIP = async () => {
        for (const api of ipApis) {
            try {
                const response = await fetch(api);
                const data = await response.json();
                return data.ip || data.address;
            } catch (err) {
                continue;
            }
        }
        throw new Error('All APIs failed');
    };

    fetchIP()
        .then(ip => {
            ipDiv.innerHTML = `
                <h3 class="mb-3">${ip}</h3>
                <button class="btn btn-primary" onclick="checkPublicIP()">
                    <i class="fas fa-sync-alt"></i> Refresh
                </button>`;
        })
        .catch(() => {
            ipDiv.innerHTML = `
                <div class="alert alert-warning mb-3">
                    <i class="fas fa-exclamation-triangle"></i> Unable to obtain IP
                </div>
                <button class="btn btn-primary" onclick="checkPublicIP()">
                    <i class="fas fa-sync-alt"></i> Try Again
                </button>`;
        });
}

function validateInput(inputId) {
    const inputElement = document.getElementById(inputId);
    if (inputElement.value.trim() === '') {
        alert('Please fill out the search field.');
        return false;
    }
    return true;
}


function setTheme() {
    const body = document.body;
    const themeToggle = document.getElementById('theme-toggle');

    // Toggle the dark-theme class on the body
    body.classList.toggle('dark-theme');
    const isDark = body.classList.contains('dark-theme');

    // Update the theme toggle button icon
    themeToggle.innerHTML = `<i class="fas fa-${isDark ? 'sun' : 'moon'}"></i>`;

    // Save the theme preference in localStorage
    localStorage.setItem('theme', isDark ? 'dark-theme' : '');
}
