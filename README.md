# Elevatus task
### Requirements
1. PHP 7.x
2. Git
3. Composer
---

### Installation steps

---
1.Clone the project
```bash
$ git clone git@github.com:wajdijurry/elevatus.git
```
2.Install dependencies
```bash
$ cd elevatus/app/library
$ composer install
```

---

### Web part
1.Return to project root directory
```bash
$ cd ../../
```
2.Run PHP server
```bash
$ php -S localhost:8000
```
3.Open your browser
```
http://localhost:8000
```
- You should see home page of the project
[Imgur](https://imgur.com/33erBYH)

---
### CLI Part
1.Open a terminal and point to project directory
```bash
$ cd elevatus
```
2.To get Hamming distance, type:
```bash
$ ./run hamming Text1 Text2
```
> Example response:
>```bash
>$ ./run hamming Text1 Text2
>$ 1
>```
3.To get Levenshtein distance, type:
```bash
$ ./run levenshtein Text1 Text2
```
> Example response:
>```bash
>$ ./run levenshtein "Hello World!" "hello world"
>$ 3
>```

---
### Tests
- To run the unit test, just point to the root of project directory and type the following:
```bash
$ ./app/library/vendor/bin/phpunit --bootstrap=./app/import.php ./app/tests
```

---
Done!
