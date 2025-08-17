# channels.setDiscussionGroup

**Description** : *Associate a group to a channel as discussion group for that channel*

**Layer** : 211

```tl
channels.setDiscussionGroup#40582bb2 broadcast:InputChannel group:InputChannel = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>broadcast</mark> | [`InputChannel`](type/InputChannel) | Channel |
| <mark>group</mark> | [`InputChannel`](type/InputChannel) | Discussion group to associate to the channel |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **BROADCAST_ID_INVALID** | `400` | Broadcast ID invalid |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **LINK_NOT_MODIFIED** | `400` | Discussion link not modified |
| **MEGAGROUP_ID_INVALID** | `400` | Invalid supergroup ID |
| **MEGAGROUP_PREHISTORY_HIDDEN** | `400` | Group with hidden history for new members can't be set as discussion groups |

---

## Example

```php
$bool = $client->channels->setDiscussionGroup(
	broadcast : $client->inputChannelEmpty(),
	group : $client->inputChannelEmpty(),
);
```