# wallet.exportSecretPhrase

**Layer** : 233

```tl
wallet.exportSecretPhrase#9077c9ac flags:# password:flags.0?InputCheckPasswordSRP = wallet.SecretPhraseParts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **password** | [`flags.0?InputCheckPasswordSRP`](type/InputCheckPasswordSRP) | NOTHING |

---

## Result

[wallet.SecretPhraseParts](type/wallet.SecretPhraseParts)

---

## Example

```php
$walletSecretPhraseParts = $client->wallet->exportSecretPhrase(
	password : $client->inputCheckPasswordEmpty(),
);
```