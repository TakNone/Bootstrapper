# aicompose.updateTone

**Layer** : 227

```tl
aicompose.updateTone#903bcf59 flags:# tone:InputAiComposeTone display_author:flags.0?Bool emoji_id:flags.1?long title:flags.2?string prompt:flags.3?string = AiComposeTone;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>tone</mark> | [`InputAiComposeTone`](type/InputAiComposeTone) | NOTHING |
| **display_author** | [`flags.0?Bool`](type/Bool) | NOTHING |
| **emoji_id** | [`flags.1?long`](type/long) | NOTHING |
| **title** | [`flags.2?string`](type/string) | NOTHING |
| **prompt** | [`flags.3?string`](type/string) | NOTHING |

---

## Result

[AiComposeTone](type/AiComposeTone)

---

## Example

```php
$aiComposeTone = $client->aicompose->updateTone(
	tone : $client->inputAiComposeToneDefault(
		tone : 'TWlNiSmjBxzZocH4',
	),
	display_author : false,
	emoji_id : -1301407668982409460,
	title : 'P2qbCRvaDjnMFp39',
	prompt : 'S54BNbOpTM8fLVZg',
);
```