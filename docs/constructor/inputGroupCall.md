# inputGroupCall

**Description** : *Points to a specific group call*

**Layer** : 222

```tl
inputGroupCall#d8aa840f id:long access_hash:long = InputGroupCall;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`long`](type/long) | Group call ID |
| <mark>access_hash</mark> | [`long`](type/long) | Group call access hash |

---

## Type

[InputGroupCall](type/InputGroupCall)

---

## Example

```php
$inputGroupCall = $client->inputGroupCall(
	id : 6446249633241242771,
	access_hash : -5504710175581304375,
);
```