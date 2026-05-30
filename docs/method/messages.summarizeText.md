# messages.summarizeText

**Layer** : 222

```tl
messages.summarizeText#9d4104e2 flags:# peer:InputPeer id:int to_lang:flags.0?string = TextWithEntities;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>id</mark> | [`int`](type/int) | NOTHING |
| **to_lang** | [`flags.0?string`](type/string) | NOTHING |

---

## Result

[TextWithEntities](type/TextWithEntities)

---

## Example

```php
$textWithEntities = $client->messages->summarizeText(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : 73,
	to_lang : 'EJg2e1YX9dSjWls0',
);
```