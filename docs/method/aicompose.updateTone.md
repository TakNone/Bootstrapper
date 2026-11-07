# aicompose.updateTone

**Description** : *Edit a custom AI composer tone &raquo; previously created by the current user\. Only the fields whose flag is set will be modified*

**Layer** : 233

```tl
aicompose.updateTone#903bcf59 flags:# tone:InputAiComposeTone display_author:flags.0?Bool emoji_id:flags.1?long title:flags.2?string prompt:flags.3?string = AiComposeTone;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>tone</mark> | [`InputAiComposeTone`](type/InputAiComposeTone) | The tone to edit |
| **display_author** | [`flags.0?Bool`](type/Bool) | If set, changes whether the current user is publicly credited as the author of the tone (ternary value, can be not set, set and true, set and false) |
| **emoji_id** | [`flags.1?long`](type/long) | If set, the new custom emoji ID of the tone's icon |
| **title** | [`flags.2?string`](type/string) | If set, the new human-readable tone name, up to aicompose_tone_title_length_max » UTF-8 characters long |
| **prompt** | [`flags.3?string`](type/string) | If set, the new prompt that describes how the AI should rephrase messages using this tone, up to aicompose_tone_prompt_length_max » UTF-8 characters long |

---

## Result

[AiComposeTone](type/AiComposeTone)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **AICOMPOSE_TONE_INVALID** | `400` | The specified tone is invalid |

---

## Example

```php
$aiComposeTone = $client->aicompose->updateTone(
	tone : $client->inputAiComposeToneDefault(
		tone : '12CcndPLab9yHqMN',
	),
	display_author : false,
	emoji_id : -4259031122209039760,
	title : 'BFuK30rVo1Gmx7wL',
	prompt : 'AV8kSY9t5oZbhfdw',
);
```