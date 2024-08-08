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
        print('perulangan');
     }
}
```
### Penjelasan
Kode tersebut disebut perulangan tanpa henti atau _infinite loop_ karena loop `for` yang digunakan tidak memiliki kondisi yang membatasi eksekusinya.

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
- Begitu `counter` melebihi 10, kondisi `counter <= 10` menjadi `false`, dan loop berhenti.

Dengan menggunakan kondisi, kamu memiliki kontrol lebih besar atas berapa lama loop akan terus berjalan.

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
Kode ini disebut _perulangan dengan init statement_ karena bagian inisialisasi (`var counter = 1`) dilakukan di awal header loop `for`, sementara bagian pembaruan (`counter++`) diletakkan di dalam tubuh loop.

## Perulangan Dengan Post Statemen
```dart
void main(){
for (var counter = 1; counter <= 10; counter++){
         print('perulangan ke-$counter');
         
     }
}
```

### Penjelasan
**kode ini disebut perulangan dengan post statement** karena bagian `counter++` adalah pembaruan variabel yang dilakukan setelah setiap iterasi tubuh loop, bukan inisialisasi yang dilakukan hanya sekali sebelum loop dimulai.

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
**Hasil**: Loop `do-while` hanya mencetak "perulangan ke-100" sekali, karena kondisi loop tidak pernah benar setelah iterasi pertama.


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
**Loop `while (true)`**:

- Loop ini dirancang untuk berjalan selamanya, tetapi dalam kode ini, `break` digunakan untuk menghentikan loop saat `counter` lebih besar dari 5.

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
oid main(){
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
   var array = <String>['fatir', 'ardi', 'taufik', 'daud'];

  for (var value in array) {
    print(value);
  }
}
```

#### Penjelasan
kalau menggunakan`for-in` Mengiterasi elemen secara langsung tanpa perlu indeks.
