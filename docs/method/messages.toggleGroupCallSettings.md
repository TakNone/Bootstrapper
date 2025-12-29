# messages.toggleGroupCallSettings

**Layer** : 218

```tl
messages.toggleGroupCallSettings#974392f2 flags:# reset_invite_hash:flags.1?true call:InputGroupCall join_muted:flags.0?Bool messages_enabled:flags.2?Bool send_paid_messages_stars:flags.3?long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **reset_invite_hash** | [`flags.1?true`](type/true) | NOTHING |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| **join_muted** | [`flags.0?Bool`](type/Bool) | NOTHING |
| **messages_enabled** | [`flags.2?Bool`](type/Bool) | NOTHING |
| **send_paid_messages_stars** | [`flags.3?long`](type/long) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->toggleGroupCallSettings(
	reset_invite_hash : true,
	call : $client->inputGroupCall(
		id : 5618960905038375595,
		access_hash : -4573191036586701761,
	),
	join_muted : false,
	messages_enabled : true,
	send_paid_messages_stars : 1750590671026863843,
);
```