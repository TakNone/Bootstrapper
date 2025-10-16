# channels.getChannels

**Description** : *Get info about channels/supergroups*

**Layer** : 216

```tl
channels.getChannels#a7f6bbb id:Vector<InputChannel> = messages.Chats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`Vector<InputChannel>`](type/InputChannel) | IDs of channels/supergroups to get info about |

---

## Result

[messages.Chats](type/messages.Chats)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **USER_BANNED_IN_CHANNEL** | `400` | You're banned from sending messages in supergroups/channels |

---

## Example

```php
$messagesChats = $client->channels->getChannels(
	id : array(
		$client->inputChannelEmpty(),
		$client->inputChannel(
			channel_id : 4125566754666634088,
			access_hash : 8755045530225155790,
		),
		$client->inputChannelFromMessage(
			peer : $client->inputPeerEmpty(),
			msg_id : 94,
			channel_id : -328076736545597719,
		),
	),
);
```