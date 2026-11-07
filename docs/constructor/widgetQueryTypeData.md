# widgetQueryTypeData

**Layer** : 233

```tl
widgetQueryTypeData#16d8cf0b flags:# with_wallet:flags.0?true = WidgetQueryType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **with_wallet** | [`flags.0?true`](type/true) | NOTHING |

---

## Type

[WidgetQueryType](type/WidgetQueryType)

---

## Example

```php
$widgetQueryType = $client->widgetQueryTypeData(
	with_wallet : true,
);
```