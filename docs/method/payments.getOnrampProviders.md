# payments.getOnrampProviders

**Layer** : 233

```tl
payments.getOnrampProviders#3f3e00dc flags:# crypto_currency:flags.0?string = Vector<OnrampProviderInfo>;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **crypto_currency** | [`flags.0?string`](type/string) | NOTHING |

---

## Result

[Vector<OnrampProviderInfo>](type/OnrampProviderInfo)

---

## Example

```php
$onrampProviderInfo = $client->payments->getOnrampProviders(
	crypto_currency : 'wvancW43OrZu1XAh',
);
```