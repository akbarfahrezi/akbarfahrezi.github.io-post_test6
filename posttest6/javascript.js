
      function ubahMode(){
         const ubah = document.body;
         ubah.classList.toggle("dark");
      } 
      function rep() {
        document.body.innerHTML =
            document.body.innerHTML
            .replace(/Merupakan Mahasiswa Universitas Mulawarman Jurusan Informatika Angkatan 2021/, "Seorang Mahasiswa Informatika biasa yang belajar di Universitas Mulawarman sejak 2021");
    }

    function changebackground(){
      document.getElementById('kartu').style.backgroundColor = 'grey' ; 
    }
  