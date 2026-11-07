# messages.getTranscriptionLangs

**Layer** : 233

```tl
messages.getTranscriptionLangs#ba6cd9aa flags:# peer:flags.0?InputPeer = Vector<string>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **peer** | [`flags.0?InputPeer`](type/InputPeer) | NOTHING |

---

## Result

[Vector<string>](type/string)

---

## Example

```php
$string = $client->messages->getTranscriptionLangs(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
);
```