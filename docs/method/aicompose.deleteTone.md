# aicompose.deleteTone

**Description** : *Permanently delete a custom AI composer tone &raquo; created by the current user*

**Layer** : 229

```tl
aicompose.deleteTone#dd39316a tone:InputAiComposeTone = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>tone</mark> | [`InputAiComposeTone`](type/InputAiComposeTone) | The tone to delete |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **AICOMPOSE_TONE_INVALID** | `400` | The specified tone is invalid |

---

## Example

```php
$bool = $client->aicompose->deleteTone(
	tone : $client->inputAiComposeToneDefault(
		tone : 'z3H1F7TlRPJrUCOc',
	),
);
```