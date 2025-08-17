# stats.getMegagroupStats

**Description** : *Get supergroup statistics*

**Layer** : 211

```tl
stats.getMegagroupStats#dcdf8607 flags:# dark:flags.0?true channel:InputChannel = stats.MegagroupStats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **dark** | [`flags.0?true`](type/true) | Whether to enable dark theme for graph colors |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Supergroup ID |

---

## Result

[stats.MegagroupStats](type/stats.MegagroupStats)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **MEGAGROUP_REQUIRED** | `400` | You can only use this method on a supergroup |

---

## Example

```php
$statsMegagroupStats = $client->stats->getMegagroupStats(
	dark : true,
	channel : $client->inputChannelEmpty(),
);
```