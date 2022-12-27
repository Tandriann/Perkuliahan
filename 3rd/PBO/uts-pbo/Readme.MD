# UTS Pemrogramab Berorientasi Objek

# No.1. Paradigma Pemrograman & Pemrograman berorientasi objek

Paradigma pemrograman

merupakan gaya, klasifikasi, dan pendekatan dalam penulisan program untuk memecahkan masalah dengan menggunakan bahasa pemrograman yang digunakan.

Jenis Paradigma Pemrograman :

1. Pemrograman Fungsional
   adalah bahasa pemrograman dengan pemanggilan fungsi dimana setiap bagian program dapat dipahami sebagai suatu fungsi.
   Contoh bahasa: LISP, Haskell

2. Pemograman Prosedural/Iteratif
   adalah sebuah paradigma pemrograman, yang penamaannya diambil dari pemrograman imperatif berdasarkan konsep pemanggilan prosedur.
   Contoh bahasa: Pascal, C

3. Pemograman Berorientasi Objek
   adalah paradigma pemrograman berdasarkan konsep "objek", yang dapat berisi data, dalam bentuk field atau dikenal juga sebagai atribut; serta kode, dalam bentuk fungsi/prosedur atau dikenal juga sebagai method. Semua data dan fungsi di dalam paradigma ini dibungkus dalam kelas-kelas atau objek-objek.
   Contoh bahasa: C++, Java, PHP

4. Pemograman Deklaratif
   adalah paradigma pemrograman yang menjabarkan fakta-fakta atau rules dari representatif masalah atau studi kasusnya.
   Contoh bahasa: Prolog

Pemrograman berorientasi objek.

object-oriented programming disingkat OOP, merupakan paradigma pemrograman berdasarkan konsep "objek", yang dapat berisi data, dalam bentuk field atau dikenal juga sebagai atribut; serta kode, dalam bentuk fungsi/prosedur atau dikenal juga sebagai method. Semua data dan fungsi di dalam paradigma ini dibungkus dalam kelas-kelas atau objek-objek. Bandingkan dengan logika pemrograman terstruktur. Setiap objek dapat menerima pesan, memproses data, dan mengirim pesan ke objek lainnya,
Model data berorientasi objek dikatakan dapat memberi fleksibilitas yang lebih, kemudahan mengubah program, dan digunakan luas dalam teknik peranti lunak skala besar. Lebih jauh lagi, pendukung OOP mengklaim bahwa OOP lebih mudah dipelajari bagi pemula dibanding dengan pendekatan sebelumnya, dan pendekatan OOP lebih mudah dikembangkan dan dirawat.

# No.2. Program seperti sesuaikan dengan nim dan nama anda

Input Nama dan Nim
![nma](https://user-images.githubusercontent.com/103293617/200386143-d5d0c019-3fee-4d4f-8e30-dccfbf2aa1cc.png)

# No.3. Perbedaan looping dengan continue dan break

Perbedaan utama dari break dan continue adalah jika break akan menghentikan perulangan secara total, sedangkan continue hanya akan lompat ke iterasi selanjutnya. Ketika dipanggil, keduanya sama-sama akan mengabaikan semua perintah yang ada di bawahnya.
A. continue
![continue](https://user-images.githubusercontent.com/103293617/200386502-48a89a95-91d7-4266-93bc-5b49a92fbdda.png)

perhatikan outputnya, huruf h tidak dicetak. Kira-kira kenapa?

Hal ini disebabkan karena pemanggilan perintah continue. Jadi ketika kita memasuki kondisi dimana val sama dengan h, maka perintah continue akan dijalankan. Pemanggilan ini akan menyebabkan iterasi berlanjut ke nilai val selanjutnya secara tiba-tiba. Oleh karena itu semua perintah dibawahnya (dalam hal ini print) tidak akan dieksekusi sehingga huruf h tidak dicetak.

B. Break

![break](https://user-images.githubusercontent.com/103293617/200386551-269beed3-dcb7-4449-8200-591753e4061d.png)

Bisa dilihat ya, angka yang seharunya dicetak bahasa sekarang hanya menjadi ba saja. Hal ini disebabkan oleh pemanggilan break statement ketika nilai val sama dengan h. break dipanggil maka perintah dibawahnya tidak akan dieksekusi. Bukan hanya itu saja, perulangan juga dianggap selesai.

# No.4. Program sederhana seperti dibawah ini dengan rumus ppn 10/100 dari total harga input

![koko](https://user-images.githubusercontent.com/103293617/200396258-217293ae-0e1c-4cd2-adb5-3d18cb9de7c6.png)

# No.5. Buatlah dengan class dan definition terkait inputan jam, menit, detik yang dimana jam hanya bisa 24, menit 60, detik 60

![koo](https://user-images.githubusercontent.com/103293617/200396329-54d189f0-7d67-49e4-b29e-98b5dd9a9bac.png)
