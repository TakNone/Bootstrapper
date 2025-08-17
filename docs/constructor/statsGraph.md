# statsGraph

**Description** : *Channel statistics graph*

**Layer** : 211

```tl
statsGraph#8ea464b6 flags:# json:DataJSON zoom_token:flags.0?string = StatsGraph;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
		data : 'MdASBaD3yvKTHN2F',
	),
	zoom_token : 'OM4fE3GDnb86J9pT',
);
```