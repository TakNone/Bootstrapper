# messages.getDhConfig

**Description** : *Returns configuration parameters for Diffie\-Hellman key generation\. Can also return a random sequence of bytes of required length*

**Layer** : 214

```tl
messages.getDhConfig#26cf8950 version:int random_length:int = messages.DhConfig;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>version</mark> | [`int`](type/int) | Value of the version parameter from messages.dhConfig, available at the client |
| <mark>random_length</mark> | [`int`](type/int) | Length of the required random sequence |

---

## Result

[messages.DhConfig](type/messages.DhConfig)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **RANDOM_LENGTH_INVALID** | `400` | Random length invalid |

---

## Example

```php
$messagesDhConfig = $client->messages->getDhConfig(
	version : 49,
	random_length : 92,
);
```