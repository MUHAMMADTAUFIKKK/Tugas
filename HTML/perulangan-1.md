# Perulangan
Perulangan, dalam konteks pemrograman, adalah mekanisme yang memungkinkan eksekusi blok kode secara berulang kali selama kondisi tertentu terpenuhi. Ini sangat berguna untuk mengotomatisasi tugas-tugas yang berulang dan mengelola data yang banyak secara efisien.

# Perulangan for Loop
Perulangan `for` adalah struktur dalam pemrograman yang digunakan untuk mengulang serangkaian perintah beberapa kali, biasanya dengan variasi nilai tertentu setiap kali perulangan. Perulangan ini sangat berguna ketika kamu ingin melakukan tugas yang sama berulang kali tetapi dengan data yang berbeda.

- For adalah salah satu kata kunci yang bisa digunakan untuk melakukan perulangan.
- Blok kode yang terdapat di dalam for akan selalu diulangi selama kondisi for terpenuhi.

## Perulangan Tanpa Henti
```dart
void main() {
 for (;;){
        print('perulangan ');
     }
}
```
### Penjelasan
Program ini mencetak `'perulangan '` berulang-ulang tanpa henti karena menggunakan loop tak terbatas (`for (;;)`), yang berarti bahwa loop tersebut tidak akan pernah berhenti kecuali dihentikan secara eksternal (misalnya dengan menghentikan eksekusi program atau menambahkan perintah `break` di dalam loop).
## Perulangan Dengan Kondisi
```dart
void main(){
	var counter = 1;

     for (; counter <= 10;){
         print('perulangan ke-$counter');
         counter++;
     }
}
```

### Penjelasan
Program ini akan mencetak "perulangan ke-1", "perulangan ke-2", dan seterusnya hingga "perulangan ke-10". Loop berhenti setelah nilai `counter` lebih besar dari `10`, karena kondisi `counter <= 10` tidak lagi terpenuhi. Loop ini efektif mencetak nilai `counter` dari `1` hingga `10` secara berurutan.
Dengan menggunakan kondisi, kita memiliki kontrol lebih besar atas berapa lama loop akan terus berjalan

## Perulangan Dengan Init Statement

```dart
void main(){
 for (var counter =1; counter<=10;){
      print('perulangan ke-$counter');
      counter++;
    }
}
```
### Penjelasan
Program ini mencetak "perulangan ke-1", "perulangan ke-2", dan seterusnya hingga "perulangan ke-10". Loop berhenti setelah nilai `counter` lebih besar dari `10`, karena kondisi `counter <= 10` tidak lagi terpenuhi. Meskipun tidak ada bagian increment dalam definisi loop `for`, increment dilakukan di dalam tubuh loop, memastikan bahwa nilai `counter` bertambah setiap kali loop dieksekusi.

## Perulangan Dengan Post Statemen
```dart
void main(){
for (var counter = 1; counter <= 10; counter++){
         print('perulangan ke-$counter');
         
     }
}
```
### Penjelasan
Kode ini lebih ringkas karena semua elemen loop (`inialisasi`, `kondisi`, dan `increment`) didefinisikan dalam satu pernyataan `for`. Ini memudahkan pembacaan dan pemeliharaan kode.

## While Loop
Di while loop, hanya terdapat kondisi perulangan, tanpa ada init statement dan post statement.

```dart
void main(){
 var counter = 1;

    while ( counter <= 5){
    print('perulangan ke-$counter');
	counter++;
     }
}
```
### Penjelasan

- _While loop_ dinamakan demikian karena ia terus berlanjut "selama" kondisi yang diberikan tetap benar.
- Ini berbeda dari loop jenis lain (seperti _for loop_), di mana inisialisasi, kondisi, dan pembaruan dilakukan dalam satu baris, sementara _while loop_ hanya fokus pada kondisi dan tindakan di dalam loop.

## Do While Loop
```dart
void main(){
var counter = 100;

      do {
         print('perulangan ke-$counter');
         counter++;
      }while (counter <= 10);
}
```
### Penjelasan
 `do-while loop`   hanya mencetak "perulangan ke-100" sekali, karena kondisi loop tidak pernah benar setelah iterasi pertama.


## Break & Continue

### Break
```dart
void main(){
 var counter = 1;

      while (true) {
          print('perulangan ke-$counter');
          counter++;

          if (counter > 5){
           break;
          }
      }
}
```
#### Penjelasan
- **Inisialisasi**: Variabel `counter` diatur menjadi `1`.
- **Loop `while (true)`**: Loop ini akan terus berjalan tanpa henti.
- **Tindakan**: Mencetak nilai dari `counter` dan kemudian menambah `counter` sebanyak 1.
- **Kondisi `if (counter > 5)`**: Setelah `counter` lebih besar dari `5`, kondisi ini terpenuhi dan perintah `break` akan menghentikan loop.
- Loop ini sebenarnya dirancang untuk berjalan selamanya, tetapi dalam kode ini, `break` digunakan untuk menghentikan loop saat `counter` lebih besar dari 5.

#### Continue
```dart
void main(){
 for (var counter = 1; counter <= 100; counter++){
      if (counter % 2 == 0){
        continue;
      }
      print('perulangan ganjil-$counter');
    }
}
```

#### Penjelasan
- Bilangan genap diabaikan dengan `continue` dan tidak dicetak.
- Hanya bilangan ganjil yang dicetak, sehingga Anda akan melihat output "perulangan ganjil-" diikuti oleh bilangan ganjil dari 1 hingga 99.

## For in
### Tanpa For in
```dart
void main(){
 var array = <String>['fatir', 'ardi', 'taufik','daud'];

for (var i = 0; i < array.length; i++) {

print(array[i]);

}
}
```

#### Penjelasan
Kalau Tanpa For in dia Memerlukan indeks untuk mengakses elemen.

### Menggunakan For in
```dart
void main() {
   var array = <String>['fatir', 'daud', 'ardi', 'taufik'];
  for (var value in array) {
    print(value);
  }
}
```
#### Penjelasan
kalau menggunakan`for-in` Mengiterasi elemen secara langsung tanpa perlu indeks.
