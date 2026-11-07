# aicompose.createTone

**Description** : *Create a new custom AI composer tone &raquo;*

**Layer** : 229

```tl
aicompose.createTone#4aa83913 flags:# display_author:flags.0?true emoji_id:long title:string prompt:string = AiComposeTone;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **display_author** | [`flags.0?true`](type/true) | If set, the current user will be publicly credited as the author of the tone |
| <mark>emoji_id</mark> | [`long`](type/long) | Custom emoji ID of the tone's icon |
| <mark>title</mark> | [`string`](type/string) | Human-readable tone name, up to aicompose_tone_title_length_max » UTF-8 characters long |
| <mark>prompt</mark> | [`string`](type/string) | The prompt that describes how the AI should rephrase messages using this tone, up to aicompose_tone_prompt_length_max » UTF-8 characters long |

---

## Result

[AiComposeTone](type/AiComposeTone)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **AICOMPOSE_TONE_TITLE_INVALID** | `400` | The specified tone title is invalid |

---

## Example

```php
$aiComposeTone = $client->aicompose->createTone(
	display_author : true,
	emoji_id : 364374178038954476,
	title : 'lLPzdX7GtuJY1i4r',
	prompt : '1VUxXqKBiIQEJHc6',
);
```