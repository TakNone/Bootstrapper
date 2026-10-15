# messages.getForumTopicsByID

**Description** : *Get forum topics by their ID*

**Layer** : 229

```tl
messages.getForumTopicsByID#af0a4a08 peer:InputPeer topics:Vector<int> = messages.ForumTopics;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The supergroup forum, private chat (for forum-enabled bots) or bot forum (for users) where the topic is located |
| <mark>topics</mark> | [`Vector<int>`](type/int) | Topic IDs |

---

## Result

[messages.ForumTopics](type/messages.ForumTopics)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **TOPICS_EMPTY** | `400` | You specified no topic IDs |

---

## Example

```php
$messagesForumTopics = $client->messages->getForumTopicsByID(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	topics : array(51),
);
```