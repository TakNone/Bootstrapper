# aicompose.saveTone

**Description** : *Install or uninstall an AI composer tone &raquo;, adding it to or removing it from the list of saved tones of the current user*

**Layer** : 233

```tl
aicompose.saveTone#1782cbb1 tone:InputAiComposeTone unsave:Bool = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>tone</mark> | [`InputAiComposeTone`](type/InputAiComposeTone) | The tone to save or unsave |
| <mark>unsave</mark> | [`Bool`](type/Bool) | If false, installs (saves) the tone; if true, uninstalls (unsaves) it |

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
$bool = $client->aicompose->saveTone(
	tone : $client->inputAiComposeToneDefault(
		tone : '8gZoH2PEhbIrueGl',
	),
	unsave : true,
);
```