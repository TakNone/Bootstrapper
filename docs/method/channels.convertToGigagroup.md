# channels.convertToGigagroup

**Description** : *Convert a supergroup to a gigagroup, when requested by channel suggestions*

**Layer** : 211

```tl
channels.convertToGigagroup#b290c69 channel:InputChannel = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | The supergroup to convert |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_ID_INVALID** | `400` | The specified supergroup ID is invalid |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **FORUM_ENABLED** | `400` | You can't execute the specified action because the group is a forum, disable forum functionality to continue |
| **PARTICIPANTS_TOO_FEW** | `400` | Not enough participants |

---

## Example

```php
$updates = $client->channels->convertToGigagroup(
	channel : $client->inputChannelEmpty(),
);
```