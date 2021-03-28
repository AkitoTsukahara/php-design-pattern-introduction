Iteratorパターンはオブジェクトの振る舞いに注目したパターンで、利用者にリストの内部構造を隠したまま、 それぞれの要素にアクセスさせるためのAPIを提供することを目的としています。
> 集約オブジェクトが基にある内部表現を公開せずに、その要素に順にアクセスする方法を提供する。

```mermaid
classDiagram

class Aggregate{
    CreateIterator()
}

class ConcreteAggregate{
    CreateIterator()
}

class ConcreteIterator{
    aggregate
    First()
    Next()
    isDone()
    CurrnetItem()
}

class Iterator{
    First()
    Next()
    isDone()
    CurrnetItem()
}

class Client{
    
}

Aggregate o-- ConcreteAggregate
ConcreteAggregate <--o ConcreteIterator
Iterator .. Client
Aggregate .. Client
Iterator <-- ConcreteIterator
