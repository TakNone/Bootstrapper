# channels.togglePreHistoryHidden

**Description** : *Hide/unhide message history for new channel/supergroup users*

**Layer** : 211

```tl
channels.togglePreHistoryHidden#eabbb94c channel:InputChannel enabled:Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel/supergroup |
| <mark>enabled</mark> | [`Bool`](type/Bool) | Hide/unhide |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **CHAT_LINK_EXISTS** | `400` | The chat is public, you can't hide the history to new users |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **FORUM_ENABLED** | `400` | You can't execute the specified action because the group is a forum, disable forum functionality to continue |

---

## Example

```php
$updates = $client->channels->togglePreHistoryHidden(
	channel : $client->inputChannelEmpty(),
	enabled : $client->boolFalse(),
);
```