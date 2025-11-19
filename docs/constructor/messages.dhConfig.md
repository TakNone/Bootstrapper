# messages.dhConfig

**Description** : *New set of configuring parameters*

**Layer** : 218

```tl
messages.dhConfig#2c221edd g:int p:bytes version:int random:bytes = messages.DhConfig;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>g</mark> | [`int`](type/int) | New value prime, see Wikipedia |
| <mark>p</mark> | [`bytes`](type/bytes) | New value primitive root, see Wikipedia |
| <mark>version</mark> | [`int`](type/int) | Version of set of parameters |
| <mark>random</mark> | [`bytes`](type/bytes) | Random sequence of bytes of assigned length |

---

## Type

[messages.DhConfig](type/messages.DhConfig)

---

## Example

```php
$messagesDhConfig = $client->messages->dhConfig(
	g : 39,
	p : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	version : 49,
	random : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```