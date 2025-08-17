# channels.deleteChannel

**Description** : *Delete a channel/supergroup*

**Layer** : 211

```tl
channels.deleteChannel#c0111fe3 channel:InputChannel = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel/supergroup to delete |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **CHANNEL_TOO_LARGE** | `406` | Channel is too large to be deleted; this error is issued when trying to delete channels with more than 1000 members (subject to change) |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |

---

## Example

```php
$updates = $client->channels->deleteChannel(
	channel : $client->inputChannelEmpty(),
);
```