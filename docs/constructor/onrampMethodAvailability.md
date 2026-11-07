# onrampMethodAvailability

**Layer** : 233

```tl
onrampMethodAvailability#9ec8c6a8 flags:# available:flags.0?true payment_method:string = OnrampMethodAvailability;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **available** | [`flags.0?true`](type/true) | NOTHING |
| <mark>payment_method</mark> | [`string`](type/string) | NOTHING |

---

## Type

[OnrampMethodAvailability](type/OnrampMethodAvailability)

---

## Example

```php
$onrampMethodAvailability = $client->onrampMethodAvailability(
	available : true,
	payment_method : '4VzwgrKE9FuDnlaW',
);
```