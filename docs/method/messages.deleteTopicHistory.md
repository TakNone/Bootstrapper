# messages.deleteTopicHistory

**Layer** : 216

```tl
messages.deleteTopicHistory#d2816f10 peer:InputPeer top_msg_id:int = messages.AffectedHistory;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>top_msg_id</mark> | [`int`](type/int) | NOTHING |

---

## Result

[messages.AffectedHistory](type/messages.AffectedHistory)

---

## Example

```php
$messagesAffectedHistory = $client->messages->deleteTopicHistory(
	peer : $client->inputPeerEmpty(),
	top_msg_id : 4,
);
```