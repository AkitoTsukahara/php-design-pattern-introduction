Singletonパターンはオブジェクトの生成に関連するパターンで、生成されるインスタンスの数を制限することを目的としています。
GoF本では、Singletonパターンの目的は次の様に定義されています。
> あるクラスに対してインスタンスが１つしか存在しないことを保証し、それにアクセスするためのグローバルな方法を提供する。

### メリット
- インスタンスへのアクセスを制御する
- インスタンスの数を変えることができる

```mermaid
classDiagram
class AbstractClass{
    - instance:Singleton
    - __construct()
    + GetSingleton():Singleton
}