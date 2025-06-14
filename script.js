function bacaFile() {
  const fileInput = document.getElementById("fileInput");
  const output = document.getElementById("output");

  if (!fileInput.files.length) {
    output.textContent = "⚠ Belum pilih file!";
    return;
  }

  const file = fileInput.files[0];
  const reader = new FileReader();

  reader.onload = function(e) {
    const kode = e.target.result;
    output.textContent = ""; // Clear output

    const lines = kode.split("\n");
    const variabel = {}; // tempat nyimpen variabel
    let i = 0;

    while (i < lines.length) {
      let line = lines[i].trim();

      // Variabel assignment
      if (line.includes("=")) {
        const [nama, nilai] = line.split("=").map(x => x.trim());
        variabel[nama] = nilai.replace(/"/g, "");
        i++;
        continue;
      }

      // ucap statement
      if (line.startsWith("ucap ")) {
        const raw = line.slice(5).trim();

        if (raw.includes("+")) {
          const parts = raw.split("+").map(p => p.trim().replace(/"/g, ""));
          let hasil = "";
          for (let part of parts) {
            hasil += variabel[part] !== undefined ? variabel[part] : part;
          }
          output.textContent += hasil + "\n";
        } else {
          const isi = raw.replace(/"/g, "");
          output.textContent += (variabel[isi] !== undefined ? variabel[isi] : isi) + "\n";
        }

        i++;
        continue;
      }

      // ulang X kali:
      if (line.startsWith("ulang") && line.includes("kali:")) {
        const jumlah = parseInt(line.split(" ")[1]);

        i++;
        if (i < lines.length) {
          let innerLine = lines[i].trim();
          if (innerLine.startsWith("ucap ")) {
            const raw = innerLine.slice(5).trim();

            for (let j = 0; j < jumlah; j++) {
              if (raw.includes("+")) {
                const parts = raw.split("+").map(p => p.trim().replace(/"/g, ""));
                let hasil = "";
                for (let part of parts) {
                  hasil += variabel[part] !== undefined ? variabel[part] : part;
                }
                output.textContent += hasil + "\n";
              } else {
                const isi = raw.replace(/"/g, "");
                output.textContent += (variabel[isi] !== undefined ? variabel[isi] : isi) + "\n";
              }
            }
          }
        }
        i++;
        continue;
      }

      i++;
    }
  };

  reader.readAsText(file);
}