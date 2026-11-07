# payments.getOnrampBaseCurrencies

**Layer** : 233

```tl
payments.getOnrampBaseCurrencies#1c8bedf3 provider:string crypto_currency:string = Vector<string>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>provider</mark> | [`string`](type/string) | NOTHING |
| <mark>crypto_currency</mark> | [`string`](type/string) | NOTHING |

---

## Result

[Vector<string>](type/string)

---

## Example

```php
$string = $client->payments->getOnrampBaseCurrencies(
	provider : '2MeQGPnjDWTV5IZ9',
	crypto_currency : 'gOtdcBufkWnbVLz7',
);
```