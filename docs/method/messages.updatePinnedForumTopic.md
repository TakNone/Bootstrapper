# messages.updatePinnedForumTopic

**Layer** : 216

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
	peer : $client->inputPeerEmpty(),
	topic_id : 24,
	pinned : false,
);
```