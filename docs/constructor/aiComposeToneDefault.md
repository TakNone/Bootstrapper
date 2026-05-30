# aiComposeToneDefault

**Layer** : 225

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
	tone : '6Gqr9jF5nUbfJVKy',
	emoji_id : 6225916896559683451,
	title : 'mi40j12gSGdOETlq',
);
```