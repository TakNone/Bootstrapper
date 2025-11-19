# updateDeleteGroupCallMessages

**Layer** : 218

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
		id : -2205861218458884516,
		access_hash : 2599444639228221811,
	),
	messages : array(91),
);
```