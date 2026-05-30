# messages.deletePollAnswer

**Layer** : 225

```tl
messages.deletePollAnswer#ac8505a5 peer:InputPeer msg_id:int option:bytes = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>msg_id</mark> | [`int`](type/int) | NOTHING |
| <mark>option</mark> | [`bytes`](type/bytes) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->deletePollAnswer(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 62,
	option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```