# aiComposeToneDefault

**Layer** : 227

```tl
aiComposeToneDefault#9bad6414 tone:string emoji_id:long title:string = AiComposeTone;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>tone</mark> | [`string`](type/string) | NOTHING |
| <mark>emoji_id</mark> | [`long`](type/long) | NOTHING |
| <mark>title</mark> | [`string`](type/string) | NOTHING |

---

## Type

[AiComposeTone](type/AiComposeTone)

---

## Example

```php
$aiComposeTone = $client->aiComposeToneDefault(
	tone : 'FNlt8WZzTrc6iveK',
	emoji_id : 8092605082122496573,
	title : 'vSZ1gktdnx0q2Vyj',
);
```