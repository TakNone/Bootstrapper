# channels.getForumTopicsByID

**Description** : *Get forum topics by their ID*

**Layer** : 214

```tl
channels.getForumTopicsByID#b0831eb9 channel:InputChannel topics:Vector<int> = messages.ForumTopics;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>channel</mark> | [`InputChannel`](type/InputChannel) | Forum |
| <mark>topics</mark> | [`Vector<int>`](type/int) | Topic IDs |

---

## Result

[messages.ForumTopics](type/messages.ForumTopics)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_FORUM_MISSING** | `400` | This supergroup is not a forum |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |
| **TOPICS_EMPTY** | `400` | You specified no topic IDs |

---

## Example

```php
$messagesForumTopics = $client->channels->getForumTopicsByID(
	channel : $client->inputChannelEmpty(),
	topics : array(7),
);
```