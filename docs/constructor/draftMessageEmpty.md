# draftMessageEmpty

**Description** : *Empty draft*

**Layer** : 218

```tl
draftMessageEmpty#1b0c841a flags:# date:flags.0?int = DraftMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **date** | [`flags.0?int`](type/int) | When was the draft last updated |

---

## Type

[DraftMessage](type/DraftMessage)

---

## Example

```php
$draftMessage = $client->draftMessageEmpty(
	date : 2,
);
```