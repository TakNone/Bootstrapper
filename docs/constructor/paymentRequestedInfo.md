# paymentRequestedInfo

**Description** : *Order info provided by the user*

**Layer** : 211

```tl
paymentRequestedInfo#909c3f94 flags:# name:flags.0?string phone:flags.1?string email:flags.2?string shipping_address:flags.3?PostAddress = PaymentRequestedInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	name : '4hziBk70OYoEsugq',
	phone : '+1234567890',
	email : 'reply@liveproto.dev',
	shipping_address : $client->postAddress(
		street_line1 : 'g16MOyeJiKCbFLal',
		street_line2 : '50mKSLRycB6UWJnZ',
		city : 'aYS0MhJdcBLpyVvC',
		state : '27MDBNgXfx8ECKQd',
		country_iso2 : 'IZawWJYQtnx21XHh',
		post_code : 'z9uEGR1vNgPF4opX',
	),
);
```