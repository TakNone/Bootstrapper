# paymentRequestedInfo

**Description** : *Order info provided by the user*

**Layer** : 229

```tl
paymentRequestedInfo#909c3f94 flags:# name:flags.0?string phone:flags.1?string email:flags.2?string shipping_address:flags.3?PostAddress = PaymentRequestedInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **name** | [`flags.0?string`](type/string) | User's full name |
| **phone** | [`flags.1?string`](type/string) | User's phone number |
| **email** | [`flags.2?string`](type/string) | User's email address |
| **shipping_address** | [`flags.3?PostAddress`](type/PostAddress) | User's shipping address |

---

## Type

[PaymentRequestedInfo](type/PaymentRequestedInfo)

---

## Example

```php
$paymentRequestedInfo = $client->paymentRequestedInfo(
	name : 'ixGj48w5gZt1DqQW',
	phone : '+1234567890',
	email : 'reply@liveproto.dev',
	shipping_address : $client->postAddress(
		street_line1 : 'v0c1gS4wrl92Tfqz',
		street_line2 : 'vDcyh3FR8zoE1Buq',
		city : '5O6ovnqQZ7Vj0s8D',
		state : 'nlpG25YaUEu1kReL',
		country_iso2 : 'arpW8yBm1xij0lHE',
		post_code : 'VfHP05jZlm7etgvX',
	),
);
```