# phone.deleteGroupCallMessages

**Layer** : 222

```tl
phone.deleteGroupCallMessages#f64f54f7 flags:# report_spam:flags.0?true call:InputGroupCall messages:Vector<int> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **report_spam** | [`flags.0?true`](type/true) | NOTHING |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>messages</mark> | [`Vector<int>`](type/int) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->phone->deleteGroupCallMessages(
	report_spam : true,
	call : $client->inputGroupCall(
		id : -3501571553022515577,
		access_hash : -3966932102546271858,
	),
	messages : array(98),
);
```