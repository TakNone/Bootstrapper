# messages.updatePinnedForumTopic

**Layer** : 218

```tl
messages.updatePinnedForumTopic#175df251 peer:InputPeer topic_id:int pinned:Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>topic_id</mark> | [`int`](type/int) | NOTHING |
| <mark>pinned</mark> | [`Bool`](type/Bool) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->updatePinnedForumTopic(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	topic_id : 13,
	pinned : false,
);
```