# channels.reportSpam

**Description** : *Reports some messages from a user in a supergroup as spam; requires administrator rights in the supergroup*

**Layer** : 214

```tl
channels.reportSpam#f44a8315 channel:InputChannel participant:InputPeer id:Vector<int> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Supergroup |
| <mark>participant</mark> | [`InputPeer`](type/InputPeer) | Participant whose messages should be reported |
| <mark>id</mark> | [`Vector<int>`](type/int) | IDs of spam messages |

---

## Result

[Bool](type/Bool)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHAT_ADMIN_REQUIRED** | `400` | You must be an admin in this chat to do this |
| **INPUT_USER_DEACTIVATED** | `400` | The specified user was deleted |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **USER_ID_INVALID** | `400` | The provided user ID is invalid |

---

## Example

```php
$bool = $client->channels->reportSpam(
	channel : $client->inputChannelEmpty(),
	participant : $client->inputPeerEmpty(),
	id : array(52),
);
```