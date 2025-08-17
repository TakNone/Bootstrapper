# StatsGraph

**Description** : *Channel statistics graph*

**Layer** : 211

```tl
statsGraphAsync#4a27eb2d token:string = StatsGraph;
statsGraphError#bedc9822 error:string = StatsGraph;
statsGraph#8ea464b6 flags:# json:DataJSON zoom_token:flags.0?string = StatsGraph;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**statsGraphAsync**](constructor/statsGraphAsync) | This channel statistics graph must be generated asynchronously using stats.loadAsyncGraph to reduce server load |
| [**statsGraphError**](constructor/statsGraphError) | An error occurred while generating the statistics graph |
| [**statsGraph**](constructor/statsGraph) | Channel statistics graph |