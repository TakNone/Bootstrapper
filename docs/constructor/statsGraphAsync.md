# statsGraphAsync

**Description** : *This channel statistics graph must be generated asynchronously using stats\.loadAsyncGraph to reduce server load*

**Layer** : 218

```tl
statsGraphAsync#4a27eb2d token:string = StatsGraph;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>token</mark> | [`string`](type/string) | Token to use for fetching the async graph |

---

## Type

[StatsGraph](type/StatsGraph)

---

## Example

```php
$statsGraph = $client->statsGraphAsync(
	token : 'cD5fyYMVPmuQN4C0',
);
```