# Projek
```dart
void main() {
  // 1. Operator
  int a = 10;
  int b = 20;
  print('Hasil Penjumlahan: ${a + b}'); // Operator Penjumlahan
  print('Hasil Pengurangan: ${b - a}'); // Operator Pengurangan

  // 2. Map, List, dan Set
  Map<String, int> ages = {
    'Taufik': 18,
    'Asep': 17,
    'Zhafran': 17,
  };

  List<String> names = ['Taufik', 'Asep', 'Zhafran'];
  Set<int> uniqueNumbers = {1, 2, 3, 4, 5};

  print('Map Ages: $ages');
  print('List Names: $names');
  print('Set Unique Numbers: $uniqueNumbers');

  // 3. Percabangan (if-else)
  String checkName(String name) {
    if (names.contains(name)) {
      return 'Name found in the list!';
    } else {
      return 'Name not found in the list.';
    }
  }
  print(checkName('Taufik'));
  print(checkName('Asep'));

  // 4. Perulangan (for, while)
  print('Looping through names:');
  for (var name in names) {
    print(name);
  }

  int index = 0;
  while (index < uniqueNumbers.length) {
    print('Unique number: ${uniqueNumbers.elementAt(index)}');
    index++;
  }

  // 5. Function with parameters and optional parameters
  int addNumbers(int x, int y, [int? z]) {
    return (z != null) ? x + y + z : x + y;
  }
  print('Sum with optional parameter: ${addNumbers(5, 10, 15)}');
  print('Sum without optional parameter: ${addNumbers(5, 10)}');

  // 6. Inner function
  int multiply(int a, int b) {
    int innerMultiply(int x, int y) {
      return x * y;
    }
    return innerMultiply(a, b);
  }
  print('Multiplication result: ${multiply(4, 5)}');

  // 7. Anonymous function
  List<int> numbers = [1, 2, 3, 4, 5];
  var doubledNumbers = numbers.map((num) => num * 2).toList();
  print('Doubled numbers: $doubledNumbers');

  // 8. Closure
  Function makeMultiplier(int multiplier) {
    return (int value) => value * multiplier;
  }

  var multiplyByThree = makeMultiplier(3);
  print('Multiply 7 by 3: ${multiplyByThree(7)}');
}
```