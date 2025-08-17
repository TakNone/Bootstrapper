# passwordKdfAlgoUnknown

**Description** : *Unknown KDF (most likely, the client is outdated and does not support the specified KDF algorithm)*

**Layer** : 211

```tl
passwordKdfAlgoUnknown#d45ab096 = PasswordKdfAlgo;
```

---

## Type

[PasswordKdfAlgo](type/PasswordKdfAlgo)

---

## Example

```php
$passwordKdfAlgo = $client->passwordKdfAlgoUnknown();
```