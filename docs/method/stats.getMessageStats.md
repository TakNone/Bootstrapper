# stats.getMessageStats

**Description** : *Get message statistics*

**Layer** : 211

```tl
stats.getMessageStats#b6e0a3f5 flags:# dark:flags.0?true channel:InputChannel msg_id:int = stats.MessageStats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **dark** | [`flags.0?true`](type/true) | Whether to enable dark theme for graph colors |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel ID |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID |

---

## Result

[stats.MessageStats](type/stats.MessageStats)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **MESSAGE_ID_INVALID** | `400` | The provided message id is invalid |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$statsMessageStats = $client->stats->getMessageStats(
	dark : true,
	channel : $client->inputChannelEmpty(),
	msg_id : 64,
);
```