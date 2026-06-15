# phone.deleteGroupCallMessages

**Layer** : 227

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
		id : -3180025139844880021,
		access_hash : 6673810927499983068,
	),
	messages : array(95),
);
```