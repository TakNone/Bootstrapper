# channels.leaveChannel

**Description** : *Leave a channel/supergroup*

**Layer** : 211

```tl
channels.leaveChannel#f836aa95 channel:InputChannel = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel/supergroup to leave |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **CHANNEL_PUBLIC_GROUP_NA** | `403` | channel/supergroup not available |
| **CHAT_INVALID** | `400` | Invalid chat |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **USER_BANNED_IN_CHANNEL** | `400` | You're banned from sending messages in supergroups/channels |
| **USER_CREATOR** | `400` | For channels.editAdmin: you've tried to edit the admin rights of the owner, but you're not the owner; for channels.leaveChannel: you can't leave this channel, because you're its creator |
| **USER_NOT_PARTICIPANT** | `400` | You're not a member of this supergroup/channel |

---

## Example

```php
$updates = $client->channels->leaveChannel(
	channel : $client->inputChannelEmpty(),
);
```