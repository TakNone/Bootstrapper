# messages.updatePinnedForumTopic

**Description** : *Pin or unpin forum topics*

**Layer** : 229

```tl
messages.updatePinnedForumTopic#175df251 peer:InputPeer topic_id:int pinned:Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The supergroup forum, private chat (for forum-enabled bots) or bot forum (for users) where the topic is located |
| <mark>topic_id</mark> | [`int`](type/int) | Forum topic ID |
| <mark>pinned</mark> | [`Bool`](type/Bool) | Whether to pin or unpin the topic |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHANNEL_INVALID** | `400` | The provided channel is invalid |

---

## Example

```php
$updates = $client->messages->updatePinnedForumTopic(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	topic_id : 97,
	pinned : false,
);
```