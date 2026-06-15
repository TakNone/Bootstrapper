# aicompose.createTone

**Layer** : 227

```tl
aicompose.createTone#4aa83913 flags:# display_author:flags.0?true emoji_id:long title:string prompt:string = AiComposeTone;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **display_author** | [`flags.0?true`](type/true) | NOTHING |
| <mark>emoji_id</mark> | [`long`](type/long) | NOTHING |
| <mark>title</mark> | [`string`](type/string) | NOTHING |
| <mark>prompt</mark> | [`string`](type/string) | NOTHING |

---

## Result

[AiComposeTone](type/AiComposeTone)

---

## Example

```php
$aiComposeTone = $client->aicompose->createTone(
	display_author : true,
	emoji_id : -6918487077304162121,
	title : 'KLo1H28SnykpJIq5',
	prompt : 'q6EB4YTMlvwFGskt',
);
```