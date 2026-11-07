# onrampProviderInfo

**Layer** : 233

```tl
onrampProviderInfo#dc27582 flags:# supports_base_currencies:flags.0?true supports_limits:flags.1?true supports_quote:flags.2?true id:string name:string crypto_currencies:Vector<string> = OnrampProviderInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **supports_base_currencies** | [`flags.0?true`](type/true) | NOTHING |
| **supports_limits** | [`flags.1?true`](type/true) | NOTHING |
| **supports_quote** | [`flags.2?true`](type/true) | NOTHING |
| <mark>id</mark> | [`string`](type/string) | NOTHING |
| <mark>name</mark> | [`string`](type/string) | NOTHING |
| <mark>crypto_currencies</mark> | [`Vector<string>`](type/string) | NOTHING |

---

## Type

[OnrampProviderInfo](type/OnrampProviderInfo)

---

## Example

```php
$onrampProviderInfo = $client->onrampProviderInfo(
	supports_base_currencies : true,
	supports_limits : true,
	supports_quote : true,
	id : '2HFyvYpiQRBTbPXK',
	name : 'Hz6GCD1rduMcQ9fI',
	crypto_currencies : array('nhvqzeFralIj7TNR'),
);
```