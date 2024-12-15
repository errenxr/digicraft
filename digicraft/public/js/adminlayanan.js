const selectedServices = [
    "Web", "Sosial Media", "Marketing", "Konsultasi", "Analisis Pasar"
];

const servicesContainer = document.getElementById('services-container');
selectedServices.forEach(service => {
    const button = document.createElement('button');
    button.className = 'service-button';
    button.textContent = service;
    button.onclick = () => viewServiceDetail(service);
    servicesContainer.appendChild(button);
});

function goBack() {
    window.location.href = 'previous_page.html';
}

function viewServiceDetail(service) {
    window.location.href = `service_detail.html?service=${encodeURIComponent(service)}`;
}
