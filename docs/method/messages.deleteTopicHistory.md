# messages.deleteTopicHistory

**Description** : *Delete message history of a forum topic*

**Layer** : 233

```tl
messages.deleteTopicHistory#d2816f10 peer:InputPeer top_msg_id:int = messages.AffectedHistory;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The supergroup forum, private chat (for forum-enabled bots) or bot forum (for users) where the topic is located |
| <mark>top_msg_id</mark> | [`int`](type/int) | Topic ID |

---

## Result

[messages.AffectedHistory](type/messages.AffectedHistory)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |

---

## Example

```php
$messagesAffectedHistory = $client->messages->deleteTopicHistory(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	top_msg_id : 42,
);
```