# messages.reorderPinnedForumTopics

**Layer** : 216

```tl
messages.reorderPinnedForumTopics#e7841f0 flags:# force:flags.0?int peer:InputPeer order:Vector<int> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **force** | [`flags.0?int`](type/int) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>order</mark> | [`Vector<int>`](type/int) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->reorderPinnedForumTopics(
	force : 8,
	peer : $client->inputPeerEmpty(),
	order : array(60),
);
```