# paymentRequestedInfo

**Description** : *Order info provided by the user*

**Layer** : 227

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
	name : 'qync8EhaLHvxsKGw',
	phone : '+1234567890',
	email : 'reply@liveproto.dev',
	shipping_address : $client->postAddress(
		street_line1 : 'LO1AoPN2lrgKbIjE',
		street_line2 : 'H9zQC3yWAuG0SoI6',
		city : 'KNkLcm7dMOA68QJB',
		state : 'UDgdp3xfB258bCMQ',
		country_iso2 : 'KzLmyeVd3ljhrNJI',
		post_code : 'NghJXErvAIF7tV26',
	),
);
```