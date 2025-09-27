# inputPhoneCall

**Description** : *Phone call*

**Layer** : 216

```tl
inputPhoneCall#1e36fded id:long access_hash:long = InputPhoneCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Call ID |
| <mark>access_hash</mark> | [`long`](type/long) | Access hash |

---

## Type

[InputPhoneCall](type/InputPhoneCall)

---

## Example

```php
$inputPhoneCall = $client->inputPhoneCall(
	id : 7113136792917487348,
	access_hash : -8480541527264919338,
);
```