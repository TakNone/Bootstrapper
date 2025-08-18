# channels.deleteTopicHistory

**Description** : *Delete message history of a forum topic*

**Layer** : 211

```tl
channels.deleteTopicHistory#34435f2d channel:InputChannel top_msg_id:int = messages.AffectedHistory;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Forum |
| <mark>top_msg_id</mark> | [`int`](type/int) | Topic ID |

---

## Result

[messages.AffectedHistory](type/messages.AffectedHistory)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_FORUM_MISSING** | `400` | This supergroup is not a forum |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **TOPIC_ID_INVALID** | `400` | The specified topic ID is invalid |

---

## Example

```php
$messagesAffectedHistory = $client->channels->deleteTopicHistory(
	channel : $client->inputChannelEmpty(),
	top_msg_id : 52,
);
```