# bots.setCustomVerification

**Layer** : 211

```tl
bots.setCustomVerification#8b89dfbd flags:# enabled:flags.1?true bot:flags.0?InputUser peer:InputPeer custom_description:flags.2?string = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **enabled** | [`flags.1?true`](type/true) | NOTHING |
| **bot** | [`flags.0?InputUser`](type/InputUser) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| **custom_description** | [`flags.2?string`](type/string) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->bots->setCustomVerification(
	enabled : true,
	bot : $client->inputUserEmpty(),
	peer : $client->inputPeerEmpty(),
	custom_description : 'OXLj6UYBTVz15cFd',
);
```