let currentlyPlaying = null;

// Função para controlar a reprodução de áudio
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
        alert('Por favor, toque no botão novamente para reproduzir o áudio.');
    });
    button.classList.add('active');
    button.innerHTML = '<i class="fas fa-stop"></i>';
    button.closest('.list-group-item').querySelector('.status-dot').classList.add('active');
    currentlyPlaying = button;

    audioPlayer.onended = () => resetAudioState(button);
}

// Função para resetar o estado do áudio
function resetAudioState(button) {
    button.classList.remove('active');
    button.innerHTML = '<i class="fas fa-play"></i>';
    button.closest('.list-group-item').querySelector('.status-dot').classList.remove('active');
    currentlyPlaying = null;
}

// Função para gerar CPF
function generateCPF() {
    let numbers = Array.from({ length: 9 }, () => Math.floor(Math.random() * 10)).join('');
    numbers += calculateDigit(numbers, 10);
    numbers += calculateDigit(numbers, 11);
    document.getElementById('cpf-output').value = formatCPF(numbers);
}

// Função para gerar CNPJ
function generateCNPJ() {
    let numbers = Array.from({ length: 12 }, () => Math.floor(Math.random() * 10)).join('');
    numbers += calculateDigit(numbers, 5);
    numbers += calculateDigit(numbers, 6);
    document.getElementById('cnpj-output').value = formatCNPJ(numbers);
}

// Função para calcular dígitos verificadores
function calculateDigit(numbers, startWeight) {
    let sum = numbers.split('').reduce((acc, num, index) => acc + num * (startWeight - index), 0);
    let digit = 11 - (sum % 11);
    return digit > 9 ? 0 : digit;
}

// Função para formatar CPF
function formatCPF(cpf) {
    return cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
}

// Função para formatar CNPJ
function formatCNPJ(cnpj) {
    return cnpj.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, '$1.$2.$3/$4-$5');
}

// Função para gerar senha
function generatePassword() {
    const length = 16;
    const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
    const password = Array.from({ length }, () => 
        charset.charAt(Math.floor(Math.random() * charset.length))
    ).join('');
    document.getElementById('password-output').value = password;
}

// Função para copiar texto para a área de transferência
async function copyToClipboard(elementId) {
    const element = document.getElementById(elementId);
    const text = element.value;
    try {
        if (navigator.clipboard) {
            await navigator.clipboard.writeText(text);
            showTemporaryMessage(element, 'Copied!');
        } else {
            // Fallback para dispositivos que não suportam a API de clipboard
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

// Função para mostrar uma mensagem temporária
function showTemporaryMessage(element, message, duration = 1000) {
    const originalValue = element.value;
    element.value = message;
    setTimeout(() => (element.value = originalValue), duration);
}

// Função para gerar número de telefone
function generatePhone() {
    const ddd = document.getElementById('phone-state').value;
    const isMobile = Math.random() < 0.8;
    const firstDigit = isMobile ? '9' : Math.floor(Math.random() * 5) + 2;
    const number = firstDigit + Array.from({ length: 7 }, () => Math.floor(Math.random() * 10)).join('');
    const formattedPhone = `(${ddd}) ${number.slice(0, isMobile ? 5 : 4)}-${number.slice(isMobile ? 5 : 4)}`;
    document.getElementById('phone-output').value = formattedPhone;
}

// Função para abrir o WhatsApp
function openWhatsApp() {
    const number = document.getElementById('whatsapp-number').value.replace(/\D/g, '');
    if (number) {
        window.open(`https://wa.me/${encodeURIComponent(number)}`, '_blank');
    } else {
        alert('Por favor, insira um número válido do WhatsApp.');
    }
}

// Função para abrir o YouTube
function openYouTube(event) {
    event.preventDefault();
    const searchQuery = document.getElementById('youtube-search').value.trim();
    const url = searchQuery ? `https://youtube.com/results?search_query=${encodeURIComponent(searchQuery)}` : 'https://youtube.com';
    window.open(url, '_blank');
}

// Função para gerar QR Code
function generateQR() {
    const type = document.getElementById('qrType').value;
    const qrResult = document.getElementById('qrResult');
    let data = '';

    switch(type) {
        case 'wifi':
            const ssid = document.getElementById('ssid').value;
            const password = document.getElementById('wifiPassword').value;
            if (!ssid || !password) {
                qrResult.innerHTML = '<p class="text-danger">Por favor, preencha todos os campos</p>';
                return;
            }
            data = `WIFI:S:${ssid};T:WPA;P:${password};;`;
            break;
        case 'tel':
            const tel = document.getElementById('tel').value;
            if (!tel) {
                qrResult.innerHTML = '<p class="text-danger">Por favor, insira um número de telefone</p>';
                return;
            }
            data = `tel:${tel}`;
            break;
        default:
            data = document.getElementById('text').value;
            if (!data) {
                qrResult.innerHTML = '<p class="text-danger">Por favor, insira um texto ou URL</p>';
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
                <i class="fas fa-exclamation-triangle"></i> Não foi possível gerar o QR code
                <button class="btn btn-sm btn-primary mt-2" onclick="generateQR()">Tentar novamente</button>
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

// Função para atualizar os campos de entrada do QR Code
function updateQRInputs() {
    const container = document.getElementById('qrInputs');
    const type = document.getElementById('qrType').value;
    let html = '';

    switch(type) {
        case 'wifi':
            html = `
                <input type="text" class="form-control mb-2" id="ssid" placeholder="SSID (Nome da Rede)">
                <input type="password" class="form-control mb-2" id="wifiPassword" placeholder="Senha">
            `;
            break;
        case 'tel':
            html = `<input type="tel" class="form-control mb-2" id="tel" placeholder="Número de Telefone">`;
            break;
        default:
            html = `<input type="text" class="form-control mb-2" id="text" placeholder="Texto ou URL">`;
    }

    container.innerHTML = html;
}

// Função para buscar empregos no LinkedIn
function searchLinkedInJobs() {
    const query = document.getElementById('jobSearch').value;
    window.open(`https://www.linkedin.com/jobs/search/?keywords=${encodeURIComponent(query)}`, '_blank');
}

// Função para buscar produtos em marketplaces
function searchProduct() {
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

// Inicialização ao carregar a página
window.onload = function() {
    ['generateCPF', 'generateCNPJ', 'generatePassword', 'generatePhone'].forEach(fn => window[fn]());
    if (typeof(Storage) !== "undefined" && !localStorage.getItem('cookieConsent')) {
        document.getElementById('cookie-consent').style.display = 'block';
    }

    // Adiciona suporte para eventos de toque
    document.querySelectorAll('.btn').forEach(button => {
        button.addEventListener('touchstart', function(e) {
            e.preventDefault();
            this.click();
        }, { passive: false });
    });

    // Inicializa os campos de entrada do QR Code
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

// Função para lidar com o consentimento de cookies
function handleCookies(consent) {
    if (typeof(Storage) !== "undefined") {
        localStorage.setItem('cookieConsent', consent ? 'accepted' : 'declined');
    }
    document.getElementById('cookie-consent').style.display = 'none';
}

function acceptCookies() {
    handleCookies(true); // Aceita os cookies
}


function declineCookies() {
    handleCookies(false); // Recusa os cookies
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
                    <i class="fas fa-sync-alt"></i> Atualizar
                </button>`;
        })
        .catch(() => {
            ipDiv.innerHTML = `
                <div class="alert alert-warning mb-3">
                    <i class="fas fa-exclamation-triangle"></i> Não foi possível obter o IP
                </div>
                <button class="btn btn-primary" onclick="checkPublicIP()">
                    <i class="fas fa-sync-alt"></i> Tentar Novamente
                </button>`;
        });
}

