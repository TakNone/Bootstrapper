# statsGraphError

**Description** : *An error occurred while generating the statistics graph*

**Layer** : 225

```tl
statsGraphError#bedc9822 error:string = StatsGraph;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>error</mark> | [`string`](type/string) | The error |

---

## Type

[StatsGraph](type/StatsGraph)

---

## Example

```php
$statsGraph = $client->statsGraphError(
	error : 'B7Kn8dJuIN0QejcH',
);
```