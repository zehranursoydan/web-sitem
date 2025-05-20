<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Zehra Nur SOYDAN - Kişisel Web Sayfam</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #f5f5f5;
      color: #333;
      transition: background 0.3s, color 0.3s;
    }

    .dark-mode {
      background-color: #1c1c1c;
      color: #eee;
    }

    header {
      text-align: center;
      padding: 40px;
    }

    .profile-img {
      width: 150px;
      height: 150px;
      border-radius: 100px;
      border: 3px solid #3498db;
    }

    .social-links a {
      margin: 0 10px;
      text-decoration: none;
      color: #3498db;
      font-weight: bold;
    }

    main {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }

    form input, form textarea {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    form button {
      background: #3498db;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: #ddd;
    }
  </style>
</head>
<body>
  <header>
    <img src="profil.jpg" alt="Profil Fotoğrafı" class="profile-img">
    <h1>Zehra Nur SOYDAN</h1>
    <p>Bilgisayar Mühendisliği Öğrencisi | Geliştirici</p>
    <div class="social-links">
      <a href="www.linkedin.com/in/zehranursoydan" target="_blank">LinkedIn</a>
    </div>
    <button onclick="toggleTheme()">🌗 Tema Değiştir</button>
  </header>

  <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);

        $to = "zehranursoydaan@gmail.com";
        $subject = "Yeni Mesaj: $name";
        $body = "Ad: $name\nE-posta: $email\nMesaj:\n$message";

        if (mail($to, $subject, $body)) {
          echo "<p style='color:green;'>Mesajınız başarıyla gönderildi.</p>";
        } else {
          echo "<p style='color:red;'>Mesaj gönderilirken bir hata oluştu.</p>";
        }
      }
      ?>

  <main>
    <section>
      <h2>Hakkımda</h2>
      <p>Ben Zehra, Karabük Üniversitesi Bilgisayar Mühendisliği 2. sınıf öğrencisiyim. Unity, C, HTML/CSS gibi teknolojilerle ilgileniyorum. Yenilikçi projeler üretmeyi ve sürekli öğrenmeyi seviyorum.</p>
    </section>

    <section>
      <h2>Becerilerim</h2>
      <ul>
        <li>HTML / CSS / JS</li>
        <li>C, Python</li>
        <li>Unity & C#</li>
        <li>Siber Güvenlik</li>
      </ul>
    </section>

    <section>
      <h2>İletişim</h2>
      <form action="#iletisim" method="POST">
        <input type="text" name="name" placeholder="Adınız" required>
        <input type="email" name="email" placeholder="E-posta" required>
        <textarea name="message" placeholder="Mesajınız" required></textarea>
        <button type="submit">Gönder</button>
      </form>

      
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Zehra Nur SOYDAN. Tüm hakları saklıdır.</p>
  </footer>

  <script>
    function toggleTheme() {
      document.body.classList.toggle("dark-mode");
    }
  </script>
</body>
</html>