# messages.deleteGroupCallMessages

**Layer** : 218

```tl
messages.deleteGroupCallMessages#f64f54f7 flags:# report_spam:flags.0?true call:InputGroupCall messages:Vector<int> = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **report_spam** | [`flags.0?true`](type/true) | NOTHING |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>messages</mark> | [`Vector<int>`](type/int) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->deleteGroupCallMessages(
	report_spam : true,
	call : $client->inputGroupCall(
		id : -3025355699917469936,
		access_hash : -4740681880259494197,
	),
	messages : array(84),
);
```