# messages.dhConfigNotModified

**Description** : *Configuring parameters did not change*

**Layer** : 211

```tl
messages.dhConfigNotModified#c0e24635 random:bytes = messages.DhConfig;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>random</mark> | [`bytes`](type/bytes) | Random sequence of bytes of assigned length |

---

## Type

[messages.DhConfig](type/messages.DhConfig)

---

## Example

```php
$messagesDhConfig = $client->messages->dhConfigNotModified(
	random : '?I?3?LiveProto???p',
);
```