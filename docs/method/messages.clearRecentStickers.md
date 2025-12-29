# messages.clearRecentStickers

**Description** : *Clear recent stickers*

**Layer** : 218

```tl
messages.clearRecentStickers#8999602d flags:# attached:flags.0?true = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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