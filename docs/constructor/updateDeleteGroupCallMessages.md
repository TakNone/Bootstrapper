# updateDeleteGroupCallMessages

**Layer** : 225

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
		id : 5043123323717670860,
		access_hash : -8381651502255104974,
	),
	messages : array(49),
);
```