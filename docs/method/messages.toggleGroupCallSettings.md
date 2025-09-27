# messages.toggleGroupCallSettings

**Layer** : 216

```tl
messages.toggleGroupCallSettings#e9723804 reset_invite_hash:Bool call:InputGroupCall join_muted:Bool messages_enabled:Bool = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>reset_invite_hash</mark> | [`Bool`](type/Bool) | NOTHING |
| <mark>call</mark> | [`InputGroupCall`](type/InputGroupCall) | NOTHING |
| <mark>join_muted</mark> | [`Bool`](type/Bool) | NOTHING |
| <mark>messages_enabled</mark> | [`Bool`](type/Bool) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->messages->toggleGroupCallSettings(
	reset_invite_hash : false,
	call : $client->inputGroupCall(
		id : 5869768002581772428,
		access_hash : -4650422041295099571,
	),
	join_muted : false,
	messages_enabled : true,
);
```