# paymentRequestedInfo

**Description** : *Order info provided by the user*

**Layer** : 222

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
	name : '2YrhEJ1SWViLXAdf',
	phone : '+1234567890',
	email : 'reply@liveproto.dev',
	shipping_address : $client->postAddress(
		street_line1 : 'bDniIF1NVuqJGR8e',
		street_line2 : 'dA6TKgWx4XNRHYZy',
		city : 'ImhQDGnOcbEM5gNH',
		state : 'oKVIWdJBUsgm6RQq',
		country_iso2 : '1vWxuT3eMpRk9X4Z',
		post_code : 'dMh4XQ2D3AlrKNvH',
	),
);
```