// Burger menu sudah ada
const burger = document.getElementById('burger');
const menu = document.getElementById('menu');

burger.addEventListener('click', () => {
    menu.classList.toggle('active');
    if (menu.classList.contains('active')) {
        burger.src = "../svg/close.svg";
    } else {
        burger.src = "../svg/menu.svg";
    }
});

// === Tambahan script untuk dropdown mobile ===
const dropdowns = document.querySelectorAll('.dropdown');

// Deteksi apakah sedang mode mobile (menu aktif)
dropdowns.forEach(drop => {
    const dropBtn = drop.querySelector('.dropbtn');
    dropBtn.addEventListener('click', function(e) {
        if (window.innerWidth <= 768) { // hanya untuk mobile
            e.preventDefault();
            e.stopPropagation();
            drop.classList.toggle('active');

            // Tutup dropdown lain
            dropdowns.forEach(other => {
                if (other !== drop) {
                    other.classList.remove('active');
                }
            });
        }
    });

    // Tambahan: Buka/tutup lewat arrow di sidebar
    const arrow = drop.querySelector('.arrow');
    if (arrow) {
        arrow.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            drop.classList.toggle('active');

            // Tutup dropdown lain
            dropdowns.forEach(other => {
                if (other !== drop) {
                    other.classList.remove('active');
                }
            });
        });
    }
});

// Tutup semua dropdown saat klik di luar
document.addEventListener('click', function(e) {
    if (window.innerWidth <= 768) {
        dropdowns.forEach(drop => drop.classList.remove('active'));
    }
});

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Add some interactive effects
        document.addEventListener('mousemove', (e) => {
            const circles = document.querySelectorAll('.circle');
            const mouseX = e.clientX / window.innerWidth;
            const mouseY = e.clientY / window.innerHeight;
            
            circles.forEach((circle, index) => {
                const speed = (index + 1) * 0.02;
                const x = mouseX * speed * 50;
                const y = mouseY * speed * 50;
                circle.style.transform = `translate(${x}px, ${y}px)`;
            });
        });

        // Animation hebat
         const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1
  });

  document.querySelectorAll('.fade-in-up').forEach(el => {
    observer.observe(el);
  });

  document.addEventListener("DOMContentLoaded", function () {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("show");
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.1,
      }
    );

    document.querySelectorAll('.hidden').forEach((el) => observer.observe(el));
  });

  // Event Organizer
  function addEvent() {
  const title = document.getElementById("newEventTitle").value;
  const desc = document.getElementById("newEventDesc").value;
  const img = document.getElementById("newEventImg").value;

  fetch("/event", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
    },
    body: JSON.stringify({ title, desc, img })
  })
    .then(response => response.json())
    .then(data => {
      console.log(data);
      loadEvents(); // muat ulang galeri tanpa reload
    });
}

function deleteEvent(id) {
  fetch(`/event/${id}`, {
    method: "DELETE",
    headers: {
      "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
    }
  })
    .then(res => res.json())
    .then(() => loadEvents());
}

function loadEvents() {
  fetch("/api/events")
    .then(res => res.json())
    .then(data => renderEvents(data));
}

fetch('/api/events', {
  method: 'DELETE',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({
    ids: [1, 2, 3] // ID event yang ingin dihapus serentak
  })
})
.then(res => res.json())
.then(data => {
  console.log(data.message);
});

  function deleteSingleEvent(id) {
    if (confirm("Yakin ingin menghapus event ini?")) {
      const form = document.createElement('form');
      form.method = 'POST';
      form.action = `/event/${id}`;
      form.innerHTML = `
        @csrf
        @method('DELETE')
      `;
      document.body.appendChild(form);
      form.submit();
    }
  }

  document.getElementById('checkAll').addEventListener('change', function () {
    const checkboxes = document.querySelectorAll('.event-checkbox');
    checkboxes.forEach(cb => cb.checked = this.checked);
  });

    function deleteSingle(id) {
  if (confirm('Yakin ingin menghapus event ini?')) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    const form = document.createElement('form');
    form.method = 'POST';
    form.action = `/event/${id}`;

    const csrf = document.createElement('input');
    csrf.type = 'hidden';
    csrf.name = '_token';
    csrf.value = csrfToken;

    const method = document.createElement('input');
    method.type = 'hidden';
    method.name = '_method';
    method.value = 'DELETE';

    form.appendChild(csrf);
    form.appendChild(method);
    document.body.appendChild(form);
    form.submit();
  }
}

document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('addEventForm');

  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault(); // 🚫 Cegah reload

      const title = document.getElementById('newEventTitle').value;
      const desc = document.getElementById('newEventDesc').value;
      const img = document.getElementById('newEventImg').value;

      fetch('/event', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({ title, desc, img })
      })
        .then(res => {
          if (!res.ok) throw new Error('Gagal tambah');
          return res.json();
        })
        .then(data => {
          alert('Event berhasil ditambahkan');
          form.reset();
          loadEvents(); // reload event list
        })
        .catch(err => {
          alert('Gagal: ' + err.message);
        });
    });
  }
});

function loadEvents() {
  fetch("/api/events") // pastikan route ini benar
    .then(res => res.json())
    .then(data => renderEvents(data));
}

function renderEvents(events) {
  const container = document.querySelector('.event-gallery');
  container.innerHTML = ''; // kosongkan dulu
  events.forEach(event => {
    const card = document.createElement('div');
    card.className = 'event-card';
    card.innerHTML = `
      <input type="checkbox" name="event_ids[]" value="${event.id}" class="event-checkbox">
      <div class="event-img" style="background-image: url('${event.img}')"></div>
      <div class="event-info">
        <h4>${event.title}</h4>
        <p>${event.desc}</p>
      </div>
      <button onclick="deleteSingle(${event.id})" class="delete-btn">Hapus</button>
    `;
    container.appendChild(card);
  });
}

window.deleteSingle = function(id) {
  if (confirm('Yakin ingin menghapus event ini?')) {
    fetch(`/event/${id}`, {
      method: 'DELETE',
      headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
      }
    })
      .then(res => res.json())
      .then(data => {
        alert(data.message || 'Event berhasil dihapus!');
        loadEvents();
      })
      .catch(err => alert('Gagal hapus: ' + err.message));
  }
};


document.addEventListener('DOMContentLoaded', () => {
  const bulkForm = document.getElementById('bulkDeleteForm');

  bulkForm.addEventListener('submit', function (e) {
    e.preventDefault(); // ⛔ cegah reload

    const checked = [...document.querySelectorAll('.event-checkbox:checked')].map(cb => cb.value);

    if (checked.length === 0) {
      alert('Pilih minimal satu event untuk dihapus.');
      return;
    }

    if (!confirm('Yakin ingin menghapus semua event terpilih?')) return;

    fetch('/events/bulk-delete', {
      method: 'DELETE',
      headers: {
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
        'Accept': 'application/json',
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ event_ids: checked })
    })
    .then(res => {
      if (!res.ok) throw new Error('Gagal menghapus data');
      location.reload(); // atau hapus elemen DOM langsung
    })
    .catch(err => {
      alert('Terjadi kesalahan saat menghapus');
      console.error(err);
    });
  });
});
