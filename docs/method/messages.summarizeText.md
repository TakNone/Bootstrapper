# messages.summarizeText

**Layer** : 225

```tl
messages.summarizeText#abbbd346 flags:# peer:InputPeer id:int to_lang:flags.0?string tone:flags.2?string = TextWithEntities;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>id</mark> | [`int`](type/int) | NOTHING |
| **to_lang** | [`flags.0?string`](type/string) | NOTHING |
| **tone** | [`flags.2?string`](type/string) | NOTHING |

---

## Result

[TextWithEntities](type/TextWithEntities)

---

## Example

```php
$textWithEntities = $client->messages->summarizeText(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	id : 94,
	to_lang : 'Ti5tELvKX8A7QnJa',
	tone : 'bSgvm6TBolCH19dj',
);
```