# payments.displayStarGift

**Layer** : 233

```tl
payments.displayStarGift#4aa5f0fe flags:# peer:flags.0?InputPeer slug:string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **peer** | [`flags.0?InputPeer`](type/InputPeer) | NOTHING |
| <mark>slug</mark> | [`string`](type/string) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->payments->displayStarGift(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	slug : 'TBjIUXkaMJ094bRl',
);
```