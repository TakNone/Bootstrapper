# messages.getRichMessage

**Layer** : 227

```tl
messages.getRichMessage#501569cf peer:InputPeer id:int = messages.Messages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>id</mark> | [`int`](type/int) | NOTHING |

---

## Result

[messages.Messages](type/messages.Messages)

---

## Example

```php
$messagesMessages = $client->messages->getRichMessage(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : 61,
);
```