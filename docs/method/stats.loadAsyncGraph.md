# stats.loadAsyncGraph

**Description** : *Load channel statistics graph asynchronously*

**Layer** : 218

```tl
stats.loadAsyncGraph#621d5fa0 flags:# token:string x:flags.0?long = StatsGraph;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>token</mark> | [`string`](type/string) | Graph token from statsGraphAsync constructor |
| **x** | [`flags.0?long`](type/long) | Zoom value, if required |

---

## Result

[StatsGraph](type/StatsGraph)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **GRAPH_EXPIRED_RELOAD** | `400` | This graph has expired, please obtain a new graph token |
| **GRAPH_INVALID_RELOAD** | `400` | Invalid graph token provided, please reload the stats and provide the updated token |
| **GRAPH_OUTDATED_RELOAD** | `400` | The graph is outdated, please get a new async token using stats.getBroadcastStats |

---

## Example

```php
$statsGraph = $client->stats->loadAsyncGraph(
	token : '7LdGESnMBW0TsY9J',
	x : 6798328991061565181,
);
```