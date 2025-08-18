# channels.deleteHistory

**Description** : *Delete the history of a supergroup*

**Layer** : 211

```tl
channels.deleteHistory#9baa9647 flags:# for_everyone:flags.0?true channel:InputChannel max_id:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **for_everyone** | [`flags.0?true`](type/true) | Whether the history should be deleted for everyone |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Supergroup whose history must be deleted |
| <mark>max_id</mark> | [`int`](type/int) | ID of message up to which the history must be deleted |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PARICIPANT_MISSING** | `400` | The current user is not in the channel |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHANNEL_TOO_BIG** | `400` | This channel has too many participants (>1000) to be deleted |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |

---

## Example

```php
$updates = $client->channels->deleteHistory(
	for_everyone : true,
	channel : $client->inputChannelEmpty(),
	max_id : 78,
);
```