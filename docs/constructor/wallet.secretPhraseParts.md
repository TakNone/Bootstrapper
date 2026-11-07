# wallet.secretPhraseParts

**Layer** : 233

```tl
wallet.secretPhraseParts#e6d0ef01 token:string dcs:Vector<int> = wallet.SecretPhraseParts;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>token</mark> | [`string`](type/string) | NOTHING |
| <mark>dcs</mark> | [`Vector<int>`](type/int) | NOTHING |

---

## Type

[wallet.SecretPhraseParts](type/wallet.SecretPhraseParts)

---

## Example

```php
$walletSecretPhraseParts = $client->wallet->secretPhraseParts(
	token : 'PBo2lLNGbZg0yrEi',
	dcs : array(51),
);
```