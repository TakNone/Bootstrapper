# ephemeral.getWelcomeMessages

**Layer** : 229

```tl
ephemeral.getWelcomeMessages#db9ac18d peer:InputPeer hash:long = ephemeral.WelcomeMessages;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| <mark>hash</mark> | [`long`](type/long) | NOTHING |

---

## Result

[ephemeral.WelcomeMessages](type/ephemeral.WelcomeMessages)

---

## Example

```php
$ephemeralWelcomeMessages = $client->ephemeral->getWelcomeMessages(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	hash : 0,
);
```