# messages.getForumTopicsByID

**Layer** : 218

```tl
messages.getForumTopicsByID#af0a4a08 peer:InputPeer topics:Vector<int> = messages.ForumTopics;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>topics</mark> | [`Vector<int>`](type/int) | NOTHING |

---

## Result

[messages.ForumTopics](type/messages.ForumTopics)

---

## Example

```php
$messagesForumTopics = $client->messages->getForumTopicsByID(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	topics : array(30),
);
```