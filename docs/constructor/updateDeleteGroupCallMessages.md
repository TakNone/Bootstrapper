# updateDeleteGroupCallMessages

**Layer** : 222

```tl
updateDeleteGroupCallMessages#3e85e92c call:InputGroupCall messages:Vector<int> = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>messages</mark> | [`Vector<int>`](type/int) | NOTHING |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateDeleteGroupCallMessages(
	call : $client->inputGroupCall(
		id : 2107293351177704408,
		access_hash : -2856738450345928143,
	),
	messages : array(99),
);
```