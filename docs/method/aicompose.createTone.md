# aicompose.createTone

**Layer** : 225

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
	emoji_id : -779177258905784126,
	title : 'DfKHj9xrYiOTLtC7',
	prompt : 'jidLuzZPFUQm7YJy',
);
```