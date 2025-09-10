# inputPhoneCall

**Description** : *Phone call*

**Layer** : 214

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
	id : 7207873570480716701,
	access_hash : 793851495121468348,
);
```