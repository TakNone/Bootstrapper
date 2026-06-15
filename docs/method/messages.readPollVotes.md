# messages.readPollVotes

**Layer** : 227

```tl
messages.readPollVotes#1720b4d8 flags:# peer:InputPeer top_msg_id:flags.0?int = messages.AffectedHistory;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| **top_msg_id** | [`flags.0?int`](type/int) | NOTHING |

---

## Result

[messages.AffectedHistory](type/messages.AffectedHistory)

---

## Example

```php
$messagesAffectedHistory = $client->messages->readPollVotes(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	top_msg_id : 25,
);
```