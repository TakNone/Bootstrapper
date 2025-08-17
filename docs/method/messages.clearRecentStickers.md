# messages.clearRecentStickers

**Description** : *Clear recent stickers*

**Layer** : 211

```tl
messages.clearRecentStickers#8999602d flags:# attached:flags.0?true = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **attached** | [`flags.0?true`](type/true) | Set this flag to clear the list of stickers recently attached to photo or video files |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->clearRecentStickers(
	attached : true,
);
```