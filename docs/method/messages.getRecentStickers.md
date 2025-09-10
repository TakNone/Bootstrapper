# messages.getRecentStickers

**Description** : *Get recent stickers*

**Layer** : 214

```tl
messages.getRecentStickers#9da9403b flags:# attached:flags.0?true hash:long = messages.RecentStickers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **attached** | [`flags.0?true`](type/true) | Get stickers recently attached to photo or video files |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[messages.RecentStickers](type/messages.RecentStickers)

---

## Example

```php
$messagesRecentStickers = $client->messages->getRecentStickers(
	attached : true,
	hash : -9144250384086259811,
);
```