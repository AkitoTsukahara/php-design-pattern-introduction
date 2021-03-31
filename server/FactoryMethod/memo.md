Factory Methodパターンはオブジェクトの生成方法に注目したパターンで、オブジェクトを生成するためのAPIを定義し、クラスの敬承を使って生成されるオブジェクトを切り替えルことを目的としています。
> オブジェクトを生成するときのインターフェースだけを規定して、実際にどのクラスをインスタンス化するかはサブクラスが決めるようにする。
> Factory Methodパターンは、インタスタンス化をサブクラスに任せる。

### メリット
オブジェクトの生成処理と使用処理を分離できる
オブジェクトの利用側とオブジェクトのクラスの結びつきを低くする

### クラス図

```mermaid
classDiagram
class Creator{
    FactoryMethod() Product
}

class ConcreateCreator{
    FactoryMethod() Product
}

Product <-- Creator : creates
Product o-- ConcreateProduct
Creator <-- ConcreateCreator
ConcreateProduct <-- ConcreateCreator : creates
ConcreateCreator .. return_new_ConcreteProduct
```

```mermaid
classDiagram

class Reader{
    <<~interface~>>
    +read()
    +display()
}

class CSVFileReader{
    +read()
    +display()
}

class XMLFileReader{
    +read()
    +display()
}

class ReaderFactory{
    +create()
    -createreader()
}
Reader o-- CSVFileReader:implements
Reader o-- XMLFileReader:implements
CSVFileReader <-- ReaderFactory:creates
XMLFileReader <-- ReaderFactory:creates
ReaderFactory <-- DispMusic3:uses
```
