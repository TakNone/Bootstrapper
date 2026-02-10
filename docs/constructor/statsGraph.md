# statsGraph

**Description** : *Channel statistics graph*

**Layer** : 222

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
		data : '0XDwAfciae9H2ju5',
	),
	zoom_token : 'XnhfAixwgopyPCOs',
);
```