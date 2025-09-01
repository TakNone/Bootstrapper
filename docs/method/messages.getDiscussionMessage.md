# messages.getDiscussionMessage

**Description** : *Get discussion message from the associated discussion group of a channel to show it on top of the comment section, without actually joining the group*

**Layer** : 214

```tl
messages.getDiscussionMessage#446972fd peer:InputPeer msg_id:int = messages.DiscussionMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Channel ID |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID |

---

## Result

[messages.DiscussionMessage](type/messages.DiscussionMessage)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **CHANNEL_PRIVATE** | `400` | You haven't joined this channel/supergroup |
| **MSG_ID_INVALID** | `400` | Invalid message ID provided |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |
| **TOPIC_ID_INVALID** | `400` | The specified topic ID is invalid |

---

## Example

```php
$messagesDiscussionMessage = $client->messages->getDiscussionMessage(
	peer : $client->inputPeerEmpty(),
	msg_id : 22,
);
```