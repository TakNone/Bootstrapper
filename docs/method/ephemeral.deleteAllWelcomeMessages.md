# ephemeral.deleteAllWelcomeMessages

**Layer** : 229

```tl
ephemeral.deleteAllWelcomeMessages#734f9721 peer:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->ephemeral->deleteAllWelcomeMessages(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```