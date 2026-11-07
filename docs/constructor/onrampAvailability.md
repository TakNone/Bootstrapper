# onrampAvailability

**Layer** : 233

```tl
onrampAvailability#f9c84973 flags:# allowed:flags.0?true buy_allowed:flags.1?true country_code:string state:flags.2?string methods:Vector<OnrampMethodAvailability> = OnrampAvailability;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **allowed** | [`flags.0?true`](type/true) | NOTHING |
| **buy_allowed** | [`flags.1?true`](type/true) | NOTHING |
| <mark>country_code</mark> | [`string`](type/string) | NOTHING |
| **state** | [`flags.2?string`](type/string) | NOTHING |
| <mark>methods</mark> | [`Vector<OnrampMethodAvailability>`](type/OnrampMethodAvailability) | NOTHING |

---

## Type

[OnrampAvailability](type/OnrampAvailability)

---

## Example

```php
$onrampAvailability = $client->onrampAvailability(
	allowed : true,
	buy_allowed : true,
	country_code : 'wKmi0zsV51LpkrSJ',
	state : '6WvkbM3DmrBzlIgh',
	methods : array(
		$client->onrampMethodAvailability(
			available : true,
			payment_method : 'cFd5gKlefPv7x4aX',
		),
	),
);
```