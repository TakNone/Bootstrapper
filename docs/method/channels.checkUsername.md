# channels.checkUsername

**Description** : *Check if a username is free and can be assigned to a channel/supergroup*

**Layer** : 211

```tl
channels.checkUsername#10e6bd2c channel:InputChannel username:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | The channel/supergroup that will assigned the specified username |
| <mark>username</mark> | [`string`](type/string) | The username to check |

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
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **USERNAME_INVALID** | `400` | The provided username is not valid |
| **USERNAME_OCCUPIED** | `400` | The provided username is already occupied |
| **USERNAME_PURCHASE_AVAILABLE** | `400` | The specified username can be purchased on https://fragment.com |

---

## Example

```php
$bool = $client->channels->checkUsername(
	channel : $client->inputChannelEmpty(),
	username : 'TakNone',
);
```