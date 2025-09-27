# messages.getMessagesViews

**Description** : *Get and increase the view counter of a message sent or forwarded from a channel*

**Layer** : 216

```tl
messages.getMessagesViews#5784d3e1 peer:InputPeer id:Vector<int> increment:Bool = messages.MessageViews;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the message was found |
| <mark>id</mark> | [`Vector<int>`](type/int) | ID of message |
| <mark>increment</mark> | [`Bool`](type/Bool) | Whether to mark the message as viewed and increment the view counter |

---

## Result

[messages.MessageViews](type/messages.MessageViews)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `406` | You haven't joined this channel/supergroup |
| **CHAT_ID_INVALID** | `400` | The provided chat id is invalid |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$messagesMessageViews = $client->messages->getMessagesViews(
	peer : $client->inputPeerEmpty(),
	id : array(93),
	increment : true,
);
```