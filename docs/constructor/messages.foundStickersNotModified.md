# messages.foundStickersNotModified

**Description** : *No new stickers were found for the specified query*

**Layer** : 214

```tl
messages.foundStickersNotModified#6010c534 flags:# next_offset:flags.0?int = messages.FoundStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **next_offset** | [`flags.0?int`](type/int) | Offset for pagination |

---

## Type

[messages.FoundStickers](type/messages.FoundStickers)

---

## Example

```php
$messagesFoundStickers = $client->messages->foundStickersNotModified(
	next_offset : 91,
);
```