# php-design-pattern-introduction

```
# 起動するとき
make app
# 止める時
make down 
```

- phpinfo
    - `http://localhost:8080/index.php`
- Iterator
    - `http://localhost:8080/iterator/index.php`
  
- mermaid Class Diagram
  - https://mermaid-js.github.io/mermaid/#/classDiagram
  
|  可視性  |  意味  |
| ---- | ---- |
| + | public : 全てにおいて参照可能 |
| - | privaet : 自クラスでのみ参照可能 |
| # | protecyed : 自クラス及びその派生クラスにおいて参照可能 |
| ~ | package : 同パッケージで参照可能 |

|  関係  |  線形  |
| ---- | ---- |
| 継承（Inheritance） | <|-- |
| 関連（association） | <-- |
| 集約（aggregation） | o-- |
| コンポジション（composition） | *-- |
| 依存（dependency） | <.. |
| 汎化（generalization） | .. |
| 実現（realization） | <|.. |

