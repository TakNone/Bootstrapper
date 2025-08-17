# channels.updateUsername

**Description** : *Change or remove the username of a supergroup/channel*

**Layer** : 211

```tl
channels.updateUsername#3514b3de channel:InputChannel username:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Channel |
| <mark>username</mark> | [`string`](type/string) | New username, pass an empty string to remove the username |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNELS_ADMIN_PUBLIC_TOO_MUCH** | `400` | You're admin of too many public channels, make some channels private to change the username of this channel |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **CHAT_ADMIN_REQUIRED** | `403` | You must be an admin in this chat to do this |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **CHAT_WRITE_FORBIDDEN** | `403` | You can't write in this chat |
| **USERNAME_INVALID** | `400` | The provided username is not valid |
| **USERNAME_NOT_MODIFIED** | `400` | The username was not modified |
| **USERNAME_OCCUPIED** | `400` | The provided username is already occupied |
| **USERNAME_PURCHASE_AVAILABLE** | `400` | The specified username can be purchased on https://fragment.com |

---

## Example

```php
$bool = $client->channels->updateUsername(
	channel : $client->inputChannelEmpty(),
	username : 'TakNone',
);
```