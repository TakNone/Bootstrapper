# statsGraph

**Description** : *Channel statistics graph*

**Layer** : 218

```tl
statsGraph#8ea464b6 flags:# json:DataJSON zoom_token:flags.0?string = StatsGraph;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>json</mark> | [`DataJSON`](type/DataJSON) | Statistics data |
| **zoom_token** | [`flags.0?string`](type/string) | Zoom token |

---

## Type

[StatsGraph](type/StatsGraph)

---

## Example

```php
$statsGraph = $client->statsGraph(
	json : $client->dataJSON(
		data : 'eIoLwD3mrAvVsS0u',
	),
	zoom_token : 'sG9qHC063faMjNrc',
);
```