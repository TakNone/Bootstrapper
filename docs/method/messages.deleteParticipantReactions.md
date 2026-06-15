# messages.deleteParticipantReactions

**Layer** : 227

```tl
messages.deleteParticipantReactions#a0b80cf8 peer:InputPeer participant:InputPeer = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>participant</mark> | [`InputPeer`](type/InputPeer) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->deleteParticipantReactions(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	participant : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```