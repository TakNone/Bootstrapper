# channels.getFullChannel

**Description** : *Get full info about a supergroup, gigagroup or channel*

**Layer** : 211

```tl
channels.getFullChannel#8736a09 channel:InputChannel = messages.ChatFull;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | The channel, supergroup or gigagroup to get info about |

---

## Result

[messages.ChatFull](type/messages.ChatFull)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **CHANNEL_PUBLIC_GROUP_NA** | `403` | channel/supergroup not available |
| **CHAT_NOT_MODIFIED** | `400` | No changes were made to chat information because the new information you passed is identical to the current information |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |

---

## Example

```php
$messagesChatFull = $client->channels->getFullChannel(
	channel : $client->inputChannelEmpty(),
);
```