# aicompose.getTone

**Description** : *Fetch information about a single AI composer tone &raquo;, for example to resolve a shared tone deep link*

**Layer** : 229

```tl
aicompose.getTone#b2e8ba03 tone:InputAiComposeTone = aicompose.Tones;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>tone</mark> | [`InputAiComposeTone`](type/InputAiComposeTone) | The tone to fetch |

---

## Result

[aicompose.Tones](type/aicompose.Tones)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **AICOMPOSE_TONE_INVALID** | `400` | The specified tone is invalid |

---

## Example

```php
$aicomposeTones = $client->aicompose->getTone(
	tone : $client->inputAiComposeToneDefault(
		tone : 'O41SyRvfhP7tm2Z6',
	),
);
```