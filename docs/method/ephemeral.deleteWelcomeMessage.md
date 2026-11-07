# ephemeral.deleteWelcomeMessage

**Layer** : 233

```tl
ephemeral.deleteWelcomeMessage#e882a9e1 peer:InputPeer id:int = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>id</mark> | [`int`](type/int) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->ephemeral->deleteWelcomeMessage(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : 71,
);
```