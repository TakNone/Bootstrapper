# ephemeral.deleteMessage

**Layer** : 229

```tl
ephemeral.deleteMessage#92f6e797 flags:# peer:flags.0?InputPeer receiver_id:InputUser id:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **peer** | [`flags.0?InputPeer`](type/InputPeer) | NOTHING |
| <mark>receiver_id</mark> | [`InputUser`](type/InputUser) | NOTHING |
| <mark>id</mark> | [`int`](type/int) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->ephemeral->deleteMessage(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	receiver_id : $client->get_input_user(user : '@TakNone'),
	id : 60,
);
```