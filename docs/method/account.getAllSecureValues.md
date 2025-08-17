# account.getAllSecureValues

**Description** : *Get all saved Telegram Passport documents, for more info see the passport docs »*

**Layer** : 211

```tl
account.getAllSecureValues#b288bc7d = Vector<SecureValue>;
```

---

## Result

[Vector<SecureValue>](type/SecureValue)

---

## Example

```php
$secureValue = $client->account->getAllSecureValues();
```