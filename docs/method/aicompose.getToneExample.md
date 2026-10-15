# aicompose.getToneExample

**Description** : *Fetch an example showing how an AI composer tone &raquo; rephrases a sample message, used as a preview in the tone picker*

**Layer** : 229

```tl
aicompose.getToneExample#d1b4ab14 tone:InputAiComposeTone num:int = AiComposeToneExample;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>tone</mark> | [`InputAiComposeTone`](type/InputAiComposeTone) | The tone to preview |
| <mark>num</mark> | [`int`](type/int) | 0-based index of the example to fetch, to cycle through the available examples (there are aicompose_tone_examples_num » examples per tone) |

---

## Result

[AiComposeToneExample](type/AiComposeToneExample)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **AICOMPOSE_TONE_INVALID** | `400` | The specified tone is invalid |

---

## Example

```php
$aiComposeToneExample = $client->aicompose->getToneExample(
	tone : $client->inputAiComposeToneDefault(
		tone : 'ZExTbS1DIawUrRVj',
	),
	num : 24,
);
```