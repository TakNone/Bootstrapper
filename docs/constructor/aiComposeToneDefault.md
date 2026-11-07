# aiComposeToneDefault

**Description** : *A built\-in, default AI composer tone &raquo;, identified by a string identifier rather than by a numeric ID*

**Layer** : 233

```tl
aiComposeToneDefault#9bad6414 tone:string emoji_id:long title:string = AiComposeTone;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>tone</mark> | [`string`](type/string) | String identifier of the built-in tone, to be passed to inputAiComposeToneDefault |
| <mark>emoji_id</mark> | [`long`](type/long) | Custom emoji ID of the tone's icon |
| <mark>title</mark> | [`string`](type/string) | Localized, human-readable name of the tone |

---

## Type

[AiComposeTone](type/AiComposeTone)

---

## Example

```php
$aiComposeTone = $client->aiComposeToneDefault(
	tone : '3oPtXzqZrJjm4OCv',
	emoji_id : -1632551395181095442,
	title : 'dxyQekPmMwVLJ3li',
);
```