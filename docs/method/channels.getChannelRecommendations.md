# channels.getChannelRecommendations

**Description** : *Obtain a list of similarly themed public channels, selected based on similarities in their subscriber bases*

**Layer** : 211

```tl
channels.getChannelRecommendations#25a71742 flags:# channel:flags.0?InputChannel = messages.Chats;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **channel** | [`flags.0?InputChannel`](type/InputChannel) | The method will return channels related to the passed channel. If not set, the method will returns channels related to channels the user has joined |

---

## Result

[messages.Chats](type/messages.Chats)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |

---

## Example

```php
$messagesChats = $client->channels->getChannelRecommendations(
	channel : $client->inputChannelEmpty(),
);
```